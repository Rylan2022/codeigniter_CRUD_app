<?php
defined('BASEPATH') or exit('No direct script access allowed');


class CurdController extends CI_Controller
{
    public function index()
    {
        $this->load->view('form');
    }

    public function add_data()
    {
        $this->load->model('UploadModel');


        $this->form_validation->set_error_delimiters('<div class="text-danger mt-1 mb-3">', '</div>');

        $this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[5]|max_length[20]');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[8]');
        $this->form_validation->set_rules('confpass', 'Password Confirmation', 'trim|required|matches[password]');
        $this->form_validation->set_rules('textarea', 'Textarea', 'trim|required');
        $this->form_validation->set_rules('qualification[]', 'Qualification', 'required');
        $this->form_validation->set_rules('specialization', 'Specialization', 'required');

        if (empty($_FILES['image']['name'])) {
            $this->form_validation->set_rules('image', 'IMAGE/DOCUMENT', 'trim|required');
        }
        $this->form_validation->set_rules('language', 'Language', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('form');

        } else {
            $config['upload_path'] = './uploads/';
            $config['allowed_types'] = 'gif|jpg|png';

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('image')) {
                $uploadData = $this->upload->data();
                $imageName = $uploadData['file_name'];


            } else {
                echo $this->upload->display_errors();
                return;
            }

            // $post = $this->input->post();
            // echo "<pre>";
            // print_r($post);
            // echo $imageName;
            $inserted = $this->UploadModel->insert_data($imageName);
            if ($inserted) {
                redirect('CurdController/all_data');
            } else {
                echo "Something went wrong. Please try again.";
            }
        }
    }

    public function all_data()
    {
        $this->load->model('UploadModel');

        $data['arr'] = $this->UploadModel->all_data();
        $this->load->view('all_data');
    }
}
?>