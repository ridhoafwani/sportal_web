<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function editprofile()
    {
        
        $this->load->view('Memberarea/template/header');
        $this->load->view('Memberarea/template/adminsidebar');
        $this->load->view('Memberarea/template/topbar');
        $this->load->view('Memberarea/editprofile');
        $this->load->view('Memberarea/template/footer');
    }

    public function tambahlapangan()
    {
        $this->load->view('Memberarea/template/header');
        $this->load->view('Memberarea/template/adminsidebar');
        $this->load->view('Memberarea/template/topbar');
        $this->load->view('Memberarea/tambahlapangan');
        $this->load->view('Memberarea/template/footer');
    }

    public function managefutsal()
    {
        $this->load->view('Memberarea/template/header');
        $this->load->view('Memberarea/template/adminsidebar');
        $this->load->view('Memberarea/template/topbar');
        $this->load->view('Memberarea/adminlapangan/futsall');
        $this->load->view('Memberarea/template/footer');
    }

    public function managebadminton()
    {
        $this->load->view('Memberarea/template/header');
        $this->load->view('Memberarea/template/adminsidebar');
        $this->load->view('Memberarea/template/topbar');
        $this->load->view('Memberarea/adminlapangan/badminton');
        $this->load->view('Memberarea/template/footer');
    }

    public function managevoli()
    {
        $this->load->view('Memberarea/template/header');
        $this->load->view('Memberarea/template/adminsidebar');
        $this->load->view('Memberarea/template/topbar');
        $this->load->view('Memberarea/adminlapangan/voli');
        $this->load->view('Memberarea/template/footer');
    }

    public function managebasket()
    {
        $this->load->view('Memberarea/template/header');
        $this->load->view('Memberarea/template/adminsidebar');
        $this->load->view('Memberarea/template/topbar');
        $this->load->view('Memberarea/adminlapangan/basket');
        $this->load->view('Memberarea/template/footer');
    }

    public function editlapangan()
    {
        $this->load->view('Memberarea/template/header');
        $this->load->view('Memberarea/template/adminsidebar');
        $this->load->view('Memberarea/template/topbar');
        $this->load->view('Memberarea/adminlapangan/editlapangan');
        $this->load->view('Memberarea/template/footer');
    }
}
