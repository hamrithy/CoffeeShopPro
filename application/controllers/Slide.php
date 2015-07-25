<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	class Slide extends CI_Controller{

		public function __construct(){
			parent::__construct();

		}

		public function listSlide(){
			$this->load->model('dao/DaoSlide');
			$result = $this->DaoSlide->listSlide();
			header('Content-Type:application/json' );
			echo json_encode($result);
		}

	}

?>