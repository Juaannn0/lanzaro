<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function get_page($slug) {
        return $this->db->get_where('pages', ['slug' => $slug])->row();
    }

    public function get_all_pages() {
        return $this->db->get('pages')->result();
    }

    public function insert_page($data) {
        return $this->db->insert('pages', $data);
    }

    public function update_page($id, $data) {
        return $this->db->where('id', $id)->update('pages', $data);
    }
}
