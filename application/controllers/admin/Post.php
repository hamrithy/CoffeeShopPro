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
			$dto = new DtoPost();
			$dao = new DaoPost();
			
			$dto->setTitle($this->input->post('txttitle'));
			$dto->setShortdescription($this->input->post('txtshortdescription'));
			$dto->setLongdescription($this->input->post('txtdescription'));
			$dto->setThumbnailurl("Path");
			$dto->setUserid(1);
			
			$data = $dao->addPost($dto);
			$this->index();
		}
		
		public function listPostPro(){
			$this->load->model("dao/DaoPost");
			$dao = new DaoPost();
			$data["lstPost"] = $dao->lstPost();
			$this->load->view("admin-kh4it/listpost" , $data);
		}

	}

?>