<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Food extends CI_Controller{

		public function __construct(){
			parent::__construct();
			$this->load->model('dao/DaoFood');
		}
		public function getFoodDetails($food_id){
			$data["page"] = "Menu";
			$data["title"] = "Food Details";
			$data["food"] = $this->DaoFood->getFoodDetails($food_id);
			$this->load->view("front/fooddetail", $data);
		}
		
	}

?>