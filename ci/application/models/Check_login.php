<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Check_login extends CI_Model {

	public function checked()
	{
		$data =array();
		$data['username'] = $this->input->post('username', true);
		$data['password'] = md5($this->input->post('password', true));
		return $this->db->get_where('user', $data)->result();
	
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
		return $this->db->get_where('header')->num_rows();
	
	}







	public function fetch_food($limit, $offset)
	{
		$this->db->limit($limit);
		$this->db->offset($offset);
		$this->db->order_by('id DESC');
		return $this->db->get('foodfusion')->result();
	
	}
	public function editfoodfusion($id)
	{
		return $this->db->get_where('foodfusion',array('id'=>$id))->row();
	
	}
	public function viewfoodfusion($id)
	{
		return $this->db->get_where('foodfusion',array('id'=>$id))->row();
	
	}
	function count_foodfusion()
	{
		return $this->db->get_where('foodfusion')->num_rows();
	
	}








	public function fetch_stories($limit, $offset)
	{
		$this->db->limit($limit);
		$this->db->offset($offset);
		$this->db->order_by('id DESC');
		return $this->db->get('popularstories')->result();
	
	}
	public function editpopularstories($id)
	{
		return $this->db->get_where('popularstories',array('id'=>$id))->row();
	
	}
	public function viewpopularstories($id)
	{
		return $this->db->get_where('popularstories',array('id'=>$id))->row();
	
	}
	function count_popularstories()
	{
		return $this->db->get_where('popularstories')->num_rows();
	
	}
	







	public function fetch_post($limit, $offset)
	{
		$this->db->limit($limit);
		$this->db->offset($offset);
		$this->db->order_by('id DESC');
		return $this->db->get('addpost')->result();
	
	}
	public function editaddpost($id)
	{
		return $this->db->get_where('addpost',array('id'=>$id))->row();
	
	}
	public function viewaddpost($id)
	{
		return $this->db->get_where('addpost',array('id'=>$id))->row();
	
	}
	function count_addpost()
	{
		return $this->db->get_where('addpost')->num_rows();
	
	}




	public function fetch_edit($limit, $offset)
	{
		$this->db->limit($limit);
		$this->db->offset($offset);
		$this->db->order_by('id DESC');
		return $this->db->get('editpost')->result();
	
	}
	public function editeditpost($id)
	{
		return $this->db->get_where('editpost',array('id'=>$id))->row();
	
	}
	public function vieweditpost($id)
	{
		return $this->db->get_where('editpost',array('id'=>$id))->row();
	
	}
	function count_editpost()
	{
		return $this->db->get_where('editpost')->num_rows();
	
	}





	public function fetch_author($limit, $offset)
	{
		$this->db->limit($limit);
		$this->db->offset($offset);
		$this->db->order_by('id DESC');
		return $this->db->get('author')->result();
	
	}
	public function editauthor($id)
	{
		return $this->db->get_where('author',array('id'=>$id))->row();
	
	}
	public function viewauthor($id)
	{
		return $this->db->get_where('author',array('id'=>$id))->row();
	
	}
	function count_author()
	{
		return $this->db->get_where('author')->num_rows();
	
	}

 


	public function fetch_team($limit, $offset)
	{
		$this->db->limit($limit);
		$this->db->offset($offset);
		$this->db->order_by('id DESC');
		return $this->db->get('ourteam')->result();
	
	}
	public function editourteam($id)
	{
		return $this->db->get_where('ourteam',array('id'=>$id))->row();
	
	}
	public function viewourteam($id)
	{
		return $this->db->get_where('ourteam',array('id'=>$id))->row();
	
	}
	function count_ourteam()
	{
		return $this->db->get_where('ourteam')->num_rows();
	
	}





	public function fetch_recipe($limit, $offset)
	{
		$this->db->limit($limit);
		$this->db->offset($offset);
		$this->db->order_by('id DESC');
		return $this->db->get('recipe')->result();
	
	}
	public function editrecipe($id)
	{
		return $this->db->get_where('recipe',array('id'=>$id))->row();
	
	}
	public function viewrecipe($id)
	{
		return $this->db->get_where('recipe',array('id'=>$id))->row();
	
	}
	function count_recipe()
	{
		return $this->db->get_where('recipe')->num_rows();
	
	}




	public function fetch_info($limit, $offset)
	{
		$this->db->limit($limit);
		$this->db->offset($offset);
		$this->db->order_by('id DESC');
		return $this->db->get('information')->result();
	
	}
	public function editinformation($id)
	{
		return $this->db->get_where('information',array('id'=>$id))->row();
	
	}
	public function viewinformation($id)
	{
		return $this->db->get_where('information',array('id'=>$id))->row();
	
	}
	function count_information()
	{
		return $this->db->get_where('information')->num_rows();
	
	}




	public function fetch_msg($limit, $offset)
	{
		$this->db->limit($limit);
		$this->db->offset($offset);
		$this->db->order_by('id DESC');
		return $this->db->get('message')->result();
	
	}
	public function editmessage($id)
	{
		return $this->db->get_where('message',array('id'=>$id))->row();
	
	}
	public function viewmessage($id)
	{
		return $this->db->get_where('message',array('id'=>$id))->row();
	
	}
	function count_message()
	{
		return $this->db->get_where('message')->num_rows();
	
	}
	





	public function fetch_about($limit, $offset)
	{
		$this->db->limit($limit);
		$this->db->offset($offset);
		$this->db->order_by('id DESC');
		return $this->db->get('about')->result();
	
	}
	public function editabout($id)
	{
		return $this->db->get_where('about',array('id'=>$id))->row();
	
	}
	public function viewabout($id)
	{
		return $this->db->get_where('about',array('id'=>$id))->row();
	
	}
	function count_about()
	{
		return $this->db->get_where('about')->num_rows();
	
	}


}