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
	
	

	
	
}