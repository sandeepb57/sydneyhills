<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('BookHorsesModel');
    }

    /* Admin Dashboard  */

    public function index() {
		$this->session->set_userdata('active', true);
        $this->load->view('admin_dashboard');
    }

    public function allbookings() {
		$this->session->set_userdata('active', true);
        $this->load->view('all_bookings');
    }

    /* User Dashboard  */

    public function userdashboard() {
		$this->session->set_userdata('active', false);
        $this->load->view('user_dashboard');
    }

    public function viewbookings() {
		$this->session->set_userdata('active', false);
        $this->load->view('my_bookings');
    }

    /* change password for all users */

    public function changepassword() {
        $this->load->view('change_password');
    }

}
