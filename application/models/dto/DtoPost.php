<<<<<<< HEAD
<?php

class DtoPost{

	private $postid;
	private $title;
	private $shortdescription;
	private $longdescription;
	private $thumbnailurl;
	private $userid;

	public function getPostid(){
		return $this->postid;
	}

	public function setPostid($postid){
		$this->postid = $postid;
	}

	public function getTitle(){
		return $this->title;
	}

	public function setTitle($title){
		$this->title = $title;
	}

	public function getShortdescription(){
		return $this->shortdescription;
	}

	public function setShortdescription($shortdescription){
		$this->shortdescription = $shortdescription;
	}

	public function getLongdescription(){
		return $this->longdescription;
	}

	public function setLongdescription($longdescription){
		$this->longdescription = $longdescription;
	}

	public function getThumbnailurl(){
		return $this->thumbnailurl;
	}

	public function setThumbnailurl($thumbnailurl){
		$this->thumbnailurl = $thumbnailurl;
	}

	public function getUserid(){
		return $this->userid;
	}

	public function setUserid($userid){
		$this->userid = $userid;
	}

=======
<?php

class DtoPost{

	private $postid;
	private $title;
	private $shortdescription;
	private $longdescription;
	private $thumbnailurl;
	private $userid;
	private $postdate;

	public function getPostDate(){
		return $this->postdate;
	}
	
	public function setPostDate($postdate){
		$this->postdate = $postdate;
	}
	
	public function getPostid(){
		return $this->postid;
	}

	public function setPostid($postid){
		$this->postid = $postid;
	}

	public function getTitle(){
		return $this->title;
	}

	public function setTitle($title){
		$this->title = $title;
	}

	public function getShortdescription(){
		return $this->shortdescription;
	}

	public function setShortdescription($shortdescription){
		$this->shortdescription = $shortdescription;
	}

	public function getLongdescription(){
		return $this->longdescription;
	}

	public function setLongdescription($longdescription){
		$this->longdescription = $longdescription;
	}

	public function getThumbnailurl(){
		return $this->thumbnailurl;
	}

	public function setThumbnailurl($thumbnailurl){
		$this->thumbnailurl = $thumbnailurl;
	}

	public function getUserid(){
		return $this->userid;
	}

	public function setUserid($userid){
		$this->userid = $userid;
	}

>>>>>>> 9ec93518676c5b34fe40b6f61c1365562f78aee2
}