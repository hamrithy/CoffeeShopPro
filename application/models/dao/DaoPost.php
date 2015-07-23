<?php

class DaoPost extends CI_Model{
	
	public function DaoPost(){
		parent::__construct();
		$this->load->database();
		$this->load->model('dto/DtoPost');
	}
	
	
	public function addPost(DtoPost $p){
		$data = array(
				'postid'             =>    	$p->getPostid(),
				'title'              =>    	$p->getTitle(),
				'shortdescription'   =>	   	$p->getShortdescription(),
				'longdescription'    =>		$p->getLongdescription(),
			//	'postdate'			 =>		NOW(),
				'thumbnailurl'       =>     $p->getThumbnailurl(),
				'userid'             =>     $p->getUserid()
		);
		
		$this->db->set('postdate', 'NOW()', FALSE);
		$this->db->insert('posts',$data);
	}
	
	

	public function lstPost(){
		$this->db->select('postid , title , shortdescription , longdescription , postdate , thumbnailurl , userid');
		$this->db->from('posts');
		$this->db->order_by("postid", "desc");
		$query = $this->db->get();
		$result = $query->result();
		return $result;
	}
	
	
	/* 
	
	
	
	public function listAdvertise(){
		$this->db->select('adv_id , adv_customer,adv_link,adv_name,adv_order ,adv_image');
		$this->db->from('tbadvertise');
		$this->db->order_by("adv_order", "asc");
		$query = $this->db->get();
		$result = $query->result();
		return $result;
	} */
	
	
}