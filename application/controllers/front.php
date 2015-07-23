<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Front extends CI_Controller{

		public function __construct(){
			parent::__construct();
		}

		public function index(){
			$this->load->view('front/index');
		}
		
		public function menu(){
			$this->load->view('front/menu');
		}
		
		public function recipe(){
			$this->load->view('front/recipe');
		}
		
		public function booking(){
			$this->load->view('front/booking');
		}

		public function blog(){
			$this->load->view('front/blog');
		}
		
		public function contact(){
			$this->load->view('front/contact');
		}
		
		public function post(){
			$this->load->view('front/post');
		}

	}


?>