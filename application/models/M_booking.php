<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_booking extends CI_Model{

	function get(){

        $query = $this->db->query("SELECT * FROM booking order by 'id_booking';");

        return $query->result_array();
    }

    function parkir(){
        $this->db->select('a.id_booking as id,b.nama as nama_pemarkir,d.nopol as nopol,d.jenis_kendaraan as jenis_kendaraan,c.nama as nama_area,a.tanggal as tanggal,a.status');
        $this->db->from('booking a');
        $this->db->join('pemarkir b','b.id_pemarkir=a.id_pemarkir','left');
        $this->db->join('area c','c.id_area=a.id_area','left');
        $this->db->join('kendaraan d','d.id_kendaraan=a.id_kendaraan','left');
        $this->db->order_by('a.tanggal','desc');
        $query = $this->db->get();

        return $query->result_array();
    }


    function getbyiduser($id){

        $this->db->select('a.id_booking as id,b.nama as nama_pemarkir,d.nopol as nopol,d.jenis_kendaraan as jenis_kendaraan,c.nama as nama_area,a.tanggal as tanggal,a.status');
        $this->db->from('booking a');
        $this->db->join('pemarkir b','b.id_pemarkir=a.id_pemarkir','left');
        $this->db->join('area c','c.id_area=a.id_area','left');
        $this->db->join('kendaraan d','d.id_kendaraan=a.id_kendaraan','left');
        $this->db->where('b.id_user',$id);      
        $query = $this->db->get();

        return $query->result_array();
    }

    function create($id_pemarkir,$id_kendaraan,$id_area,$tanggal){

        $data = array(
            'id_pemarkir' => $id_pemarkir,
            'id_kendaraan' => $id_kendaraan,
            'id_area' => $id_area,
            'tanggal' => $tanggal,
            'status' => 'Booking'
        );
        
        $this->db->insert('booking', $data);

        return $query;
    }

    function createmasuk($id_pemarkir,$id_kendaraan,$id_area,$tanggal){

        $data = array(
            'id_pemarkir' => $id_pemarkir,
            'id_kendaraan' => $id_kendaraan,
            'id_area' => $id_area,
            'tanggal' => $tanggal,
            'status' => 'Masuk'
        );
        
        $this->db->insert('booking', $data);

        return $query;
    }

    function getbookingarea($id){
        $this->db->select('*');
        $this->db->from('booking');
        $this->db->where('id_booking',$id);
        $query = $this->db->get();

        return $query->row_array();
    }


    function updatemasuk($idbooking,$tanggal){
        $data = array(
            'tanggal' => $tanggal,
            'status' => 'Masuk'
        );

        $this->db->where('id_booking',$idbooking);
        $this->db->update('booking',$data);
    }

    function updatekeluar($idbooking,$tanggal){
        $data = array(
            'tanggal' => $tanggal,
            'status' => 'Keluar'
        );

        $this->db->where('id_booking',$idbooking);
        $this->db->update('booking',$data);
    }
}