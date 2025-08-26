<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');

        // auth para ingresar
        if (!$this->session->userdata('logged_in')) {
            redirect('auth/login');
        }
    }

    public function index() {
        $data['title'] = "Panel de usuario";
        $this->load->view('layout/header', $data);
        $this->load->view('dashboard/index', $data);
        $this->load->view('layout/footer');
    }

    public function profile() {
        $data['title'] = "Mi perfil";
        $this->load->view('layout/header', $data);
        $this->load->view('dashboard/profile', $data);
        $this->load->view('layout/footer');
    }
}
