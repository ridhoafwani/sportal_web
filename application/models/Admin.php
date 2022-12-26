<?php

class Admin extends CI_Model{
    public function user_norole(){
        return $this->db->get('user');
    }

    public function memberlist(){
        return $this->db->get_where('user', array('role_id'=>3));
    }

    public function pemiliklist(){
        return $this->db->get_where('user', array('role_id'=>2));
    }

    public function adminlist(){
        return $this->db->get_where('user', array('role_id'=>1));
    }

    public function kategori(){
        return $this->db->get('category');
    }

    public function tambahlapangan($data, $table)
    {
    	$this->db->insert($table, $data);
    }

    public function hapus_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function edit_lapangan($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    public function take_lapangan($where, $table)
    {
        return $this->db->get_where($table, $where)->row();
    }

    public function take_category($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    public function take_data($where, $table)
    {
        return $this->db->get_where($table, $where)->row();
    }

    public function user()
    {
        $this->db->select('user .*, role.id AS role_id, role.role');
        $this->db->join('role', 'user.role_id = role.id');
        $this->db->from('user');
        $query= $this->db->get();
        return $query->result();
    }

    public function laporan(){
        return $this->db->get('pesanan');
    }

}