<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

    public function __construct() {
        parent::__construct();

        // Armar helpers y librerias
        $this->load->helper(array('url', 'form', 'html', 'text'));
        $this->load->library(array('session', 'form_validation'));
        $this->load->database();
        // $this->load->model('User_model');
    }

    public function home() {
        $data['title'] = "Bienvenido a Lanzaro";
        $this->load->view('layout/header', $data);
        $this->load->view('pages/home', $data);
        $this->load->view('layout/footer');
    }

    public function about() {
        $data['title'] = "Sobre nosotros";
        $this->load->view('layout/header', $data);
        $this->load->view('pages/about', $data);
        $this->load->view('layout/footer');
    }

    public function contact() {
        $data['title'] = "Contacto";
        $this->load->view('layout/header', $data);
        $this->load->view('pages/contact', $data);
        $this->load->view('layout/footer');
    }
}
