<?php
defined('BASEPATH') or exit('No direct script access allowed');

class BookHorses extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('BookHorsesModel');
        // if(!$this->session->userdata("customerId")){
		// 	$this->load->view('ViewBookHorses');
        // }
    }
    public function index()
    {
        $this->load->view('ViewBookHorses');
    }

    public function CheckAvailabilityOfSlots()
    {
        echo true;
    }

    public function SeletOptionForTypeOfRide()
    {
        $typeOfRides = $this->BookHorsesModel->getTypeOfRides();
        // print_r($typeOfRides);
        if (is_array($typeOfRides) && sizeof($typeOfRides) > 0) {
            echo json_encode(array("status" => 200, "typeOfRides" => $typeOfRides));
        } else {
            echo json_encode(array("status" => 204));
        }
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
                echo json_encode(array("status" => 200, "bookingId" => base64_encode($resBookingDetailsId), "msg" => "Booking details submitted."));
            } else {
                echo json_encode(array("status" => 400, "errorAt" => "Booking rider details not submitted."));
            }
        } else {
            echo json_encode(array("status" => 400, "errorAt" => "Booking details not submitted."));
        }
    }

    public function ProceedToPay()
    {
        echo "<pre>";
        print_r($this->input->post());
    }

    public function OrderSummary()
    {
        $this->load->view('ViewOrderSummary');
    }

    public function FetchBookingDetails()
    {
        if ($this->input->get('bookingId', true)) {
            $bookingDetsils = $this->BookHorsesModel->FetchBookingDetailsById(base64_decode($this->input->get('bookingId', true)));
            if (is_array($bookingDetsils) && sizeof($bookingDetsils) > 0) {
                $this->load->view('ViewBookingSummary', array("status" => 200, "result" => $bookingDetsils));
            } else {
                $this->load->view('ViewBookingSummary', array("status" => 400, "result" => "Booking details not found."));
            }
        } else {
            $this->load->view('ViewBookingSummary', array("status" => 400, "result" => "Error in fetching data."));
        }
    }
}
