<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Home extends ADMIN_CONTROLLER{

		public function __construct(){
			parent::__construct();
		}

		public function index(){
			$this->load->view('front/index');
		}

	}

?>