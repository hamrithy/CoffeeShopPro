<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Blog extends CI_Controller{

		public function __construct(){
			parent::__construct();
			$this->load->model("dao/DaoPost");
		}

		public function index(){
			//$this->load->view('front/blog');
			$this->listPostPro();
		}

		
		public function listPostPro(){
			$data["listPost"] = $this->DaoPost->listPost();
			$this->load->view("front/blog" , $data);
		}
		
		
	}


?>