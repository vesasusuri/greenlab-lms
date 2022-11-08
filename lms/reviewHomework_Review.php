<?php

require 'config.php';

ob_start();

if(!isset($_SESSION['title']) && !isset($_SESSION['student']) ){

    $_SESSION["title"] =  $_GET['name'];
    $_SESSION["student"] =    $_GET['student'];
    }


$sql="SELECT * FROM homeworksubmit WHERE title =:title";   
$prep = $con->prepare($sql);
$prep->bindParam(':title', $_SESSION["title"] ); 
$prep->execute();
$data = $prep->fetch();


$_SESSION["hmw_Number"] = $data["homeworkNumber"];


$sqli="SELECT * FROM homework WHERE id =:id";       
$prepi = $con->prepare($sqli);
$prepi->bindParam(':id', $data["homeworkNumber"] ); 
$prepi->execute();
$datai = $prepi->fetch();



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">



    
    
   
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@100;300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link href="https://fonts.googleapis.com/css2?family=Overlock:wght@400;700;900&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style>
                    
    </style>

    <title>pupill</title>
</head>
<body style="background-image: url(foto/shkolla.jpg); overflow: hidden;">

<section style="height: 1080px; width: 20%; border-right: solid #E4E4E4 1px;">


 <a href="index.html" style="
          position: absolute;
          left: 5%;
          top: 6%;
          
          font-family: Josefin Sans;
          font-style: normal;
          font-weight: bold;
          text-decoration: none;
          
          font-size: 1.4vw;    
          background: -webkit-linear-gradient(360deg, #000000, #94B0DABA);
          -webkit-background-clip: text;
          -webkit-text-fill-color: transparent;"
    
      >pupill</a>


      <!--Dashboard-->
      <i style="position: absolute; left: 5%; top: 24.7%; scale: 1.2; width:28px; height:28px;" class="material-icons-outlined"> dashboard </i>     
    <a id="dashboard" href="admin.php" style="
      position: absolute;
            left: 8%;
            top: 25%;
            
            font-family: Josefin Sans;
            font-style: normal;
            font-weight: normal;
            text-decoration: none;
            
            font-size: 1vw;    
            color: black;" href="#">Dashboard</a>


    <!--Class-->
    <i style="position: absolute; left: 5%; top: 29.7%; scale: 1.2; width:28px; height:28px;" class="material-icons-outlined"> school </i>
<a id="class" href="classAdmin.php" style="
      position: absolute;
            left: 8%;
            top: 30%;
            
            font-family: Josefin Sans;
            font-style: normal;
            font-weight: normal;
            text-decoration: none;
            
            font-size: 1vw;    
            color: black;" href="#">Class</a>

    

     <!--Tasks-->
     <i style="position: absolute; left: 5%; top: 34.7%; scale: 1.2; width:28px; height:28px;" class="material-icons-outlined"> assignment </i>
<a id="tasks" href="homeworkAdmin.php" style="
     position: absolute;
           left: 8%;
           top: 35%;
           
           font-family: Josefin Sans;
           font-style: normal;
           font-weight: normal;
           text-decoration: none;
           
           font-size: 1vw;    
           color: black;" href="#">Assign Homework</a>


    <!--Review Homework-->
    <i style="position: absolute; left: 5%; top: 39.7%; scale: 1.2; width:28px; height:28px;" class="material-icons-outlined"> preview </i>
<a id="review"  href="reviewHomework.php" style="
     position: absolute;
           left: 8%;
           top: 40%;
           
           font-family: Josefin Sans;
           font-style: normal;
           font-weight: normal;
           text-decoration: none;
           
           font-size: 1vw;    
           color: black;" href="#">Review Homework</a>


<a href="index.html" style=" 
            position: absolute;
            left: 8%;
            top: 90%;
            
            font-family: Josefin Sans;
            font-style: normal;
            font-weight: normal;
            text-decoration: none;
            border-bottom:1px solid black;
            
            font-size: 1vw;    
            color: black;">Log Out</a>
</section>


<p style=" 
    position: absolute;
    left: 25%;
    top: 8%;
    font-size: 2.5vw;
    color: #0D6EFD;
    
    font-family: 'Overlock', cursive; ;
    font-style: normal;
    font-weight: normal;">
     -<?= $_SESSION["title"] ?>-
</p>


<p style=" 
    position: absolute;
    left: 25%;
    top: 17%;
    font-size: 1vw;
    color: gray;
    width: 25%;

    height: 350px;
    overflow: hidden;

    font-family:  Josefin Sans;
    font-style: normal;
    font-weight: 300;">
    <?=$datai["information"]?>
</p>    

<img style="position: absolute; left: 25%; top: 58%; width: 25%; height: 350px; border: 1px solid #e8e8e8; object-fit: cover; object-position: 50% 50%;" src="homeworkImages/<?= $datai["image"]?>" alt="Homework image">

<hr style="width: 1px; height: 100%; display: inline-block; position: absolute; top: -1.5%; left:52.5%;">



<!-------------------------------------------------------------------------------------------Student Answer-------------------------------------------------------------------------------------->

<p style=" 
    position: absolute;
    left: 55%;
    top: 13%;
    font-size: 1vw;
    color: black;
    width: 25%;

    height: 350px;
    overflow: hidden;

    font-family:  Josefin Sans;
    font-style: normal;
    font-weight: 300;">
    Students Answer:
</p>    

<textarea required name="answer" class="longInput" cols="30" rows="10" style="position: absolute; width: 40%; top : 17%; left:55%; height: 350px; border:1px solid #a2a2a2; font-size: 18px;" disabled><?= $data['answer']?></textarea>

<img style="position: absolute; left: 55%; top: 58%; width: 25%; height: 350px; border: 1px solid #e8e8e8; object-fit: cover; object-position: 50% 50%;" src="submitedImages/<?= $data["image"]?>" alt="Homework image">


<form action="reviewHomework_Review.php" method="POST">
<input  style="position: absolute; left: 85%; top: 63%; width: 4%; height: 5%;" name="valueHomework" type="radio"  value="true">
<p style="position: absolute; left: 90%; top: 64.5%; font-family: Josefin Sans; font-weight: 300; font-size: 1vw; color:green;">Correct</p>

<input  style="position: absolute; left: 85%; top: 73%; width: 4%; height: 5%;" name="valueHomework" type="radio" value="false">
<p style="position: absolute; left: 90%; top: 74.5%; font-family: Josefin Sans; font-weight: 300; font-size: 1vw; color:red;">Incorrect</p>

<input  style="position: absolute; left: 85%; top: 87%; width: 8%; height: 7%;" name="submit" type="submit" class="btn btn-primary" value="Submit">
</form>

    <?php

    include_once 'config.php';
    
    if (isset($_POST['submit'])){


        

        $valueHomework = $_POST['valueHomework'];



            $sql = "UPDATE homeworksubmit SET completed = :completed where student = :student and homeworkNumber = :homeworkNumber";
            $prep = $con->prepare($sql); 
            $prep->bindParam(':completed',   $_POST['valueHomework']);
            $prep->bindParam(':student', $_SESSION["student"]);
            $prep->bindParam(':homeworkNumber', $_SESSION["hmw_Number"]);
            $prep->execute();



            $sql= "SELECT * FROM student where fullname = :student";       
            $prep = $con->prepare($sql); 
            $prep->bindParam(':student', $_SESSION["student"]);
            $prep->execute();
            $dataStudent = $prep->fetch();

            $completed = $dataStudentp['completed'];
            $completed += 1;

            $missed = $dataStudentp['missed'];
            $missed += 1;

            if($valueHomework == "true"){

                $sql= "UPDATE student SET completed = :completed where fullname = :student";       
                $prep = $con->prepare($sql); 
                $prep->bindParam(':completed', $completed);
                $prep->bindParam(':student', $_SESSION["student"]);
                $prep->execute();

            }


            elseif($valueHomework == "false"){

                $sql= "UPDATE student SET missed = :missed where fullname = :student";       
                $prep = $con->prepare($sql); 
                $prep->bindParam(':missed', $missed);
                $prep->bindParam(':student', $_SESSION["student"]);
                $prep->execute();


            }
                
         
            
        unset($_SESSION['title']);
        unset($_SESSION['student']);

        header("Location: reviewHomework.php");

        
    
    
    }
    
    
    
    
    
    
    ?>

</body>
</html>