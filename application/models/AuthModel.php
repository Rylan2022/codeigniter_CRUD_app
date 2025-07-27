<?php 
defined('BASEPATH') or exit('No direct script acess allowed.');
class AuthModel extends CI_Model {
    public function insert_user($data) {
        return $this->db->insert('users', $data);
    }

    public function get_user_by_email($email) {
        return $this->db->get_where('users', ['email' => $email])->row();
    }
}
?>