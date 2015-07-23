<?php
class FoodDto  extends CI_Model {

	private $foodid;
	private $title;
	private $description;
	private $thumbnailurl;
	private $promotiontype;
	private $price;
	private $userid;
	private $foodtypeid;
	
	public function getFoodid(){
		return $this->foodid;
	}
	
	public function setFoodid($foodid){
		$this->foodid = $foodid;
	}
	
	public function getTitle(){
		return $this->title;
	}
	
	public function setTitle($title){
		$this->title = $title;
	}
	
	public function getDescription(){
		return $this->description;
	}
	
	public function setDescription($description){
		$this->description = $description;
	}
	
	public function getThumbnailurl(){
		return $this->thumbnailurl;
	}
	
	public function setThumbnailurl($thumbnailurl){
		$this->thumbnailurl = $thumbnailurl;
	}
	
	public function getPromotiontype(){
		return $this->promotiontype;
	}
	
	public function setPromotiontype($promotiontype){
		$this->promotiontype = $promotiontype;
	}
	
	public function getPrice(){
		return $this->price;
	}
	
	public function setPrice($price){
		$this->price = $price;
	}
	
	public function getUserid(){
		return $this->userid;
	}
	
	public function setUserid($userid){
		$this->userid = $userid;
	}
	
	public function getFoodtypeid(){
		return $this->foodtypeid;
	}
	
	public function setFoodtypeid($foodtypeid){
		$this->foodtypeid = $foodtypeid;
	}
	
}