<?php include_once 'config.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link rel="stylesheet" href="css/register.css">
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

    <!--Regsiter As-->

     <!--School-->
<div onclick="openForm()" style="
        cursor: pointer;
        position: absolute;
        width: 5%;
        height: 100px;
        left: 40%;
        top: 45%;

        background: #F8546B;
        border-radius: 15px;"> 

        <i style="scale: 2.5; position: absolute; left: 39.7%; top: 40%; color:white;" class="fas fa-school"></i>
       
 </div>



 <p style="
        position: absolute;
        left: 40.9%;
        top: 57%;
        font-size: 1vw;
        color: #050133; 

        font-family:  Josefin Sans;
        font-weight: normal;
        font-style: normal;
        font-weight: 600;">School</p>



<!--Teacher-->
<div onclick="openForm2()" style="
        cursor: pointer;
        position: absolute;
        width: 5%;
        height: 100px;
        left: 50%;
        top: 45%;

        background: #3B4FDF;
        border-radius: 15px;"> 

        <i style="scale: 2.5; position: absolute; left: 39.5%; top: 41%; color:white;" class="fas fa-chalkboard-teacher"></i>
</div>

<p style="
        position: absolute;
        left: 50.9%;
        top: 57%;
        font-size: 1vw;
        color: #050133; 

        font-family:  Josefin Sans;
        font-weight: normal;
        font-style: normal;
        font-weight: 600;">Teacher</p>




<span style="border-right: 2px solid black; height:8vw; position:absolute; top:43.5%; left:47.5%; "></span>


<!--Studeent-->


<div onclick="openForm3()" style="
        cursor: pointer;
        position: absolute;
        width: 5%;
        height: 100px;
        left: 57%;
        top: 45%;

        background: #3B4FDF;
        border-radius: 15px;">
  <i style="scale: 2.5; position: absolute; left: 40.5%; top: 42.8%; color:white;"  class="fas fa-user-friends"></i>
</div>


<p style="
        position: absolute;
        left: 57.8%;
        top: 57%;
        font-size: 1vw;
        color: #050133; 

        font-family:  Josefin Sans;
        font-weight: normal;
        font-style: normal;
        font-weight: 600;">Student</p>





<!--JavaScript-->




<!--Popup Form-->

<div style="width: 59.5%; height: 600px; top: 15%; position: absolute; left: 20%; overflow: hidden; font-family: Josefin Sans;" class="form-popup" id="myForm">
  <form  style="margin: 0; margin-left: 23%;" action="register.php" method="POST" class="form-container">
    <h1 id="form_Header">Register School</h1>

    <label for="email"><b>School Name</b></label>
    <input style="margin-top: 1%; margin-bottom:3%;" type="text" placeholder="Your School Name" name="schoolName" required>

    <label  for="admin_code"><b>School Admin Code</b></label>
    <input id="adminCode" style="margin-top: 1%; margin-bottom:3%;" type="text" placeholder="" name="adminCode" readonly>

    <label for="student_code"><b>School Student Code</b></label>
    <input id="studentCode" style="margin-top: 1%;" type="text" name="studentCode" readonly>

    <button type="submit" name="submit" class="btn create">Create</button>
    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
  </form>
</div>



<!--Popup Form Teacher-->

<div style="width: 59.5%; height: 700px; top: 13%; position: absolute; left: 20%; overflow: hidden; font-family: Josefin Sans;" class="form-popup" id="myForm2">
  <form style="margin: 0; margin-left: 23%;" action="register.php" method="POST" class="form-container">

    <h1 id="form_Header">Register as a Teacher</h1>

    <label for="email"><b>Full Name</b></label>
    <input style="margin-top: 1%; margin-bottom:3%;" type="text" placeholder="Your Full Name" name="teacher_fullname" required onkeypress="return event.charCode != 32">

    <label for="password"><b>Password</b></label>
    <input style="margin-top: 1%; margin-bottom:3%;" type="password" placeholder="Your Password" name="teacher_password" required onkeypress="return event.charCode != 32">

    <label for="student_code"><b>Subject</b></label>
    <select style="width: 100%; height: 40px; margin-left: 2.5%; margin-top:1%; margin-bottom:3%; display: flex;" name="subjects">
        <option value="math">Math</option>
        <option value="english">English</option>
        <option value="biology">Biology</option>
    </select>
    

    <label  for="admin_code"><b>School Admin Code</b></label>
    <input id="adminCode" style="margin-top: 1%;" type="text" placeholder="Your school's admin code"  name="teacher_admincode" required>



    <button type="submit" name="submit2" class="btn create">Create</button>
    <button type="button" class="btn cancel" onclick="closeForm2()">Close</button>
  </form>
</div>




<!--Popup Student-->

