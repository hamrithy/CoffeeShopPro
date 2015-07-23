<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class TestPost extends CI_Controller{
		
		public function __construct(){
			parent::__construct();
		}
		
		
		
		public function index(){
			$this->load->view('admin-kh4it/addpost');
		}
		 
		
		public function addPost(){

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
			redirect("TestPost");
			
		
		}
		
		
		
		
		
		
		
	}







/* 



public function add_advertise($id){
	if($this->session->userdata("username")!=null && $this->session->userdata("user_id")!=null){
		$data['error'] = '';
		$this->load->model("dao/AdvertiseDao");
		$data['getAdvertise'] =  $this->AdvertiseDao->getAdvertise($id);
		$maxOrder = $this->AdvertiseDao->getMaxOrder();
		$data['order'] =  $maxOrder;
		$this->load->view("admin/add_advertise.php" , $data  );
	}else{
		redirect("admin/index");
	}
} */