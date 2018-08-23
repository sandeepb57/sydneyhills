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
        $this->load->view('admin_dashboard');
    }

    public function allbookings() {
        $this->load->view('all_bookings');
    }

    /* User Dashboard  */

    public function userdashboard() {
        $this->load->view('user_dashboard');
    }

    public function viewbookings() {
        $this->load->view('my_bookings');
    }

    /* change password for all users */

    public function changepassword() {
        $this->load->view('change_password');
    }

}
