<?php

require 'config.php';

ob_start();

unset($_SESSION['title']);
unset($_SESSION['student']);

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
<body style="background-image: url(foto/shkolla.jpg); ">

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
    top: 5%;
    font-size: 2.5vw;
    color: #050133;
    
    font-family: 'Overlock', cursive; ;
    font-style: normal;
    font-weight: normal;">
      Review Homework
</p>


<!-------------------------------------------------------------------------------------------php-------------------------------------------------------------------------------------->


<div class="container">

            <div class="row" id="classes" style="position: absolute; left: 25%;  top: 22%; width: 70.5%; height: 700px; margin-bottom: 5%; overflow-x:hidden;">

                <?php   
                        
                        
                        $sql= "SELECT * FROM homeworksubmit where teacher = :teacher and completed =''";           
                        $prep = $con->prepare($sql);  
                        $prep->bindParam(':teacher', $_SESSION['fullname']);     
                        $prep->execute();
                        $datas = $prep->fetchAll();

                        

                

                    foreach($datas as $data){
                        
                ?>
                        <div style="background-color: #274C43 ; border-radius: 3%; width: 28%; height: 140px; margin-right: 5%; margin-bottom: 5%; cursor: pointer; " onclick="location.href='reviewHomework_Review.php?name=<?= urlencode($data['title']) ?>&student=<?= urlencode($data['student']) ?>'" >

                                        <p style="font-size: 1.5vw; color: white; position: relative; left: 3%; top: 5%;"> <?= $data['student'] ?> </p>
                                        <p style="font-size: 1vw; color: white; position: relative; left: 87%; top:  -30%;"> <?= $data['class'] ?> </p>
                                        <p style="font-size: 0.85vw; color: font-family:Josefin Sans; font-weight: 300; color: white; position: relative; left: 3%; top: -15%;"> <?= $data['title'] ?> </p>

                                        <img src="foto/balll.png" alt="ball" style="opacity: 0.5; width: 22%; height: 100px; position: relative; left: 75%; top: -55%;">

                        </div>
                <?php
                }
                ?>   

</div>


</body>
</html>