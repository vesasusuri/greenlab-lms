<?php 

session_start();

	$host='localhost';
	$db ='pupill';
	$user='root';
	$pass='';

	

	try {
		$con = new PDO("mysql:host=$host; dbname=$db", $user, $pass);
		
	} 
	catch (Exception $e) {
		echo "Our database didnt connect";
	}



 ?>