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
            top: 25%;
            
            font-family: Josefin Sans;
            font-style: normal;
            font-weight: normal;
            text-decoration: none;
            
            font-size: 1vw;    
            color: black;" href="#">Dashboard</a>


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
            color: black;" href="#">Class</a>

    

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



<?php 

if($data['class'] == ''){



?>





    

   
<form action="joinClass.php" method="POST">
    <input type="text" name="classCode" maxlength="3"  placeholder="Your class code" style="position: absolute; left: 72%; top: 11%; 
    border: none; background-color:#d4d4d4;  font-family: 'Overlock'; width: 10%; height: 40px;  padding-left: 1%;">

    <button type="submit" name="submit" class="btn btn-primary" style="width: 10%; position: absolute; left: 85%; top: 11%;">Join Class</button>
</form>


<?php } else{ ?>





<!----------------------------------------------------------------------------------Grades------------------------------------------------------------------------------------>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Mathematics',       <?= $data['math-grade']?>],
          ['Biology',           <?= $data['bio-grade']?>],
          ['English',           <?= $data['english-grade']?>],
          ['Missed School',     <?= $data['missingTrue']?>],
          ['Skipped School',    <?= $data['missingFalse']?>]
        ]);

        var options = {
          title: 'Your activity chart'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
    <div id="piechart" style="width: 30%; height: 435px; border:2px solid green;margin-left:25rem; margin-top:-60rem;"></div>

    <div style="width: 16%; height:200px; background-color: white;  border:2px solid green;margin-top:-27.2rem; margin-left:56rem;border-radius:3px;
            text-align: center; color: white; font-family: 'Overlock', cursive;">

<p style="margin-top:3%; color:black;">Mathematics Grade</p>

<p style="margin-top: 5%; font-size: 4vw; color:black;"><?= $data['math-grade']?></p>

</div>

<div style="width: 16%; height:200px; background-color: white; border:2px solid green; border-radius:3px;
            text-align: center; color: white; font-family: 'Overlock', cursive;margin-left:73rem;margin-top:-12.5rem;">

<p style="margin-top:3%; color:black;">Biology Grade</p>
<p style="margin-top: 5%; font-size: 4vw; color:black;"><?= $data['bio-grade']?></p>

</div>

<div style="width: 33%; height:200px; background-color: white;  border: 2px solid green; border-radius:3px;  
            text-align: center; color: white; font-family: 'Overlock', cursive;margin-left:56rem;margin-top:2%;">

<p style="margin-top:3%; color:black;">English Grade</p>
<p style="margin-top: 5%; font-size: 4vw; color:black;"><?= $data['english-grade']?></p>

</div>

<div style="width: 15%; height:200px; background-color: white;  border: 2px solid green; border-radius:3px;margin-left:25rem;margin-top:2rem;
            text-align: center; color: white; font-family: 'Overlock', cursive;">

<p style="margin-top:3%; color:black;">Missed School</p>
<p style="margin-top: 5%; font-size: 4vw; color:black;"><?= $data['missingTrue']?></p>

</div>


<div style="width: 15%; height:200px; background-color: white;  border: 2px solid green; border-radius:3px; margin-left:41rem;margin-top:-12.5rem; text-align: center; color: white; font-family: 'Overlock', cursive;">
<p style="margin-top:3%; color:black;">Skipped School</p>
<p style="margin-top: 5%; font-size: 4vw; color:black;"><?= $data['missingFalse']?></p>
</div>



<div style="width: 15%; height:200px; background-color: white;  border: 2px solid green; text-align: center; color: white; font-family: 'Overlock', cursive;margin-left:57rem;margin-top:-12.5rem">
<p style="margin-top:3%; color:black;">Completed Homework</p>
<p style="margin-top: 5%; font-size: 4vw; color:black;"><?= $data['completed']?></p>
</div>

<div style="width: 15%; height:200px; background-color: white;  border: 2px solid green; margin-top:-12.5rem; margin-left:73rem; border-radius:3px; text-align: center; color: white; font-family: 'Overlock', cursive;">
<p style="margin-top:3%; color:black;">Incorrect Homework</p>
<p style="margin-top: 5%; font-size: 4vw; color:black;"><?= $data['missed']?></p>
</div>


<p style=" 
    position: absolute;
    left: 25%;
    top: 4%;
    font-size: 2.5vw;
    color: #050133;
    
    font-family: 'Overlock', cursive; 
    font-style: normal;
    font-weight: normal;">
   <span style="color: green;"> <?=$_SESSION["fullname"]?>'s </span> Grades
</p>

<p style=" 
    position: absolute;
    left: 89%;
    top: 5%;
    font-size: 1.5vw;
    color: #050133;
    
    font-family: 'Overlock', cursive;  
    font-style: normal;
    font-weight: normal;">
    Class: <span style="color: #144a22;"> <?= $data["class"]?> </span>
</p>
 <?php } ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>