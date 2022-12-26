<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function pemilik()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['userlist'] = $this->Admin->pemiliklist()->result();
        $data['title'] = "Daftar User - Pemilik";
        $this->load->view('Memberarea/template/header', $data);
        $this->load->view('Memberarea/template/sidebar', $data);
        $this->load->view('Memberarea/template/topbar', $data);
        $this->load->view('Memberarea/daftaruser/pemilik');
        $this->load->view('Memberarea/template/footer');
    }

    public function admin()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['userlist'] = $this->Admin->adminlist()->result();
        $data['title'] = "Daftar User - Admin";
        $this->load->view('Memberarea/template/header', $data);
        $this->load->view('Memberarea/template/sidebar', $data);
        $this->load->view('Memberarea/template/topbar', $data);
        $this->load->view('Memberarea/daftaruser/admin');
        $this->load->view('Memberarea/template/footer');
    }

    public function member()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['userlist'] = $this->Admin->memberlist()->result();
        $data['title'] = "Daftar User - Member";
        $this->load->view('Memberarea/template/header', $data);
        $this->load->view('Memberarea/template/sidebar', $data);
        $this->load->view('Memberarea/template/topbar', $data);
        $this->load->view('Memberarea/daftaruser/member');
        $this->load->view('Memberarea/template/footer');
    }

    public function all()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['userlist'] = $this->Admin->user();
        $data['title'] = "Daftar User - Semua";
        $this->load->view('Memberarea/template/header', $data);
        $this->load->view('Memberarea/template/sidebar', $data);
        $this->load->view('Memberarea/template/topbar', $data);
        $this->load->view('Memberarea/daftaruser/all');
        $this->load->view('Memberarea/template/footer');
    }

    public function hapus($id){
        $where = array ('id' => $id);
        $this->Admin->hapus_data($where, 'user');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Data berhasil dihapus!
          </div>' );
        redirect($_SERVER['HTTP_REFERER']);
    }

}
