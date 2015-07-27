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
					  'smtp_port' => 465, 
					  'smtp_user' => 'darapenhchet@gmail.com', 
					  'smtp_pass' => '', ); 

		  	$this->load->library('email', $config); 
		  	$this->email->set_newline("\r\n");

			$name = $this->input->post('name');
			$email = $this->input->post('email');
			$website = $this->input->post('website');
			$message = $this->input->post('message');

			$this->email->from($email, $name);
			$this->email->to('darapenhchet@gmail.com'); 
			$this->email->subject('Email Tesing');
			$this->email->message($message);	

			if (!$this->email->send()) {
			    log_message('debug',$this->email->print_debugger()); 
			    $data["ERROR"] = true;
			}else{
				$data["ERROR"] = false;
			}
			echo json_encode($data);
		}

	}

?>