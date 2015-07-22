<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Admin extends CI_Controller{

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

		public function listusers(){
			$this->load->view('admin-kh4it/listuser');
		}

		public function adduser(){
			$this->load->view('admin-kh4it/adduser');
		}

		public function listmenu(){
			$this->load->view('admin-kh4it/listmenu');
		}

		public function addmenu(){
			$this->load->view('admin-kh4it/addmenu');
		}

		public function addfooditem(){
			$this->load->view('admin-kh4it/addfooditem');
		}

		public function listfooditem(){
			$this->load->view('admin-kh4it/listfooditem');
		}
		public function listfoodcategory(){
			$this->load->view('admin-kh4it/listfoodcategory');
		}

		public function addfoodcategory(){
			$this->load->view('admin-kh4it/addfoodcategory');
		}
	}

?>