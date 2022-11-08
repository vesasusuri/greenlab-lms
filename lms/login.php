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

    <title>pupill</title>

</head>
<body>

  <!-- LOGO -->

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

  


<form id="loginForm" action="login.php" method="POST" style="margin-top:16rem; margin-left:40%; ">	

      <p id="loginTxt" style="
      font-family: Josefin Sans;
      font-style: normal;
      font-weight: 600;
      font-size:25px;">Welcome back</p>

      <input id="email" type="text" name="fullname" placeholder="Fullname" style="width:25%;height:30px;border:2px solid green;border-radius:10px"><br>
      <br>
      <input id="password" type="password" name="password" placeholder="Password" style="width:25%;height:30px;border:2px solid green;border-radius:10px"><br>
<br>
      <label style="margin-left: 8%; font-family: Josefin Sans;" ><b>Log in as:</b></label>
      <select style="width: 15%; height: 40px; margin-top: 3%; margin-left: 5%; margin-top: 2%; margin-bottom:15%; display: flex;" name="roles_login">
        <option value="admin">Teacher</option>
        <option value="student">Student</option>
        <option value="schoolAdmin">SchoolAdmin</option> 
      </select>
     

      <input id="login" style="position:relative; top:-7rem;margin-left:3%; font-family: Josefin Sans; background:green; border:2px solid green; color:white;width:20%;height:30px" type="submit" name="login_btn" value="Log In"> 
</form>



<?php
include_once 'config.php';

if (isset($_POST['login_btn'])) {
    $fullname = $_POST['fullname'];
    $password = $_POST['password'];

    $roles_login = $_POST['roles_login'];

    //Teacher Login
    if ($roles_login == 'admin') {
        $sql = 'SELECT * FROM teacher WHERE fullname =:Fullname';

        $prep = $con->prepare($sql);
        $prep->bindParam(':Fullname', $fullname);
        $prep->execute();
        $data = $prep->fetch();

        if ($data == false) {
            echo 'User doesnt exist';
        } elseif ($password == $data['password']) {
            $_SESSION['fullname'] = $data['fullname'];
            $_SESSION['subject'] = $data['subject'];

            header('Location: admin.php');
        } else {
            echo 'Incorrect password';
        }
    }

    //Student Login
    if ($roles_login == 'student') {
        $sql =
            'SELECT fullname, password FROM student WHERE fullname= :fullname';
        $prep = $con->prepare($sql);
        $prep->bindParam(':fullname', $fullname);
        $prep->execute();
        $data = $prep->fetch();

        if ($data == false) {
            echo 'User doesnt exist';
        } elseif ($password == $data['password']) {
            $_SESSION['fullname'] = $data['fullname'];

            header('Location: studentDashboard.php');
        } else {
            echo 'Incorrect password';
        }
    }

    //School Admin Login
    if ($roles_login == 'schoolAdmin') {
        $sql = 'SELECT * FROM schools WHERE SchoolName= :SchoolName';
        $prep = $con->prepare($sql);
        $prep->bindParam(':SchoolName', $fullname);
        $prep->execute();
        $data = $prep->fetch();

        if ($data == false) {
            echo 'User doesnt exist';
        } elseif ($password == $data['AdminCode']) {
            $_SESSION['fullname'] = $data['SchoolName'];

            header('Location: schoolAdmin.php');
        } else {
            echo 'Incorrect password';
        }
    }
}
?>



    <script src="js/main.js"></script>
    
<script
  src="https://code.jquery.com/jquery-3.6.0.js"
  integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
  crossorigin="anonymous"></script>



</body>
</html>