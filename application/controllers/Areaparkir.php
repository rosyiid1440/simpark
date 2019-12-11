<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Areaparkir extends CI_Controller {
	
	public function __construct(){
        parent::__construct();	
        $this->load->model('Area');
        if($this->session->userdata('level') != 'admin'){
			redirect(base_url("dashboard"));
		}		
    }

    public function index(){
        $area['area'] = $this->Area->get();
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('admin/V_areaparkir',$area);
        $this->load->view('template/footer');
    }

    public function create(){
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('admin/V_createarea');
        $this->load->view('template/footer');
    }

    public function store(){
        
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('luas', 'Luas', 'required');
        $this->form_validation->set_rules('jenis', 'Jenis', 'required');	
        $this->form_validation->set_rules('jumlahareakosong', 'Jumlahareakosong', 'required');
        $this->form_validation->set_rules('kapasitas', 'Kapasitas', 'required');
        
        if ($this->form_validation->run() == FALSE){
                redirect('dashboard/areaparkir/tambah');
        }else{
            $nama = $this->input->post('nama');
            $luas = $this->input->post('luas');
            $jenis = $this->input->post('jenis');
            $jumlahareakosong = $this->input->post('jumlahareakosong');
            $kapasitas = $this->input->post('kapasitas');

            $this->Area->create($nama,$luas,$jenis,$jumlahareakosong,$kapasitas);
            $this->session->set_flashdata('diubah', 'Artikel berhasil di posting');
            redirect('dashboard/areaparkir');
        }

    }

    public function edit($id){
        $area['b'] = $this->Area->getbyid($id);

        // // header('Content-Type: application/json');
        // // echo json_encode($area);

        // // return $this->output
        // // ->set_content_type('application/json')
        // // ->set_status_header(500)
        // // ->set_output(json_encode(array($area)));
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('admin/V_editareaparkir',$area);
        $this->load->view('template/footer');


    }

    public function update($id){

        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('luas', 'Luas', 'required');
        $this->form_validation->set_rules('jenis', 'Jenis', 'required');	
        $this->form_validation->set_rules('jumlahareakosong', 'Jumlahareakosong', 'required');
        $this->form_validation->set_rules('kapasitas', 'Kapasitas', 'required');
        
        if ($this->form_validation->run() == FALSE){
                redirect('dashboard/areaparkir/edit/'.$id);
        }else{
            $nama = $this->input->post('nama');
            $luas = $this->input->post('luas');
            $jenis = $this->input->post('jenis');
            $jumlahareakosong = $this->input->post('jumlahareakosong');
            $kapasitas = $this->input->post('kapasitas');

            $this->Area->update($nama,$luas,$jenis,$jumlahareakosong,$kapasitas,$id);
            $this->session->set_flashdata('diubah', 'Area parkir berhasil di ubah');
            redirect('dashboard/areaparkir');
        }

    }

    public function hapus($id){
        $this->Area->delete($id);
        $this->session->set_flashdata('diubah', 'Area parkir berhasil di ubah');
        redirect('dashboard/areaparkir');
    }

}