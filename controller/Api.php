<?php 
include_once('Path.php');
$path = new Path();
include_once($path->model.'user.php');
include_once($path->model.'chat.php');
$method = $_SERVER['REQUEST_METHOD'];
session_start();

if($method == "GET"){
		$m_user = new User();
		$m_user->user_id = $_GET['userid'];
		$data = $m_user->get_user_detail()->fetchArray();
		echo json_encode($data);
}else if($method == "POST"){
	if(isset($_POST['search'])){
		if(!empty($_POST['keyword'])){
			$keyword = preg_replace('/[^A-Za-z0-9. -]/', '', $_POST['keyword']);;
			$m_user = new User();
			$m_user->keyword = $keyword;
			$result = $m_user->get_user_by_search()->fetchAll();
			echo json_encode($result);
		}
	}else if(isset($_POST['edit_profile'])){
		if($_SESSION['user_id'] == $_POST['user_id']){
			$m_user = new User();
			$m_user->user_id = $_POST['user_id'];
			$m_user->user_name_tmp = $_POST['user_name'];
			$m_user->user_password= $_POST['user_password'];
			$m_user->user_fname= $_POST['user_fname'];
			$m_user->user_lname= $_POST['user_lname'];
			$m_user->user_birthdate = $path->splitDateForm($_POST['user_birthdate']);
			$m_user->user_email= $_POST['user_email'];
			$m_user->user_address= $_POST['user_address'];
			$m_user->update_user();
			echo json_encode("Success");
		}else{
			echo json_encode("Failed");
		}
	}else if(isset($_POST['send_message'])){
		if(isset($_SESSION['user_id'])){
			date_default_timezone_set("Asia/Bangkok");
			$m_chat = new Chat();
			$m_chat->chat_sender = $_POST['chat_sender'];
			$m_chat->chat_reciever = $_POST['chat_reciever'];
			$m_chat->chat_message = htmlspecialchars($_POST['chat_message']);
			$m_chat->send_message();
			echo json_encode("success");
		}else{
			echo json_encode("error");
		}
	}else if($_POST['load_message']){
		$m_chat = new Chat();
		$m_chat->chat_sender = $_POST['chat_sender'];
		$m_chat->chat_reciever = $_POST['chat_reciever'];
		$data = $m_chat->get_chat()->fetchAll();
		echo json_encode($data);
	}else{
		echo json_encode("error");
	}
}
?>