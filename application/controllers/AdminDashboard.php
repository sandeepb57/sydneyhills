<?php

defined('BASEPATH') or exit('No direct script access allowed');

class AdminDashboard extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('AdminDashboardModel');
        if (!$this->session->userdata('userType')) {
            redirect(base_url() . 'loginregisterservices/signin');
        }
    }

    public function adminBookingActions()
    {
		if(!empty($this->input->post('isAttended', true))){
			$dataArray = array("bookingAttended" => $this->input->post('isAttended', true), "bookingStatusComments" => $this->input->post('comment', true), "editedDate" => date('Y-m-d H:i:s'));
		}else{
			$dataArray = array("bookingStatus" => 3, "bookingStatusComments" => $this->input->post('comment', true), "editedDate" => date('Y-m-d H:i:s'));
		}
        $condArray = array("bookingId" => $this->input->post('bookingId', true));
        $result = $this->AdminDashboardModel->setDenyBookingById($dataArray, $condArray);
        if ($result) {
            echo 200;
        } else {
            echo 500;
        }
    }
}
