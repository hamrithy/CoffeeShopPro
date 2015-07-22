<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Auth extends CI_Controller{

		public function __construct(){
			parent::__construct();
			$this->load->library('encryption');
			$this->load->model('dto/DtoUser');
		}

		private function isLoggedIn(){
			$this->session->userdata('logged_in');			
			$isLoggedIn = $this->session->userdata('logged_in');			
			if(isset($isLoggedIn) || $isLoggedIn==true){
				return true;
			}else{
				return false;
			}
		}

		public function index(){
			if($this->isLoggedIn()){
				redirect('admin/post/dashboard');
			}else{
				$this->login();
			}
		}
		
		public function login(){
			$this->load->view('admin-kh4it/index');
		}

		public function logout(){
			$this->session->unset_userdata("logged_in");
			$this->login();
		}

		public function authenticate(){
			$user = new DtoUser();
			$username=$this->input->post('username');
			$password=$this->input->post('password');
			$this->session->set_userdata("logged_in",true);	
			$this->session->set_userdata("username",$username);	
			$this->session->set_userdata("id", $username);	

			log_message('debug', $username);
			log_message('debug', $password);

			$ciphertext = $this->encryption->encrypt($password);	// ENCRYPTION PASSWORD
			log_message('debug', "ENCRYPTION=".$ciphertext);
			log_message('debug', "DECRYPTION=".$this->encryption->decrypt($ciphertext));	// DECRYPTION PASSWORD
			
			redirect("admin/post");
		}
	}

?>