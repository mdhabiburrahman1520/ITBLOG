<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Save extends CI_Model {

	public function save_hdr()
	{
		$data=array();
		$data['headline'] =$this->input->post('headline',true);
		$data['paragraph'] =$this->input->post('paragraph',true);
		$data['buttoncaption'] =$this->input->post('btn-caption',true);


        if(isset($_FILES['logo']['name'])){
		$this->load->library('upload');
		$config['upload_path']          = APPPATH.'../asset/uploads/';
		$config['allowed_types']        = 'gif|jpg|png|jpeg';
		$config['file_name']        = date('YmdHms').'_'.rand(1,9999999);
		$this->upload->initialize($config);
		if($this->upload->do_upload('logo')){
			$uploadlogo =$this->upload->data();
			$data['logo'] =$uploadlogo['file_name'];
		}
	
	}

	if(isset($_FILES['background']['name'])){
		$this->load->library('upload');
		$config['upload_path']          = APPPATH.'../asset/uploads/';
		$config['allowed_types']        = 'gif|jpg|png|jpeg';
		$config['file_name']        = date('YmdHms').'_'.rand(1,9999999);
		$this->upload->initialize($config);
		if($this->upload->do_upload('background')){
			$uploadbg =$this->upload->data();
			$data['background'] =$uploadbg['file_name'];
		}
	
	}

		$this->db->insert('header', $data);
	
	}

	public function updatehdr($id)
	{
		$data['headline'] =$this->input->post('headline',true);
		$data['paragraph'] =$this->input->post('paragraph',true);
		$data['buttoncaption'] =$this->input->post('btn-caption',true);
		

		if(isset($_FILES['logo']['name'])){
			$this->load->library('upload');
			$config['upload_path']          = APPPATH.'../asset/uploads/';
			$config['allowed_types']        = 'gif|jpg|png|jpeg';
			$config['file_name']        = date('YmdHms').'_'.rand(1,9999999);
			$this->upload->initialize($config);
			if($this->upload->do_upload('logo')){
				$upload =$this->upload->data();
				$data['logo'] =$upload['file_name'];
			}
		
		}

		if(isset($_FILES['background']['name'])){
			$this->load->library('upload');
			$config['upload_path']          = APPPATH.'../asset/uploads/';
			$config['allowed_types']        = 'gif|jpg|png|jpeg';
			$config['file_name']        = date('YmdHms').'_'.rand(1,9999999);
			$this->upload->initialize($config);
			if($this->upload->do_upload('background')){
				$uploadbg =$this->upload->data();
				$data['background'] =$uploadbg['file_name'];
			}
		
		}
	

		$this->db->where(array('id'=>$id));
		$this->db->update('header', $data);
	
	}

	public function deletehdr($id)
	{
		$this->db->where(array('id'=>$id));
		$this->db->delete('header');
	
	}





	public function save_food()
	{
		$data=array();
		$data['title'] =$this->input->post('title',true);
		$data['paragraph'] =$this->input->post('paragraph',true);
		


		if(isset($_FILES['picture']['name'])){
			$this->load->library('upload');
			$config['upload_path']          = APPPATH.'../asset/uploads/';
			$config['allowed_types']        = 'gif|jpg|png|jpeg';
			$config['file_name']        = date('YmdHms').'_'.rand(1,9999999);
			$this->upload->initialize($config);
			if($this->upload->do_upload('picture')){
				$uploadpicture =$this->upload->data();
				$data['picture'] =$uploadpicture['file_name'];
			}
		
		}
		
		$this->db->insert('foodfusion', $data);
	
	}

	public function updatefood($id)
	{
		$data['title'] =$this->input->post('title',true);
		$data['paragraph'] =$this->input->post('paragraph',true);
		
		if(isset($_FILES['picture']['name'])){
			$this->load->library('upload');
			$config['upload_path']          = APPPATH.'../asset/uploads/';
			$config['allowed_types']        = 'gif|jpg|png|jpeg';
			$config['file_name']        = date('YmdHms').'_'.rand(1,9999999);
			$this->upload->initialize($config);
			if($this->upload->do_upload('picture')){
				$uploadpicture =$this->upload->data();
				$data['picture'] =$uploadpicture['file_name'];
			}
		
		}


		$this->db->where(array('id'=>$id));
		$this->db->update('foodfusion', $data);
	
	}

	public function deletefood($id)
	{
		$this->db->where(array('id'=>$id));
		$this->db->delete('foodfusion');
	
	}




	public function save_stories()
	{
		$data=array();
		$data['paragraph'] =$this->input->post('paragraph',true);
		
		if(isset($_FILES['background']['name'])){
			$this->load->library('upload');
			$config['upload_path']          = APPPATH.'../asset/uploads/';
			$config['allowed_types']        = 'gif|jpg|png|jpeg';
			$config['file_name']        = date('YmdHms').'_'.rand(1,9999999);
			$this->upload->initialize($config);
			if($this->upload->do_upload('background')){
				$uploadbg =$this->upload->data();
				$data['background'] =$uploadbg['file_name'];
			}
		
		}

		$this->db->insert('popularstories', $data);
	
	}

	public function updatestories($id)
	{
		$data['paragraph'] =$this->input->post('paragraph',true);
		
		if(isset($_FILES['background']['name'])){
			$this->load->library('upload');
			$config['upload_path']          = APPPATH.'../asset/uploads/';
			$config['allowed_types']        = 'gif|jpg|png|jpeg';
			$config['file_name']        = date('YmdHms').'_'.rand(1,9999999);
			$this->upload->initialize($config);
			if($this->upload->do_upload('background')){
				$uploadbg =$this->upload->data();
				$data['background'] =$uploadbg['file_name'];
			}
		
		}


		$this->db->where(array('id'=>$id));
		$this->db->update('popularstories', $data);
	
	}

	public function deletestories($id)
	{
		$this->db->where(array('id'=>$id));
		$this->db->delete('popularstories');
	
	}



	
	public function save_add()
	{
		$data=array();
		$data['recipename'] =$this->input->post('recipename',true);
		$data['username'] =$this->input->post('username',true);
		$data['date'] =$this->input->post('date',true);
		$data['ingredients'] =$this->input->post('ingredients',true);
		$data['descriptions'] =$this->input->post('descriptions',true);
		
		if(isset($_FILES['recipepicture']['name'])){
			$this->load->library('upload');
			$config['upload_path']          = APPPATH.'../asset/uploads/';
			$config['allowed_types']        = 'gif|jpg|png|jpeg';
			$config['file_name']        = date('YmdHms').'_'.rand(1,9999999);
			$this->upload->initialize($config);
			if($this->upload->do_upload('recipepicture')){
				$uploadrecipepic =$this->upload->data();
				$data['recipepicture'] =$uploadrecipepic['file_name'];
			}
		
		}
		
		$this->db->insert('addpost', $data);
	
	}

	public function updateadd($id)
	{
		$data['recipename'] =$this->input->post('recipename',true);
		$data['username'] =$this->input->post('username',true);
		$data['date'] =$this->input->post('date',true);
		$data['ingredients'] =$this->input->post('ingredients',true);
		$data['descriptions'] =$this->input->post('descriptions',true);
		

		    if(isset($_FILES['recipepicture']['name'])){
			$this->load->library('upload');
			$config['upload_path']          = APPPATH.'../asset/uploads/';
			$config['allowed_types']        = 'gif|jpg|png|jpeg';
			$config['file_name']        = date('YmdHms').'_'.rand(1,9999999);
			$this->upload->initialize($config);
			if($this->upload->do_upload('recipepicture')){
				$uploadrecipepic =$this->upload->data();
				$data['recipepicture'] =$uploadrecipepic['file_name'];
			}
		
		}
		$data['like_post'] =0;
		$this->db->where(array('id'=>$id));
		$this->db->update('addpost', $data);
	
	}
	public function likerecipe($id, $like)
	{
		$data['like_post'] =$like+1;
		$this->db->where(array('id'=>$id));
		$this->db->update('addpost', $data);
	
	}

	public function deleteadd($id)
	{
		$this->db->where(array('id'=>$id));
		$this->db->delete('addpost');
	
	}





	public function save_edit()
	{
		$data=array();
		$data['recipename'] =$this->input->post('recipename',true);
		$data['username'] =$this->input->post('username',true);
		$data['date'] =$this->input->post('date',true);
		$data['ingredients'] =$this->input->post('ingredients',true);
		$data['descriptions'] =$this->input->post('descriptions',true);
		

		if(isset($_FILES['recipepicture']['name'])){
			$this->load->library('upload');
			$config['upload_path']          = APPPATH.'../asset/uploads/';
			$config['allowed_types']        = 'gif|jpg|png|jpeg';
			$config['file_name']        = date('YmdHms').'_'.rand(1,9999999);
			$this->upload->initialize($config);
			if($this->upload->do_upload('recipepicture')){
				$uploadrecipepic =$this->upload->data();
				$data['recipepicture'] =$uploadrecipepic['file_name'];
			}
		
		}

		
		$this->db->insert('editpost', $data);
	
	}

	public function updateedit($id)
	{
		$data['recipename'] =$this->input->post('recipename',true);
		$data['username'] =$this->input->post('username',true);
		$data['date'] =$this->input->post('date',true);
		$data['ingredients'] =$this->input->post('ingredients',true);
		$data['descriptions'] =$this->input->post('descriptions',true);
		

		if(isset($_FILES['recipepicture']['name'])){
			$this->load->library('upload');
			$config['upload_path']          = APPPATH.'../asset/uploads/';
			$config['allowed_types']        = 'gif|jpg|png|jpeg';
			$config['file_name']        = date('YmdHms').'_'.rand(1,9999999);
			$this->upload->initialize($config);
			if($this->upload->do_upload('recipepicture')){
				$uploadrecipepic =$this->upload->data();
				$data['recipepicture'] =$uploadrecipepic['file_name'];
			}
		
		}

		$this->db->where(array('id'=>$id));
		$this->db->update('editpost', $data);
	
	}

	public function deleteedit($id)
	{
		$this->db->where(array('id'=>$id));
		$this->db->delete('editpost');
	
	}






	public function save_author()
	{
		$data=array();
		$data['authorname'] =$this->input->post('authorname',true);
		$data['username'] =$this->input->post('username',true);
		$data['email'] =$this->input->post('email',true);
		$data['password'] =md5($this->input->post('password',true));
		$data['authordescription'] =$this->input->post('authordescription',true);
	
		if(isset($_FILES['authorpicture']['name'])){
			$this->load->library('upload');
			$config['upload_path']          = APPPATH.'../asset/uploads/';
			$config['allowed_types']        = 'gif|jpg|png|jpeg';
			$config['file_name']        = date('YmdHms').'_'.rand(1,9999999);
			$this->upload->initialize($config);
			if($this->upload->do_upload('authorpicture')){
				$uploadauthorpic =$this->upload->data();
				$data['authorpicture'] =$uploadauthorpic['file_name'];
			}
		
		}

	
		

	

		$this->db->insert('author', $data);
	
	}

	public function updateauthor($id)
	{
		$data['authorname'] =$this->input->post('authorname',true);
		$data['username'] =$this->input->post('username',true);
		$data['email'] =$this->input->post('email',true);
		$data['password'] =md5($this->input->post('password',true));
		$data['authordescription'] =$this->input->post('authordescription',true);
		

		if(isset($_FILES['authorpicture']['name'])){
			$this->load->library('upload');
			$config['upload_path']          = APPPATH.'../asset/uploads/';
			$config['allowed_types']        = 'gif|jpg|png|jpeg';
			$config['file_name']        = date('YmdHms').'_'.rand(1,9999999);
			$this->upload->initialize($config);
			if($this->upload->do_upload('authorpicture')){
				$uploadauthorpic =$this->upload->data();
				$data['authorpicture'] =$uploadauthorpic['file_name'];
			}
		
		}

		
		$this->db->where(array('id'=>$id));
		$this->db->update('author', $data);
	
	}

	public function deleteauthor($id)
	{
		$this->db->where(array('id'=>$id));
		$this->db->delete('author');
	
	}






	public function save_team()
	{
		$data=array();
		$data['name'] =$this->input->post('name',true);
		$data['positiontitle'] =$this->input->post('positiontitle',true);
		
		if(isset($_FILES['picture']['name'])){
			$this->load->library('upload');
			$config['upload_path']          = APPPATH.'../asset/uploads/';
			$config['allowed_types']        = 'gif|jpg|png|jpeg';
			$config['file_name']        = date('YmdHms').'_'.rand(1,9999999);
			$this->upload->initialize($config);
			if($this->upload->do_upload('picture')){
				$uploadpic =$this->upload->data();
				$data['picture'] =$uploadpic['file_name'];
			}
		
		}

		$this->db->insert('ourteam', $data);
	
	}

	public function updateteam($id)
	{
		$data['name'] =$this->input->post('name',true);
		$data['positiontitle'] =$this->input->post('positiontitle',true);
		
		if(isset($_FILES['picture']['name'])){
			$this->load->library('upload');
			$config['upload_path']          = APPPATH.'../asset/uploads/';
			$config['allowed_types']        = 'gif|jpg|png|jpeg';
			$config['file_name']        = date('YmdHms').'_'.rand(1,9999999);
			$this->upload->initialize($config);
			if($this->upload->do_upload('picture')){
				$uploadpic =$this->upload->data();
				$data['picture'] =$uploadpic['file_name'];
			}
		
		}

		$this->db->where(array('id'=>$id));
		$this->db->update('ourteam', $data);
	
	}

	public function deleteteam($id)
	{
		$this->db->where(array('id'=>$id));
		$this->db->delete('ourteam');
	
	}






	public function save_recipe()
	{
		$data=array();
		$data['title'] =$this->input->post('title',true);
		$data['paragraph'] =$this->input->post('paragraph',true);
		$data['buttoncaption'] =$this->input->post('buttoncaption',true);
		

		if(isset($_FILES['picture']['name'])){
			$this->load->library('upload');
			$config['upload_path']          = APPPATH.'../asset/uploads/';
			$config['allowed_types']        = 'gif|jpg|png|jpeg';
			$config['file_name']        = date('YmdHms').'_'.rand(1,9999999);
			$this->upload->initialize($config);
			if($this->upload->do_upload('picture')){
				$uploadpic =$this->upload->data();
				$data['picture'] =$uploadpic['file_name'];
			}
		
		}

		$this->db->insert('recipe', $data);
	
	}

	public function updaterecipe($id)
	{
		$data['title'] =$this->input->post('title',true);
		$data['paragraph'] =$this->input->post('paragraph',true);
		$data['buttoncaption'] =$this->input->post('buttoncaption',true);
		
		if(isset($_FILES['picture']['name'])){
			$this->load->library('upload');
			$config['upload_path']          = APPPATH.'../asset/uploads/';
			$config['allowed_types']        = 'gif|jpg|png|jpeg';
			$config['file_name']        = date('YmdHms').'_'.rand(1,9999999);
			$this->upload->initialize($config);
			if($this->upload->do_upload('picture')){
				$uploadpic =$this->upload->data();
				$data['picture'] =$uploadpic['file_name'];
			}
		
		}

		$this->db->where(array('id'=>$id));
		$this->db->update('recipe', $data);
	
	}

	public function deleterecipe($id)
	{
		$this->db->where(array('id'=>$id));
		$this->db->delete('recipe');
	
	}






	public function save_info()
	{
		$data=array();
		$data['address'] =$this->input->post('address',true);
		$data['phone'] =$this->input->post('phone',true);
		$data['email'] =$this->input->post('email',true);
		
		if(isset($_FILES['background']['name'])){
			$this->load->library('upload');
			$config['upload_path']          = APPPATH.'../asset/uploads/';
			$config['allowed_types']        = 'gif|jpg|png|jpeg';
			$config['file_name']        = date('YmdHms').'_'.rand(1,9999999);
			$this->upload->initialize($config);
			if($this->upload->do_upload('background')){
				$uploadbg =$this->upload->data();
				$data['background'] =$uploadbg['file_name'];
			}
		
		}

		$this->db->insert('information', $data);
	
	}

	public function updateinfo($id)
	{
		$data['address'] =$this->input->post('address',true);
		$data['phone'] =$this->input->post('phone',true);
		$data['email'] =$this->input->post('email',true);

		
		if(isset($_FILES['background']['name'])){
			$this->load->library('upload');
			$config['upload_path']          = APPPATH.'../asset/uploads/';
			$config['allowed_types']        = 'gif|jpg|png|jpeg';
			$config['file_name']        = date('YmdHms').'_'.rand(1,9999999);
			$this->upload->initialize($config);
			if($this->upload->do_upload('background')){
				$uploadbg =$this->upload->data();
				$data['background'] =$uploadbg['file_name'];
			}
		
		}

		$this->db->where(array('id'=>$id));
		$this->db->update('information', $data);
	
	}

	public function deleteinfo($id)
	{
		$this->db->where(array('id'=>$id));
		$this->db->delete('information');
	
	}






	public function save_msg()
	{
		$data=array();
		$data['fullname'] =$this->input->post('fullname',true);
		$data['email'] =$this->input->post('email',true);
		$data['message'] =$this->input->post('message',true);
	
		
		$this->db->insert('message', $data);
	
	}

	public function updatemsg($id)
	{
		$data['fullname'] =$this->input->post('fullname',true);
		$data['email'] =$this->input->post('email',true);
		$data['message'] =$this->input->post('message',true);
		$data['buttoncaption'] =$this->input->post('buttoncaption',true);

		$this->db->where(array('id'=>$id));
		$this->db->update('message', $data);
	
	}

	public function deletemsg($id)
	{
		$this->db->where(array('id'=>$id));
		$this->db->delete('message');
	
	}






	public function save_about()
	{
		$data=array();
		$data['title'] =$this->input->post('title',true);
		$data['paragraph'] =$this->input->post('paragraph',true);
	
		if(isset($_FILES['picture']['name'])){
			$this->load->library('upload');
			$config['upload_path']          = APPPATH.'../asset/uploads/';
			$config['allowed_types']        = 'gif|jpg|png|jpeg';
			$config['file_name']        = date('YmdHms').'_'.rand(1,9999999);
			$this->upload->initialize($config);
			if($this->upload->do_upload('picture')){
				$uploadpic =$this->upload->data();
				$data['picture'] =$uploadpic['file_name'];
			}
		
		}


		if(isset($_FILES['background']['name'])){
			$this->load->library('upload');
			$config['upload_path']          = APPPATH.'../asset/uploads/';
			$config['allowed_types']        = 'gif|jpg|png|jpeg';
			$config['file_name']        = date('YmdHms').'_'.rand(1,9999999);
			$this->upload->initialize($config);
			if($this->upload->do_upload('background')){
				$uploadbg =$this->upload->data();
				$data['background'] =$uploadbg['file_name'];
			}
		
		}

		$this->db->insert('about', $data);
	
	}
	public function updateabout($id)
	{
		$data['title'] =$this->input->post('title',true);
		$data['paragraph'] =$this->input->post('paragraph',true);
		
		
		if(isset($_FILES['picture']['name'])){
			$this->load->library('upload');
			$config['upload_path']          = APPPATH.'../asset/uploads/';
			$config['allowed_types']        = 'gif|jpg|png|jpeg';
			$config['file_name']        = date('YmdHms').'_'.rand(1,9999999);
			$this->upload->initialize($config);
			if($this->upload->do_upload('picture')){
				$uploadpic =$this->upload->data();
				$data['picture'] =$uploadpic['file_name'];
			}
		
		}


		if(isset($_FILES['background']['name'])){
			$this->load->library('upload');
			$config['upload_path']          = APPPATH.'../asset/uploads/';
			$config['allowed_types']        = 'gif|jpg|png|jpeg';
			$config['file_name']        = date('YmdHms').'_'.rand(1,9999999);
			$this->upload->initialize($config);
			if($this->upload->do_upload('background')){
				$uploadbg =$this->upload->data();
				$data['background'] =$uploadbg['file_name'];
			}
		
		}


		$this->db->where(array('id'=>$id));
		$this->db->update('about', $data);
	
	}

	public function deleteabout($id)
	{
		$this->db->where(array('id'=>$id));
		$this->db->delete('about');
	
	}


	
}