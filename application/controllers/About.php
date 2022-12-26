<?php
defined('BASEPATH') or exit('No direct script access allowed');

class About extends CI_Controller
{
    public function index()
    {
        $data['title']="Tentang - Sportal";
        $this->load->view('Home/template/header', $data);
        $this->load->view('Home/about');
        $this->load->view('Home/template/footer');
    }
}
