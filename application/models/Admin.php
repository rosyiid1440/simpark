<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Model{

    function create($nama,$alamat,$nohp,$id_user){

        $data = array(
            'nama' => $nama,
            'alamat' => $alamat,
            'nohp' => $nohp,
            'id_user' => $id_user
        );
        
        $this->db->insert('admin', $data);

        return $query;
    }

    function getbyid($id){

        $query = $this->db->get_where('area', ['id_area'=>$id])->row_array();

        return $query;
    }

    function update($nama,$luas,$jenis,$jumlahareakosong,$kapasitas,$id){
        $data = array(
            'nama' => $nama,
            'luas' => $luas,
            'jenis' => $jenis,
            'jumlahareakosong' => $jumlahareakosong,
            'kapasitas' => $kapasitas
        );

        $this->db->where('id_area',$id);
        $this->db->update('area',$data);
    }

    function delete($id){
        $this->db->delete('area', array('id_area' => $id));
    }

}