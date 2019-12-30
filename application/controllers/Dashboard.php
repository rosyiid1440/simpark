<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	
	public function __construct(){
        parent::__construct();
        $this->load->model('User');		
        $this->load->model('Area');
        $this->load->model('Parkir');
        $this->load->model('Login_user');
        $this->load->model('M_booking');
        if($this->session->userdata('login') != TRUE){
            redirect(base_url("irr"));
		}
    }

    public function index()
    {
        if($this->session->userdata('level') == 'admin'){
            $area = 
            [
                'area' => $this->Area->getall(),
                'parkir' => $this->M_booking->parkir()
            ];
            $this->load->view('template/header');
            $this->load->view('template/sidebar');
            $this->load->view('admin/dashboard',$area);
            $this->load->view('template/footer');
        }elseif($this->session->userdata('level') == 'petugas'){
            $area = 
            [
                'area' => $this->Area->getall(),
                'parkir' => $this->M_booking->parkir()
            ];
            $this->load->view('template/header');
            $this->load->view('template/sidebar2');
            $this->load->view('petugas/V_dashboard_petugas',$area);
            $this->load->view('template/footer');
        }elseif($this->session->userdata('level') == 'user'){
            $iduser = $this->session->userdata('iduser');
            $kendaraan['kendaraan'] = $this->Login_user->getkendaraan($iduser);
            
            $this->load->view('template/header');
            $this->load->view('template/sidebar1');
            $this->load->view('user/V_dashboard_user',$kendaraan);
            $this->load->view('template/footer');
        }else{
            redirect(base_url("irr"));
        }
    }

}