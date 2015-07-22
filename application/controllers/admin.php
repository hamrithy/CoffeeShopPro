<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class admin extends CI_Controller{

		public function __construct(){
			parent::__construct();
		}
		
		public function index(){
			$this->load->view('admin-kh4it/index');
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

		public function listpage(){
			$this->load->view('admin-kh4it/listpage');
		}

		public function addpage(){
			$this->load->view('admin-kh4it/addpage');
		}
	}

?>