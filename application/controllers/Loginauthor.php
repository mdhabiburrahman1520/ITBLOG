<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Loginauthor extends CI_Controller {

	public function __construct(){

		parent::__construct();
		if($this->session->userdata('username')){
			redirect('user');
		}


	}
	
	public function index()
	{
		$this->load->model('fetch_fe');
		$data['fetchheader']=$this->fetch_fe->fetch_fe_header();
		$this->load->view('theme/singup', $data);
		
	}
	public function check()
	{
		
		$this->load->model('check_author');
		$verify = $this->check_author->checked();
 
		if ($verify){
			$sdata= array(
				'username'=>$this->input->post('username', true),
				'email'=>"habib@1520.com"
			);
			$this->session->set_userdata($sdata);
			redirect('user');
		}else{
			redirect('loginauthor');	
		}

	}

	

	
}
