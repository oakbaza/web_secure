<?php 
include_once('Path.php');
$path = new Path();
session_start();
	session_unset();
	session_destroy();
	
	$location = 'location: '.$path->url.'view/index.php';
	header($location);
?>