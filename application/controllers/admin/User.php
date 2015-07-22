<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class User extends ADMIN_Controller{

		public function __construct(){
			parent::__construct();
		}
		
		public function index(){
			$this->listusers();
		}

		public function listusers(){
			$this->load->view('admin-kh4it/listuser');
		}

		public function adduser(){
			$this->load->view('admin-kh4it/adduser');
		}
	}

?>