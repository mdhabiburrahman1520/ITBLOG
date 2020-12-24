<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct(){

		parent::__construct();
		if(!$this->session->userdata('user')){
			redirect('login');
		}

		
	}
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
		$config['base_url'] = site_url('admin/index/');
		$this->load->model('fetch');
		$config['total_rows'] = $this->fetch->count_header();
		$config['per_page'] = 5;

		$this->pagination->initialize($config);
	
		$data['fetchhdr']=$this->fetch->fetch_hdr($config['per_page'],$offset);	
		$this->load->view('theme/admin/home', $data);
		
	}

	public function addheader()
	{
	
		$this->load->view('theme/admin/addheader');	
	}

	public function edithdr($id)
	{
		$this->load->model('fetch');
	    $data['editheader']=$this->fetch->editheader($id);
		$this->load->view('theme/admin/edit_header', $data);	
	}

	public function updateheader($id)
	{
		$this->load->model('save');
	    $this->save->updatehdr($id);
		redirect('http://localhost/ci/admin');	
	}

	public function deleteheader($id)
	{
		$this->load->model('save');
	    $this->save->deletehdr($id);
		redirect('http://localhost/ci/admin');	
	}
	public function viewhdr($id)
	{
		$this->load->model('fetch');
	    $data['viewheader']=$this->fetch->viewheader($id);
		$this->load->view('theme/admin/view_header', $data);	
	}
	

	



	public function foodfusion($offset=0)
	{   $this->load->library('pagination');
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
        $config['base_url'] = site_url('admin/foodfusion/');
		$this->load->model('fetch');
        $config['total_rows'] = $this->fetch->count_foodfusion();
		$config['per_page'] = 5;

		$this->pagination->initialize($config);

		$data['fetchfood']=$this->fetch->fetch_food($config['per_page'],$offset);
		$this->load->view('theme/admin/foodfusion', $data);
	}

	public function addfoodfusion()
	{
		
		$this->load->view('theme/admin/addfoodfusion');
	}

	public function editfood($id)
	{
		$this->load->model('fetch');
	    $data['editfoodfusion']=$this->fetch->editfoodfusion($id);
		$this->load->view('theme/admin/edit_foodfusion', $data);	
	}

	public function updatefoodfusion($id)
	{
		$this->load->model('save');
	    $this->save->updatefood($id);
		redirect('http://localhost/ci/foodfusion');	
	}

	public function deletefoodfusion($id)
	{
		$this->load->model('save');
	    $this->save->deletefood($id);
		redirect('http://localhost/ci/foodfusion');	
	}
	public function viewfood($id)
	{
		$this->load->model('fetch');
	    $data['viewfoodfusion']=$this->fetch->viewfoodfusion($id);
		$this->load->view('theme/admin/view_foodfusion', $data);	
	}







	public function popularstories($offset=0)
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
		$config['base_url'] = site_url('admin/popularstories/');
		$this->load->model('fetch');
		$config['total_rows'] = $this->fetch->count_popularstories();
		$config['per_page'] = 5;

		$this->pagination->initialize($config);

		$data['fetchstories']=$this->fetch->fetch_stories($config['per_page'],$offset);
		$this->load->view('theme/admin/popularstories', $data);
	}

	public function addpopularstories()
	{
		
		$this->load->view('theme/admin/addpopularstories');
	}

	public function editstories($id)
	{
		$this->load->model('fetch');
	    $data['editpopularstories']=$this->fetch->editpopularstories($id);
		$this->load->view('theme/admin/edit_popularstories', $data);	
	}

	public function updatepopularstories($id)
	{
		$this->load->model('save');
	    $this->save->updatestories($id);
		redirect('http://localhost/ci/popularstories');	
	}

	public function deletepopularstories($id)
	{
		$this->load->model('save');
	    $this->save->deletestories($id);
		redirect('http://localhost/ci/popularstories');	
	}
	public function viewstories($id)
	{
		$this->load->model('fetch');
	    $data['viewpopularstories']=$this->fetch->viewpopularstories($id);
		$this->load->view('theme/admin/view_popularstories', $data);	
	}






	public function addpost($offset=0)
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
		$config['base_url'] = site_url('admin/addpost/');
		$this->load->model('fetch');
		$config['total_rows'] = $this->fetch->count_addpost();
		$config['per_page'] = 5;

		$this->pagination->initialize($config);

		$data['fetchpost']=$this->fetch->fetch_post($config['per_page'],$offset);
		$this->load->view('theme/admin/addpost', $data);
	}

	public function post()
	{
		$this->load->view('theme/admin/post');
	}

	public function editadd($id)
	{
		$this->load->model('fetch');
	    $data['editaddpost']=$this->fetch->editaddpost($id);
		$this->load->view('theme/admin/edit_addpost', $data);	
	}

	public function updateaddpost($id)
	{
		$this->load->model('save');
	    $this->save->updateadd($id);
		redirect('http://localhost/ci/addpost');	
	}

	public function deleteaddpost($id)
	{
		$this->load->model('save');
	    $this->save->deleteadd($id);
		redirect('http://localhost/ci/addpost');	
	}
	public function viewadd($id)
	{
		$this->load->model('fetch');
	    $data['viewaddpost']=$this->fetch->viewaddpost($id);
		$this->load->view('theme/admin/view_addpost', $data);	
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
		$config['base_url'] = site_url('admin/author/');
		$this->load->model('fetch');
		$config['total_rows'] = $this->fetch->count_author();
		$config['per_page'] = 5;

		$this->pagination->initialize($config);

		$data['fetchauthor']=$this->fetch->fetch_author($config['per_page'],$offset);
		$this->load->view('theme/admin/author', $data);
	}

	public function addauthor()
	{
		
		$this->load->view('theme/admin/addauthor');
	}

	public function editauthor($id)
	{
		$this->load->model('fetch');
	    $data['editauthor']=$this->fetch->editauthor($id);
		$this->load->view('theme/admin/edit_author', $data);	
	}

	public function updateauthor($id)
	{
		$this->load->model('save');
	    $this->save->updateauthor($id);
		redirect('http://localhost/ci/author');	
	}

	public function deleteauthor($id)
	{
		$this->load->model('save');
	    $this->save->deleteauthor($id);
		redirect('http://localhost/ci/author');	
	}
	public function viewauthor($id)
	{
		$this->load->model('fetch');
	    $data['viewauthor']=$this->fetch->viewauthor($id);
		$this->load->view('theme/admin/view_author', $data);	
	}






	
	public function ourteam($offset=0)
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
		$config['base_url'] = site_url('admin/ourteam/');
		$this->load->model('fetch');
		$config['total_rows'] = $this->fetch->count_ourteam();
		$config['per_page'] = 5;

		$this->pagination->initialize($config);

		$data['fetchteam']=$this->fetch->fetch_team($config['per_page'],$offset);
		$this->load->view('theme/admin/ourteam', $data);
	}

	public function addourteam()
	{
		$this->load->view('theme/admin/addourteam');
	}

	public function editteam($id)
	{
		$this->load->model('fetch');
	    $data['editourteam']=$this->fetch->editourteam($id);
		$this->load->view('theme/admin/edit_ourteam', $data);	
	}

	public function updateourteam($id)
	{
		$this->load->model('save');
	    $this->save->updateteam($id);
		redirect('http://localhost/ci/ourteam');	
	}

	public function deleteourteam($id)
	{
		$this->load->model('save');
	    $this->save->deleteteam($id);
		redirect('http://localhost/ci/ourteam');	
	}
	public function viewteam($id)
	{
		$this->load->model('fetch');
	    $data['viewourteam']=$this->fetch->viewourteam($id);
		$this->load->view('theme/admin/view_ourteam', $data);	
	}








	public function recipe($offset=0)
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
		$config['base_url'] = site_url('admin/recipe/');
		$this->load->model('fetch');
		$config['total_rows'] = $this->fetch->count_recipe();
		$config['per_page'] = 5;

		$this->pagination->initialize($config);

		$data['fetchrecipe']=$this->fetch->fetch_recipe($config['per_page'],$offset);
		$this->load->view('theme/admin/recipe', $data);
	}

	public function addrecipe()
	{
		$this->load->view('theme/admin/addrecipe');
	}

	public function editrecipe($id)
	{
		$this->load->model('fetch');
	    $data['editrecipe']=$this->fetch->editrecipe($id);
		$this->load->view('theme/admin/edit_recipe', $data);	
	}

	public function updaterecipe($id)
	{
		$this->load->model('save');
	    $this->save->updaterecipe($id);
		redirect('http://localhost/ci/recipe');	
	}

	public function deleterecipe($id)
	{
		$this->load->model('save');
	    $this->save->deleterecipe($id);
		redirect('http://localhost/ci/recipe');	
	}
	public function viewrecipe($id)
	{
		$this->load->model('fetch');
	    $data['viewrecipe']=$this->fetch->viewrecipe($id);
		$this->load->view('theme/admin/view_recipe', $data);	
	}




	


	public function information($offset=0)
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
		$config['base_url'] = site_url('admin/information/');
		$this->load->model('fetch');
		$config['total_rows'] = $this->fetch->count_information();
		$config['per_page'] = 5;

		$this->pagination->initialize($config);

		$data['fetchinfo']=$this->fetch->fetch_info($config['per_page'],$offset);
		$this->load->view('theme/admin/information', $data);
	}

	public function addinformation()
	{
		$this->load->view('theme/admin/addinformation');
	}

	public function editinfo($id)
	{
		$this->load->model('fetch');
	    $data['editinformation']=$this->fetch->editinformation($id);
		$this->load->view('theme/admin/edit_information', $data);	
	}

	public function updateinformation($id)
	{
		$this->load->model('save');
	    $this->save->updateinfo($id);
		redirect('http://localhost/ci/information');	
	}

	public function deleteinformation($id)
	{
		$this->load->model('save');
	    $this->save->deleteinfo($id);
		redirect('http://localhost/ci/information');	
	}
	public function viewinfo($id)
	{
		$this->load->model('fetch');
	    $data['viewinformation']=$this->fetch->viewinformation($id);
		$this->load->view('theme/admin/view_information', $data);	
	}








	public function message($offset=0)
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
		$config['base_url'] = site_url('admin/message/');
		$this->load->model('fetch');
		$config['total_rows'] = $this->fetch->count_message();
		$config['per_page'] = 5;

		$this->pagination->initialize($config);

		$data['fetchmsg']=$this->fetch->fetch_msg($config['per_page'],$offset);
		$this->load->view('theme/admin/message', $data);
	}

	public function addmessage()
	{
		$this->load->view('theme/admin/addmessage');
	}

	public function editmsg($id)
	{
		$this->load->model('fetch');
	    $data['editmessage']=$this->fetch->editmessage($id);
		$this->load->view('theme/admin/edit_message', $data);	
	}

	public function updatemessage($id)
	{
		$this->load->model('save');
	    $this->save->updatemsg($id);
		redirect('http://localhost/ci/message');	
	}

	public function deletemessage($id)
	{
		$this->load->model('save');
	    $this->save->deletemsg($id);
		redirect('http://localhost/ci/message');	
	}

	public function viewmsg($id)
	{
		$this->load->model('fetch');
	    $data['viewmessage']=$this->fetch->viewmessage($id);
		$this->load->view('theme/admin/view_message', $data);	
	}
	

	





	public function about($offset=0)
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
		$config['base_url'] = site_url('admin/about/');
		$this->load->model('fetch');
		$config['total_rows'] = $this->fetch->count_about();
		$config['per_page'] = 5;

		$this->pagination->initialize($config);

		$data['fetchabout']=$this->fetch->fetch_about($config['per_page'],$offset);
		$this->load->view('theme/admin/about', $data);
	}

	public function addabout()
	{
		$this->load->view('theme/admin/addabout');
	}

	public function editabout($id)
	{
		$this->load->model('fetch');
	    $data['editabout']=$this->fetch->editabout($id);
		$this->load->view('theme/admin/edit_about', $data);	
	}

	public function updateabout($id)
	{
		$this->load->model('save');
	    $this->save->updateabout($id);
		redirect('http://localhost/ci/about');	
	}

	public function deleteabout($id)
	{
		$this->load->model('save');
	    $this->save->deleteabout($id);
		redirect('http://localhost/ci/about');	
	}
	public function viewabout($id)
	{
		$this->load->model('fetch');
	    $data['viewabout']=$this->fetch->viewabout($id);
		$this->load->view('theme/admin/view_about', $data);	
	}






	public function savehdr()
	{
		$this->load->model('save');
		$this->save->save_hdr();
		redirect('http://localhost/ci/admin');
	
	}

	public function savefood()
	{
		$this->load->model('save');
		$this->save->save_food();
		redirect('http://localhost/ci/foodfusion');
	
	}

	
	public function savestories()
	{
		$this->load->model('save');
		$this->save->save_stories();
		redirect('http://localhost/ci/popularstories');
	
	}

	public function saveadd()
	{
		$this->load->model('save');
		$this->save->save_add();
		redirect('http://localhost/ci/addpost');
	
	}

	public function saveedit()
	{
		$this->load->model('save');
		$this->save->save_edit();
		redirect('http://localhost/ci/editpost');
	
	}

	public function saveauthor()
	{
		$this->load->model('save');
		$this->save->save_author();
		redirect('http://localhost/ci/author');
	
	}

	public function saveteam()
	{
		$this->load->model('save');
		$this->save->save_team();
		redirect('http://localhost/ci/ourteam');
	
	}
	public function saverecipe()
	{
		$this->load->model('save');
		$this->save->save_recipe();
		redirect('http://localhost/ci/recipe');
	
	}
	public function saveinfo()
	{
		$this->load->model('save');
		$this->save->save_info();
		redirect('http://localhost/ci/information');
	
	}

	public function savemsg()
	{
		$this->load->model('save');
		$this->save->save_msg();
		redirect('http://localhost/ci/message');
	
	}

	public function saveabout()
	{
		$this->load->model('save');
		$this->save->save_about();
		redirect('http://localhost/ci/about');
	
	}

	public function logout()
		{
			
			$this->session->unset_userdata('user', '1');
			redirect('login');
		
	    }


	
}
