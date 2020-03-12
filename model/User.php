<?php
include_once("db.php"); 

class User extends db{
	
	public $db;
	public $user_id;
	public $user_name;
	public $user_name_tmp;
	public $user_password;
	public $user_fname;
	public $user_lname;
	public $user_birthdate;
	public $user_email;
	public $user_address;
	public $user_picture;
	public $user_picture_old;
	
	public $keyword;
	
	public function __construct(){
		parent::__construct(); 
		$this->db = new db();
	}
	
	public function insert(){
		$sql = "INSERT INTO user(user_name,user_name_tmp,user_password,user_fname,user_lname,user_birthdate,user_email,user_address,user_picture,user_picture_old)
				VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
		$this->db->query($sql,array(
			$this->user_name
			,$this->user_name_tmp
			,$this->user_password
			,$this->user_fname
			,$this->user_lname
			,$this->user_birthdate
			,$this->user_email
			,$this->user_address
			,$this->user_picture
			,$this->user_picture_old)
		);
	}
	
	public function get_by_username_password(){
		$sql = "SELECT user_id,user_name,user_name_tmp
				FROM user 
				WHERE user_name = ? AND user_password = ?";
		$query = $this->db->query($sql,array($this->user_name,$this->user_password));
		return $query;
	}
	
	public function get_user_detail(){
		$sql = "SELECT *
				FROM user
				WHERE user_id = ?";
		$query = $this->db->query($sql,array($this->user_id));
		return $query;
	}
	
	public function get_user_by_search(){
		$this->keyword .= "%";
		$sql = "SELECT user_id,user_fname,user_lname,user_picture
				FROM user
				where user_fname like ? 
				or user_lname like ? 
				or concat(user_fname,' ',user_lname) like ?";
		$query = $this->db->query($sql,array($this->keyword,$this->keyword,$this->keyword));
		return $query;
	}
	
	public function check_user(){
		$sql = "SELECT user_name
				FROM user
				where user_name = ?";
		$query = $this->db->query($sql,array($this->user_name));
		return $query;	
	}
	
	public function update_user(){
		$sql = "UPDATE user
				SET user_name_tmp = ?,
					user_password = ?,
					user_fname = ?,
					user_lname = ?,
					user_birthdate = ?,
					user_email = ?,
					user_address = ?
				WHERE user_id = ?";
		$this->db->query($sql,array($this->user_name_tmp,$this->user_password,$this->user_fname,$this->user_lname,$this->user_birthdate,$this->user_email,$this->user_address,$this->user_id));
	}
}


?>