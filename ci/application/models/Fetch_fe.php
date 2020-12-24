<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fetch_fe extends CI_Model {

	public function fetch_fe_hdr()
	{
		
		return $this->db->get('header')->result();
	
	}
	




	public function fetch_fe_food()
	{
		$this->db->limit(3);
		$this->db->offset(0);
		
		$this->db->order_by('id DESC');
		return $this->db->get('foodfusion')->result();
	
	}
	

	public function fetch_fe_stories()
	{
		$this->db->limit(4);
		$this->db->offset(0);
		$this->db->order_by('id DESC');
		return $this->db->get('popularstories')->result();
	
	}
	






	public function fetch_post()
	{
		//$this->db->limit($limit);
		//$this->db->offset($offset);
		$this->db->order_by('id DESC');
		return $this->db->get('addpost')->result();
	
	}
	







	public function fetch_fe_author()
	{
		//$this->db->limit($limit);
		//$this->db->offset($offset);
		//$this->db->order_by('id DESC');
		return $this->db->get('author')->result();
	
	}
	

 


	public function fetch_fe_team()
	{
		$this->db->limit(3);
		//$this->db->offset(0);
		$this->db->order_by('id DESC');
		
		return $this->db->get('ourteam')->result();
	
	}






	public function fetch_fe_recipe()
	{
		//$this->db->limit(12);
		//$this->db->offset($offset);
		$this->db->order_by('id DESC');
		return $this->db->get('addpost')->result();
	
	}
	public function fetch_fe_recipe_fussion()
	{
		$this->db->limit(3);
		//$this->db->offset($offset);
		$this->db->order_by('id DESC');
		return $this->db->get('addpost')->result();
	
	}
	public function fetch_fe_recipe_recent()
	{
		$this->db->limit(4);
		//$this->db->offset($offset);
		$this->db->order_by('id DESC');
		return $this->db->get('addpost')->result();
	
	}
	public function fetch_fe_recipe_pstory()
	{
		$this->db->limit(4);
		//$this->db->offset($offset);
		$this->db->order_by('like_post DESC');
		return $this->db->get('addpost')->result();
	
	}
	
	public function singlerecipe($id)
	{
		return $this->db->get_where('addpost',array('id'=>$id))->row();
	
	}
	




	public function fetch_fe_info()
	{
		//$this->db->limit($limit);
		//$this->db->offset($offset);
		//$this->db->order_by('id DESC');
		return $this->db->get('information')->result();
	
	}
	



	public function fetch_msg()
	{
		//$this->db->limit($limit);
		//$this->db->offset($offset);
		$this->db->order_by('id DESC');
		return $this->db->get('message')->result();
	
	}






	public function fetch_fe_about()
	{
		//$this->db->limit($limit);
		//$this->db->offset($offset);
		//$this->db->order_by('id DESC');
		return $this->db->get('about')->result();
		
	
	}



}