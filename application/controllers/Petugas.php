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
        $this->load->view('template/sidebar2');
        $this->load->view('petugas/V_edit_profile',$user);
        $this->load->view('template/footer');
    }

    public function updateprofile(){
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('nohp', 'Nohp', 'required');

        if ($this->form_validation->run() == FALSE){
                redirect('dashboard/petugas/detail');
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
        $parkir['parkir'] = $this->M_booking->parkir();

        $this->load->view('template/header');
        $this->load->view('template/sidebar2');
        $this->load->view('petugas/V_parkir',$parkir);
        $this->load->view('template/footer');
    }

    public function createparkir(){
        $all = [
            'area' => $this->Area->getall(),
            'pemarkir' => $this->Login_user->pemarkir()
        ];
        $this->load->view('template/header');
        $this->load->view('template/sidebar2');
        $this->load->view('petugas/V_parkir_create',$all);
        $this->load->view('template/footer');
        // var_dump($all['pemarkir']);
    }

    public function kendaraan(){
        $id = $this->input->post('id',TRUE);
        $kendaraan = $this->Login_user->getkendaraan($id);
        echo json_encode($kendaraan);
    }

    public function storeparkir(){
        $this->form_validation->set_rules('id_pemarkir', 'Id_pemarkir', 'required');
        $this->form_validation->set_rules('nopol', 'Nopol', 'required');
        $this->form_validation->set_rules('area', 'Area', 'required');
        
        if ($this->form_validation->run() == FALSE){
                redirect('dashboard/pemarkir/booking/tambah');
        }else{
            $iduser = $this->input->post('id_pemarkir');
            $id_kendaraan = $this->input->post('nopol');
            $id_area = $this->input->post('area');
            date_default_timezone_set('Asia/Jakarta'); # add your city to set local time zone
            $tanggal = date('y-m-d H:i:s');

            $id_pemarkir = $this->Login_user->detailpemarkir($iduser);

            if($id_pemarkir){
                $idpemarkir = $id_pemarkir['id_pemarkir'];

                $lokasi = $this->Area->getbyid($id_area);
                $total = $lokasi['jumlahareakosong'] - 1;
                $this->Area->updatejml($id_area,$total);

                $this->M_booking->createmasuk($idpemarkir,$id_kendaraan,$id_area,$tanggal);

                $this->session->set_flashdata('diubah', 'Artikel berhasil di posting');
                redirect('dashboard/petugas/parkir');
            }
        }
    }

    public function masuk($id){
        date_default_timezone_set('Asia/Jakarta'); # add your city to set local time zone
        $tanggal = date('y-m-d H:i:s');
        $this->M_booking->updatemasuk($id,$tanggal);

        redirect('dashboard/petugas/parkir');
    }

    public function keluar($id){
        date_default_timezone_set('Asia/Jakarta'); # add your city to set local time zone
        $tanggal = date('y-m-d H:i:s');

        $area = $this->M_booking->getbookingarea($id);
        $lokasi = $this->Area->getbyid($area['id_area']);
        $total = $lokasi['jumlahareakosong'] + 1;
        $this->Area->updatejml($area['id_area'],$total);

        $this->M_booking->updatekeluar($id,$tanggal);

        redirect('dashboard/petugas/parkir');
    }
}