<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Log_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function add_log($data) {
        return $this->db->insert('logs', $data);
    }

    public function get_logs($user_id = null) {
        if ($user_id) {
            return $this->db->get_where('logs', ['user_id' => $user_id])->result();
        }
        return $this->db->get('logs')->result();
    }
}
