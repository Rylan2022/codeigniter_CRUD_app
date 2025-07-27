<?php 
defined('BASEPATH') or exit ('No direct script access allowed');

class AuthController extends CI_Controller {
    public function __construct() {
        parent:: __construct();
        $this->load->model('AuthModel');
        $this->load->library('session');
    }

    public function register() {
        $this->load->view('register');
    }

    public function register_user() {
        $data = [
            'name' => $this->input->post('name'),
            'email' => $this->input->post('email'),
            'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT)
        ];

        $this->AuthModel->insert_user($data);
        $this->session->set_flashdata('success', 'Registered successfully!');
        redirect('AuthController/login');
    }

    public function login() {
        $this->load->view('login');
    }

    public function login_user() {
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $user = $this->AuthModel->get_user_by_email($email);


        if($user && password_verify($password, $user->password)) {
            $this->session->set_userdata('user_id', $user->id);
            $this->session->set_userdata('user_name', $user->name);
            redirect('AuthController/dashbord');
        } else {
            $this->session->set_flashdata('error', 'Invalid email or password');
            redirect('AuthController/login');
        }
    }

    public function dashbord() {
        if (!$this->session->userdata('user_id')) {
            redirect('AuthController/login');
        }
        $this->load->view('dashbord');
    }

    public function logout() {
        $this->session->sess_destroy();
        redirect('AuthController/login');
    }

}
?>