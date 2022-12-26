<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Performa extends CI_Controller
{
    public function index()
    {   
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = "Performa";
        $this->load->view('Memberarea/template/header', $data);
        $this->load->view('Memberarea/template/sidebar', $data);
        $this->load->view('Memberarea/template/topbar', $data);
        $this->load->view('Memberarea/performa');
        $this->load->view('Memberarea/template/footer');
    }

}
