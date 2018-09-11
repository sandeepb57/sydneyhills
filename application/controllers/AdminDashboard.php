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

}
