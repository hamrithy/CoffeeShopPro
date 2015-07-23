<?php
class DaoFood extends CI_Model{

	public function __construct(){
		parent::__construct();
		$this->load->model('dto/DtoFood');
	}

	public function getAllFoodItems(){
		$query = $this->db->get('FOODS');
		return $query->result();
	}

	public function addFood(DtoFood $food){
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

	// public function deleteFood($id){
	// 	$this->db->where('foodid', $id);
	// 	return $this->db->delete('foods');
	// }
}