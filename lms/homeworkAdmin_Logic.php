	<?php

	include_once 'config.php';



	if (isset($_POST['submit']))
			{

				$target = "C:/xampp/htdocs/lms/homeworkImages/".basename($_FILES['homework_image']['name']);

				$title = $_POST['homework_Title'];
				$information = $_POST['homework_info'];
				$image = $_FILES['homework_image']['name'];
				$class = $_POST['class'];



				$sqli= "SELECT fullname FROM student where class = :class";           
				$prep = $con->prepare($sqli);  
				$prep->bindParam(':class', $class);     
				$prep->execute();
				$students = $prep->fetchAll();
	
				
			
				foreach($students as $student){


				$sql = "INSERT INTO homework(title,information,image,student, class, teacher) VALUES (:title, :information, :image, :student, :class, :teacher)";

			

				$update = $con->prepare($sql);

				$update->bindParam(':title',$title);
				$update->bindParam(':information',$information);
				$update->bindParam(':image',$image);
				$update->bindParam(':student',$student['fullname']);
				$update->bindParam(':teacher',$_SESSION['fullname']);
				$update->bindParam(':class',$class);

				$update->execute();


				if (move_uploaded_file($_FILES['homework_image']['tmp_name'], $target)){
					echo "Inserted Succesfully";
					header("Location: homeworkAdmin.php");
				
				}
				else if($_FILES['homework_image']['size'] == 0){
					echo "Inserted Succesfully";
					header("Location: homeworkAdmin.php");
				
				}
				else{
					echo "A problem ocured while uploading the homework";
				}


			}

			}




	?>