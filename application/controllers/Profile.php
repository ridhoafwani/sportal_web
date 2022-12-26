<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profile extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        if(!$this->session->userdata('email')){
            redirect("Auth");
        }
    }

    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = $data['user']['name'];
        $this->load->view('Memberarea/template/header', $data);
        $this->load->view('Memberarea/template/sidebar', $data);
        $this->load->view('Memberarea/template/topbar');
        $this->load->view('Memberarea/member', $data);
        $this->load->view('Memberarea/template/footer');
    }

    public function edit()
    {

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = "Edit Profile ";

        $this->form_validation->set_rules('name', 'Nama', 'required|trim');
        $this->form_validation->set_rules('notlp', 'Nomer HP', 'trim');
        $this->form_validation->set_rules('alamat', 'Alamat', 'trim');

		if($this->form_validation->run() == false){
			#$data['title'] = 'Admin Page | Edit Profile';
            $this->load->view('Memberarea/template/header', $data);
            $this->load->view('Memberarea/template/sidebar', $data);
            $this->load->view('Memberarea/template/topbar', $data);
            $this->load->view('Memberarea/editprofile', $data);
            $this->load->view('Memberarea/template/footer');
		}else{
			$name = $this->input->post('name');
            $email = $this->input->post('email');
            $notlp = $this->input->post('notlp');
            $alamat = $this->input->post('alamat');
            

			//cek jika ada gambar diupload
			$upload_image = $_FILES['image']['name'];

			if($upload_image){
				$config['allowed_types'] = 'jpeg|jpg|png';
				$config['max_size']     = '2048';
				$config['upload_path'] = './assets/img/profile/';

				$this->load->library('upload', $config);

				if ($this->upload->do_upload('image')) {
					$old_image = $data['user']['image'];
					if ($old_image != 'default.jpg'){
						unlink(FCPATH . 'assets/img/profile/' . $old_image);
					}


					$new_image = $this->upload->data('file_name');
					$this->db->set('image', $new_image);

				}else{
                    echo $this->upload->display_errors();

                }
            }
            $this->db->set('name', $name);
            $this->db->set('notlp', $notlp);
            $this->db->set('alamat', $alamat);
            $this->db->where('email', $email);
            $this->db->update('user');

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            profil berhasil di edit!
          </div>' );
          redirect('profile/edit');
        }
    }


}
