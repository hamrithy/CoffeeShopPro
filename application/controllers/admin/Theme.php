<?php
	class Theme extends ADMIN_Controller{

		public function __Construct(){
			parent::__Construct();
			$this->load->helper('file');
			$this->load->helper('url');
			$this->load->helper('mygetpath');

		}

		public function Index(){
			$name = "index";
			$path_to_view = get_view_path($name); 
			$files = read_file(''.$path_to_view .'');
			$filename = $name .".php";
			$data= array("filename" => $filename, "files" => $files, "filepath" => $name );
			$this->load->view('admin-kh4it/theme-editor', $data);
		}

		public function showfile($fname){
			$name = $fname;
			$path_to_view = get_view_path($name); 
			$files = read_file(''.$path_to_view .'');
			$filename = $name .".php";
			$data= array("filename" => $filename, "files" => $files, "filepath" => $name );
			$this->load->view('admin-kh4it/theme-editor', $data);
		}

		
	}


?>