<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Booking extends CI_Controller {
	public function __construct(){
        parent::__construct();
        $this->load->model('M_booking');
        if($this->session->userdata('level') != 'user'){
            redirect(base_url("irr"));
        }   
    }
	

}