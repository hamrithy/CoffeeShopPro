<?php

	class Slide extends CI_Controller{

		public function __construct(){
			parent::__construct();

		}
		public function index(){
			$this->load->view('admin-kh4it/listslide');
		}
		public function listslide(){
			$this->load->view('admin-kh4it/listslide');

		}
		public function addslide(){
			$this->load->view('admin-kh4it/addslide');
		}
	}

?>