<div style="width: 59.5%; height: 700px; top: 13%; position: absolute; left: 20%; overflow: hidden; font-family: Josefin Sans;" class="form-popup" id="myForm3">
  <form style="margin: 0; margin-left: 23%;" action="register.php" method="POST" class="form-container">

    <h1 id="form_Header">Register as a Student</h1>

    <label for="email"><b>Full Name</b></label>
    <input style="margin-top: 1%; margin-bottom:3%;" type="text" placeholder="Your Full Name" name="student_fullname" required onkeypress="return event.charCode != 32">

    <label for="password"><b>Password</b></label>
    <input style="margin-top: 1%; margin-bottom:3%;" type="password" placeholder="Your Password" name="student_password" required onkeypress="return event.charCode != 32">
    

    <label  for="student_code"><b>School Student Code</b></label>
    <input style="margin-top: 1%; margin-bottom:3%;" type="text" placeholder="Your school's student code"  name="studentCode" required>





    <button type="submit" name="submit3" class="btn create">Create</button>
    <button type="button" class="btn cancel" onclick="closeForm3()">Close</button>
  </form>
</div>


<a id="nextP" href="loginPage.html" style="
    position: absolute;
    left: 87%;
    top: 7%;
    
    font-family: Josefin Sans;
    font-style: normal;
    font-weight: 600;
    font-size: 1vw;
    line-height: 1vw;
    /* identical to box height */
    text-decoration:none;
    text-align: center;
    
    color: #000000;
    ">go back.</a>



<!--Java Script-->

<script>
  function openForm() {
    document.getElementById("myForm").style.display = "block";


    var adminCode = document.getElementById("adminCode");
    var studentCode = document.getElementById("studentCode");


    function makeid(length) {
      var result           = '';
      var characters       = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
      var charactersLength = characters.length;
      for ( var i = 0; i < length; i++ ) {
        result += characters.charAt(Math.floor(Math.random() * charactersLength));
    }
    return result;
  }

  adminCode.value = makeid(6);
  studentCode.value = adminCode.value + makeid(3);
  }


  function closeForm() {
    document.getElementById("myForm").style.display = "none";
  }




  function openForm2() {
    document.getElementById("myForm2").style.display = "block";
  }


  function closeForm2() {
    document.getElementById("myForm2").style.display = "none";
  }




  function openForm3() {
    document.getElementById("myForm3").style.display = "block";
  }


  function closeForm3() {
    document.getElementById("myForm3").style.display = "none";
  }




</script>


<!--PHP-->

<?php




//Register School
if (isset($_POST['submit']))
		{


			$schoolName = $_POST['schoolName'];
			$adminCode = $_POST['adminCode'];
			$studentCode = $_POST['studentCode'];
		


			$sql = "INSERT INTO schools(SchoolName,AdminCode,StudentCode) VALUES (:SchoolName, :AdminCode, :StudentCode)";

			$newUser = $con->prepare($sql);

			$newUser->bindParam(':SchoolName',$schoolName);
			$newUser->bindParam(':AdminCode',$adminCode);
			$newUser->bindParam(':StudentCode',$studentCode);
	

			$newUser->execute();

			echo "Inserted Succesfully";


		}




//Register Teacher

if (isset($_POST['submit2']))
		{

      $teacher_fullname = $_POST['teacher_fullname'];
			$teacher_password = $_POST['teacher_password'];
			$subject = $_POST['subjects'];
      $teacher_admincode = $_POST['teacher_admincode'];
      $school;
      $role;

  
      

      $sql = "SELECT * FROM schools WHERE AdminCode=:AdminCode";


			$prep = $con->prepare($sql);
			$prep->bindParam(':AdminCode', $teacher_admincode);
			$prep->execute();
			$data = $prep->fetch();



			
				if ($data == false){

          echo "Incorrect Admin Code";
				 }

				 else if ($data == true){
          $role = 'admin';
          $school = $data['SchoolName'];  
          

          $sql = "INSERT INTO teacher(fullname, password, subject, school, role) VALUES (:fullname, :password, :subject, :school, :role)";

          $newUser = $con->prepare($sql);
    
          $newUser->bindParam(':fullname',$teacher_fullname);
          $newUser->bindParam(':password',$teacher_password);
          $newUser->bindParam(':subject',$subject);
          $newUser->bindParam(':school',$school);
          $newUser->bindParam(':role',$role);
      
    
          $newUser->execute();
				 }

				 }

	



//Register Student

if (isset($_POST['submit3'])){

      $student_fullname = $_POST['student_fullname'];
			$student_password = $_POST['student_password'];
      $student_code = $_POST['studentCode'];
      $school;
      $role;

  
      

      $sql = "SELECT * FROM schools WHERE StudentCode=:StudentCode";


			$prep = $con->prepare($sql);
      $prep->bindParam(':StudentCode', $student_code);
			$prep->execute();
			$data = $prep->fetch();




      if ($data == false){

        echo "Incorrect Student Code";
       }

       else if($data == true){
          
          
          $role = 'student';
          $school = $data['SchoolName'];  
          

          $sql = "INSERT INTO student(fullname, password, school, role) VALUES (:fullname, :password, :school, :role)";

          $newUser = $con->prepare($sql);
    
          $newUser->bindParam(':fullname',$student_fullname);
          $newUser->bindParam(':password',$student_password);
          $newUser->bindParam(':school',$school);
          $newUser->bindParam(':role',$role);
      
    
          $newUser->execute();


         
				 
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