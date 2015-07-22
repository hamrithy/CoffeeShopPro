<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class FoodCateogry extends ADMIN_Controller{

		public function __construct(){
			parent::__construct();
		}
		
		public function index(){
			$this->listfoodcategory();
		}

		public function listfoodcategory(){
			$this->load->view('admin-kh4it/listfoodcategory');
		}

		public function addfoodcategory(){
			$this->load->view('admin-kh4it/addfoodcategory');
		}
	}

?>