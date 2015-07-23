<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Slide extends ADMIN_Controller{

		public function __construct(){
			parent::__construct();

		}
		public function index(){
			$this->listSlidePro();
		}
		public function listslide(){
			$this->listSlidePro();

		}
		public function addslide(){
			$this->load->view('admin-kh4it/addslide');
		}
		public function addSlidePro(){
			$this->load->model('dao/DaoSlide');
			$this->load->model('dto/DtoSlide');

			$this->DtoSlide->setTitle($this->input->post('txttitle'));
			$this->DtoSlide->setCaption($this->input->post('txtcaption'));
			$this->DtoSlide->setLinkto($this->input->post('txtlinkto'));
			$this->DtoSlide->setImageurl($this->input->post('txtimage'));
			$this->DtoSlide->setOrdering($this->input->post('txtorder'));
			$this->DtoSlide->setUserid(1);

			$this->DaoSlide->addSlide($this->DtoSlide);
			$this->index();


		}
		public function listSlidePro(){
			$this->load->model('dao/DaoSlide');
			$data['listSlide'] = $this->DaoSlide->listSlide();
			$this->load->view("admin-kh4it/listslide", $data);
		}


	}

?>