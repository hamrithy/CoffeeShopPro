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

		public function addUserPro(){
			
			$this->load->model("dao/DaoUser");
			$this->load->model("dto/DtoUser");
			
			$user = new DtoUser();
			$userDao = new DaoUser();

			$user->setUsername($this->input->post('username'));
			$user->setPassword($this->input->post('password'));
			$user->setUsertype($this->input->post('usertype'));
			$user->setActive($this->input->post("status"));
			
			if($userDao->check_duplicate_user_by_username($user->getUsername())>0){
				$data["ERROR"] = true;
				$data["ERR_MSG"] = "User already exist.";
			}else{
				$userDao->create_new_user($user);
				$data["SUCCESS"] = true;
			}
			echo json_encode($data);
		}

		public function deleteUser($user_id){
			
		}

		public function updateUser($user_id){
			$data["result"] = get_user_by_id($user_id);
			$this->load->view('admin-kh4it/updateuser');
		}

		public function rest_users(){
			$data["users"] = $this->DaoUser->get_all_users();
			echo json_encode($data);
		}
	}

?>