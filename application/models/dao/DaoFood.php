<?php
class Food extends CI_Model{

	public function __construct(){
		parent::__construct();
		$this->load->database();
		$this->load->model('dto/DtoFood');
	}

	public function getAllFoods(){
		$query = $this->db->get('foods');
		return $query->result();
	}

	public function addFood(DtoFood $food){
		$data = array('foodid' =>  $food->getFoodid(),
					  'title'  =>	$food->getTittll()
		);
		return $this->db->insert('foods', $data);
	}

	public function deleteFood($id){
		$this->db->where('foodid', $id);
		return $this->db->delete('foods');
	}
}