<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('session');

        // ejemplo básico de auth
        if (!$this->session->userdata('logged_in')) {
            redirect('auth/login');
        }
    }

    public function index() {
        $data['title'] = "Panel de usuario";
        $this->load->view('layouts/header', $data);
        $this->load->view('dashboard/index', $data);
        $this->load->view('layouts/footer');
    }

    public function profile() {
        $data['title'] = "Mi perfil";
        $this->load->view('layouts/header', $data);
        $this->load->view('dashboard/profile', $data);
        $this->load->view('layouts/footer');
    }
}
