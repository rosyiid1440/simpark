<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	
	public function __construct(){
        parent::__construct();
        $this->load->model('User');				
	}
	
	public function index()
	{		
		if ($this->session->userdata('login') == TRUE)
		{
            redirect('dashboard');
		}else{
            $this->load->view('template/index/header');
            $this->load->view('login');
            $this->load->view('template/index/footer');
        }	
	}
	
	public function process_login(){
		$this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');	
        
        if ($this->form_validation->run() == FALSE){
                redirect('irr');
        }else{
            $username = $this->input->post('username');
            $password = $this->input->post('password');

            $login = $this->User->login($username,$password);

            if($login){
                foreach($login as $row);

                

                if($row->level=='admin'){

                    $data_session = array(
                        'username' => $row->username,
                        'level' => $row->level,
                        'login' => TRUE
                        );
                    
                    $this->session->set_userdata($data_session);
                    redirect('dashboard');
                    
                }elseif($row->level=='petugas'){
                    $this->load->view('petugas/v_dashboard_petugas');
                }elseif($row->level=='user'){
                    $this->load->view('user/v_dashboard_user');
                }else{
                    redirrect('irr');
                }
            }else{
                redirect('irr');
            }
        }
		
	}
	
	public function logout(){
		$this->session->unset_userdata(array('username' => '', 'level'=>'','login' => FALSE));
		$this->session->sess_destroy();
		redirect('irr', 'refresh');
	}
}
