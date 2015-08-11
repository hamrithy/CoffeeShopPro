<?php
class DaoFoodType extends CI_Model{

	function __construct(){
		parent::__construct();
		$this->load->model('dto/DtoFoodType');
	}

	public function addFoodType(DtoFoodType $foodType){
		$data = array("title" 		 => 	$foodType->getTitle(),
					  "description"  =>		str_replace(array("\r", "\n"), " ", $foodType->getDescription()),
					  "recommend"	 =>		(($foodType->getRecommend()=="") ? "0" : "1")
			);
		return $this->db->insert('FOODTYPES', $data);
	}

	public function deleteFoodType($id){
		$this->db->where('foodtypeid',$id);
		$this->db->delete('FOODTYPES');
	}

	public function getAllFoodTypes(){
		$this->db->order_by('foodtypeid', 'desc');
		$query = $this->db->get('FOODTYPES');
		return $query->result();
	}

	public function getAllFoodTypesAndCountFoods(){
		$sql = "SELECT *, (SELECT COUNT(A.foodid) FROM FOODS A WHERE A.foodtypeid=B.foodtypeid) AS TOTL FROM FOODTYPES B WHERE B.recommend='1' ORDER BY TOTL DESC, B.foodtypeid DESC"; 
		$query = $this->db->query($sql);
		return $query->result();
	}

	public function getAllFoodTypesOrderByTitle(){
		$this->db->order_by('title', 'ASC');
		$query = $this->db->get('FOODTYPES');
		return $query->result();
	}

	public function getFoodType($id){
		$this->db->where('foodtypeid',$id);
		$query = $this->db->get('FOODTYPES');
		return $query->result();
	}

	public function updateFoodType(DtoFoodType $foodType){
		$data = array('title' 		=> $foodType->getTitle(),
					  'description' => str_replace(array("\r", "\n"), " ", $foodType->getDescription()),
					  "recommend"	=>		(($foodType->getRecommend()=="") ? "0" : "1"),
					  'foodtypeid' 	=> $foodType->getFoodtypeid()
		 );
		$this->db->where('foodtypeid', $this->DtoFoodType->getFoodtypeid());
		$this->db->update('FOODTYPES', $data);
		if($this->db->affected_rows() == 1){
			return true;
		}else{
			return false;
		}
	}
	
	public function listRecentFoodType($limit){
		$this->db->select('foodtypeid,title, description');
		$this->db->from('FOODTYPES');
		$this->db->limit($limit);
		$this->db->order_by("foodtypeid","desc");
		$query = $this->db->get();
		return $query->result();
	}

	public function listFoodCategory(){
		$this->db->select('foodtypeid,title, description');
		$this->db->from('FOODTYPES');
		$this->db->order_by("foodtypeid","desc");
		$query = $this->db->get();
		return $query->result();
	}

	public function countFoodType(){
		return $this->db->count_all('FOODTYPES');
	}
}