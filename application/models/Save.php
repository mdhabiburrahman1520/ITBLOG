<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Save extends CI_Model {


	
	public function save_header()
	{
		
		$data =array();
		$data['header']=$this->input->post('header',true);
		$data['header_content1']=$this->input->post('header_content1',true);
		$data['header_content2']=$this->input->post('header_content2',true);
		if(isset($_FILES['logo']['name'])){
			$this->load->library('upload');
			$config['upload_path']          =APPPATH.'../asset/uploads/';
			$config['allowed_types']        ='gif|jpg|png|jpeg';
			$config['file_name']           =date('YmdHms').'_'.rand(1,9999999);
			$this->upload->initialize($config);
			if($this->upload->do_upload('logo')){
				$uploadlogo=$this->upload->data();
				$data['logo']=$uploadlogo['file_name'];
			}
		}
		if(isset($_FILES['hb']['name'])){
			$this->load->library('upload');
			$config['upload_path']          =APPPATH.'../asset/uploads/';
			$config['allowed_types']        ='gif|jpg|png|jpeg';
			$config['file_name']           =date('YmdHms').'_'.rand(1,9999999);
			$this->upload->initialize($config);
			if($this->upload->do_upload('hb')){
				$uploadhb=$this->upload->data();
				$data['hb']=$uploadhb['file_name'];
			}
		}
		
		
		$this->db->insert('header',$data);
			
		
	}
	//**save post */
    public function save_post()
	{
		
		$data =array();
		$data['title']=$this->input->post('title',true);
		$data['date']=$this->input->post('date',true);
		$data['post']=$this->input->post('post',true);
		$data['post_by']=$this->input->post('post_by',true);
		if(isset($_FILES['image']['name'])){
			$this->load->library('upload');
			$config['upload_path']          =APPPATH.'../asset/uploads/';
			$config['allowed_types']        ='gif|jpg|png|jpeg';
			$config['file_name']           =date('YmdHms').'_'.rand(1,9999999);
			$this->upload->initialize($config);
			if($this->upload->do_upload('image')){
				$uploadimage=$this->upload->data();
				$data['image']=$uploadimage['file_name'];
			}
		}
		$this->db->insert('post',$data);
			
		
	}


//**end save post */

//**save author */
public function save_author()
{
	
	$data =array();
	$data['username']=$this->input->post('username',true);
	$data['name']=$this->input->post('name',true);
	$data['email']=$this->input->post('email',true);
	$data['password']= md5($this->input->post('password',true));
	$data['status']="0";
	$this->db->insert('author',$data);
		
	
}

public function save_author_fe()
{
	
	$data =array();
	$data['username']=$this->input->post('username',true);
	$data['email']=$this->input->post('email',true);
	$data['password']= md5($this->input->post('password',true));
	$data['status']="0";
	$this->db->insert('author',$data);
		
	
}


public function approve_author($id)
{
	$data['status'] ='1';
	
	

	
	$this->db->where(array('id'=>$id));
	$this->db->update('author', $data);

}
//**save author end */
	public function save_aboutpage()
	{
		
		$data =array();
		$data['title']=$this->input->post('title',true);
		
		$data['hb']="0";
		
		$this->db->insert('aboutpage',$data);
			
		
	}

	public function save_popularartical()
	{
		
		$data =array();
		$data['title']=$this->input->post('title',true);
		
		if(isset($_FILES['hb']['name'])){
			$this->load->library('upload');
			$config['upload_path']          =APPPATH.'../asset/uploads/';
			$config['allowed_types']        ='gif|jpg|png|jpeg';
			$config['file_name']           =date('YmdHms').'_'.rand(1,9999999);
			$this->upload->initialize($config);
			if($this->upload->do_upload('hb')){
				$uploadhb=$this->upload->data();
				$data['hb']=$uploadhb['file_name'];
			}
		}
		
		
		$this->db->insert('popularartical',$data);
			
		
	}
	public function save_addpost()
	{
		
		$data =array();
		$data['title']=$this->input->post('title',true);
		$data['date']=$this->input->post('date',true);
		if(isset($_FILES['image']['name'])){
			$this->load->library('upload');
			$config['upload_path']          =APPPATH.'../asset/uploads/';
			$config['allowed_types']        ='gif|jpg|png|jpeg';
			$config['file_name']           =date('YmdHms').'_'.rand(1,9999999);
			$this->upload->initialize($config);
			if($this->upload->do_upload('image')){
				$uploadimage=$this->upload->data();
				$data['image']=$uploadimage['file_name'];
			}
		}
		$data['post']=$this->input->post('post',true);
		$data['post_by']=$this->input->post('post_by',true);
		$this->db->insert('post',$data);
			
		
	}


	//**save add author */
	public function save_addauthor()
	{
		
		$data =array();
		$data['username']=$this->input->post('username',true);
		$data['name']=$this->input->post('name',true);
		$data['email']=$this->input->post('email',true);
		$data['password']=$this->input->post('password',true);
	    $data['status']="0";
		$this->db->insert('author',$data);
			
		
	}
	public function save_addpost_ah()
	{
		
		$data =array();
		$data['title']=$this->input->post('title',true);
		$data['date']=$this->input->post('date',true);
		if(isset($_FILES['image']['name'])){
			$this->load->library('upload');
			$config['upload_path']          =APPPATH.'../asset/uploads/';
			$config['allowed_types']        ='gif|jpg|png|jpeg';
			$config['file_name']           =date('YmdHms').'_'.rand(1,9999999);
			$this->upload->initialize($config);
			if($this->upload->do_upload('image')){
				$uploadimage=$this->upload->data();
				$data['image']=$uploadimage['file_name'];
			}
		}
		$data['post']=$this->input->post('post',true);
		$data['post_by']=$this->session->userdata('username');
		$this->db->insert('post',$data);
			
		
	}
	//** */


	public function updatehdr($id)
	{
		
		
		$data['header']=$this->input->post('header',true);
		$data['header_content1']=$this->input->post('header_content1',true);
		$data['header_content2']=$this->input->post('header_content2',true);
		if(isset($_FILES['logo']['name'])){
			$this->load->library('upload');
			$config['upload_path']          =APPPATH.'../asset/uploads/';
			$config['allowed_types']        ='gif|jpg|png|jpeg';
			$config['file_name']           =date('YmdHms').'_'.rand(1,9999999);
			$this->upload->initialize($config);
			if($this->upload->do_upload('logo')){
				$uploadlogo=$this->upload->data();
				$data['logo']=$uploadlogo['file_name'];
			}
		}
		if(isset($_FILES['hb']['name'])){
			$this->load->library('upload');
			$config['upload_path']          =APPPATH.'../asset/uploads/';
			$config['allowed_types']        ='gif|jpg|png|jpeg';
			$config['file_name']           =date('YmdHms').'_'.rand(1,9999999);
			$this->upload->initialize($config);
			if($this->upload->do_upload('hb')){
				$uploadhb=$this->upload->data();
				$data['hb']=$uploadhb['file_name'];
			}
		}
		
		
		$this->db->where(array('id'=>$id));
		$this->db->update('header',$data);
			
		
	}
	public function deletehdr($id)
	{
		
		
		$this->db->where(array('id'=>$id));
		$this->db->delete('header');
			
		
	}
	//**update post */
	public function updatepost($id)
	{
		
		
		$data['title']=$this->input->post('title',true);
		$data['date']=$this->input->post('date',true);
	
		$data['post']=$this->input->post('post',true);
		$data['post_by']=$this->input->post('post_by',true);

		if(isset($_FILES['image']['name'])){
			$this->load->library('upload');
			$config['upload_path']          =APPPATH.'../asset/uploads/';
			$config['allowed_types']        ='gif|jpg|png|jpeg';
			$config['file_name']           =date('YmdHms').'_'.rand(1,9999999);
			$this->upload->initialize($config);
			if($this->upload->do_upload('image')){
				$uploadimage=$this->upload->data();
				$data['image']=$uploadimage['file_name'];
			}
		}
		$data['like_post']="0";
		$this->db->where(array('id'=>$id));
		$this->db->update('post',$data);
			
		
	}

	//** update author*/
	public function updateauthor($id)
	{
		
		
		$data['username']=$this->input->post('username',true);
		$data['name']=$this->input->post('name',true);
		$data['email']=$this->input->post('email',true);
		$data['password']=$this->input->post('password',true);
		$data['status']="0";
		$this->db->where(array('id'=>$id));
		$this->db->update('author',$data);
			
		
	}
    




	//** */
	public function likepost($id,$like)
	{
		
		$data['like_post']=$like+1;

		$this->db->where(array('id'=>$id));
		$this->db->update('post',$data);
			
		
	}
	
	//**delet post */
	public function deletepost($id)
	{
		
		
		$this->db->where(array('id'=>$id));
		$this->db->delete('post');
			
		
	}
	//** */
	//** */
	public function deleteauthor($id)
	{
		
		
		$this->db->where(array('id'=>$id));
		$this->db->delete('author');
			
		
	}

	//** */
	/**populararticul */

	public function updatepopularartical($id)
	{
		
		
		$data =array();
		$data['title']=$this->input->post('title',true);
		
		if(isset($_FILES['hb']['name'])){
			$this->load->library('upload');
			$config['upload_path']          =APPPATH.'../asset/uploads/';
			$config['allowed_types']        ='gif|jpg|png|jpeg';
			$config['file_name']           =date('YmdHms').'_'.rand(1,9999999);
			$this->upload->initialize($config);
			if($this->upload->do_upload('hb')){
				$uploadhb=$this->upload->data();
				$data['hb']=$uploadhb['file_name'];
			}
		}
		
		$this->db->where(array('id'=>$id));
		$this->db->update('popularartical',$data);
			
		
	}
	public function deletepopularartical($id)
	{
		
		
		$this->db->where(array('id'=>$id));
		$this->db->delete('popularartical');
			
		
	}
	//**save contmesg */
	public function save_contmesg()
	{
		
		$data =array();
		$data['name']=$this->input->post('name',true);
		$data['email']=$this->input->post('email',true);
		$data['address']=$this->input->post('address',true);
		$data['message']=$this->input->post('message',true);
	
		$this->db->insert('contmesg',$data);
			
		
	}
    public function deletecontmesg($id)
	{
		
		
		$this->db->where(array('id'=>$id));
		$this->db->delete('contmesg');
			
		
	}
    
}
