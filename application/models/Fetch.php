<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fetch extends CI_Model {


	
	public function fetch_header($limit,$offset)
	{
		$this->db->limit($limit);
		$this->db->offset($offset);
		$this->db->order_by('id DESC');
		return $this->db->get('header')->result();
	
		
	}
	
	public function editheader($id)
	{
		return $this->db->get_where('header',array('id'=>$id))->row();
	
		
	}

	public function viewheader($id)
	{
		return $this->db->get_where('header',array('id'=>$id))->row();
	
		
	}
	 function count_header()
	{
		return $this->db->get('header')->num_rows();
	
		
	}
/**populararticul */


	public function fetch_popularartical()
	{
		return $this->db->get('popularartical')->result();
	
		
	}
	public function viewpopularartical($id)
	{
		return $this->db->get_where('popularartical',array('id'=>$id))->row();
	
		
	}

	public function editpopularartical($id)
	{
		return $this->db->get_where('popularartical',array('id'=>$id))->row();
	
		
	}
	//**post */
	public function fetch_post($limit,$offset)
		
	  
	{

		$this->db->limit($limit);
		$this->db->offset($offset);
		$this->db->order_by('id DESC');
		return $this->db->get('post')->result();
	
		
	}
	public function viewpost($id)
	{
		return $this->db->get_where('post',array('id'=>$id))->row();
	
		
	}

	public function editpost($id)
	{
		return $this->db->get_where('post',array('id'=>$id))->row();
	
		
	}
	function count_post()
	{
		return $this->db->get('post')->num_rows();
	
		
	}

	//**author */
	
	public function fetch_author($limit,$offset)
		
	  
	{

		$this->db->limit($limit);
		$this->db->offset($offset);
		$this->db->order_by('id DESC');
		return $this->db->get('author')->result();
	
		
	}
	public function viewauthor($id)
	{
		return $this->db->get_where('author',array('id'=>$id))->row();
	
		
	}

	public function editauthor($id)
	{
		return $this->db->get_where('author',array('id'=>$id))->row();
	
		
	}
	function count_author()
	{
		return $this->db->get('author')->num_rows();
	
		
	}
	//** */
	//**about */
	public function fetch_aboutpage($limit,$offset)
	{
		$this->db->limit($limit);
		$this->db->offset($offset);
		$this->db->order_by('id DESC');
		return $this->db->get('aboutpage')->result();
	
		
	}
	
	public function editaboutpage($id)
	{
		return $this->db->get_where('aboutpage',array('id'=>$id))->row();
	
		
	}

	public function viewaboutpage($id)
	{
		return $this->db->get_where('aboutpage',array('id'=>$id))->row();
	
		
	}
	 function count_aboutpage()
	{
		return $this->db->get('aboutpage')->num_rows();
	
		
	}
	public function fetch_login()
	{
		return $this->db->get('login')->result();
	
		
	}
	public function fetch_contmesg()
	{
		
		$this->db->order_by('id DESC');
		return $this->db->get('contmesg')->result();
	
	}
	public function viewcontmesg($id)
	{
		return $this->db->get_where('contmesg',array('id'=>$id))->row();
	
		
	}
	
	function count_contmesg()
	{
		return $this->db->get('contmesg')->num_rows();
	
		
	}
    
}
