<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pemarkir extends CI_Controller {
	
	public function __construct(){
        parent::__construct();
        $this->load->model('Login_user');
        $this->load->model('M_booking');
        $this->load->model('Area');
        if($this->session->userdata('level') != 'user'){
            redirect(base_url("irr"));
        }   
    }

    public function index(){
        $user['user'] = $this->Login_user->detailpemarkir($this->session->userdata('iduser'));

        $this->load->view('template/header');
        $this->load->view('template/sidebar1');
        $this->load->view('user/V_edit_profile',$user);
        $this->load->view('template/footer');
    }

    public function createkendaraan(){
        $this->load->view('template/header');
        $this->load->view('template/sidebar1');
        $this->load->view('user/V_kendaraancreate');
        $this->load->view('template/footer');
    }

    public function storekendaraan(){

        $this->form_validation->set_rules('nopol', 'Nopol', 'required');
        $this->form_validation->set_rules('jenis', 'Jenis', 'required');
        $this->form_validation->set_rules('type', 'Type', 'required');   
        
        if ($this->form_validation->run() == FALSE){
                redirect('dashboard/pemarkir/kendaraan/tambah');
        }else{
            $iduser = $this->session->userdata('iduser');
            $nopol = $this->input->post('nopol');
            $jenis = $this->input->post('jenis');
            $type = $this->input->post('type');

            $this->Login_user->createkendaraan($nopol,$jenis,$type,$iduser);
            $this->session->set_flashdata('diubah', 'Artikel berhasil di posting');
            redirect('dashboard');
        }
    }

    public function delete($id){
        $this->Login_user->deletekendaraan($id);
        redirect('dashboard');
    }

    public function booking(){
        $iduser = $this->session->userdata('iduser');
        $booking['booking'] = $this->M_booking->getbyiduser($iduser);

        // var_dump($booking);
        $this->load->view('template/header');
        $this->load->view('template/sidebar1');
        $this->load->view('user/V_user_booking',$booking);
        $this->load->view('template/footer');
    }

    public function createbooking(){
        $all = [
            'area' => $this->Area->getall(),
            'kendaraan' => $this->Login_user->getkendaraan($this->session->userdata('iduser'))
        ];

        $this->load->view('template/header');
        $this->load->view('template/sidebar1');
        $this->load->view('user/V_user_booking_create',$all);
        $this->load->view('template/footer');
    }

    public function storebooking(){
        $this->form_validation->set_rules('kendaraan', 'Kendaraan', 'required');
        $this->form_validation->set_rules('area', 'Area', 'required');
        
        if ($this->form_validation->run() == FALSE){
                redirect('dashboard/pemarkir/booking/tambah');
        }else{
            $iduser = $this->session->userdata('iduser');
            $id_kendaraan = $this->input->post('kendaraan');
            $id_area = $this->input->post('area');
            date_default_timezone_set('Asia/Jakarta'); # add your city to set local time zone
            $tanggal = date('y-m-d H:i:s');

            $id_pemarkir = $this->Login_user->detailpemarkir($iduser);

            if($id_pemarkir){
                $idpemarkir = $id_pemarkir['id_pemarkir'];

                $lokasi = $this->Area->getbyid($id_area);
                $total = $lokasi['jumlahareakosong'] - 1;
                $this->Area->updatejml($id_area,$total);

                $this->M_booking->create($idpemarkir,$id_kendaraan,$id_area,$tanggal);

                $this->session->set_flashdata('diubah', 'Artikel berhasil di posting');
                redirect('dashboard/pemarkir/booking');
            }
        }
    }

    public function updateprofile(){
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('nohp', 'Nohp', 'required');

        if ($this->form_validation->run() == FALSE){
                redirect('dashboard/pemarkir/detail');
        }else{
            $iduser = $this->session->userdata('iduser');
            $nama = $this->input->post('nama');
            $alamat = $this->input->post('alamat');
            $nohp = $this->input->post('nohp');

            $this->Login_user->updatepemarkir($nama,$alamat,$nohp,$iduser);
            $this->session->set_flashdata('diubah', 'Artikel berhasil di posting');

            redirect('dashboard');
        }
    }

}