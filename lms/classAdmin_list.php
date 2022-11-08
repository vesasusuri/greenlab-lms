<?php

require 'config.php';

ob_start();

if (empty($_SESSION['fullname'])) {
	header('Location:login.php');

}

$class = htmlentities($_GET['name']);


$sql="SELECT * from student where class=:class";
$prep=$con->prepare($sql);
$prep->bindParam(':class', $class); 
$prep->execute();
$datas=$prep->fetchAll();
$value = $_SESSION['subject'];

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
<body style="background-image: url(foto/shkolla.jpg); background-size: cover">

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


    <!--Meeting-->



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
      Class <span><?= htmlentities($_GET['name']) ?></span>
</p>


<div class="table-responsive" style="position: absolute; top: 15%; left:25%; width:70%;">
	<table class="table table-striped table-sm">
		<thead>
			<tr>
                <th>Nr.</th>
        				<th>FullName</th>
        				<th>Mathematics</th>
                <th>Biology</th>
                <th>English</th>
                <th>Missing True</th>
                <th>Missing False</th>
				        <th>Remove User</th>
                <th>Grade</th>
			</tr>
		</thead>
		<tbody style="vertical-align: middle">
			<?php foreach ($datas as $data):?> 
			<tr>

            <form action="grade.php" method="POST">

            <td><?=$data['id']?></td>	
			<td ><input readonly name="fullname" style="background-color: transparent; border:none; width: auto; " type="text" name="eng" value="<?=$data['fullname']?>"></td>	

            
            
		<td> <input <?php if($value != 'math') echo 'readonly'; ?> style="background-color: transparent; border: 1px #bfbfbd solid; width: 15%; text-align: center;" type="text" name="math" class="math" value="<?=$data['math-grade']?>">  </td>	
		<td> <input <?php if($value != 'bio') echo 'readonly'; ?> style="background-color: transparent; border: 1px #bfbfbd solid; width: 15%; text-align: center;" type="text" name="bio" class="bio" value="<?=$data['bio-grade']?>"></td>	
		<td> <input <?php if($value != 'english') echo 'readonly'; ?> style="background-color: transparent; border: 1px #bfbfbd solid; width: 15%; text-align: center;" type="text" name="eng" class="eng" value="<?=$data['english-grade']?>"> </td>


    <td> <input style="background-color: transparent; border: 1px #bfbfbd solid; width: 15%; text-align: center;" type="text" name="missingTrue" class="missingTrue" value="<?=$data['missingTrue']?>"></td>  
    <td> <input style="background-color: transparent; border: 1px #bfbfbd solid; width: 15%; text-align: center;" type="text" name="missingFalse" class="missingFalse" value="<?=$data['missingFalse']?>"> </td>
            
            
     
            <td><a href="remove.php?fullname=<?=$data['fullname'];?>"><button type="button" class="btn btn-danger" name="remove" style="width: 80%;">Remove <?=$data['fullname']?></button></a></td>

        
            <td><button type="submit" name="submit" class="btn btn-primary" style="width: 80%;">Grade <?=$data['fullname']?></button></td>

            </form>

             </tr>



                            
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>







<!--Bootstrap-->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</body>
</html>