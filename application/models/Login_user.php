<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_user extends CI_Model{
	function detailpemarkir($id){

        $this->db->select('*');
        $this->db->from('pemarkir a'); 
        $this->db->join('user b', 'b.id_user=a.id_user', 'left');
        $this->db->where('a.id_user',$id);
        $this->db->order_by('a.nama','asc');         
        $query = $this->db->get(); 

        return $query->row_array();
    }

    function updatepemarkir($nama,$alamat,$nohp,$id){
        $data = array(
            'nama' => $nama,
            'alamat' => $alamat,
            'nohp' => $nohp,
            'id_user' => $id
        );

        $this->db->where('id_user',$id);
        $this->db->update('pemarkir',$data);
    }

    function getkendaraan($id){

        $this->db->select('*');
        $this->db->from('kendaraan');
        $this->db->where('id_user',$id);      
        $query = $this->db->get(); 

        return $query->result_array();
    }

    function createkendaraan($nopol,$jenis_kendaraan,$type,$id_user){

        $data = array(
            'nopol' => $nopol,
            'jenis_kendaraan' => $jenis_kendaraan,
            'type' => $type,
            'id_user' => $id_user
        );
        
        $this->db->insert('kendaraan', $data);

        return $query;
    }

    function deletekendaraan($id){
        $this->db->delete('kendaraan', array('id_kendaraan' => $id));
    }


}