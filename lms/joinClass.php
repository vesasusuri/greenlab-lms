<?php

include_once 'config.php';


if (isset($_POST['submit']))
		{


			$classCode = $_POST['classCode'];


            $sql="SELECT * FROM class WHERE class_code =:ClassCode";

                $prep = $con->prepare($sql);
                $prep->bindParam(':ClassCode',  $classCode); 
                $prep->execute();
                $data = $prep->fetch();
              

                if($data== false){

                    echo 'Wrong Code';
                    header("Location: classStudent.php");
                } else{


                        $sql = "UPDATE student SET class=:class where fullname =:fullname";

                        $newUser = $con->prepare($sql);
                        $newUser->bindParam(':class',$data['class_name']);
                        $newUser->bindParam(':fullname',$_SESSION['fullname']);


                        $newUser->execute();

                        echo "Joined Succesfully";
                        header("Location: classStudent.php");

                    }


		}












?>