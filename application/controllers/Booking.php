<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Booking extends CI_Controller{

		public function __construct(){
			parent::__construct();
		}

		public function index(){
			$data["title"] = "Reservation";
			$data["page"] = "Reservation";
			$this->load->view('front/booking',$data);
		}

		public function sendEmail(){
			$config = Array( 
					  'protocol'  => 'smtp', 
					  'smtp_host' => 'ssl://smtp.googlemail.com', 
					  'smtp_port' => '465', 
					  'smtp_user' => 'darapenhchet@gmail.com', 
					  'smtp_pass' => ''); 

		  	$this->load->library('email', $config); 
		  	$this->email->set_newline("\r\n");

			$name = $this->input->post('name');
			$email = $this->input->post('email');
			$message = $this->input->post('message');
			log_message("debug","EMIAL".$email);
			$this->email->from($email, $name);
			$this->email->to('darapenhchet@gmail.com'); 
			$this->email->subject('Email Tesing');
			$this->email->message($message);	
			log_message('debug',$this->email->print_debugger()); 
			if (!$this->email->send()) {
			    $data["ERROR"] = true;
			}else{
				$data["ERROR"] = false;
			}
			echo json_encode($data);
		}

	}

?>