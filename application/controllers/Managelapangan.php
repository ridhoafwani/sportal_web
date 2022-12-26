<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Managelapangan extends CI_Controller
{
    public function __construct()
	{
		parent :: __construct();
        $this->load->library('form_validation');
    }

    public function tambahlapangan()
    {   
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['kategori'] = $this->Admin->kategori()->result();
        $data['title'] = "Tambah Lapangan";
        $this->load->view('Memberarea/template/header', $data);
        $this->load->view('Memberarea/template/sidebar', $data);
        $this->load->view('Memberarea/template/topbar', $data);
        $this->load->view('Memberarea/tambahlapangan', $data);
        $this->load->view('Memberarea/template/footer');
    }

    public function all()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['lapangan'] = $this->Member->all()->result();
        $this->load->view('Memberarea/template/header');
        $this->load->view('Memberarea/template/sidebar', $data);
        $this->load->view('Memberarea/template/topbar', $data);
        $this->load->view('Memberarea/adminlapangan/futsall');
        $this->load->view('Memberarea/template/footer');
    }


    public function managefutsal()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['lapangan'] = $this->Member->futsall()->result();
        $data['title'] = "Daftar Lapangan - Futsall";
        $this->load->view('Memberarea/template/header', $data);
        $this->load->view('Memberarea/template/sidebar', $data);
        $this->load->view('Memberarea/template/topbar', $data);
        $this->load->view('Memberarea/adminlapangan/futsall');
        $this->load->view('Memberarea/template/footer');
    }

    public function managebadminton()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['lapangan'] = $this->Member->badminton()->result();
        $data['title'] = "Daftar Lapangan - Badminton";
        $this->load->view('Memberarea/template/header', $data);
        $this->load->view('Memberarea/template/sidebar', $data);
        $this->load->view('Memberarea/template/topbar', $data);
        $this->load->view('Memberarea/adminlapangan/badminton');
        $this->load->view('Memberarea/template/footer');
    }

    public function managevoli()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['lapangan'] = $this->Member->voli()->result();
        $data['title'] = "Daftar Lapangan - Voli";
        $this->load->view('Memberarea/template/header', $data);
        $this->load->view('Memberarea/template/sidebar', $data);
        $this->load->view('Memberarea/template/topbar', $data);
        $this->load->view('Memberarea/adminlapangan/voli');
        $this->load->view('Memberarea/template/footer');
    }

    public function managebasket()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['lapangan'] = $this->Member->basket()->result();
        $data['title'] = "Daftar Lapangan - Basket";
        $this->load->view('Memberarea/template/header', $data);
        $this->load->view('Memberarea/template/sidebar', $data);
        $this->load->view('Memberarea/template/topbar', $data);
        $this->load->view('Memberarea/adminlapangan/basket');
        $this->load->view('Memberarea/template/footer');
    }

    public function tambahlapanganproses(){
        $id_category = $this->input->post('id_category');
        $name = $this->input->post('name');
        $tarif = $this->input->post('tarif');
        $alamat = $this->input->post('alamat');
        $map = $this->input->post('map');
        $image = $_FILES['image'];

        if($image=''){
            $image = "lapangandefault.jpg";
        }
        else{
            $config['upload_path'] = './assets/img/lapangan/';
            $config['allowed_types'] = 'jpg|png|gif';

            $this->load->library('upload',$config);

            if(!$this->upload->do_upload('image')){
                $image = "lapangandefault.jpg";
            }

            else{
                $image = $this->upload->data('file_name');
            }
        }

        $data = array(
            'id_category' => $id_category,
            'name'      => $name,
            'tarif'     => $tarif,
            'alamat'    => $alamat,
            'map'       => $map,
            'image'     => $image,
        );

        $this->Admin->tambahlapangan($data, 'lapangan');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Data berhasil titambahkan!
          </div>' );
        redirect('managelapangan/tambahlapangan');
    }

    public function hapus($id){
        $where = array ('id' => $id);
        $this->Admin->hapus_data($where, 'lapangan');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Data berhasil dihapus!
          </div>' );
        redirect($_SERVER['HTTP_REFERER']);
    }

    public function edit_lapangan($id, $cat)
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $where = array ('id' => $id);
        $data['lapangan'] = $this->Admin->take_lapangan($where,'lapangan');
        $data['kategori'] = $this->Admin->kategori()->result();
        $cat_id = array('id'=> $cat);
        $data['take_category'] = $this->Admin->take_category($cat_id,'category')->row();

        $this->form_validation->set_rules('name', 'Nama', 'required|trim');
        $this->form_validation->set_rules('tarif', 'tarif', 'required|trim');
        $this->form_validation->set_rules('alamat', 'Alamat', 'trim');

		if($this->form_validation->run() == false){
			#$data['title'] = 'Admin Page | Edit Profile';
            $data['title'] = "Edit Lapangan";
            $this->load->view('Memberarea/template/header', $data);
            $this->load->view('Memberarea/template/sidebar', $data);
            $this->load->view('Memberarea/template/topbar', $data);
            $this->load->view('Memberarea/adminlapangan/editlapangan', $data);
            $this->load->view('Memberarea/template/footer');    
		}else{
			$id_category = $this->input->post('id_category');
			$name = $this->input->post('name');
            $tarif = $this->input->post('tarif');
            $alamat = $this->input->post('alamat');
            $map = $this->input->post('map');
            

			//cek jika ada gambar diupload
			$upload_image = $_FILES['image']['name'];

			if($upload_image){
				$config['allowed_types'] = 'jpeg|jpg|png';
				$config['max_size']     = '2048';
				$config['upload_path'] = './assets/img/lapangan/';

				$this->load->library('upload', $config);

				if ($this->upload->do_upload('image')) {
					$old_image = $data['user']['image'];
					if ($old_image != 'lapangandefault.jpg'){
						unlink(FCPATH . 'assets/img/profile/' . $old_image);
					}


					$new_image = $this->upload->data('file_name');
					$this->db->set('image', $new_image);

				}else{
                    echo $this->upload->display_errors();

                }
            }
            $this->db->set('id_category', $id_category);
            $this->db->set('name', $name);
            $this->db->set('tarif', $tarif);
            $this->db->set('alamat', $alamat);
            $this->db->set('map', $map);
            $this->db->where('id', $id);
            $this->db->update('lapangan');

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            data berhasil di edit!
          </div>' );
          redirect('managelapangan/edit_lapangan/'.$id.'/'.$cat);
        }
    }

}
