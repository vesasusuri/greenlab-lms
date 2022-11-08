<?php



include_once 'config.php';

if (isset($_POST['submit']))
		{

		$math = $_POST['math'];
		$bio = $_POST['bio'];
		$eng = $_POST['eng'];
		$fullname = $_POST['fullname'];

		$mT = $_POST['missingTrue'];
		$mF = $_POST['missingFalse'];


		$sql = "SELECT * from student";

		$sql = "UPDATE student SET `math-grade`=:math , `bio-grade`=:bio, `english-grade`=:eng, `missingTrue`=:mT, `missingFalse`=:mF WHERE fullname=:fullname";


		$newUser = $con->prepare($sql);

					$newUser->bindParam(':fullname',$fullname);
					$newUser->bindParam(':math',$math);
					$newUser->bindParam(':bio',$bio);
					$newUser->bindParam(':eng',$eng);
					$newUser->bindParam(':mT',$mT);
					$newUser->bindParam(':mF',$mF);

					$newUser->execute();

					header("Location: classAdmin.php");

		
	
	}

?>









