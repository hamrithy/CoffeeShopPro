<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Post extends ADMIN_Controller{

		public function __construct(){
			parent::__construct();
		}
		
		public function index(){
			$this->load->view('admin-kh4it/listpost');
		}
		
		public function dashboard(){
			$this->load->view('admin-kh4it/listpost');
		}

		public function listposts(){
			$this->load->view('admin-kh4it/listpost');
		}

		public function addpost(){
			$this->load->view('admin-kh4it/addpost');
		}

	}

?>