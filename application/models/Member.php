<?php

class Member extends CI_Model{

    public function futsall(){
        return $this->db->get_where('lapangan', array('id_category'=>1));
    }

    public function badminton(){
        return $this->db->get_where('lapangan', array('id_category'=>2));
    }

    public function voli(){
        return $this->db->get_where('lapangan', array('id_category'=>3));
    }

    public function basket(){
        return $this->db->get_where('lapangan', array('id_category'=>4));
    }

    public function find($id){
        $result = $this->db->where('id',$id)
                            ->limit(1)
                            ->get('lapangan');
        if($result->num_rows()>0){
            return $result->row();
        }else{
            return array();
        }
    }

    public function findjadwal($id){
        $result = $this->db->where('id',$id)
                            ->limit(1)
                            ->get('Jadwal');
        if($result->num_rows()>0){
            return 1;
        }else{
            return 0;
        }
    }
    
    public function add_jadwal($date, $lap_id, $jadwalc){

        $s01            = 0;
        $s12           = 0;
        $s23           = 0;
        $s34           = 0;
        $s45           = 0;
        $s56           = 0;
        $s67           = 0;
        $s78           = 0;
        $s89           = 0;
        $s910          = 0;
        $s1011         = 0;
        $s1112         = 0;
        $s1213         = 0;
        $s1314         = 0;
        $s1415         = 0;
        $s1516         = 0;
        $s1617         = 0;
        $s1718         = 0;
        $s1819         = 0;
        $s1920         = 0;
        $s2021         = 0;
        $s2122         = 0;
        $s2223         = 0;
        $s2324         = 0;

        $$jadwalc = 1;
        $id = "$lap_id.$date";
        $adajadwal = $this->Member->findjadwal($id);
        if($adajadwal == 1){
            $this->db->set($jadwalc, $$jadwalc);
            $this->db->where('id', $id);
            $this->db->update('Jadwal');
        }
        else{
            $data = array(
                'id'            => $id,
                'date'          => $date,
                'id_lapangan'   => $lap_id,
                's01'           => $s01,
                's12'           => $s12,
                's23'           => $s23,
                's34'           => $s34,
                's45'           => $s45,
                's56'           => $s56,
                's67'           => $s67,
                's78'           => $s78,
                's89'           => $s89,
                's910'          => $s910,
                's1011'         => $s1011,
                's1112'         => $s1112,
                's1213'         => $s1213,
                's1314'         => $s1314,
                's1415'         => $s1415,
                's1516'         => $s1516,
                's1617'         => $s1617,
                's1718'         => $s1718,
                's1819'         => $s1819,
                's1920'         => $s1920,
                's2021'         => $s2021,
                's2122'         => $s2122,
                's2223'         => $s2223,
                's2324'         => $s2324
            );

            $this->db->insert('Jadwal', $data);
        }    
        return 0;
    }

    public function pesanan($id){
        return $this->db->get_where('pesanan', array('user_id'=>$id));
    }

}