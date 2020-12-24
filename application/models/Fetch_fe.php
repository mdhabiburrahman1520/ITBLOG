<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fetch_fe extends CI_Model {


	
	public function fetch_fe_header()
	{
	    $this->db->order_by('id DESC');
		return $this->db->get('header')->result();
	
		
	}
	public function fetch_fe_allblog()
	{
		$this->db->order_by('id DESC');
		return $this->db->get('post')->result();
	
		
	}
	public function fetch_fe_allblog_recent()
	{
		$this->db->limit(6);
		$this->db->order_by('id DESC');
		return $this->db->get('post')->result();
	
		
	}

	public function fetch_fe_popular_pst()
	{
		$this->db->limit(6);
		$this->db->order_by('like_post DESC');
		return $this->db->get('post')->result();
	
		
	}
	public function fetch_fe_popularartical()
	{
		 $this->db->limit(6);
		return $this->db->get('popularartical')->result();
	
		
	}


	public function view_singlepost ($id)
	{
		
		return $this->db->get_where('post',array('id'=>$id))->row();
	
		
	}
	public function fetch_contmesg()
	{
		//$this->db->limit($limit);
		//$this->db->offset($offset);
		$this->db->order_by('id DESC');
		return $this->db->get('contmesg')->result();
	
	}

	public function fetch_author()
	{
		//$this->db->limit($limit);
		//$this->db->offset($offset);
		$this->db->order_by('id DESC');
		return $this->db->get('author')->result();
	
	}
	
    
}
