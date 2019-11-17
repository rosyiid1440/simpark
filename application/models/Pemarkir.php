<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Area extends CI_Model{

    function get(){

        $query = $this->db->query("SELECT * FROM area order by 'id_area';");

        return $query->result_array();
    }

    function create($nama,$luas,$jenis,$jumlahareakosong,$kapasitas){

        $data = array(
            'nama' => $nama,
            'luas' => $luas,
            'jenis' => $jenis,
            'jumlahareakosong' => $jumlahareakosong,
            'kapasitas' => $kapasitas
        );
        
        $this->db->insert('area', $data);

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