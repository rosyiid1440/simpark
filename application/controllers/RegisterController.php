<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RegisterController extends CI_Controller {

	public function __construct(){
        parent::__construct();	
        $this->load->model('Register');
    }

	public function index()
	{
		$this->load->view('template/index/header');
		$this->load->view('V_register');
		$this->load->view('template/index/footer');
	}

	public function register_user()
	{
		$this->load->view('template/index/header');
		$this->load->view('V_register_user');
		$this->load->view('template/index/footer');
	}

	public function register_kendaraan()
	{
		$this->load->view('template/index/header');
		$this->load->view('V_register_kendaraan');
		$this->load->view('template/index/footer');
	}

	public function store(){
        
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('nohp', 'Nohp', 'required');
        
        if ($this->form_validation->run() == FALSE){
                redirect('registeruser');
        }else{
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $level = $this->input->post('level');
            $nama = $this->input->post('nama');
            $alamat = $this->input->post('alamat');
            $nohp = $this->input->post('nohp');

            $iduser = $this->Register->create($username,$password,$level);
            $this->Register->createuser($nama,$alamat,$nohp,$iduser);
            // redirect('dashboard');
            echo "berhasil";
        }

    }

    public function storekendaraan(){
        
        $this->form_validation->set_rules('nopol', 'Nopol', 'required');
        $this->form_validation->set_rules('jenis_kendaraan', 'Jenis_kendaraan', 'required');
        $this->form_validation->set_rules('type', 'Type', 'required');
        if ($this->form_validation->run() == FALSE){
                redirect('registeruser');
        }else{
            $nopol = $this->input->post('nopol');
            $jenis_kendaraan = $this->input->post('jenis_kendaraan');
            $type = $this->input->post('type');

            $this->Register->createkendaraan($nopol,$jenis_kendaraan,$type);
            // redirect('dashboard');
            echo "Insert berhasil";
        }

    }
}