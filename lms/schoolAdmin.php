<?php 

include_once 'config.php';

ob_start();


$sql="SELECT * FROM schools WHERE SchoolName =:SchoolName";
       
$prep = $con->prepare($sql);
$prep->bindParam(':SchoolName', $_SESSION['fullname']); 
$prep->execute();
$data = $prep->fetch();




$count="SELECT COUNT('fullname') FROM 'teacher' WHERE 'SchoolName =:SchoolName";
$prep->bindParam(':SchoolName', $_SESSION['fullname']); 
$prep->execute();
$countTeacher = $prep->fetchColumn();



$count2="SELECT COUNT('fullname') FROM 'student' WHERE 'school =:SchoolName";
$prep->bindParam(':SchoolName', $_SESSION['fullname']); 
$prep->execute();
$countStudent = $prep->fetchColumn();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link rel="stylesheet" href="css/loginStyle.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@100;300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link href="https://fonts.googleapis.com/css2?family=Overlock:wght@400;700;900&display=swap" rel="stylesheet">


    <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    <title>pupill</title>

</head>
<body>

  <!-- LOGO -->

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
                <a id="dashboard" href="schoolAdmin.php" style="
                    position: absolute;
                        left: 8%;
                        top: 25%;
                        
                        font-family: Josefin Sans;
                        font-style: normal;
                        font-weight: normal;
                        text-decoration: none;
                        
                        font-size: 1vw;    
                        color: black;" href="#">Dashboard</a>


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
    left: 48%;
    top: 10%;
    font-size: 2vw;
    color: #0d6efd;
    
    font-family: 'Overlock', cursive; 
    font-style: normal;
    font-weight: normal;">
        - <?=$_SESSION["fullname"]?> -
</p>




<p style="
                        position: absolute;
                        left: 25%;
                        top: 20%;
                        
                        font-family: Overlock;
                        font-style: normal;
                        font-weight: bold;
                        text-decoration: none;
                        
                        font-size: 1.2vw;    
                        color: black;">
                
School Admin Code: <span style="color: #0d6efd; font-family: 'Overlock', cursive; " > <?=$data["AdminCode"]?> </span></p>



<p style="
                        position: absolute;
                        left: 25%;
                        top: 23%;
                        
                        font-family: Overlock;
                        font-style: normal;
                        font-weight: bold;
                        text-decoration: none;
                        
                        font-size: 1.2vw;    
                        color: black;">
                
School Student Code: <span style="color: #0d6efd; font-family: 'Overlock', cursive; " > <?=$data["StudentCode"]?> </span></p>




<p style="
                        position: absolute;
                        left: 25%;
                        top: 27%;
                        
                        font-family: Overlock;
                        font-style: normal;
                        font-weight: bold;
                        text-decoration: none;
                        
                        font-size: 1.2vw;    
                        color: black;">
                
School Teacher Number: <span style="color: #BB2D3B; font-family: 'Overlock', cursive; " > <?=$countTeacher?> </span></p>


<p style="
                        position: absolute;
                        left: 25%;
                        top: 30%;
                        
                        font-family: Overlock;
                        font-style: normal;
                        font-weight: bold;
                        text-decoration: none;
                        
                        font-size: 1.2vw;    
                        color: black;">
                
School Student Number: <span style="color: #BB2D3B; font-family: 'Overlock', cursive; " > <?=$countStudent?> </span></p>

<!--------------------------------------------------------------------------------Teacher List--------------------------------------------------------------------------------------------------------------->

<?php 

$sql="SELECT * from teacher where school =:SchoolName";
$prep=$con->prepare($sql);
$prep->bindParam(':SchoolName', $_SESSION['fullname']); 
$prep->execute();
$datas=$prep->fetchAll();


?>


<div class="table-responsive" style="position: absolute; top: 50%; left:25%; width:30%;">
	<table class="table table-striped table-sm">
		<thead>
			<tr>
                        <th>Nr.</th>
        				<th>FullName</th>
        				<th>Subject</th>
				        <th>Remove User</th>
			</tr>
		</thead>
		<tbody style="vertical-align: middle">
			<?php foreach ($datas as $data):?> 
			<tr>

            <form action="grade.php" method="POST">

            <td><?=$data['id']?></td>	
			<td ><input readonly name="fullname" style="background-color: transparent; border:none; width: auto; " type="text" name="eng" value="<?=$data['fullname']?>"></td>	
            
            
                <td> <input style="background-color: transparent; border: 1px #bfbfbd solid; width: 35%; text-align: left;" type="text" name="math" class="math" value="<?=$data['subject']?>">  </td>	

            
     
            <td><a href="removeAdminTeacher.php?fullname=<?=$data['fullname'];?>"><button style="width: 80%;" type="button" class="btn btn-danger" name="remove" style="width: 80%;">Remove <?=$data['fullname']?></button></a></td>

            </form>

             </tr>



                            
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>




<!--------------------------------------------------------------------------------Student List--------------------------------------------------------------------------------------------------------------->

<?php 

$sql2="SELECT * from student where school =:SchoolName";
$prep=$con->prepare($sql2);
$prep->bindParam(':SchoolName', $_SESSION['fullname']); 
$prep->execute();
$datas=$prep->fetchAll();


?>


<div class="table-responsive" style="position: absolute; top: 50%; left:60%; width:30%;">
	<table class="table table-striped table-sm">
		<thead>
			<tr>
                        <th>Nr.</th>
        				<th>FullName</th>
        				<th>Class</th>
				        <th>Remove User</th>
			</tr>
		</thead>
		<tbody style="vertical-align: middle">
			<?php foreach ($datas as $data):?> 
			<tr>

            <form action="grade.php" method="POST">

            <td><?=$data['id']?></td>	
			<td ><input readonly name="fullname" style="background-color: transparent; border:none; width: auto; " type="text" name="eng" value="<?=$data['fullname']?>"></td>	
            
            
                <td> <input style="background-color: transparent; border: 1px #bfbfbd solid; width: 35%; text-align: left;" type="text" name="math" class="math" value="<?=$data['class']?>">  </td>	

            
     
            <td><a href="removeAdminStudent.php?fullname=<?=$data['fullname'];?>"><button style="width: 80%;" type="button" class="btn btn-danger" name="remove" style="width: 80%;">Remove <?=$data['fullname']?></button></a></td>

            </form>

             </tr>



                            
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>






<!--Bootstrap-->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
