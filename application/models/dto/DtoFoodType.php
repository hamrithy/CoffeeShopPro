<?php
class DtoFoodType{

	private $foodtypeid;
	private $title;
	private $description;
	private $recommend;
	private $parentid;
	
	public function getParentid(){
		return $this->parentid;
	}
	
	public function setParentid($parentid){
		$this->parentid = $parentid;
	}
	
	public function getFoodtypeid(){
		return $this->foodtypeid;
	}
	
	public function setFoodtypeid($foodtypeid){
		$this->foodtypeid = $foodtypeid;
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

	public function getRecommend(){
		return $this->recommend;
	}

	public function setRecommend($recommend){
		$this->recommend = $recommend;
	}

	
}