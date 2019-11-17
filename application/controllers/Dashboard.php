<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	
	public function __construct(){
        parent::__construct();
        $this->load->model('User');		
        if($this->session->userdata('login') != TRUE){
			redirect(base_url("irr"));
		}		
    }

    public function index(){
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('admin/dashboard');
        $this->load->view('template/footer');
    }

}