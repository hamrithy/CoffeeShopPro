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
		$this->db->insert('POSTS',$data);
	}
	
	

	public function listPost(){
		$this->db->select('p.postid , p.title , p.shortdescription , p.longdescription , p.postdate , p.thumbnailurl , u.userid , u.username');
		$this->db->from('POSTS p');
		$this->db->join('USERS u', 'p.userid = u.userid');
		$this->db->order_by("postid", "desc");
		$query = $this->db->get();
		return $query->result();
	}
	
	public function getPost(DtoPost $p){
		$this->db->select('p.postid , p.title , p.shortdescription , p.longdescription , p.postdate , p.thumbnailurl , u.userid , u.username');
		$this->db->from('POSTS p');
		$this->db->join('USERS u', 'p.userid = u.userid');
		$this->db->where('postid',$p->getPostid());
		$this->db->order_by("postid", "desc");
		$query = $this->db->get();
		return $query->result();
	}
	
	public function deletePost(DtoPost $p){
		$this->db->where('postid',$p->getPostid());
		$this->db->delete('POSTS');
	}
	
	
	
}