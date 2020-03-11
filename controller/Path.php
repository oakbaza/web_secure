<?php 
class Path {
	
	public $view;
	public $controller;
	public $model;
	public $image;
	public $url;
	public $url_image;
	
	public function __construct(){
		$this->view = $_SERVER['DOCUMENT_ROOT'].'/project/view/';
		$this->controller = $_SERVER['DOCUMENT_ROOT'].'/project/controller/';
		$this->model = $_SERVER['DOCUMENT_ROOT'].'/project/model/';
		$this->image = $_SERVER['DOCUMENT_ROOT'].'/project/uploads/images/';
		$this->url = 'http://'.$_SERVER['HTTP_HOST'].'/project/';
		$this->url_image = 'http://'.$_SERVER['HTTP_HOST'].'/project/uploads/images/';
	}
	
	//To database date form
	public function splitDateForm($date,$sp="-") {
		list($dd, $mm, $yy) = preg_split("[/|-]", $date);
		return $yy.'-'.$mm.'-'.$dd;
	}
	
	//database to date form
	public function splitDateForm2($date,$sp="/") {
		list($yy, $mm, $dd) = preg_split("[/|-]", $date);
		return $dd.'/'.$mm.'/'.$yy;
	}
	
	public function pre($data){
		echo "<pre>";
		print_r($data);
		echo "</pre>";
	}
	
	public function validate_image($img){
		$condition = array();
		$condition['status'] = 1;
		$condition['message'] = "";
		$target_file = $this->image. basename($img["name"]);
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
		
		
		// Check if image file is a actual image or fake image
		$check = getimagesize($img["tmp_name"]);
		if($check !== false) {
			$condition['message'] = "File is an image - " . $check["mime"] . ".";
			$condition['status'] = 1;
		} else {
			$condition['message'] = "File is not an image.";
			$condition['status'] = 0;
		}
		
		// Check if file already exists
		if (file_exists($target_file)) {
			$condition['message'] = "Sorry, file already exists.";
			$condition['status'] = 0;
		}
		
		// Check file size
		if ($img["size"] > 500000) {
			$condition['message'] = "Sorry, your file is too large.";
			$condition['status'] = 0;
		}
		
		// Allow certain file formats
		if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" ) {
			$condition['message'] = "Sorry, only JPG, JPEG, PNG files are allowed.";
			$condition['status'] = 0;
		}
		
		return $condition;
	}
	
}
?>