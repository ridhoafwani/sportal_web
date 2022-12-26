<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        if($this->session->userdata('email')){
            redirect("profile");
        }
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Member Login';
            $this->load->view('templates/header_auth', $data);
            $this->load->view('Auth/login');
            $this->load->view('templates/footer_auth');
        } else {
            $this->_login_proses();
        }
    }

    private function _login_proses()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $user = $this->db->get_where('user', ['email' => $email])->row_array();
        if ($user) {
            if ($user['is_active'] == 1) {
                if (password_verify($password, $user['password'])) {
                    $data = [
                        'email' => $user['email'],
                        'role_id' => $user['role_id']
                    ];
                    if($user['role_id']== 1){
                        $this->session->set_userdata($data);
                        redirect('performa'); 
                    }
                    else if($user['role_id']== 2){
                        $this->session->set_userdata($data);
                        redirect('performa'); 
                    }
                    else{
                        $this->session->set_userdata($data);
                        redirect('profile'); 
                    }
                } else {
                    $this->session->set_flashdata('alert', '<div class="alert 
                alert-danger" role="alert">Password anda salah</div>');
                    redirect('Auth');
                }
            } else {
                $this->session->set_flashdata('alert', '<div class="alert 
                alert-danger" role="alert">Email belum terverifikasi</div>');
                redirect('Auth');
            }
        } else {
            $this->session->set_flashdata('alert', '<div class="alert 
            alert-danger" role="alert">Email anda tidak terdaftar</div>');
            redirect('Auth');
        }
    }

    public function register()
    {
        if($this->session->userdata('email')){
            redirect("profile");
        }
        $this->form_validation->set_rules('name', 'Nama', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules(
            'password1',
            'Password',
            'required|trim|min_length[6]|matches[password2]',
            [
                'matches' => 'password tidak sama!',
                'min_length' => 'password terlalu pendek'

            ]

        );
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Pendaftara Member Sportal';
            $this->load->view('templates/header_auth', $data);
            $this->load->view('Auth/registration');
            $this->load->view('templates/footer_auth');
        } else {
            $data = [
                'name' => htmlspecialchars($this->input->post('name', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'image' => 'default.jpg',
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'role_id' => 3,
                'is_active' => 1,
                'date_created' => time()
            ];

            $this->db->insert('user', $data);
            $this->session->set_flashdata('alert', '<div class="alert 
            alert-success" role="alert">Selamat akun anda sudah terdaftar</div>');
            redirect('Auth');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('emsil');
        $this->session->unset_userdata('role_id');

        $this->session->set_flashdata('alert', '<div class="alert 
        alert-primary" role="alert">Anda berhasil keluar</div>');
        $this->session->sess_destroy();
        redirect('auth');
    }

}
