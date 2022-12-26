<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function index()
    {
        $data['title']="Beranda - Sportal";
        $this->load->view('Home/template/header', $data);
        $this->load->view('Home/home');
        $this->load->view('Home/template/footer');
    }
}
