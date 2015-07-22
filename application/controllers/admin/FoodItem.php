<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class FoodItem extends ADMIN_Controller{

		public function __construct(){
			parent::__construct();
		}
		
		public function index(){
			$this->listfooditem();
		}

		public function addfooditem(){
			$this->load->view('admin-kh4it/addfooditem');
		}

		public function listfooditem(){
			$this->load->view('admin-kh4it/listfooditem');
		}
	}

?>