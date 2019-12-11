<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	
	public function __construct(){
        parent::__construct();
        $this->load->model('User');		
        $this->load->model('Area');
        $this->load->model('Parkir');
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
                'parkir' => $this->Parkir->get()
            ];
            $this->load->view('template/header');
            $this->load->view('template/sidebar');
            $this->load->view('admin/dashboard',$area);
            $this->load->view('template/footer');
        }elseif($this->session->userdata('level') == 'petugas'){
            echo 'petugas';
        }elseif($this->session->userdata('level') == 'user'){
            echo 'user';
        }else{
            redirect(base_url("irr"));
        }
    }

}