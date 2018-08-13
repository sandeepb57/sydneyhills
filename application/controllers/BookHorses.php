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

    public function BookingHorsesFormSubmission()
    {
		echo "<pre>";
        print_r($this->input->post());
	}

	public function BookingSummary(){
		$this->load->view('ViewBookingSummary');
	}

	public function OrderSummary(){
		$this->load->view('ViewOrderSummary');
	}
}
