<?php
defined('BASEPATH') or exit('No direct script access allowed');

class UserDashboard extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->library('encryption');
        $this->load->model('userdashboardmodel');
        if (!$this->session->userdata("customerId")) {
            redirect(base_url());
        }
    }

    public function setCancelBooking()
    {
        $dataArray = array("bookingStatus" => 2, "editedDate" => date('Y-m-d H:i:s'));
        $condArray = array("bookingId" => $this->input->post('bookingId', true), "customerId" => $this->session->userdata("customerId"));
        $result = $this->userdashboardmodel->setCancelBookingById($dataArray, $condArray);
        if ($result) {
            echo 200;
        } else {
            echo 500;
        }
    }
}
