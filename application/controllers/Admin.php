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
	public function __construct(){
		parent::__construct();
		if(!$this->session->userdata('user')){
			redirect('login');
		}
	}
	public function index($offset=0)
	{
		$this->load->library('pagination');

		$config['base_url'] = 'http://localhost/ITBLOG/admin/';
		$this->load->model('fetch');
        $config['total_rows'] =$this->fetch->count_header();
        $config['per_page'] = 5;
		$this->pagination->initialize($config);
		$data['fetchhdr']=$this->fetch->fetch_header($config['per_page'],$offset);
		$this->load->view('theme/Admin/admin',$data);
		
	}

	public function post($offset=0)
	{   
		$this->load->library('pagination');
		$config['base_url'] = 'http://localhost/ITBLOG/post';
		$this->load->model('fetch');
		$config['total_rows'] =$this->fetch->count_post();
        $config['per_page'] = 6;
		$this->pagination->initialize($config);
		$data['fetchpost']=$this->fetch->fetch_post($config['per_page'],$offset); 
		$this->load->view('theme/Admin/post',$data);
	}

	public function header()
	{
		$this->load->view('theme/Admin/header');
	}
	public function aboutpage()
	{
		$this->load->model('fetch');
		$data['fetchaboutpage']=$this->fetch->fetch_aboutpage();
		$this->load->view('theme/Admin/aboutpage',$data);
	}


	public function addheader()
	{
		$this->load->view('theme/Admin/addheader');
		
	}
/**edit header */

	public function edithdr($id)
	{  
		$this->load->model('fetch');
		$data['editheader']=$this->fetch->editheader($id);
	
		$this->load->view('theme/Admin/edit_header',$data);
	}
	/**update header */
	public function updateheader($id)
	{  
		$this->load->model('save');
		$this->save->updatehdr($id);
		redirect('http://localhost/ITBLOG/admin');
	}
	/**delet header */
	public function deleteheader($id)
    {

	$this->load->model('save');
	$this->save->deletehdr($id);
	redirect('http://localhost/ITBLOG/admin');
	
    }
	/**view header */
	public function viewhdr($id)
	{  
		$this->load->model('fetch');
		$data['viewheader']=$this->fetch->viewheader($id);
	
		$this->load->view('theme/Admin/view_header',$data);
	}
	/**edit post */
	public function editpost($id)
	{
		$this->load->model('fetch');
		$data['editpost']=$this->fetch->editpost($id);
		$this->load->view('theme/Admin/edit_post',$data);
	}
	/**update post */
	public function updatepost($id)
	{  
		$this->load->model('save');
		$this->save->updatepost($id);
		redirect('http://localhost/ITBLOG/post');
	}
	/**view post */
	public function viewpost($id)
	{  
		$this->load->model('fetch');
		$data['viewpost']=$this->fetch->viewpost($id);
	
		$this->load->view('theme/Admin/view_post',$data);
	}

/**delet post */
        public function deletepost($id)
    {

	$this->load->model('save');
	$this->save->deletepost($id);
	redirect('http://localhost/ITBLOG/post');
	
	}


	//**author */

	public function author($offset=0)
	{   
		$this->load->library('pagination');
		$config['base_url'] = 'http://localhost/ITBLOG/author/';
		$this->load->model('fetch');
		$config['total_rows'] =$this->fetch->count_author();
        $config['per_page'] = 6;
		$this->pagination->initialize($config);
		$data['fetchauthor']=$this->fetch->fetch_author($config['per_page'],$offset); 
		$this->load->view('theme/Admin/author',$data);
	}




	//**editauthor */
	public function editauthor($id)
	{
		$this->load->model('fetch');
		$data['editauthor']=$this->fetch->editauthor($id);
		$this->load->view('theme/Admin/edit_author',$data);
	}
	//** */
	 
	//**delet author */
	public function deleteauthor($id)
    {

	$this->load->model('save');
	$this->save->deleteauthor($id);
	redirect('http://localhost/ITBLOG/author');
	
    }
 
//** */
/**update author */
public function updateauthor($id)
{  
	$this->load->model('save');
	$this->save->updateauthor($id);
	redirect('http://localhost/ITBLOG/author');
}

