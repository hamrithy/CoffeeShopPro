<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Menu extends ADMIN_Controller{

		public function __construct(){
			parent::__construct();
		}
		
		public function index(){
			$this->listmenu();
		}

		public function listmenu(){
			$this->load->view('admin-kh4it/listmenu');
		}

		public function addmenu(){
			$this->load->view('admin-kh4it/addmenu');
		}

	}

?>