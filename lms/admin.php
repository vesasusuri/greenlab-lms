<?php include_once 'config.php';


$sql="SELECT * FROM teacher WHERE fullname =:Fullname";
       
$prep = $con->prepare($sql);
$prep->bindParam(':Fullname', $_SESSION['fullname']); 
$prep->execute();
$data = $prep->fetch();



$count ="SELECT COUNT('id') FROM `class` WHERE `teacher` =:teacher";
$prepi = $con->prepare($count);
$prepi->bindParam(':teacher', $_SESSION['fullname']); 
$prepi->execute();
$countSchool = $prepi->fetchColumn();


$count2 ="SELECT COUNT('id') FROM `class` WHERE `school` =:school";
$prepi2 = $con->prepare($count2);
$prepi2->bindParam(':school', $data['school']); 
$prepi2->execute();
$countSchool2 = $prepi2->fetchColumn();

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
<a href="admin.php" id="dashboard" style="
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
<a id="tasks"  href="homeworkAdmin.php" style="
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
    Hello <span style="color: #F8546B;"> <?=$_SESSION["fullname"]?> </span>
</p>

<p style=" 
    position: absolute;
    left: 25%;
    top: 12%;
    font-size: 1vw;
    color: gray;

    font-family:  Josefin Sans;
    font-style: normal;
    font-weight: 300;">
    Welcome Back !
</p>    

<a href="classAdmin.php">
<div style="width: 19.6%; height:150px; padding-left: 20px;  border: 1px solid #F8546B; border-radius:3px; position: absolute; left:25%; top:25%; text-align: left; color: white; 
 font-family: 'Overlock', cursive; background: url(foto/atom.png); background-color: black; background-size: 40%; background-repeat: no-repeat; background-position: 115% 2000%;">

<p style="margin-top:3%; font-size: 1.3vw; color: white;">Grade Students</p>
</div>
</a>


<section id="classes" style="position: absolute; left: 25%;  top: 45%; width: 69%; height: 500px; margin-bottom: 5%; display: block;">

    <?php   
    
            $sql= "SELECT * FROM class where teacher = :teacher";           
            $prep = $con->prepare($sql);  
            $prep->bindParam(':teacher', $_SESSION['fullname']);     
            $prep->execute();
            $datas = $prep->fetchAll();

            

    

        foreach($datas as $data){
    ?>
             <div style="background-color: #3B4FDF; border-radius: 2px; width: 30%; height: 150px; margin-right: 5%; cursor: pointer; margin-bottom: 1%;" onclick="location.href='classAdmin_list.php?name=<?= urlencode($data['class_name']) ?>'">

                            <p style="font-size: 1.5vw; color: white; position: relative; left: 7%; top: 10%; "> <?= $data['class_name'] ?> </p>
                            <p style="font-size: 1vw; color: white; position: relative; left: 75%; top:  -10%;"> <?= $data['class_code'] ?> </p>
                            <p style="font-size: 1vw; color: white; position: relative; left: 7%; top: 35%;"> <?= $data['school'] ?> </p>

                            <?php
    
                            $_SESSION['className'] = $data['class_name'];

                                   
                            ?>

                            <img src="foto/balll.png" alt="ball" style="opacity: 0.5; width: 22%; height: 100px; position: relative; left: 75%; top: -25%;">

            </div>
    <?php
     }
    ?>   




<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
        ['Class', 'Classes'],
          ['Your Classes',  <?= $countSchool ?>],
          ['All School Classes',  <?= $countSchool2 ?>]
        ]);

        var options = {
          title: 'Your Classes',
          curveType: 'function',
          legend: { position: 'bottom' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="curve_chart" style="width: 45%; height: 650px; position: fixed; top: 25%; left: 50%; border: black 1px solid;"></div>



    
</body>
</html>