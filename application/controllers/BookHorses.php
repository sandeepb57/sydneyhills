<?php
defined('BASEPATH') or exit('No direct script access allowed');

class BookHorses extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->library('encryption');
        $this->load->model('BookHorsesModel');
        if (!$this->session->userdata("customerId")) {
            redirect(base_url());
        }
    }

    public function index()
    {
        $this->load->view('ViewBookHorses');
    }

    public function CheckAvailabilityOfSlots()
    {
        echo true;
    }

    public function ConfirmBookingDetails()
    {
        // echo "<pre>";
        // print_r($this->input->post());
        // exit();
        $bookingDetails = array(
            "customerId" => $this->session->userdata('customerId', true),
            "typeOfRide" => $this->input->post('type-of-ride', true),
            "rideDate" => $this->input->post('booking-date', true),
            // "rideTime" => $this->input->post('email', true),
            "noOfRiders" => $this->input->post('number-of-riders', true),
            "bookingStatus" => 1,
            "addedDate" => date("Y-m-d H:i:s"),
        );

        $resBookingDetailsId = $this->BookHorsesModel->SubmitBookingDetails($bookingDetails);

        if ($resBookingDetailsId > 0) {
            $riderSubmission = array();
            foreach ($this->input->post('rider-firstname', true) as $key => $data) {
                $bookingRiderDetails = array(
                    "bookingId" => $resBookingDetailsId,
                    "firstName" => $this->input->post('rider-firstname', true)[$key],
                    "lastName" => $this->input->post('rider-lastname', true)[$key],
                    "riderEmail" => $this->input->post('rider-email', true)[$key],
                    "riderPhoneNumber" => $this->input->post('rider-mobile', true)[$key],
                    "age" => $this->input->post('rider-age', true)[$key],
                    "height" => $this->input->post('rider-height', true)[$key],
                    "weight" => $this->input->post('rider-weight', true)[$key],
                    "riderAbilityLevel" => $this->input->post('ability-level', true)[$key],
                    "addedDate" => date("Y-m-d H:i:s"),
                );
                $resBookingRiderDetailsId = $this->BookHorsesModel->SubmitBookingRiderDetails($bookingRiderDetails);
                if ($resBookingRiderDetailsId > 0) {
                    $riderSubmission[] = true;
                } else {
                    $riderSubmission[] = false;
                }
            }
            if (!in_array(false, $riderSubmission)) {
                echo json_encode(array("status" => 200, "bookingId" => $this->encryption->encrypt($resBookingDetailsId), "msg" => "Booking details submitted."));
            } else {
                echo json_encode(array("status" => 400, "errorAt" => "Booking rider details not submitted."));
            }
        } else {
            echo json_encode(array("status" => 400, "errorAt" => "Booking details not submitted."));
        }
    }

    public function PayNow()
    {
        // echo "<pre>";
        // print_r($this->encryption->decrypt($this->input->get('bookingId')));
        $this->load->view('ViewPayments', array("bookingId" => $this->input->get('bookingId', true)));
    }

    public function ProceedToPay()
    {
        // echo "<pre>";
        // print_r($this->encryption->decrypt($this->input->get('bookingId')));
        if ($this->input->get('bookingId', true)) {
            $bookingDetsils = $this->BookHorsesModel->FetchBookingDetailsById($this->encryption->decrypt($this->input->get('bookingId', true)));
            if (is_array($bookingDetsils) && sizeof($bookingDetsils) > 0) {
                $this->load->view('ViewOrderSummary', array("status" => 200, "result" => $bookingDetsils));
            } else {
                $this->load->view('ViewOrderSummary', array("status" => 400, "result" => "Error in payment processing."));
            }
        } else {
            $this->load->view('ViewOrderSummary', array("status" => 400, "result" => "Error in fetching data."));
        }
    }

    public function OrderSummary()
    {
        $this->load->view('ViewOrderSummary');
    }

    public function FetchBookingDetails()
    {
        if ($this->input->get('bookingId', true)) {
            $bookingDetsils = $this->BookHorsesModel->FetchBookingDetailsById($this->encryption->decrypt($this->input->get('bookingId', true)));
            if (is_array($bookingDetsils) && sizeof($bookingDetsils) > 0) {
                $this->load->view('ViewBookingSummary', array("status" => 200, "result" => $bookingDetsils));
            } else {
                $this->load->view('ViewBookingSummary', array("status" => 400, "result" => "Booking details not found."));
            }
        } else {
            $this->load->view('ViewBookingSummary', array("status" => 400, "result" => "Error in fetching data."));
        }
    }

    // public function EncryptLib(){
    //     $data = "Sandeep";
    //     echo $enc = $this->encryption->encrypt($data);
    //     echo $dec = "<br>".$this->encryption->decrypt($enc);
    // }
}
