<?php 

include_once 'config.php';

ob_start();


$sql="SELECT * FROM student WHERE fullname =:Fullname";
       
$prep = $con->prepare($sql);
$prep->bindParam(':Fullname', $_SESSION['fullname']); 
$prep->execute();
$data = $prep->fetch();



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/pomodoro.css">
    
   
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@100;300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link href="https://fonts.googleapis.com/css2?family=Overlock:wght@400;700;900&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!--Google Icons-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <!--BOOTSTRAP-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <!--SweetAlert Js-->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!--JQuery-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <title>pupill</title>
</head>
<body style="background-image: url(wallpapers/wallpaper1.jpg); background-size: cover;">

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

<section style=" height: 1080px; width: 20%; border-right: solid #E4E4E4 1px; ">


 <a href="index.html" style="
    position: absolute;
          left: 5%;
          top: 6%;
          
          font-family: Josefin Sans;
          font-style: normal;
          font-weight: bold;
          text-decoration: none;
          
          font-size: 1.4vw;    
          background: -webkit-linear-gradient(360deg, white, #94B0DABA);
          -webkit-background-clip: text;
          -webkit-text-fill-color: transparent;"
    
      >pupill</a>


      <!--Dashboard-->
<i style="position: absolute; left: 5%; top: 25%; scale: 1.2; width:28px; height:28px; color: white;" class="material-icons-outlined"> dashboard </i>     
<a href="studentDashboard.php" id="dashboard" style="
      position: absolute;
            left: 8%;
            top: 25%;
            
            font-family: Josefin Sans;
            font-style: normal;
            font-weight: normal;
            text-decoration: none;
            
            font-size: 1vw;    
            color: white;" href="#">Dashboard</a>


    <!--Class-->
    <i style="position: absolute; left: 5%; top: 30%; scale: 1.2; width:28px; height:28px; color: white;" class="material-icons-outlined"> school </i>
<a id="class" href="classStudent.php" style="
      position: absolute;
            left: 8%;
            top: 30%;
            
            font-family: Josefin Sans;
            font-style: normal;
            font-weight: normal;
            text-decoration: none;
            
            font-size: 1vw;    
            color: white;" href="#">Class</a>

    

     <!--Tasks-->
     <i style="position: absolute; left: 5%; top: 35%; scale: 1.2; width:28px; height:28px; color: white;" class="material-icons-outlined"> assignment </i>
<a id="tasks"  href="homeworkStudent.php" style="
     position: absolute;
           left: 8%;
           top: 35%;
           
           font-family: Josefin Sans;
           font-style: normal;
           font-weight: normal;
           text-decoration: none;
           
           font-size: 1vw;    
           color: white;" >Homework</a>


 <!--Study-->
 <i style="position: absolute; left: 5%; top: 40%; scale: 1.2; width:28px; height:28px; color: white;" class="material-icons-outlined"> schedule </i>
<a id="study"  href="pomodoro.php" style="
     position: absolute;
           left: 8%;
           top: 40%;
           
           font-family: Josefin Sans;
           font-style: normal;
           font-weight: normal;
           text-decoration: none;
           
           font-size: 1vw;    
           color: white;" >Study Session</a>

   
 <!--Logout-->
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
            color: white;">Log Out</a>
</section>




<div id="containerButtons" class="container text-center ">
        <!--Buttons-->
        <center>
        <div class="row w-50">
          <div class="col">
            <button class="timerButtons" id="pomodoro">pomodoro</button>
          </div>
          <div class="col">
            <button class="timerButtons" id="shortBreak">short break</button>
          </div>
          <div class="col">
            <button class="timerButtons" id="longBreak">long break</button>
          </div>
        </div>
      
        <!--Time-->
        <div class="row">
            <p id="timer" >00:00</p>
        </div>

         <!--Start/Reset Time-->
         <div class="row w-25">
            <div class="col">
            <button id="startButton">start</button>         
            </div>
            <div class="col">
              <span id="restartButton" class="material-symbols-outlined"> restart_alt </span> 
            </div>
            <div class="col">
              <span id="settingsButton" class="material-symbols-outlined"> settings </span> 
            </div>
        </div>
      </center>
      </div>


      <!--Pop Up Settings-->


      <div id="popupSettings"> 

        <span id="closeButton" class="material-symbols-outlined"> close </span> 

        <div id="paragraphSettingsDisplay"> 
               <p class="inputText_settings" id="pomodoroParagraph">Pomodoro Duration</p>
               <p class="inputText_settings" id="shortBreakParagraph">Short Break Duration</p>
               <p class="inputText_settings" id="longBreakParagraph">Long Break Duration</p>
       </div>

       <div id="inputSettingsDisplay"> 
              <input class="input_settings" type="number" max="59" min="1" value="25" id="pomodoroLength">
              <input class="input_settings" type="number" max="59" min="1" value="5" id="shortLength">
              <input class="input_settings" type="number" max="59" min="1" value="10" id="longLength">
      </div>

      <div id="minutesSettingsDisplay"> 
        <p class="minutesText_settings" >minutes</p>
        <p class="minutesText_settings">minutes</p>
        <p class="minutesText_settings" >minutes</p>
      </div>
        
        <div id="themeSelection">
          <p id="themeSelectionParagraph">Select Theme</p>
          <select name="themes" id="themes">
                <option value="background1">Sunset City</option>
                <option value="background2">Japan Flowers</option>
                <option value="background3">Anime Room</option>
          </select>

        </div>

        <button id="saveSettings" type="button" class="btn btn-light">Save changes</button>

      </div>


      <form action="" method="post">
      <p style="position: absolute; top: 5%; left: 83%; font-family: 'Space Grotesk', sans-serif; font-size: 24px; color: white; font-weight:600;">Trees planted: </p>
      <p style="position: absolute; top: 5%; left: 95%; font-family: 'Space Grotesk', sans-serif; font-size: 24px; color: white;" id="treeCounter" name="treeCounter">0</p>
      <input name="updateForm" style="position: absolute; top: 10%; left: 83%; font-family: 'Space Grotesk', sans-serif; font-size: 24px; color: white; font-weight:600; width:13%;" type="submit" class="btn btn-success">Update</input>
      </form>



              

              <?php
              
              
	if (isset($_POST['updateForm']))
  {

    $treeCounter = $_POST['treeCounter'];
                
                $sql="SELECT * FROM trees";
       
                $prep = $con->prepare($sql);
                $prep->execute();
                $data = $prep->fetch();


                $sql = "INSERT INTO trees(number) VALUES (number)";

			

                $update = $con->prepare($sql);
                $update->bindParam(':number',$treeCounter);
                $update->execute();

  }
                
                ?>
     
    

    <!--Bootstrap-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>


    <!--Main Js-->
    <script src="js/pomodoro.js"></script>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>