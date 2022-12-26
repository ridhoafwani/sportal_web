<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pemilik extends CI_Controller
{
    public function index()
    {
        $this->load->view('Memberarea/template/header');
        $this->load->view('Memberarea/template/pemiliksidebar');
        $this->load->view('Memberarea/template/topbar');
        $this->load->view('Memberarea/member');
        $this->load->view('Memberarea/template/footer');
    }

    public function performa()
    {
        $this->load->view('Memberarea/template/header');
        $this->load->view('Memberarea/template/pemiliksidebar');
        $this->load->view('Memberarea/template/topbar');
        $this->load->view('Memberarea/performa');
        $this->load->view('Memberarea/template/footer');
    }

    public function laporan()
    {
        $this->load->view('Memberarea/template/header');
        $this->load->view('Memberarea/template/pemiliksidebar');
        $this->load->view('Memberarea/template/topbar');
        $this->load->view('Memberarea/laporan');
        $this->load->view('Memberarea/template/footer');
    }

    public function editprofile()
    {
        $this->load->view('Memberarea/template/header');
        $this->load->view('Memberarea/template/pemiliksidebar');
        $this->load->view('Memberarea/template/topbar');
        $this->load->view('Memberarea/editprofile');
        $this->load->view('Memberarea/template/footer');
    }

    public function tambahlapangan()
    {
        $this->load->view('Memberarea/template/header');
        $this->load->view('Memberarea/template/pemiliksidebar');
        $this->load->view('Memberarea/template/topbar');
        $this->load->view('Memberarea/tambahlapangan');
        $this->load->view('Memberarea/template/footer');
    }

    public function managefutsal()
    {
        $this->load->view('Memberarea/template/header');
        $this->load->view('Memberarea/template/pemiliksidebar');
        $this->load->view('Memberarea/template/topbar');
        $this->load->view('Memberarea/managelapangan/futsall');
        $this->load->view('Memberarea/template/footer');
    }

    public function managebadminton()
    {
        $this->load->view('Memberarea/template/header');
        $this->load->view('Memberarea/template/pemiliksidebar');
        $this->load->view('Memberarea/template/topbar');
        $this->load->view('Memberarea/managelapangan/badminton');
        $this->load->view('Memberarea/template/footer');
    }

    public function managevoli()
    {
        $this->load->view('Memberarea/template/header');
        $this->load->view('Memberarea/template/pemiliksidebar');
        $this->load->view('Memberarea/template/topbar');
        $this->load->view('Memberarea/managelapangan/voli');
        $this->load->view('Memberarea/template/footer');
    }

    public function managebasket()
    {
        $this->load->view('Memberarea/template/header');
        $this->load->view('Memberarea/template/pemiliksidebar');
        $this->load->view('Memberarea/template/topbar');
        $this->load->view('Memberarea/managelapangan/basket');
        $this->load->view('Memberarea/template/footer');
    }

    public function editlapangan()
    {
        $this->load->view('Memberarea/template/header');
        $this->load->view('Memberarea/template/pemiliksidebar');
        $this->load->view('Memberarea/template/topbar');
        $this->load->view('Memberarea/managelapangan/editlapangan');
        $this->load->view('Memberarea/template/footer');
    }
}