//** */
//**view author */
public function viewauthor($id)
{  
	$this->load->model('fetch');
	$data['viewauthor']=$this->fetch->viewauthor($id);

	$this->load->view('theme/Admin/view_author',$data);
}
//**end view author */

	public function popularartical()
	{
		$this->load->model('fetch');
		$data['fetchpopularartical']=$this->fetch->fetch_popularartical();
		$this->load->view('theme/Admin/popularartical',$data);
	}
		/**edit popularatical post */
		public function editpopularartical($id)
		{  
			$this->load->model('fetch');
			$data['editpopularartical']=$this->fetch->editpopularartical($id);
		
			$this->load->view('theme/Admin/edit_popularartical',$data);
		}
		/**update popularatical post */
		public function updatepopularartical($id)
		{  
			$this->load->model('save');
			$this->save->updatepopularartical($id);
			redirect('http://localhost/ITBLOG/popularartical');
		}
		/**view popularatical post */
		public function viewpopularartical($id)
		{  
			$this->load->model('fetch');
			$data['viewpopularartical']=$this->fetch->viewpopularartical($id);
		
			$this->load->view('theme/Admin/view_popularartical',$data);
		}
	
	/**delet popularatical post */
			public function deletepopularartical($id)
		{
	
		$this->load->model('save');
		$this->save->deletepopularartical($id);
		redirect('http://localhost/ITBLOG/popularartical');
		
		}
	 
	public function addpopularartical()
	{
		$this->load->view('theme/Admin/addpopularartical');
	}
	
	
	public function counter()
	{
		$this->load->view('theme/Admin/counter');
	}
	public function addpost()
	{
		$this->load->view('theme/Admin/addpost');
	}


	//**add_author  */
	public function addauthor()
	{
		$this->load->view('theme/Admin/addauthor');
	}
	//** */
	public function addaboutpage()
	{   
		$this->load->view('theme/Admin/addaboutpage');
	}
	
	

	public function savehdr()
	{
		$this->load->model('save');
		$this->save->save_header();
		redirect('http://localhost/ITBLOG/admin');
		
	}


	public function saveaddpost()
	{
		
		$this->load->model('save');
		$this->save->save_addpost();
		redirect('http://localhost/ITBLOG/post');
		
	}

	public function approveauthor($id)
	{
		
		$this->load->model('save');
		$this->save->approve_author($id);
		redirect('http://localhost/ITBLOG/author');
		
	}
	//**author */
	public function saveaddauthor()
	{
		
		$this->load->model('save');
		$this->save->save_addauthor();
		redirect('http://localhost/ITBLOG/author');
		
	}


	//**end author/
	public function saveaboutpage()
	{
		
		$this->load->model('save');
		$this->save->save_aboutpage();
		redirect('http://localhost/ITBLOG/aboutpage');
		
	}
	public function savepopularartical()
	{
		
		$this->load->model('save');
		$this->save->save_popularartical();
		redirect('http://localhost/ITBLOG/popularartical');
		
	}


	//**message */
	public function contmesg($offset=0)
	{   
		$this->load->library('pagination');
		$config['base_url'] = 'http://localhost/ITBLOG/author/';
		$this->load->model('fetch');
		$config['total_rows'] =$this->fetch->count_contmesg();
        $config['per_page'] = 6;
		$this->pagination->initialize($config);
		$data['fetchcontmesg']=$this->fetch->fetch_contmesg($config['per_page'],$offset); 
		$this->load->view('theme/Admin/contmesg',$data);
	}



	//**view message */
	public function viewcontmesg($id)
{  
	$this->load->model('fetch');
	$data['viewcontmesg']=$this->fetch->viewcontmesg($id);

	$this->load->view('theme/Admin/view_contmesg',$data);
}
//**delet msssage */
public function deletecontmesg($id)
{

$this->load->model('save');
$this->save->deletecontmesg($id);
redirect('http://localhost/ITBLOG/contmesg');

}
	/**log out */
	public function logout()
	{
		$this->session->unset_userdata('user','1');
		redirect('admin');
	
		
	}
}
