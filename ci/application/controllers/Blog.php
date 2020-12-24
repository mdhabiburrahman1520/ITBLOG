<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

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
		$this->load->model('fetch_fe');
		$data['fetchhdr']=$this->fetch_fe->fetch_fe_hdr();
		$data['fetchabout']=$this->fetch_fe->fetch_fe_about();
		$data['recipe_foodfussion']=$this->fetch_fe->fetch_fe_recipe_fussion();
		$data['recipe_recentpost']=$this->fetch_fe->fetch_fe_recipe_recent();
		$data['recipe_popular']=$this->fetch_fe->fetch_fe_recipe_pstory();
		$data['our_team']=$this->fetch_fe->fetch_fe_team();
		$data['fetchinfo']=$this->fetch_fe->fetch_fe_info();
		$this->load->view('theme/index', $data);
	}


	public function aboutus()
	{
		$this->load->model('fetch_fe');
		$data['fetchabout']=$this->fetch_fe->fetch_fe_about();
		$data['fetchhdr']=$this->fetch_fe->fetch_fe_hdr();
		$data['our_team']=$this->fetch_fe->fetch_fe_team();
		$this->load->view('theme/aboutus', $data);
		
	
	}
	


	public function contactpage()
	{
		$this->load->model('fetch_fe');
		$data['fetchinfo']=$this->fetch_fe->fetch_fe_info();
		$data['fetchhdr']=$this->fetch_fe->fetch_fe_hdr();
		$this->load->view('theme/contactpage', $data);
	}


	public function knowmore()
	{
		$this->load->model('fetch_fe');
		$data['fetchauthor']=$this->fetch_fe->fetch_fe_author();
		$this->load->view('theme/knowmore', $data);
	}

	
	public function savemsg()
	{
		$this->load->model('save');
		$this->save->save_msg();
		redirect('http://localhost/ci/index');
	
	}

	



	public function recipe()
	{

		$this->load->model('fetch_fe');
		$data['recipe']=$this->fetch_fe->fetch_fe_recipe();
		$data['fetchhdr']=$this->fetch_fe->fetch_fe_hdr();
		$data['fetchinfo']=$this->fetch_fe->fetch_fe_info();
		$this->load->view('theme/recipe', $data);
	}
	public function recipe_singleview($id)
	{
		$this->load->model('fetch_fe');
		$data['singleviewrecipe']=$this->fetch_fe->singlerecipe($id);
		$data['fetchhdr']=$this->fetch_fe->fetch_fe_hdr();
		$data['our_team']=$this->fetch_fe->fetch_fe_team();
		$data['fetchinfo']=$this->fetch_fe->fetch_fe_info();
		$this->load->view('theme/readrecipe_singleview', $data);	
	}
	
	public function like_recepie($id, $like)
	{
		$this->load->model('save');
		$this->save->likerecipe($id,$like);
		redirect('http://localhost/ci/blog/recipe_singleview/'.$id);	
	}

	public function signup()
	{
		$this->load->model('fetch_fe');
		$data['fetchhdr']=$this->fetch_fe->fetch_fe_hdr();
		$this->load->view('theme/signup', $data);
	}
	
}
