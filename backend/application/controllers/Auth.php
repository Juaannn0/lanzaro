<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // cargar librerías necesarias
        $this->load->helper(['form', 'url']);
        $this->load->library('session');
        $this->load->model('User_model'); // suponiendo que luego tengas modelo
    }

    public function login() {
        $this->load->view('layouts/header');
        $this->load->view('auth/login');
        $this->load->view('layouts/footer');
    }

    public function register() {
        $this->load->view('layouts/header');
        $this->load->view('auth/register');
        $this->load->view('layouts/footer');
    }

    public function logout() {
        $this->session->sess_destroy();
        redirect('auth/login');
    }
}
