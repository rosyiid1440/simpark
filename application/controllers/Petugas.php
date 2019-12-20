<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Petugas extends CI_Controller {
	
	public function __construct(){
        parent::__construct();
        $this->load->model('Login_user');
        $this->load->model('M_booking');
        $this->load->model('Area');
        $this->load->model('Parkir');
        $this->load->model('User');
        if($this->session->userdata('level') != 'petugas'){
            redirect(base_url("irr"));
        }  
    }

    public function index(){
        $user['user'] = $this->User->detailpetugas($this->session->userdata('iduser'));

        $this->load->view('template/header');
        $this->load->view('template/sidebar1');
        $this->load->view('petugas/V_edit_profile',$user);
        $this->load->view('template/footer');
    }

    public function updateprofile(){
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('nohp', 'Nohp', 'required');

        if ($this->form_validation->run() == FALSE){
                redirect('dashboard/pemarkir/booking/tambah');
        }else{
            $iduser = $this->session->userdata('iduser');
            $nama = $this->input->post('nama');
            $alamat = $this->input->post('alamat');
            $nohp = $this->input->post('nohp');

            $this->User->updatepetugas($nama,$alamat,$nohp,$iduser);
            $this->session->set_flashdata('diubah', 'Artikel berhasil di posting');

            redirect('dashboard');
        }
    }

    public function indexparkir(){
        $parkir['parkir'] = $this->Parkir->getwhere();

        $this->load->view('template/header');
        $this->load->view('template/sidebar2');
        $this->load->view('petugas/V_parkir',$parkir);
        $this->load->view('template/footer');
    }

    public function createparkir(){
        $this->load->view('template/header');
        $this->load->view('template/sidebar2');
        $this->load->view('petugas/V_parkir_create');
        $this->load->view('template/footer');
    }
}