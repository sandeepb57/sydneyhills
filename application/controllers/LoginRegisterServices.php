<?php
defined('BASEPATH') or exit('No direct script access allowed');

class LoginRegisterServices extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->library('passwordhashing');
        $this->load->model('LoginRegisterModel');
    }

    public function LoginService()
    {
        $loginData = array(
            "emailAddress" => $this->input->post('loginusername', true),
            "customerstatus" => 1,
        );
        $res = $this->LoginRegisterModel->CustomerLogin($loginData);
        if ($res['status'] == 'OK') {
            if ($this->passwordhashing->VerifyPasswordHash($this->input->post('loginpassword', true), $res['data'][0]['customerPassword'])) {
                $sessiondata = array(
                    "customerId" => $res['data'][0]['customerId'],
                    "firstName" => $res['data'][0]['firstName'],
                    "lastName" => $res['data'][0]['lastName'],
                    "primaryPhoneNumber" => $res['data'][0]['primaryPhoneNumber'],
                    "emailAddress" => $res['data'][0]['emailAddress'],
                    "userType" => $res['data'][0]['userType'],
                );
                $this->session->set_userdata($sessiondata);
                redirect(base_url());
            } else {
                $this->session->set_flashdata("loginError", "Please enter valid email and password.");
                redirect(base_url());
            }
        } else {
            $this->session->set_flashdata("loginError", "Please enter valid email and password.");
            redirect(base_url());
        }

    }

    public function RegisterService()
    {
        print_r($this->input->post());
        $resgisterData = array(
            "firstName" => $this->input->post('firstname', true),
            "lastName" => $this->input->post('lastname', true),
            "primaryPhoneNumber" => $this->input->post('phone', true),
            "emailAddress" => $this->input->post('email', true),
            "customerAddress" => $this->input->post('address', true),
            "customerPassword" => $this->passwordhashing->CreatePasswordHash($this->input->post('password', true)),
            "userType" => 1,
            "addedDate" => date("Y-m-d H:i:s"),
        );

        $res = $this->LoginRegisterModel->RegisterCustomers($resgisterData);
        if ($res == 1) {
            redirect(base_url());
        } else {
            $this->load->view('error_exception');
        }
    }

    public function CustomerLogout()
    {
        $sessionData = $this->session->userdata();
        //print_r($sessiondata);
        $sessionData = array(
            "customerId",
            "firstName",
            "lastName",
            "primaryPhoneNumber",
            "emailAddress",
            "userType",
        );
        $this->session->unset_userdata($sessionData);
        redirect(base_url());
    }
}
