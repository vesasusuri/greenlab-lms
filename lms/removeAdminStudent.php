<?php


include_once 'config.php';


$fullname = $_GET['fullname'];
$blank = "";



$sql ="UPDATE student SET class=:class, school=:school   WHERE fullname=:Fullname ";

	$prep = $con->prepare($sql);
    $prep->bindParam(':class', $blank);
    $prep->bindParam(':school', $blank);
	$prep->bindParam(':Fullname', $fullname);
	$prep->execute();

	header("Location: schoolAdmin.php");
















?>