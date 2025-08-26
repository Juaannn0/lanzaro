<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // cargar librerías necesarias
        $this->load->helper(['form', 'url', 'security']);
        $this->load->library(['session', 'form_validation']);
        $this->load->model('User_model');
    }

    private function load_auth_view($view, $data = []) {
        $data['css'] = ['auth.css'];  // Agregar el CSS de autenticación
        $this->load->view('layout/header', $data);
        $this->load->view('auth/' . $view, $data);
        $this->load->view('layout/footer', $data);
    }

    public function login() {
        if ($this->session->userdata('logged_in')) {
            redirect('dashboard');
        }

        if ($this->input->method() === 'post') {
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email|trim');
            $this->form_validation->set_rules('password', 'Contraseña', 'required');

            if ($this->form_validation->run()) {
                $email = $this->input->post('email');
                $password = $this->input->post('password');
                
                if ($this->User_model->verify_password($email, $password)) {
                    $user = $this->User_model->get_user_by_email($email);
                    $this->session->set_userdata([
                        'user_id' => $user->id,
                        'username' => $user->username,
                        'email' => $user->email,
                        'logged_in' => TRUE
                    ]);

                    if ($this->input->post('remember')) {
                        $this->session->set_tempdata('remember_me', TRUE, 60*60*24*30); // 30 días
                    }

                    redirect('dashboard');
                } else {
                    $data['error'] = 'Email o contraseña incorrectos';
                    $this->load_auth_view('login', $data);
                }
            } else {
                $data['error'] = validation_errors();
                $this->load_auth_view('login', $data);
            }
        } else {
            $this->load_auth_view('login');
        }
    }

    public function register() {
        if ($this->session->userdata('logged_in')) {
            redirect('dashboard');
        }

        if ($this->input->method() === 'post') {
            $this->form_validation->set_rules('username', 'Nombre de usuario', 'required|min_length[4]|max_length[50]|is_unique[users.username]');
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[users.email]');
            $this->form_validation->set_rules('password', 'Contraseña', 'required|min_length[6]');
            $this->form_validation->set_rules('password_confirm', 'Confirmar contraseña', 'required|matches[password]');
            $this->form_validation->set_rules('terms', 'Términos y condiciones', 'required');

            if ($this->form_validation->run()) {
                $user_data = [
                    'username' => $this->input->post('username'),
                    'email' => $this->input->post('email'),
                    'password' => $this->input->post('password')
                ];

                if ($this->User_model->insert_user($user_data)) {
                    $this->session->set_flashdata('success', 'Cuenta creada exitosamente. Por favor inicia sesión.');
                    redirect('auth/login');
                } else {
                    $data['error'] = 'Error al crear la cuenta. Por favor intenta nuevamente.';
                    $this->load_auth_view('register', $data);
                }
            } else {
                $data['error'] = validation_errors();
                $this->load_auth_view('register', $data);
            }
        } else {
            $this->load_auth_view('register');
        }
    }

    public function f_password() {
        if ($this->input->method() === 'post') {
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email|trim');

            if ($this->form_validation->run()) {
                $email = $this->input->post('email');
                
                if ($this->User_model->email_exists($email)) {
                    // Aquí implementarías la lógica de recuperación de contraseña
                    // Por ahora solo mostraremos un mensaje de éxito
                    $data['success'] = 'Se han enviado las instrucciones a tu correo electrónico.';
                } else {
                    $data['error'] = 'No existe una cuenta con ese correo electrónico.';
                }
                $this->load_auth_view('fPassword', $data);
            } else {
                $data['error'] = validation_errors();
                $this->load_auth_view('fPassword', $data);
            }
        } else {
            $this->load_auth_view('fPassword');
        }
    }

    public function logout() {
        $this->session->sess_destroy();
        redirect('auth/login');
    }
}
