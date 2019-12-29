<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Model{

	function create($username,$password,$level){

        $data = array(
            'username' => $username,
            'password' => $password,
            'level' => 'user'
        );
        
        $this->db->insert('user', $data);

        return $this->db->insert_id();
    }

    function createuser($nama,$alamat,$nohp,$id_user){

        $data = array(
            'nama' => $nama,
            'alamat' => $alamat,
            'nohp' => $nohp,
            'id_user' => $id_user
        );
        
        $this->db->insert('pemarkir', $data);

    }

    function createkendaraan($nopol,$jenis_kendaraan,$type){

        $data = array(
            'nopol' => $nopol,
            'jenis_kendaraan' => $jenis_kendaraan,
            'type' => $type
        );
        
        $this->db->insert('kendaraan', $data);
    }
}