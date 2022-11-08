<?php

require 'config.php';

ob_start();



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link rel="stylesheet" href="css/classAdmin.css">
    
   
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
      Assign Homework
</p>


<div style="position: absolute; left: 25%; top:20%; width: 60%; height: 72%;  border: 1px solid #c9c9c9; text-align: center; border-radius: 2px;">

    <form action="homeworkAdmin_Logic.php" method="POST" style="text-align: center; display: block;" enctype= "multipart/form-data">
        <input name="homework_Title" type="text" placeholder="Homework Title" style="width: 90%; margin-top:3%; height: 100px;  text-align: center; border: 1px solid #c9c9c9;" required>
        <input name="homework_info" type="text" placeholder="Homework Info" style="width: 90%; margin-top:3%; height: 250px;  text-align: center; border: 1px solid #c9c9c9;" required>
       <center>
        <input name="homework_image" type="file" style=" margin-top:3%; height: 30px; text-align: center; border: 1px solid #c9c9c9; display: blocks;" >
        <p style="font-family: Josefin Sans; font-weight: 300; font-size:12px; margin-top: 5px;">Note: Insert images with 1.5:1 aspect ratio</p>
        </center>

        <!--Select class to send homework-->
        <select style=" margin-top:1%; height: 30px; text-align: center; border: 1px solid #c9c9c9;" name="class">
        


                 <?php   
                        //--Im so smart without even knowing i am smart beacuse i am so smart so i want to let my self know that i am superduper smart
                        
                        $sql= "SELECT * FROM class where teacher = :teacher OR teacher2 = :teacher OR teacher3 = :teacher";           
                        $prep = $con->prepare($sql);  
                        $prep->bindParam(':teacher', $_SESSION['fullname']);     
                        $prep->execute();
                        $datas = $prep->fetchAll();

                        foreach($datas as $data){
                ?>

                    <option value="<?= $data['class_name'] ?>"><?= $data['class_name'] ?></option>
                       

                <?php
                }
                ?> 
        </select>

        <button type="submit" name="submit" class="btn btn-danger" style="width: 20%; display: block; margin-top: 4%; margin-left: 40.5%;">Send Homework</button>

    </form>
</div>

</body>
</html>