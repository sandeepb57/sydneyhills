<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Horses extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->library('session');
        $this->load->model('AdminDashboardModel');
        if (!$this->session->userdata('userType')) {
            redirect(base_url() . 'loginregisterservices/signin');
        }
    }

    public function index()
    {
        $response['result'] = $this->AdminDashboardModel->getAllHorsesFromDB();
        $this->session->set_userdata('active', true);
        $this->load->view('all_horses', $response);
    }

    public function addhorse()
    {
        $this->session->set_userdata('active', true);
        $this->load->view('add_horse');
    }

    public function setHorseSubmission()
    {
        try {

            $file_name = $_FILES['horse-image']['name'];
            $file_tmp = $_FILES['horse-image']['tmp_name'];
            $upload_path = './horse_images/';

            $fileNewName = '';

            $fileNewName = date('dmYHis') . "__" . $file_name;
            move_uploaded_file($file_tmp, $upload_path . $fileNewName);

            $horseForm = array(
                "nameOfHorse" => $this->input->post('name', true),
                "typeOfHorse" => $this->input->post('type-of-horse', true),
                "height" => $this->input->post('height', true),
                "weight" => $this->input->post('weight', true),
                "age" => $this->input->post('age', true),
                "color" => $this->input->post('color', true),
                "describe-horse" => $this->input->post('describe-horse', true),
                "horse-image " => 'horse_images/' . $fileNewName,
                "addedDate" => date("Y-m-d H:i:s"),
            );
            $response = $this->AdminDashboardModel->setHorseSubmissionDB($horseForm);
            if ($response) {
                $this->session->set_flashdata("responseMsg", "Horse added successfully.");
                redirect('horses/addhorse');
            } else {
                $this->session->set_flashdata("responseMsg", "Something went wrong, please try again.");
                redirect('horses/addhorse');
            }
        } catch (Exception $e) {
            $this->session->set_flashdata("responseMsg", "Something went wrong, please try again.");
            redirect('horses/addhorse');
        }
    }

}
