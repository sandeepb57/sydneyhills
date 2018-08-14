<?php
defined('BASEPATH') or exit('No direct script access allowed');

class CommonServices extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('CommonServicesModel');
	}

	public function SeletOptionForTypeOfRide()
    {
        $typeOfRides = $this->CommonServicesModel->getTypeOfRides();
        // print_r($typeOfRides);
        if (is_array($typeOfRides) && sizeof($typeOfRides) > 0) {
            echo json_encode(array("status" => 200, "typeOfRides" => $typeOfRides));
        } else {
            echo json_encode(array("status" => 204));
        }
    }

}
