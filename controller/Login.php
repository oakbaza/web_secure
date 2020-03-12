<?php 
include_once('Path.php');
$path = new Path();
include_once($path->model.'user.php');

//$path->pre($_POST);
if(isset($_POST['login'])){
	$m_user = new User();
	$m_user->user_name = $_POST['username'];
	$m_user->user_password = $_POST['password'];
	$user_data = $m_user->get_by_username_password();
	if($user_data->numRows() != 0){
		session_start();
		$user_data = $user_data->fetchArray();
		$_SESSION['username'] = $user_data['user_name_tmp'];
		$_SESSION['user_id'] = $user_data['user_id'];
		$location = 'location: '.$path->url.'view/profile.php';
		header($location);
	}else{
		$location = 'location: '.$path->url.'view/index.php';
		header($location);
	}
}else{
	$location = 'location: '.$path->url.'view/index.php';
	header($location);
}

?>