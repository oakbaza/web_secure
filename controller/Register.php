<?php 
include_once('Path.php');
$path = new Path();
include_once($path->model.'user.php');

if(isset($_POST['submit'])){
	$success = true;
	$m_user = new User();
	
	//check username
	$m_user->user_name = $_POST['username_regis'];
	if($m_user->check_user()->numRows() > 0){
		$success = false;
	}
	
	$image = $_FILES['upload_regis'];
	$image_type = end(explode('/',$image['type']));
	$image_old_name = $image['name'];
	$image_name = time().'.'.$image_type;
	
	// check image
	$condition = $path->validate_image($image);
	
	// Check if $uploadOk is set to 0 by an error
	if ($condition['status'] == 0) {
		$condition['message'] = "Sorry, your file was not uploaded.";
		$success = false;
	// if everything is ok, try to upload file
	} else {
		if (!move_uploaded_file($image["tmp_name"], $path->image.$image_name)){
			$success = false;
		} 
	}
	
	if($success){
		/* Input data*/
		$m_user->user_name = $_POST['username_regis'];
		$m_user->user_name_tmp = $_POST['username_regis'];
		$m_user->user_password = $_POST['password_regis'];
		$m_user->user_fname = $_POST['fname_regis'];
		$m_user->user_lname = $_POST['lname_regis'];
		$m_user->user_birthdate = $path->splitDateForm($_POST['birthdate_regis']);
		$m_user->user_email = $_POST['email_regis'];
		$m_user->user_address = $_POST['address_regis'];
		$m_user->user_picture = $image_name;
		$m_user->user_picture_old = $image_old_name;
		$m_user->insert();
	}else{
		$location = 'location: '.$path->url.'view/index.php?error='.$condition['message'];
		header($location);
	}
	
	$location = 'location: '.$path->url.'view/index.php?success=Success!';
	header($location);
}else{
	$location = 'location: '.$path->url.'view/index.php';
	header($location);
}

?>