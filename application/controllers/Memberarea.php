<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Memberarea extends CI_Controller
{
    public function __construct()
	{
		parent :: __construct();
        $this->load->library('form_validation');
        if(!$this->session->userdata('email')){
            redirect("Auth");
        }
    }
    
    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('Memberarea/template/header');
        $this->load->view('Memberarea/template/sidebar', $data);
        $this->load->view('Memberarea/template/topbar', $data);
        $this->load->view('Memberarea/member', $data);
        $this->load->view('Memberarea/template/footer');
    }

    public function pesanan()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $user = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row();
        $data['pesanan'] = $this->Member->pesanan($user->id)->result();
        $data['title'] = "Pesanan Saya";
        $this->load->view('Memberarea/template/header', $data);
        $this->load->view('Memberarea/template/sidebar', $data);
        $this->load->view('Memberarea/template/topbar', $data);
        $this->load->view('Memberarea/pesanan');
        $this->load->view('Memberarea/template/footer');
    }

    public function saran()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = "Kritik dan Saran";
        $this->load->view('Memberarea/template/header', $data);
        $this->load->view('Memberarea/template/sidebar', $data);
        $this->load->view('Memberarea/template/topbar', $data);
        $this->load->view('Memberarea/saran');
        $this->load->view('Memberarea/template/footer');
    }
}
