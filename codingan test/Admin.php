<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller 
{
	public function __construct()
	{
		parent :: __construct();
		$this->load->model('My_model');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data['product'] = $this->My_model->ambildata('product')->result();
		$data['count_flower'] = $this->My_model->count_flower();

		$data['tabeluser'] = $this->My_model->ambildata('user')->result();
		$data['count_user'] = $this->My_model->count_user();

		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$data['title'] = 'Admin Page';
		$this->load->view('admin/tamplate/header' , $data);
		$this->load->view('admin/index', $data);
		$this->load->view('admin/tamplate/footer');
	}

	public function flowertable()
	{

		if($this->input->get('keyword')){
			$data['product'] = $this->My_model->get_keyword($this->input->get('keyword'));
		} else {
			$data['product'] = $this->My_model->ambildata('product')->result();
		}
		
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		
		$data['title'] = 'Admin Page | Flower Table';
		$this->load->view('admin/tamplate/header' , $data);
		$this->load->view('admin/flowertable', $data);
		$this->load->view('admin/tamplate/footer');
	}

	public function tambah_aksi()
	{
		$name_product = $this->input->post('name_product');
		$price_product = $this->input->post('price_product');
		$id_category = $this->input->post('id_category');
		$deskripsi = $this->input->post('deskripsi');
		$image = $_FILE['image'];
		if($image=''){}
		else{
			$config['upload_path']	= './asset/img/product/';
			
			$config['allowed_types'] = 'jpg|png|jpeg';

			$this->load->library('upload', $config);
			if(!$this->upload->do_upload('image')){
				echo "Upload Gagal"; die();
			}else{
				$image = $this->upload->data('file_name');
			}
		}

		$image2 = $_FILE['image2'];
		if($image2=''){}
		else{
			$config['upload_path']	= './asset/img/product/';

			$config['allowed_types'] = 'jpg|png|jpeg';

			$this->load->library('upload', $config);
			if(!$this->upload->do_upload('image2')){
				echo "Upload Gagal"; die();
			}else{
				$image2 = $this->upload->data('file_name');
			}
		}

		$data = array(
			'name_product' => $name_product,
			'price_product' => $price_product,
			'id_category' => $id_category,
			'deskripsi' => $deskripsi,
			'image' => $image,
			'image2' => $image2

		);

		$this->My_model->tambahdata($data, 'product');
		redirect('admin/flowertable/');
	}

	public function hapus($id_product)
	{
		$where = array ('id_product' => $id_product);
		$this->My_model->hapusdata($where, 'product');
		redirect('admin/flowertable');
	}

	public function edit($id_product)
	{
		$where = array ('id_product' => $id_product);
		$data['product'] = $this->My_model->editdata($where, 'product')->result();

		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$data['title'] = 'Admin Page | Edit Flower Table';
		$this->load->view('admin/tamplate/header' , $data);
		$this->load->view('admin/edit', $data);
		$this->load->view('admin/tamplate/footer');
		
	}

	public function update()
	{
		$id_product = $this->input->post('id_product');

		$data['product'] = $this->db->get_where('product', ['id_product' => $id_product])->row_array();

		$name_product = $this->input->post('name_product');
		$price_product = $this->input->post('price_product');
		$id_category = $this->input->post('id_category');
		$deskripsi = $this->input->post('deskripsi');
		//cek jika ada gambar diupload
		$upload_image = $_FILES['image']['name'];

			if($upload_image){
				$config['allowed_types'] = 'jpeg|jpg|png';
				$config['max_size']     = '2048';
				$config['upload_path'] = './asset/img/product/';

				$this->load->library('upload', $config);

				 if ($this->upload->do_upload('image')) {
					 	$old_image = $data['product']['image'];
					 	if($upload_image != null){
					 		unlink(FCPATH . 'asset/img/product/' . $old_image);}
				 }
				 	
					$new_image = $this->upload->data('file_name');
					$this->db->set('image', $new_image);
			}


		//cek jika ada gambar diupload
		$upload_image2 = $_FILES['image2']['name'];

			if($upload_image2){
				$config['allowed_types'] = 'jpeg|jpg|png';
				$config['max_size']     = '2048';
				$config['upload_path'] = './asset/img/product/';

				$this->load->library('upload', $config);

				 if ($this->upload->do_upload('image2')) {
				 		$old_image2 = $data['product']['image2'];
				 		if($upload_image2 != null ){
				 			unlink(FCPATH . 'asset/img/product/' . $old_image2);}
				 		
				 }

					$new_image2 = $this->upload->data('file_name');
					$this->db->set('image2', $new_image2);
			}

		$data = array(
			'id_product' => $id_product,
			'name_product' => $name_product,
			'price_product' => $price_product,
			'id_category' => $id_category,
			'deskripsi' => $deskripsi
		);

		$where = array(
			'id_product' => $id_product
		);

		$this->My_model->updatedata($where, $data, 'product');
		redirect('admin/flowertable/');

	}

	public function detail($id_product)
	{
		$this->load->model('My_model');
		$detail = $this->My_model->detaildata($id_product);
		$data['detail'] = $detail;

		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['title'] = 'Admin Page | Detail Flower';
		$this->load->view('admin/tamplate/header' , $data);
		$this->load->view('admin/detail', $data);
		$this->load->view('admin/tamplate/footer');
	}

		public function order()
	{
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$data['title'] = 'Admin Page | Order';
		$this->load->view('admin/tamplate/header' , $data);
		$this->load->view('admin/order');
		$this->load->view('admin/tamplate/footer');
	}

	public function profile()
	{
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$data['title'] = 'Admin Page | Profile';
		$this->load->view('admin/tamplate/header' , $data);
		$this->load->view('admin/profile');
		$this->load->view('admin/tamplate/footer');
	}

	public function editprofile()
	{
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$this->form_validation->set_rules('name', 'Full Name', 'required|trim');

		if($this->form_validation->run() == false){
			$data['title'] = 'Admin Page | Edit Profile';
			$this->load->view('admin/tamplate/header' , $data);
			$this->load->view('admin/editprofile', $data);
			$this->load->view('admin/tamplate/footer');
		}else{
			$name = $this->input->post('name');
			$email = $this->input->post('email');

			//cek jika ada gambar diupload
			$upload_image = $_FILES['image']['name'];

			if($upload_image){
				$config['allowed_types'] = 'jpeg|jpg|png';
				$config['max_size']     = '2048';
				$config['upload_path'] = './adminasset/img/profile/';

				$this->load->library('upload', $config);

				if ($this->upload->do_upload('image')) {
					$old_image = $data['user']['image'];
					if ($old_image != 'default.jpg'){
						unlink(FCPATH . 'adminasset/img/profile/' . $old_image);
					}


					$new_image = $this->upload->data('file_name');
					$this->db->set('image', $new_image);

				}else{
					$this->session->set_flashdata('message', '< class="alert alert-danger" role="alert"> . $this->upload->display_errors()' );
					redirect('admin/profile/');
				}
			}

			$this->db->set('name', $name);
			$this->db->where('email', $email);
			$this->db->update('user');

			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
  			Your profile has been updated!
			</div>' );
			redirect('admin/profile/');
		}
		
	}

	public function changepassword()
	{
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$this->form_validation->set_rules('current_password', 'Current Password', 'required|trim');
		$this->form_validation->set_rules('new_password1', 'New Password', 'required|trim|min_length[3]|matches[new_password2]');
		$this->form_validation->set_rules('new_password2', 'Confirm Password', 'required|trim|min_length[3]|matches[new_password1]');


		if ($this->form_validation->run() == false){
			$data['title'] = 'Admin Page | Change Password';
			$this->load->view('admin/tamplate/header' , $data);
			$this->load->view('admin/changepassword');
			$this->load->view('admin/tamplate/footer');	
		}else{
			$current_password = $this->input->post('current_password');
			$new_password =$this->input->post('new_password1');
			if (!password_verify($current_password, $data['user']['password'])){
 				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
  				Wrong current password!
				</div>' );
				redirect('admin/changepassword/');
			}else{
				if($current_password == $new_password){
					$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
  					New password cannot be the same as current password!
					</div>' );
					redirect('admin/changepassword/');
				}else{
					//password ok
					$password_hash = password_hash($new_password, PASSWORD_DEFAULT);

					$this->db->set('password', $password_hash);
					$this->db->where('email', $this->session->userdata('email'));
					$this->db->update('user');

					$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
  					Password Changed!
					</div>' );
					redirect('admin/changepassword/');
				}
			}
		}
		
	}

	public function category()
	{
		$data['category'] = $this->My_model->ambildata('category')->result();

		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$data['title'] = 'Admin Page | Category Table';
		$this->load->view('admin/tamplate/header' , $data);
		$this->load->view('admin/category', $data);
		$this->load->view('admin/tamplate/footer');
	}

	public function homeimage()
	{
		$data['home'] = $this->My_model->ambildata('home')->result();

		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$data['title'] = 'Admin Page | Home Image Table';
		$this->load->view('admin/tamplate/header' , $data);
		$this->load->view('admin/homeimage', $data);
		$this->load->view('admin/tamplate/footer');
	}

	public function detailhome($id)
	{
		$this->load->model('My_model');
		$detail = $this->My_model->detailhome($id);
		$data['detail'] = $detail;

		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['title'] = 'Admin Page | Detail Home Image';
		$this->load->view('admin/tamplate/header' , $data);
		$this->load->view('admin/detailhome', $data);
		$this->load->view('admin/tamplate/footer');
	}

	public function edithome($id)
	{
		$where = array ('id' => $id);
		$data['home'] = $this->My_model->editdata($where, 'home')->result();

		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$data['title'] = 'Admin Page | Edit Home Image';
		$this->load->view('admin/tamplate/header' , $data);
		$this->load->view('admin/edithome', $data);
		$this->load->view('admin/tamplate/footer');
	}

	public function updatehome()
	{
		$id = $this->input->post('id');

		$data['home'] = $this->db->get_where('home', ['id' => $id])->row_array();

		$name = $this->input->post('name');
		$price = $this->input->post('price');
		//cek jika ada gambar diupload
			$upload_image = $_FILES['image']['name'];

			if($upload_image){
				$config['allowed_types'] = 'jpeg|jpg|png';
				$config['max_size']     = '2048';
				$config['upload_path'] = './asset/img/home/';

				$this->load->library('upload', $config);

				 if ($this->upload->do_upload('image')) {
				 	$old_image = $data['home']['image'];
				 	if($upload_image != null ){
				 		unlink(FCPATH . 'asset/img/home/' . $old_image);
				 	}
				}

					$new_image = $this->upload->data('file_name');
					$this->db->set('image', $new_image);
			}


		$data = array(
			'id' => $id,
			'name' => $name,
			'price' => $price
		);

		$where = array(
			'id' => $id
		);

		$this->My_model->updatedata($where, $data, 'home');
		redirect('admin/homeimage/');

	}
}