<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Check_login extends CI_Model {


	
	public function checked()
	{
	
		$data=array();
		$data['username'] = $this->input->post('username',true);
		$data['password']= md5($this->input->post('password',true));
		return $this->db->get_where('user',$data)->result();
		
	}
	
	
	
	
    
}
