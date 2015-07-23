<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Post extends ADMIN_Controller{

		public function __construct(){
			parent::__construct();
		}
		
		public function index(){
			$this->listPostPro();
		}
		
		public function dashboard(){
			$this->listPostPro();
		}

		public function listposts(){
			$this->listPostPro();
		}

		public function addpost(){
			$this->load->view('admin-kh4it/addpost');
		}
				
		public function addPostPro(){

			$this->load->model("dao/DaoPost");
			$this->load->model("dto/DtoPost");
			
			$this->DtoPost->setTitle($this->input->post('txttitle'));
			$this->DtoPost->setShortdescription($this->input->post('txtshortdescription'));
			$this->DtoPost->setLongdescription($this->input->post('txtdescription'));
			$this->DtoPost->setThumbnailurl($this->input->post("txtfile"));
			$this->DtoPost->setUserid(1);
			
			$this->DaoPost->addPost($this->DtoPost);
			$this->index();
		}
		
		public function listPostPro(){
			$this->load->model("dao/DaoPost");
			$data["listPost"] = $this->DaoPost->listPost();   
			$this->load->view("admin-kh4it/listpost" , $data);
		}

		
		
		public function deletePost($id){
			$this->load->model("dao/DaoPost");
			$this->load->model("dto/DtoPost");
			
			$this->DtoPost->setPostid($id);
			$this->DaoPost->deletePost($this->DtoPost);
			//$this->index();
		}
		 
	}

?>