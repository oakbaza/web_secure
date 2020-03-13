<?php 
include_once("db.php");
class Chat extends db{
	public $chat_id;
	public $chat_sender;
	public $chat_reciever;
	public $chat_message;
	public $chat_time;
	
	public function __construct(){
		parent::__construct(); 
		$this->db = new db();
	}
	
	public function send_message(){
		$sql = "INSERT INTO chat(chat_sender,chat_reciever,chat_message)
				VALUES(?, ?, ?)";
		$this->db->query($sql,array($this->chat_sender,$this->chat_reciever,$this->chat_message));
	}
	
	public function get_chat(){
		$sql = "SELECT *
				FROM chat
				WHERE (chat_sender = ? AND chat_reciever = ?) OR (chat_sender = ? AND chat_reciever = ?)
				ORDER BY chat_time ASC";
		$query = $this->db->query($sql,array($this->chat_sender,$this->chat_reciever,$this->chat_reciever,$this->chat_sender));
		return $query;
	}

}

?>