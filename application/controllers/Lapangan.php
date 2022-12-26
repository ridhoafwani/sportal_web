<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Lapangan extends CI_Controller
{

    public function index()
    {
        $data['title'] = "Lapangan - Sportal";
        $this->load->view('Home/template/header', $data);
        $this->load->view('Home/lapangan');
        $this->load->view('Home/template/footer');
    }
    
    public function futsall()
    {
        if(!$this->session->userdata('email')){
            redirect("Auth");
        }
        date_default_timezone_set('Asia/Makassar');
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['lapangan'] = $this->Member->futsall()->result();
        $data['date']=date("Y-m-d");
        $data['title'] = "Lapangan Futsall";
        $this->load->view('Memberarea/template/header', $data);
        $this->load->view('Memberarea/template/sidebar', $data);
        $this->load->view('Memberarea/template/topbar', $data);
        $this->load->view('Memberarea/lapangan/futsall');
        $this->load->view('Memberarea/template/footer');
    }

    public function badminton()
    {
        if(!$this->session->userdata('email')){
            redirect("Auth");
        }
        date_default_timezone_set('Asia/Makassar');
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['lapangan'] = $this->Member->badminton()->result();
        $data['date']=date("Y-m-d");
        $data['title'] = "Lapangan Badminton";
        $this->load->view('Memberarea/template/header', $data);
        $this->load->view('Memberarea/template/sidebar', $data);
        $this->load->view('Memberarea/template/topbar', $data);
        $this->load->view('Memberarea/lapangan/badminton', $data);
        $this->load->view('Memberarea/template/footer');
    }

    public function voli()
    {
        if(!$this->session->userdata('email')){
            redirect("Auth");
        }
        date_default_timezone_set('Asia/Makassar');
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['lapangan'] = $this->Member->voli()->result();
        $data['date']=date("Y-m-d");
        $data['title'] = "Lapangan Voli";
        $this->load->view('Memberarea/template/header', $data);
        $this->load->view('Memberarea/template/sidebar', $data);
        $this->load->view('Memberarea/template/topbar', $data);
        $this->load->view('Memberarea/lapangan/voli');
        $this->load->view('Memberarea/template/footer');
    }

    public function basket()
    {
        if(!$this->session->userdata('email')){
            redirect("Auth");
        }
        date_default_timezone_set('Asia/Makassar');
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['lapangan'] = $this->Member->basket()->result();
        $data['date']=date("Y-m-d");
        $data['title'] = "Lapangan Basket";
        $this->load->view('Memberarea/template/header', $data);
        $this->load->view('Memberarea/template/sidebar', $data);
        $this->load->view('Memberarea/template/topbar', $data);
        $this->load->view('Memberarea/lapangan/basket');
        $this->load->view('Memberarea/template/footer');
    }

    public function info($id)
    {
        if(!$this->session->userdata('email')){
            redirect("Auth");
        }
        date_default_timezone_set('Asia/Makassar');
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $where = array('id' => $id);
        $data['lapangan'] = $data['lapangan'] = $this->Admin->take_lapangan($where,'lapangan');
        $data['date']=date("Y-m-d");
        $data['title'] = "Peta";
        $this->load->view('Memberarea/template/header', $data);
        $this->load->view('Memberarea/template/sidebar', $data);
        $this->load->view('Memberarea/template/topbar', $data);
        $this->load->view('Memberarea/lapangan/info', $data);
        $this->load->view('Memberarea/template/footer');
    }

    public function jadwal($id, $date)
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $where = array('id' => $id);
        $id_jadwal = "$id.$date";
        $where_date = array('id' => $id_jadwal);
        $data['lapangan'] = $this->Admin->take_lapangan($where,'lapangan');
        $data['jadwal'] = $this->Admin->take_data($where_date,'Jadwal');
        $data['date'] = $date;
        $data['id_jadwal'] = $id_jadwal;
        $data['ada_jadwal'] = $this->Member->findjadwal($id_jadwal);
        $data['title'] = "Lihat Jadwal";
        $this->load->view('Memberarea/template/header', $data);
        $this->load->view('Memberarea/template/sidebar', $data);
        $this->load->view('Memberarea/template/topbar', $data);
        $this->load->view('Memberarea/lapangan/jadwal', $data);
        $this->load->view('Memberarea/template/footer');
    }

    public function proses_pesanan(){
        
        foreach($this->cart->contents() as $item){
            date_default_timezone_set('Asia/Makassar');
            $data = array(
                'user_id' => $item['user_id'],
                'lapangan_name' => $item['name'],
                'orderdate' => date('d-m-Y H:i:s'),
                'date' => $item['date'],
                'time' => $item['time'],
                'price' => $item['price']                
               );
            $this->db->insert('pesanan', $data);
            $this->Member->add_jadwal($item['date'], $item['lap_id'], $item['id']);
        }
        $this->cart->destroy();
        redirect('memberarea/pesanan');
    }

    public function jadwal_pick($id){
        $date = $this->input->post('datepick');
        redirect('lapangan/jadwal/'.$id.'/'.$date);
    }

    public function addtocart($id, $date, $time, $jadwalc){
        $lapangan = $this->Member->find($id);
        $user = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row();

        $data = array(
            'id'      => $jadwalc,
            'qty'     => 1,
            'price'   => $lapangan->tarif,
            'name'    => $lapangan->name,
            'time'    => $time,
            'date'    => $date,            
            'user_id' => $user->id,            
            'lap_id'  => $id            
        );
    
        $this->cart->insert($data);
        redirect($_SERVER['HTTP_REFERER']);

    }

    public function pesanan()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = "Pembayaran";
        $this->load->view('Memberarea/template/header', $data);
        $this->load->view('Memberarea/template/sidebar', $data);
        $this->load->view('Memberarea/template/topbar', $data);
        $this->load->view('Memberarea/lapangan/carts', $data);
        $this->load->view('Memberarea/template/footer');
    }

    public function destroy_cart(){
        $this->cart->destroy();
        redirect($_SERVER['HTTP_REFERER']);
    }

}
