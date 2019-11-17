<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Model{

    function login($username,$password){

        $this->db->select('username,password,level');
        $this->db->from('user');
        $this->db->where('username',$username);
        $this->db->where('password',$password);
        $this->db->limit(1);

        $login = $this->db->get();

        if($login->num_rows()==1){
            return $login->result();
        }else{
            return false;
        }
    }

    public function get(){
        $query = $this->db->query("SELECT * FROM user order by 'id_user';");

        return $query->result_array();
    }

    function getadmin(){
        $this->db->select('*');
        $this->db->from('admin a'); 
        $this->db->join('user b', 'b.id_user=a.id_user', 'left');
        $this->db->where('b.level','admin');
        $this->db->order_by('a.nama','asc');         
        $query = $this->db->get(); 

        return $query->result_array();
    }

    function createadmin($nama,$alamat,$nohp,$id_user){

        $data = array(
            'nama' => $nama,
            'alamat' => $alamat,
            'nohp' => $nohp,
            'id_user' => $id_user
        );
        
        $this->db->insert('admin', $data);

        return $query;
    }

    function getpetugas(){

        $this->db->select('*');
        $this->db->from('petugas a'); 
        $this->db->join('user b', 'b.id_user=a.id_user', 'left');
        $this->db->where('b.level','petugas');
        $this->db->order_by('a.nama','asc');         
        $query = $this->db->get(); 

        return $query->result_array();
    }

    function createpetugas($nama,$alamat,$nohp,$id_user){

        $data = array(
            'nama' => $nama,
            'alamat' => $alamat,
            'nohp' => $nohp,
            'id_user' => $id_user
        );
        
        $this->db->insert('petugas', $data);

        return $query;
    }

    function getuser(){

        $this->db->select('*');
        $this->db->from('pemarkir a'); 
        $this->db->join('user b', 'b.id_user=a.id_user', 'left');
        $this->db->where('b.level','user');
        $this->db->order_by('a.nama','asc');         
        $query = $this->db->get(); 

        return $query->result_array();
    }

    function createpemarkir($nama,$alamat,$nohp,$id_user){

        $data = array(
            'nama' => $nama,
            'alamat' => $alamat,
            'nohp' => $nohp,
            'id_user' => $id_user
        );
        
        $this->db->insert('pemarkir', $data);

        return $query;
    }

    function detailadmin($id){
        // $query = $this->db->select('admin.id_admin, admin.nama, admin.alamat, admin.nohp')
        //  ->from('admin')
        //  ->join('user', 'admin.id_user = user.id_user')->where('admin.id_user',$id)->get()->row_array();
        //  return $query;

        $this->db->select('*');
        $this->db->from('admin a'); 
        $this->db->join('user b', 'b.id_user=a.id_user', 'left');
        $this->db->where('a.id_user',$id);
        $this->db->order_by('a.nama','asc');         
        $query = $this->db->get(); 

        return $query->row_array();
    }

    function detailpetugas($id){

        $this->db->select('*');
        $this->db->from('petugas a'); 
        $this->db->join('user b', 'b.id_user=a.id_user', 'left');
        $this->db->where('a.id_user',$id);
        $this->db->order_by('a.nama','asc');         
        $query = $this->db->get(); 

        return $query->row_array();
    }

    function detailpemarkir($id){

        $this->db->select('*');
        $this->db->from('pemarkir a'); 
        $this->db->join('user b', 'b.id_user=a.id_user', 'left');
        $this->db->where('a.id_user',$id);
        $this->db->order_by('a.nama','asc');         
        $query = $this->db->get(); 

        return $query->row_array();
    }

    function create($username,$password,$level){

        $data = array(
            'username' => $username,
            'password' => $password,
            'level' => $level
        );
        
        $this->db->insert('user', $data);

        return $this->db->insert_id();
    }

    function getbyid($id){

        $query = $this->db->get_where('user', ['id_user'=>$id])->row_array();

        return $query;
    }

    function update($username,$password,$id){
        $data = array(
            'username' => $username,
            'password' => $password
        );

        $this->db->where('id_user',$id);
        $this->db->update('user',$data);
    }

    function updateadmin($nama,$alamat,$nohp,$id){
        $data = array(
            'nama' => $nama,
            'alamat' => $alamat,
            'nohp' => $nohp,
            'id_user' => $id
        );

        $this->db->where('id_user',$id);
        $this->db->update('admin',$data);
    }

    function updatepetugas($nama,$alamat,$nohp,$id){
        $data = array(
            'nama' => $nama,
            'alamat' => $alamat,
            'nohp' => $nohp,
            'id_user' => $id
        );

        $this->db->where('id_user',$id);
        $this->db->update('petugas',$data);
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

    function delete($id){
        $this->db->delete('user', array('id_user' => $id));
        $this->db->delete('admin', array('id_user' => $id));
        $this->db->delete('petugas', array('id_user' => $id));
        $this->db->delete('pemarkir', array('id_user' => $id));
    }

}