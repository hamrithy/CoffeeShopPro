<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Page extends ADMIN_Controller{

		public function __construct(){
			parent::__construct();
		}
		
		public function index(){
			$this->listpage();
		}

		public function listpage(){
			$this->load->view('admin-kh4it/listpage');
		}

		public function addpage(){
			$this->load->view('admin-kh4it/addpage');
		}
	}

?>