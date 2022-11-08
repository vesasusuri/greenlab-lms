<?php
include_once 'config.php';





if (isset($_POST['submit']))
        {



            $target = "C:/xampp/htdocs/lms/submitedImages/".basename($_FILES['homework_image']['name']);



            $answer = $_POST['answer'];
            $image = $_FILES['homework_image']['name'];
            $class = $_SESSION["class"];

            $completed = "true";



            $sqlia = "SELECT teacher,title FROM homework where id = :id and student = :fullname";    

            $updateIA = $con->prepare($sqlia);
            $updateIA->bindParam(':id',$_SESSION["id"]);
            $updateIA->bindParam(':fullname',$_SESSION["fullname"]);
            $updateIA->execute();
            $teacherIA = $updateIA->fetchAll();

            print_r($teacherIA);
            print_r($teacherIA[0]['teacher']);

            

            $sql = "INSERT INTO homeworksubmit(title,answer,image,class, homeworkNumber, student, teacher) VALUES (:title, :answer, :image, :class, :homeworkNumber, :student, :teacher)";    

            $update = $con->prepare($sql);

            $update->bindParam(':title',$teacherIA[0]['title']);
            $update->bindParam(':answer',$answer);
            $update->bindParam(':image',$image);
            $update->bindParam(':class',$class);
            $update->bindParam(':homeworkNumber',$_SESSION["id"]);
            $update->bindParam(':student',$_SESSION["fullname"]);
            $update->bindParam(':teacher',$teacherIA[0]['teacher']);

            $update->execute();



            $sqli = "UPDATE homework SET completed = :completed where student = :student and id = :id";
            $insert = $con->prepare($sqli);
            $insert->bindParam(':completed',  $completed);
            $insert->bindParam(':student',  $_SESSION["fullname"]);
            $insert->bindParam(':id',  $_SESSION["id"]);

            $insert->execute();


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

      
            header("Location: homeworkStudent.php");
        

        

?>