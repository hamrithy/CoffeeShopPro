<?php
class FoodTypes extends CI_Model{

	function __construct(){
		parent::__construct();
		$this->load->model('dto/DtoFoodType');

	}

	public function addFoodType(DtoFoodType $foodType){
		$data = array('foodTypeid'	 =>		$foodType->getFoodTypeid(),
					  'title' 		 => 	$foodType->getTitle(),
					  'description'  =>		$foodType->getDescription()
			);
		return $this->db->insert('foodtypes', $foodType);
	}

	public function deleteFoodType($id){
		$this->db->where('foodtypeid',$id);
		return $this->db->delete('foodtypes');
	}

	public function updateFoodType(DtoFoodType $foodType){
		
	}

	public function getAllFoodTypes(){
		$query = $this->db->get('foodtypes');
		return $query->result();
	}
}