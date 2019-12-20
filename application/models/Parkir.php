<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Parkir extends CI_Model{

	function get(){

        $this->db->select('b.nama as nama_pemarkir, c.nama as nama_petugas,d.nama as nama_area, e.nopol as nopol,a.tanggal as tanggal,a.action as action');
        $this->db->from('parkir a');
        $this->db->join('pemarkir b','b.id_pemarkir=a.id_pemarkir','left');
        $this->db->join('petugas c','c.id_petugas=a.id_petugas','left');
        $this->db->join('area d','d.id_area=a.id_area','left');
        $this->db->join('kendaraan e','e.id_kendaraan=a.id_kendaraan','left');
        $this->db->order_by('a.tanggal','desc');
        $query = $this->db->get();

        return $query->result_array();
    }

    function getwhere(){
        $this->db->select('a.id_parkir as id, b.nama as nama_pemarkir, c.nama as nama_petugas,d.nama as nama_area, e.nopol as nopol,e.jenis_kendaraan as jenis_kendaraan,a.tanggal as tanggal,a.action as action');
        $this->db->from('parkir a');
        $this->db->join('pemarkir b','b.id_pemarkir=a.id_pemarkir','left');
        $this->db->join('petugas c','c.id_petugas=a.id_petugas','left');
        $this->db->join('area d','d.id_area=a.id_area','left');
        $this->db->join('kendaraan e','e.id_kendaraan=a.id_kendaraan','left');
        $this->db->where('a.action','Masuk');
        $this->db->order_by('a.tanggal','desc');
        $query = $this->db->get();

        return $query->result_array();
    }
}