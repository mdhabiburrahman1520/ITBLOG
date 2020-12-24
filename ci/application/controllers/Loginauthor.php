<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct(){

		parent::__construct();
		if($this->session->userdata('user')){
			redirect('admin');
		}


	}
	public function index()
	{
		
		$this->load->view('theme/admin/login');
		
	}
	public function check()
	{
		
		$this->load->model('check_login');
		$verify = $this->check_login->checked();

		if ($verify){
			$this->session->set_userdata('user', '1');
			redirect('admin');
		}else{
			redirect('login');	
		}

	}

	

	
}
