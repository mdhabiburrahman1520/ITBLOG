<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
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
	if(!$this->session->userdata('username')){
			redirect('loginauthor');
	}
	}
	

	public function index($offset=0)
	{   
		$this->load->library('pagination');
		$config['base_url'] = 'http://localhost/ITBLOG/user/index';
		$this->load->model('fetch_author');
		$config['total_rows'] =$this->fetch_author->count_post();
        $config['per_page'] = 6;
		$this->pagination->initialize($config);
		$data['fetchpost']=$this->fetch_author->fetch_post($config['per_page'],$offset);
		$data['fetchauthor']=$this->fetch_author->fetch_user();; 
		$this->load->view('theme/Author/post',$data);
	}

	


	
	public function saveaddpost()
	{
		
		$this->load->model('save');
		$this->save->save_addpost_ah();
		redirect('http://localhost/ITBLOG/user');
		
	}

	/**edit post */
	public function editpost($id)
	{
		$this->load->model('fetch_author');
		$data['editpost']=$this->fetch_author->editpost($id);
		$this->load->view('theme/Author/edit_post',$data);
	}
	/**update post */
	public function updatepost($id)
	{  
		$this->load->model('save');
		$this->save->updatepost($id);
		redirect('http://localhost/ITBLOG/user');
	}
	/**view post */
	public function viewpost($id)
	{  
		$this->load->model('fetch');
		$data['viewpost']=$this->fetch->viewpost($id);
	
		$this->load->view('theme/Author/view_post',$data);
	}

/**delet post */
        public function deletepost($id)
    {

	$this->load->model('save');
	$this->save->deletepost($id);
	redirect('http://localhost/ITBLOG/user');
	
	}


	//**author */

	public function author()
	{   
		
		$this->load->model('fetch_author');
		
		$data['fetchauthor']=$this->fetch_author->fetch_authora(); 
		$this->load->view('theme/Author/author',$data);
	}




	//**editauthor */
	public function editauthor($id)
	{
		$this->load->model('fetch');
		$data['editauthor']=$this->fetch->editauthor($id);
		$this->load->view('theme/Author/edit_author',$data);
	}
	//** */
	 
	//**delet author */
	public function deleteauthor($id)
    {

	$this->load->model('save');
	$this->save->deleteauthor($id);
	redirect('http://localhost/ITBLOG/user/author');
	
    }
 
//** */
/**update author */
public function updateauthor($id)
{  
	$this->load->model('save');
	$this->save->updateauthor($id);
	redirect('http://localhost/ITBLOG/user/author');
}

//** */
//**view author */
public function viewauthor($id)
{  
	$this->load->model('fetch');
	$data['viewauthor']=$this->fetch->viewauthor($id);

	$this->load->view('theme/Author/view_author',$data);
}
//**end view author */


	


	public function addpost()
	{
		$this->load->view('theme/Author/addpost');
	}


	//**add_author  */
	public function addauthor()
	{
		$this->load->view('theme/Author/addauthor');
	}
	//** */
	
	




	

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


	/**log out */
	public function logoutauthor()
		{
			
			$this->session->unset_userdata('username', 'email');
			redirect('loginauthor');
		
	    }
}
