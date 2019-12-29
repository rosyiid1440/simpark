<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct(){
        parent::__construct();
        $this->load->model('Area');				
	}

	public function index()
	{
		$this->load->view('index/V_index');
	}

	public function denah_lokasi()
	{
		$this->load->view('template/index/header');
		$this->load->view('index/v_denah_lokasi');
		$this->load->view('template/index/footer');
	}

	public function area_mobil()
	{
		$area['area'] = $this->Area->getareamobil();
		$this->load->view('template/index/header');
		$this->load->view('index/v_area_mobil',$area);
		$this->load->view('template/index/footer');
		// echo json_encode( $area );
	}

	public function area_motor()
	{
		$area['area'] = $this->Area->getareamotor();
		$this->load->view('template/index/header');
		$this->load->view('index/v_area_motor',$area);
		$this->load->view('template/index/footer');
	}
}
