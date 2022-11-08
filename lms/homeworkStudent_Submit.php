<?php 

include_once 'config.php';

ob_start();

$_SESSION["id"] = htmlentities($_GET['name']);


$sql="SELECT * FROM homework WHERE id =:id";
       
$prep = $con->prepare($sql);
$prep->bindParam(':id', $_SESSION["id"] ); 
$prep->execute();
$data = $prep->fetch();

$data["class"] = $_SESSION["class"];




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link rel="stylesheet" href="css/admin.css">
    
   
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@100;300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link href="https://fonts.googleapis.com/css2?family=Overlock:wght@400;700;900&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


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
<a href="studentDashboard.php" id="dashboard" style="
      position: absolute;
            left: 8%;
            top: 24.8%;
            
            font-family: Josefin Sans;
            font-style: normal;
            font-weight: normal;
            text-decoration: none;
            
            font-size: 1vw;    
            color: black;">Dashboard</a>


    <!--Class-->
    <i style="position: absolute; left: 5%; top: 29.7%; scale: 1.2; width:28px; height:28px;" class="material-icons-outlined"> school </i>
<a id="class" href="classStudent.php" style="
      position: absolute;
            left: 8%;
            top: 29.8%;
            
            font-family: Josefin Sans;
            font-style: normal;
            font-weight: normal;
            text-decoration: none;
            
            font-size: 1vw;    
            color: black;" >Class</a>

    

     <!--Tasks-->
     <i style="position: absolute; left: 5%; top: 34.7%; scale: 1.2; width:28px; height:28px;" class="material-icons-outlined"> assignment </i>
<a id="tasks"  href="homeworkStudent.php" style="
     position: absolute;
           left: 8%;
           top: 34.8%;
           
           font-family: Josefin Sans;
           font-style: normal;
           font-weight: normal;
           text-decoration: none;
           
           font-size: 1vw;    
           color: black;" >Homework</a>


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
    top: 10%;
    font-size: 2.5vw;
    color: #050133;
    
    font-family: 'Overlock', cursive; 
    font-style: normal;
    font-weight: normal;
    color: #0d6efd;">
   - <?=$data["title"]?> -
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
    <?=$data["information"]?>
</p>    


 <img style="position: absolute; left: 25%; top: 58%; width: 25%; height: 350px; border: 1px solid #e8e8e8; object-fit: cover; object-position: 50% 50%;" src="homeworkImages/<?= $data["image"]?>" alt="Homework image">


 <!--------------------------------------------------------------------------Submit Homework---------------------------------------------------------------------------->

    <form id="submitForm" action="homweorkLogic.php" method="POST" enctype= "multipart/form-data" style=" width:40%; height: 750px; position:absolute; left: 55%; top: 17%; border: 1px solid #e8e8e8;;">
    <textarea required name="answer" class="longInput" cols="30" rows="10" style=" width:90%; margin: 5%; height: 400px; border:1px solid #a2a2a2; font-size: 18px;" placeholder="Answer goes here!"></textarea>
    <center>
        <input name="homework_image" type="file" style=" margin-top:3%; height: 30px; text-align: center; border: 1px solid #c9c9c9; display: blocks;" >
        <p style="font-family: Josefin Sans; font-weight: 300; font-size:12px; margin-top: 5px;">Note: Insert images with 1.5:1 aspect ratio</p>

       
    </center>

    <button type="submit" name="submit" class="btn btn-danger" style="width: 30%; display: block; margin-top: 10%; margin-left: 35%;">Submit Homework</button>

</form>
















<!--------------------------------------------------------------------PHP------------------------------------------------------------------------------------->




</body>
</html>