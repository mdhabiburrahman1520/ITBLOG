<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('theme/Admin/admin');
		
	}
	public function eidthpost()
	{
		$this->load->view('theme/Admin/eidthpost');
	}
	public function post()
	{
		$this->load->model('fetch');
		$data['fetchpost']=$this->save->save_post();
		$this->load->view('theme/Admin/post'$data);
	}

	public function header()
	{
		$this->load->view('theme/Admin/header');
	}
	public function aboutpage()
	{
		$this->load->view('theme/Admin/aboutpage');
	}
	public function addheader()
	{
		$this->load->view('theme/Admin/addheader');
	}
	public function popularartical()
	{
		$this->load->view('theme/Admin/popularartical');
	}
	public function addpopulararticul()
	{
		$this->load->view('theme/Admin/addpopulararticul');
	}
	
	public function eidthpopaluralaartic()
	{
		$this->load->view('theme/Admin/eidthpopaluralaartic');
	}
	public function counter()
	{
		$this->load->view('theme/Admin/counter');
	}
	public function addpost()
	{
		$this->load->view('theme/Admin/addpost');
	}

	

	public function savehdr()
	{
		$this->load->model('save');
		$this->save->save_header();
		redirect('http://localhost/ITBLOG/admin');
		
	}
	public function savepost()
	{
		
		$this->load->model('save');
		$this->save->save_post();
		redirect('http://localhost/ITBLOG/post');
		
	}
	public function saveaddpost()
	{
		
		$this->load->model('save');
		$this->save->save_addpost();
		redirect('http://localhost/ITBLOG/post');
		
	}
}
