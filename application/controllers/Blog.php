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
		$data['fetchhdr']=$this->fetch_fe->fetch_fe_header();
		$data['allblog_recenrpost']=$this->fetch_fe->fetch_fe_allblog_recent();
		$data['popularpost']=$this->fetch_fe->fetch_fe_popular_pst();
		$this->load->view('theme/index',$data);
	}
	public function about()
	{
		$this->load->view('theme/about');
	}
	public function singlepost()
	{
		$this->load->view('theme/singlepost');
	}
	public function allblog()
	{
		$this->load->model('fetch_fe');
		$data['allblog']=$this->fetch_fe->fetch_fe_allblog();
		$this->load->view('theme/allblog', $data);
	}
	public function viewsinglepost($id)
	{  
		$this->load->model('fetch_fe');
		$data['viewsinglepost']=$this->fetch_fe->view_singlepost($id);
	
		$this->load->view('theme/singlepost',$data);
	}

	public function like_post($id,$like)
	{  
		$this->load->model('save');
		$this->save->likepost($id,$like);
	
		redirect('http://localhost/ITBLOG/blog/viewsinglepost/'.$id);
	}
	public function dislike_post($id,$like)
	{  
		$this->load->model('save');
		$this->save->dislikepost($id,$like);
	
		redirect('http://localhost/ITBLOG/blog/viewsinglepost/'.$id);
	}
	public function contact()
	{
		$this->load->model('fetch_fe');
		$data['fetchcontmesg']=$this->fetch_fe->fetch_contmesg();
		$this->load->view('theme/contact',$data);
	}
		
	public function savemesg()
	{
		$this->load->model('save');
		$this->save->save_contmesg();
		redirect('http://localhost/ITBLOG/contact');
	
	}
	/**singin */
	public function saveauthor()
	{
		$this->load->model('save');
		$this->save->save_author_fe();
		redirect('http://localhost/ITBLOG/loginauthor');
	
	}

	public function singup()
	{
		$this->load->model('fetch_fe');
		$data['fetchheader']=$this->fetch_fe->fetch_fe_header();
		$this->load->view('theme/singup',$data);
		
	}


	
}
