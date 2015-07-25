<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Menu extends CI_Controller{

		public function __construct(){
			parent::__construct();
			$this->load->model('dao/DaoFoodType');
			$this->load->model('dao/DaoFood');
		}

		public function index(){
			$this->allFoods();
		}

		public function allFoods(){
			$data["categories"] = $this->DaoFoodType->getAllFoodTypes();
			$data["foods"] = $this->DaoFood->getAllFoodItems();
			$this->load->view('front/menu', $data);
		}
		
	}

?>