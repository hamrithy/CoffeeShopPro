<?php
class DaoFood extends CI_Model{

	public function __construct(){
		parent::__construct();
		$this->load->model('dto/DtoFood');
	}

	public function getAllFoodItems($category=''){
		$sql = "SELECT A.foodid,
					A.title AS food_title,
					A.description AS food_description,
					A.foodtypeid,
					A.thumbnailurl,
					A.promotiontype,
					A.price,
					A.userid,
					B.title AS foodtype_title,
					B.description AS footype_description
				FROM
					FOODS A
				JOIN ( SELECT * FROM FOODTYPES WHERE recommend = '1' ORDER BY foodtypeid DESC) B 
				ON A.foodtypeid = B.foodtypeid";
		$query = $this->db->query($sql);
		return $query->result();
	}

	public function getAllFoodItemsByCategories($category=''){
		$sql = "SELECT A.foodid,
					A.title AS food_title,
					A.description AS food_description,
					A.foodtypeid,
					A.thumbnailurl,
					A.promotiontype,
					A.price,
					A.userid,
					B.title AS foodtype_title,
					B.description AS footype_description
				FROM
					FOODS A
				JOIN ( SELECT * FROM FOODTYPES ORDER BY foodtypeid DESC) B 
				ON A.foodtypeid = B.foodtypeid ";
		if($category!=''){
			$sql .= ' WHERE A.foodtypeid IN (SELECT foodtypeid FROM FOODTYPES WHERE parent_id = '. $category .')';
		}
				
		$query = $this->db->query($sql);
		return $query->result();
	}


	public function addFoodItem(DtoFood $food){
		$data = array('title' 			=>  $food->getTitle(),
					  'description'  	=>  str_replace(array("\r", "\n"), " ", $food->getDescription()),
					  'thumbnailurl'	=>	$food->getThumbnailurl(),
					  'promotiontype'	=>	$food->getPromotiontype(),
					  'price'			=>	$food->getPrice(),
					  'userid'			=>	$food->getUserid(),
					  'foodtypeid'		=>	$food->getFoodTypeid(),
					  'seotitle'		=>	$food->getSeotitle(),
					  'seodescription'	=>	str_replace(array("\r", "\n"), " ", $food->getSeodescription())
					);
		return $this->db->insert('FOODS', $data);
	}

	public function updateFoodItem(DtoFood $food){
		$data = array('title' 			=> 	$food->getTitle(),
					  'description'		=>	str_replace(array("\r", "\n"), " ", $food->getDescription()),
					  'thumbnailurl' 	=>	$food->getThumbnailurl(),
					  'promotiontype'	=>	$food->getPromotiontype(),
					  'price'			=>	$food->getPrice(),
					  'userid'			=>	$food->getUserid(),
					  'foodtypeid'		=>	$food->getFoodtypeid(),
					  'foodid'			=>	$food->getFoodid(),
					  'seotitle'		=>	$food->getSeotitle(),
					  'seodescription'	=>	str_replace(array("\r", "\n"), " ", $food->getSeodescription())
			);
		$this->db->where('foodid',$food->getFoodid());
		$this->db->update('FOODS', $data);
	}

	public function deleteFoodItem($id){
		$this->db->where('foodid', $id);
		return $this->db->delete('FOODS');
	}

	public function getFoodItem($id){
		$this->db->where('foodid',$id);
		$query = $this->db->get('FOODS');
		return $query->result();
	}

	//TODO: To get the food details by id
	public function getFoodDetails($foodId){
		$this->db->select("A.foodid, A.title As food_title, A.description As food_description, A.thumbnailurl, A.promotiontype, A.price, A.userid, B.title As foodtype_title, B.description As footype_description");
		$this->db->from("FOODS A");
		$this->db->join("FOODTYPES B",'A.foodtypeid=B.foodtypeid');
		$this->db->where("A.foodid", $foodId);
		$query = $this->db->get();
		log_message('debug',$query->num_rows());
		return $query->row();
	}
	
	
	public function listRecentFood($limit){
		$this->db->select('foodid,title, description,thumbnailurl,promotiontype,price');
		$this->db->from('FOODS');
		$this->db->limit($limit);
		$this->db->order_by("foodid","desc");
		$query = $this->db->get();
		return $query->result();
	}

	public function listBestoffer($type){
		$this->db->select("A.foodid, A.title , A.description , A.thumbnailurl, A.promotiontype, A.price, A.userid");
		$this->db->from("FOODS A");
		$this->db->where('A.promotiontype',$type);
		$this->db->order_by('A.foodid', 'desc');
		$this->db->limit(1);
		$query = $this->db->get();
		return $query->result();
	}

	public function countFood(){
		return $this->db->count_all('FOODS');
	} 

	public function getRecentFood(){
		$this->db->limit(5);
		$query = $this->db->get('FOODS');
		return $query->result(); 
	}
}