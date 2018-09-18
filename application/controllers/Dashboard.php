<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('UserDashboardModel');
        $this->load->model('AdminDashboardModel');
        if (!$this->session->userdata('userType')) {
            redirect(base_url() . 'loginregisterservices/signin');
        }
    }

    public function index()
    {
        if ($this->session->userdata('userType') == 2) {
            /* Admin Dashboard  */
			$response['result'] = $this->AdminDashboardModel->getDashboardDetails();
			// $response['summary'] = $this->AdminDashboardModel->getALLTypeRidesSummary();
            $this->session->set_userdata('active', true);
            $this->load->view('admin_dashboard', $response);
        } else {
            /* User Dashboard  */
            $this->session->set_userdata('active', false);
            $this->load->view('user_dashboard');
        }
    }

    public function allbookings()
    {
        $adminallbookings['result'] = $this->AdminDashboardModel->getAllBookings();
        $this->session->set_userdata('active', true);
        $this->load->view('all_bookings', $adminallbookings);
    }

    public function viewbookings()
    {
        $userbookings['result'] = $this->UserDashboardModel->getUserBookings();
        $this->session->set_userdata('active', false);
        $this->load->view('my_bookings', $userbookings);
    }

    /* change password for all users */

    public function changepassword()
    {
        $this->load->view('change_password');
    }

}
