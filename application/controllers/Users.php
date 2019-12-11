<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {
	
	public function __construct(){
        parent::__construct();	
        $this->load->model('User');
        if($this->session->userdata('level') != 'admin'){
			redirect(base_url("irr"));
		}		
    }

    public function index(){
        // $user['user'] = $this->User->get();
        $user = 
        [
            'admin' => $this->User->getadmin(),
            'petugas' => $this->User->getpetugas(),
            'user' => $this->User->getuser()
        ];

        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('admin/V_users',$user);
        $this->load->view('template/footer');
    }

    public function admin(){
        $user = 
        [
            'admin' => $this->User->getadmin()
        ];

        $this->session->set_userdata('referred_from', current_url());

        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('admin/V_usersadmin',$user);
        $this->load->view('template/footer');
    }

    public function petugas(){
        $user = 
        [
            'petugas' => $this->User->getpetugas()
        ];

        $this->session->set_userdata('referred_from', current_url());

        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('admin/V_userspetugas',$user);
        $this->load->view('template/footer');
    }

    public function user(){
        $user = 
        [
            'user' => $this->User->getuser()
        ];

        $this->session->set_userdata('referred_from', current_url());

        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('admin/V_usersuser',$user);
        $this->load->view('template/footer');
    }

    public function detailadmin($id){

        $detail['detail'] = $this->User->detailadmin($id);

        // return $this->output
        // ->set_content_type('application/json')
        // ->set_status_header(500)
        // ->set_output(json_encode(array($detail)));
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('admin/V_usersdetail',$detail);
        $this->load->view('template/footer');
    }

    public function detailuser($id){

        $detail['detail'] = $this->User->detailuser($id);

        // return $this->output
        // ->set_content_type('application/json')
        // ->set_status_header(500)
        // ->set_output(json_encode(array($detail)));
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('admin/V_usersdetail',$detail);
        $this->load->view('template/footer');
    }

    public function create(){
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('admin/V_userscreate');
        $this->load->view('template/footer');
    }

    public function store(){
        
        $this->form_validation->set_rules('username', 'username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('level', 'Level', 'required');
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('nohp', 'Nohp', 'required');
        
        if ($this->form_validation->run() == FALSE){
                redirect('dashboard/user/tambah');
        }else{
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $level = $this->input->post('level');
            $nama = $this->input->post('nama');
            $alamat = $this->input->post('alamat');
            $nohp = $this->input->post('nohp');

            if($level=='admin'){
                $iduser = $this->User->create($username,$password,$level);
                $this->User->createadmin($nama,$alamat,$nohp,$iduser);
                $this->session->set_flashdata('diubah', 'Artikel berhasil di posting');
                redirect('dashboard/user/admin');
            }elseif($level=='petugas'){
                $iduser = $this->User->create($username,$password,$level);
                $this->User->createpetugas($nama,$alamat,$nohp,$iduser);
                $this->session->set_flashdata('diubah', 'Artikel berhasil di posting');
                redirect('dashboard/user/petugas');
            }else{
                $iduser = $this->User->create($username,$password,$level);
                $this->User->createpemarkir($nama,$alamat,$nohp,$iduser);
                $this->session->set_flashdata('diubah', 'Artikel berhasil di posting');
                redirect('dashboard/user/user');
            }
        }

    }

    public function edit($id){
        $area['b'] = $this->User->detailadmin($id);

        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('admin/V_usersedit',$area);
        $this->load->view('template/footer');

    }

    public function editpetugas($id){
        $area['b'] = $this->User->detailpetugas($id);

        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('admin/V_usersedit',$area);
        $this->load->view('template/footer');

    }

    public function editpemarkir($id){
        $area['b'] = $this->User->detailpemarkir($id);

        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('admin/V_usersedit',$area);
        $this->load->view('template/footer');

    }

    public function update($id){

        $this->form_validation->set_rules('username', 'username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('level', 'Level', 'required');
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('nohp', 'Nohp', 'required');
        
        if ($this->form_validation->run() == FALSE){
                redirect('dashboard/user/edit/'.$id);
        }else{
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $level = $this->input->post('level');
            $nama = $this->input->post('nama');
            $alamat = $this->input->post('alamat');
            $nohp = $this->input->post('nohp');

            if($level=='admin'){
                $this->User->update($username,$password,$id);
                $this->User->updateadmin($nama,$alamat,$nohp,$id);
                $this->session->set_flashdata('diubah', 'Area parkir berhasil di ubah');
                redirect('dashboard/user/admin');
            }elseif($level=='petugas'){
                $this->User->update($username,$password,$id);
                $this->User->updatepetugas($nama,$alamat,$nohp,$id);
                $this->session->set_flashdata('diubah', 'Area parkir berhasil di ubah');
                redirect('dashboard/user/petugas');
            }else{
                $this->User->update($username,$password,$id);
                $this->User->updatepemarkir($nama,$alamat,$nohp,$id);
                $this->session->set_flashdata('diubah', 'Area parkir berhasil di ubah');
                redirect('dashboard/user/user');
            }
        }

    }

    public function hapus($id){

        $this->User->delete($id);
        $this->session->set_flashdata('diubah', 'Area parkir berhasil di ubah');
        
        $referred_from = $this->session->userdata('referred_from');
        redirect($referred_from, 'refresh');
    }

}