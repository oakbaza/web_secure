<?php 
class Log_file{
	public $ipaddress;
	public $sql;

	public function __construct() {
		if (getenv('HTTP_CLIENT_IP'))
			$this->ipaddress = getenv('HTTP_CLIENT_IP');
		else if(getenv('HTTP_X_FORWARDED_FOR'))
			$this->ipaddress = getenv('HTTP_X_FORWARDED_FOR');
		else if(getenv('HTTP_X_FORWARDED'))
			$this->ipaddress = getenv('HTTP_X_FORWARDED');
		else if(getenv('HTTP_FORWARDED_FOR'))
			$this->ipaddress = getenv('HTTP_FORWARDED_FOR');
		else if(getenv('HTTP_FORWARDED'))
			$this->ipaddress = getenv('HTTP_FORWARDED');
		else if(getenv('REMOTE_ADDR'))
			$this->ipaddress = getenv('REMOTE_ADDR');
		else
			$this->ipaddress = 'UNKNOWN';
	}

	public function write_log(){
		date_default_timezone_set("Asia/Bangkok");
		$path = $_SERVER['DOCUMENT_ROOT'].'/project/log/';
		if(isset($_SESSION['user_id'])){
			$log_name = $path.date('Y-m-d')."_user.log";
			$log = fopen($log_name,"a");
			$text = date("Y-m-d H:m:s")."\t".$_SESSION['user_id']."\t".$_SERVER['HTTP_HOST'].
		"\t".$_SERVER['REQUEST_URI']."\t|\t".$this->sql."\t".$this->ipaddress."\n";
		}else{
			$log_name = $path.date('Y-m-d')."_guess.log";
			$log = fopen($log_name,"a");
			$text = date("Y-m-d H:m:s")."\t".$_SERVER['HTTP_HOST'].
		"\t".$_SERVER['REQUEST_URI']."\t|\t".$this->sql."\t".$this->ipaddress."\n";
		}
		fwrite($log,$text);
		fclose($log);
	}
}


?>