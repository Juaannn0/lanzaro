<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function get_user($id) {
        return $this->db->get_where('users', ['id' => $id])->row();
    }

    public function get_user_by_email($email) {
        return $this->db->get_where('users', ['email' => $email])->row();
    }

    public function get_user_by_username($username) {
        return $this->db->get_where('users', ['username' => $username])->row();
    }

    public function insert_user($data) {
        // Asegurarse de que la contraseña esté hasheada
        if (isset($data['password'])) {
            $data['password_hash'] = password_hash($data['password'], PASSWORD_DEFAULT);
            unset($data['password']);
        }
        
        return $this->db->insert('users', $data);
    }

    public function update_user($id, $data) {
        // Si se está actualizando la contraseña, hashearla
        if (isset($data['password'])) {
            $data['password_hash'] = password_hash($data['password'], PASSWORD_DEFAULT);
            unset($data['password']);
        }
        
        return $this->db->where('id', $id)->update('users', $data);
    }

    public function verify_password($email, $password) {
        $user = $this->get_user_by_email($email);
        if (!$user) {
            return false;
        }
        
        return password_verify($password, $user->password_hash);
    }

    public function email_exists($email) {
        return $this->db->where('email', $email)->count_all_results('users') > 0;
    }

    public function username_exists($username) {
        return $this->db->where('username', $username)->count_all_results('users') > 0;
    }
}
