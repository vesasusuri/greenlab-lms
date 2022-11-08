<?php 

include_once 'config.php';

ob_start();


$sql="SELECT * FROM student WHERE fullname =:Fullname";
       
$prep = $con->prepare($sql);
$prep->bindParam(':Fullname', $_SESSION['fullname']); 
$prep->execute();
$data = $prep->fetch();

$_SESSION['class'] = $data['class'];

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


    <title>pupill</title>
</head>
<body style="background-image: url(foto/shkolla.jpg); overflow: hidden;">

    <style>
                    #dashboard{
                transition: transform .2s;
            }

            #dashboard:hover{
                transform: scale(1.05);
            }


            #class{
                transition: transform .2s;
            }

            #class:hover{
                transform: scale(1.05);
            }


            #tasks{
                transition: transform .2s;
            }

            #tasks:hover{
                transform: scale(1.05);
            }


            #study{
                transition: transform .2s;
            }

            #study:hover{
                transform: scale(1.05);
            }

    </style>

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
            top: 25%;
            
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
            top: 30%;
            
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
           top: 35%;
           
           font-family: Josefin Sans;
           font-style: normal;
           font-weight: normal;
           text-decoration: none;
           
           font-size: 1vw;    
           color: black;" >Homework</a>

 <!--Study-->
 <i style="position: absolute; left: 5%; top: 39.7%; scale: 1.2; width:28px; height:28px;" class="material-icons-outlined"> schedule </i>
<a id="study"  href="pomodoro.php" style="
     position: absolute;
           left: 8%;
           top: 40%;
           
           font-family: Josefin Sans;
           font-style: normal;
           font-weight: normal;
           text-decoration: none;
           
           font-size: 1vw;    
           color: black;" >Study Session</a>


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
    
    font-family: 'Overlock', cursive; 
    font-style: normal;
    font-weight: normal;">
    Hello <span style="color: lightgreen;"> <?=$_SESSION["fullname"]?> </span>
</p>

<p style=" 
    position: absolute;
    left: 25%;
    top: 14%;
    font-size: 1vw;
    color: gray;

    font-family:  Josefin Sans;
    font-style: normal;
    font-weight: 300;">
    Here is ur homework !
</p>    


<div class="container">

<div class="row" id="classes" style="position: absolute; left: 25%;  top: 25%; width: 70.5%; height: 650px; margin-bottom: 5%; overflow-y:scroll; flex-wrap:wrap; display: flex;">

    <?php   
    
            
            $sql= "SELECT * FROM homework WHERE class = :class and student = :fullname and completed !='true' ";           
            $prep = $con->prepare($sql);  
            $prep->bindParam(':class', $_SESSION['class']);     
            $prep->bindParam(':fullname', $_SESSION['fullname']); 
            $prep->execute();
            $datas = $prep->fetchAll();

            

    

        foreach($datas as $data){
    ?>
            <div style="background-color: lightgreen; border-radius: 3%; width: 28%; height: 220px; margin-right: 5%; margin-bottom: 5%; cursor: pointer;" onclick="location.href='homeworkStudent_Submit.php?name=<?= urlencode($data['id']) ?>'">

                            <p style=" margin: 0; font-size: 1.5vw; font-family: Josefin Sans; color: white; position: relative; left: 5%; top: 10%; width:90%; overflow: hidden"> <?= $data['title'] ?> </p>
                            <p style="margin: 0; font-size: 1vw; font-family: Josefin Sans; color: white; position: relative; left: 5%; top:  13%; width:90%; font-weight: 300; overflow: hidden" > <?= $data['information'] ?> </p>


                            <img src="foto/balll.png" alt="ball" style="opacity: 0.5; width: 22%; height: 100px; position: relative; left: 75%; bottom: 25%;">

            </div>
    <?php
    }
    ?>   

</div>



</body>
</html>