<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Horses extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('BookHorsesModel');
    }

    public function index() {
		$this->session->set_userdata('active', true);
        $this->load->view('all_horses');
    }

    public function addhorse() {
		$this->session->set_userdata('active', true);
        $this->load->view('add_horse');
    }

}
