<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class User extends ADMIN_Controller{

		public function __construct(){
			parent::__construct();
			$this->load->model("dao/DaoUser");
		}
		
		public function index(){
			$this->listusers();
		}

		public function listusers(){
			$data["users"] = $this->DaoUser->get_all_users();
			$this->load->view('admin-kh4it/listuser', $data);
		}

		public function adduser(){
			$this->load->view('admin-kh4it/adduser');
		}

		public function deleteUser($user_id){
			$data["users"] = $this->DaoUser->get_all_users();
			echo json_encode($data);
		}
	}

?>