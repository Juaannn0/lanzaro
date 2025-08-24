<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

    public function home() {
        $data['title'] = "Bienvenido a Lanzaro";
        $this->load->view('layouts/header', $data);
        $this->load->view('landing/home', $data);
        $this->load->view('layouts/footer');
    }

    public function about() {
        $data['title'] = "Sobre nosotros";
        $this->load->view('layouts/header', $data);
        $this->load->view('landing/about', $data);
        $this->load->view('layouts/footer');
    }

    public function contact() {
        $data['title'] = "Contacto";
        $this->load->view('layouts/header', $data);
        $this->load->view('landing/contact', $data);
        $this->load->view('layouts/footer');
    }
}
