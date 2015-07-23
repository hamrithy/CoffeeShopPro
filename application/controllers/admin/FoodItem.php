<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class FoodItem extends ADMIN_Controller{

		public function __construct(){
			parent::__construct();
			$this->load->model('dto/DtoFood');
			$this->load->model('dao/DaoFood');
		}
		
		public function index(){
			$this->actionGetAllFoodItems();
		}

		public function addfooditem(){
			$this->load->view('admin-kh4it/addfooditem');
		}

		 public function listfooditems(){
		 	$this->actionGetAllFoodItems();
		 }

		public function actionGetAllFoodItems(){
			$data['foodItems'] = $this->DaoFood->getAllFoodItems();
			$this->load->view('admin-kh4it/listfooditem', $data);
		}
	}

?>