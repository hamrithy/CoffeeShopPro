<?php
class DaoFood extends CI_Model{

	public function __construct(){
		parent::__construct();
		$this->load->model('dto/DtoFood');
	}

	public function getAllFoodItems(){
		$this->db->from("FOODS");
		$this->db->join("FOODTYPES",'FOODS.foodtypeid=FOODTYPES.foodtypeid');
		$query = $this->db->get();

		return $query->result();
	}

	public function addFoodItem(DtoFood $food){
		$data = array('title' 			=>  $food->getTitle(),
					  'descriptioin'  	=>  $food->getDescription(),
					  'thumbnailurl'	=>	$food->getThumbnailurl(),
					  'promotiontype'	=>	$food->getPromotiontype(),
					  'price'			=>	$food->getPrice(),
					  'userid'			=>	$food->getUserid(),
					  'foodtypeid'		=>	$food->getFoodTypeid()
					);
		return $this->db->insert('FOODS', $data);
	}

	public function updateFoodItem(DtoFood $food){
		$data = array('title' 			=> 	$food->getTitle(),
					  'desciption'		=>	$food->getDescription(),
					  'thumbnailurl' 	=>	$food->getThumbnailurl(),
					  'promotiontype'	=>	$food->getPromotiontype(),
					  'price'			=>	$food->getPrice(),
					  'userid'			=>	$food->getUserid(),
					  'foodtypeid'		=>	$food->getFoodtypeid(),
					  'foodid'			=>	$food->getFoodid()
			);
		$this->db->where('foodid', $this->$food->getFoodid());
		return $this->db->update('FOODS', $data);
	}

	public function deleteFoodItem($id){
		$this->db->where('foodid', $id);
		return $this->db->delete('FOODS');
	}

	public function getFoodItem($id){
		$this->db->where('foodid', $id);
		$query = $this->db->get('FOODS');
		return $query->result();
	}

}