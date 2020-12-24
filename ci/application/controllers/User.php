<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

//	public function __construct(){

	////	parent::__construct();
	//	if(!$this->session->userdata('user')){
		//	redirect('login');
	//	}

		
	//}
	public function index($offset=0)
	{
		$this->load->library('pagination');
		$config['full_tag_open'] = '<ul class="pagination justify-content-end">';
		$config['full_tag_close'] = '</ul>';
		$config['attributes'] = ['class' => 'page-link'];
		$config['first_link'] ='First';
		$config['last_link'] = 'last';
		$config['first_tag_open'] = '<li class="page-item">';
		$config['first_tag_close'] = '</li>';
		$config['prev_link'] = 'Previous';
		$config['prev_tag_open'] = '<li class="page-item">';
		$config['prev_tag_close'] = '</li>';
		$config['next_link'] = 'Next';
		$config['next_tag_open'] = '<li class="page-item">';
		$config['next_tag_close'] = '</li>';
		$config['last_tag_open'] = '<li class="page-item">';
		$config['last_tag_close'] = '</li>';
		$config['cur_tag_open'] = '<li class="page-item active"><a href="#" class="page-link">';
		$config['cur_tag_close'] = '<span class="sr-only">(current)</span></a></li>';
		$config['num_tag_open'] = '<li class="page-item">';
		$config['num_tag_close'] = '</li>';
		$config['base_url'] = site_url('user/addpost/');
		$this->load->model('fetch_author');
		$config['total_rows'] = $this->fetch_author->count_addpost();
		$config['per_page'] = 5;

		$this->pagination->initialize($config);

		$data['fetchpost']=$this->fetch_author->fetch_post($config['per_page'],$offset);
		$this->load->view('theme/author/addpost', $data);
	}

	public function post()
	{
		$this->load->view('theme/author/post');
		redirect('http://localhost/ci/user/addpost');	
	}

	public function editadd($id)
	{
		$this->load->model('fetch');
	    $data['editaddpost']=$this->fetch->editaddpost($id);
		$this->load->view('theme/author/edit_addpost', $data);	
	}

	public function updateaddpost($id)
	{
		$this->load->model('save');
	    $this->save->updateadd($id);
		redirect('http://localhost/ci/user/addpost');	
	}

	public function deleteaddpost($id)
	{
		$this->load->model('save');
	    $this->save->deleteadd($id);
		redirect('http://localhost/ci/user/addpost');	
	}
	public function viewadd($id)
	{
		$this->load->model('fetch');
	    $data['viewaddpost']=$this->fetch->viewaddpost($id);
		$this->load->view('theme/author/view_addpost', $data);	
	}





	





	
	public function author($offset=0)
	{
		$this->load->library('pagination');
		$config['full_tag_open'] = '<ul class="pagination justify-content-end">';
		$config['full_tag_close'] = '</ul>';
		$config['attributes'] = ['class' => 'page-link'];
		$config['first_link'] ='First';
		$config['last_link'] = 'last';
		$config['first_tag_open'] = '<li class="page-item">';
		$config['first_tag_close'] = '</li>';
		$config['prev_link'] = 'Previous';
		$config['prev_tag_open'] = '<li class="page-item">';
		$config['prev_tag_close'] = '</li>';
		$config['next_link'] = 'Next';
		$config['next_tag_open'] = '<li class="page-item">';
		$config['next_tag_close'] = '</li>';
		$config['last_tag_open'] = '<li class="page-item">';
		$config['last_tag_close'] = '</li>';
		$config['cur_tag_open'] = '<li class="page-item active"><a href="#" class="page-link">';
		$config['cur_tag_close'] = '<span class="sr-only">(current)</span></a></li>';
		$config['num_tag_open'] = '<li class="page-item">';
		$config['num_tag_close'] = '</li>';
		$config['base_url'] = site_url('user/author/');
		$this->load->model('fetch_author');
		$config['total_rows'] = $this->fetch_author->count_author();
		$config['per_page'] = 5;

		$this->pagination->initialize($config);

		$data['fetchauthor']=$this->fetch_author->fetch_user($config['per_page'],$offset);
		$this->load->view('theme/author/author', $data);
	}

	public function addauthor()
	{
		
		$this->load->view('theme/author/addauthor');
	}

	public function editauthor($id)
	{
		$this->load->model('fetch');
	    $data['editauthor']=$this->fetch->editauthor($id);
		$this->load->view('theme/author/edit_author', $data);	
	}

	public function updateauthor($id)
	{
		$this->load->model('save');
	    $this->save->updateauthor($id);
		redirect('http://localhost/ci/user/author');	
	}

	public function deleteauthor($id)
	{
		$this->load->model('save');
	    $this->save->deleteauthor($id);
		redirect('http://localhost/ci/user/author');	
	}
	public function viewauthor($id)
	{
		$this->load->model('fetch');
	    $data['viewauthor']=$this->fetch->viewauthor($id);
		$this->load->view('theme/author/view_author', $data);	
	}






	
	
	public function saveadd()
	{
		$this->load->model('save');
		$this->save->save_add();
		redirect('http://localhost/ci/user/addpost');
	
	}

	
	public function saveauthor()
	{
		$this->load->model('save');
		$this->save->save_author();
		redirect('http://localhost/ci/user/author');
	
	}

	

	public function logout()
		{
			
			$this->session->unset_userdata('user', '1');
			redirect('login');
		
	    }


	
}
