<?php


include_once 'config.php';


$fullname = $_GET['fullname'];
$class = "";



$sql ="UPDATE student SET class=:class  WHERE fullname=:Fullname ";

	$prep = $con->prepare($sql);
    $prep->bindParam(':class', $class);
	$prep->bindParam(':Fullname', $fullname);
	$prep->execute();

	header("Location: classAdmin.php");
















?>