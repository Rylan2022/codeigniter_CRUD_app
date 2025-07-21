<?php
defined('BASEPATH') or exit('No direct script access allowed.');
class UploadModel extends CI_Model
{
    public function insert_data($imageName)
    {
        $data = [
            'username' => $this->input->post('username', true),
            'email' => $this->input->post('email', true),
            'password' => $this->input->post('password', true),
            'textarea' => $this->input->post('textarea', true),
            'image' => $imageName,
            'qualification' => $this->input->post('qualification', true),
            'spealization' => $this->input->post('specialization', true),
            'language' => $this->input->post('language', true),
            'added_on' => date('d M, Y'),
            'status' => 1

        ];
        $q = $this->db->insert('userdata', $data);
        if ($q) {
            return true;
        } else {
            return false;
        }
    }

    public function all_data()
    {
        $q = $this->db->order_by('id', 'desc')->get('userdata');
        if ($q->num_rows()) {
            return $q->result();
        } else {
            return false;
        }
    }
}
?>