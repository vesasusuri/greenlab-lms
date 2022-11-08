<?php include_once 'config.php'; ob_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link rel="stylesheet" href="css/classAdmin.css">
    
   
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
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
      Your Classes
</p>






    <form method="POST" action="classAdmin.php">
    
        <input type="button" id="submitClass" name="submitClass" onclick="addClass_Start()" value="Create Class" 
        style="color: white; background-color: black;  height: 40px; width: 10%; border: none; border-radius: 4px; position: absolute; left:80%; top:7%;">


        <div id="createClass" style=" position: absolute; width: 20%; height: 300px; border:1px solid #d7d9db; left: 75%; top: 15%;">


            <p>Class Name</p>
            <input type="text" name="className" placeholder="Your Class Name" required>


            <p>Class Code</p>
            <input id="classCode" type="text" name="classCode"  readonly>

            <select style="width: 50%; height: 30px; margin-top: 3%; margin-left: 25.5%; margin-top: 8%; margin-bottom:3%; display: flex; text-align: center;" id="classOption" name="classOption">
            <option value="create">Create Class</option>
            <option value="join">Join Class</option>
        </select>

        <input type="button" id="joinOrCreateButton " name="joinOrCreateButton " onclick="joinORcreate()" value="Chose" 
        style="color: white; background-color: #3B4FDF;  height: 25px; width: 35%; border: none; border-radius: 2px; position: absolute; left:33%; top:85%;">

        </div>

    </form>


    <!---------------------------------------------------Classes Cards------------------------------------------>

    <div class="container">

            <div class="row" id="classes" style="position: absolute; left: 25%;  top: 22%; width: 70.5%; height: auto; margin-bottom: 5%; overflow-y:scroll;">

                <?php   
                        //--Im so smart without even knowing i am smart beacuse i am so smart so i want to let my self know that i am superduper smart
                        
                        $sql= "SELECT * FROM class where teacher = :teacher";           
                        $prep = $con->prepare($sql);  
                        $prep->bindParam(':teacher', $_SESSION['fullname']);     
                        $prep->execute();
                        $datas = $prep->fetchAll();

                        

                

                    foreach($datas as $data){
                ?>
                        <div style="background-color: #3B4FDF; border-radius: 3%; width: 28%; height: 220px; margin-right: 5%; margin-bottom: 5%; cursor: pointer;" onclick="location.href='classAdmin_list.php?name=<?= urlencode($data['class_name']) ?>'">

                                        <p style="font-size: 1.5vw; color: white; position: relative; left: 3%; top: 5%;"> <?= $data['class_name'] ?> </p>
                                        <p style="font-size: 1vw; color: white; position: relative; left: 87%; top:  -17%;"> <?= $data['class_code'] ?> </p>
                                        <p style="font-size: 1vw; color: white; position: relative; left: 3%; top: 23%;"> <?= $data['school'] ?> </p>

                                        <?php
                
                                        $_SESSION['className'] = $data['class_name'];

                                            
                                        ?>

                                        <img src="foto/balll.png" alt="ball" style="opacity: 0.5; width: 22%; height: 100px; position: relative; left: 75%; top: -30%;">

                        </div>
                <?php
                }
                ?>   

</div>



<script>

    var value = 0;
    document.getElementById("submitClass").onclick = function addClass_Start() {
        if (value < 1) {

            document.getElementById("createClass").style.display = "block";
            value +=1;
            

        }
        else if(value>0){
            document.getElementById("createClass").setAttribute("name","submitClass");
            document.getElementById("submitClass").type = 'submit';
        }
    }

    var classCode = document.getElementById("classCode");





    function makeid(length) {
      var result           = '';
      var characters       = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
      var charactersLength = characters.length;
      for ( var i = 0; i < length; i++ ) {
        result += characters.charAt(Math.floor(Math.random() * charactersLength));
    }
    return result;
  }

  classCode.value = makeid(3);




  function joinORcreate(){

    var option  = document.querySelector("#classOption");

        if(option.value == 'join'){

            document.getElementById("classCode").removeAttribute("readonly");

        }




  }

</script>





<?php


if (isset($_POST['submitClass'])){

    $className = $_POST['className'];
    $classCode = $_POST['classCode'];
    $classOption = $_POST['classOption'];

   


        $sql= "SELECT * FROM teacher where fullname =:Fullname";

        $prep = $con->prepare($sql);
        $prep->bindParam(':Fullname', $_SESSION['fullname']); 
        $prep->execute();
        $data = $prep->fetch();

        $_SESSION['school'] = $data['school'];

        
        if($classOption == 'join'){

            $sql= "SELECT * FROM class where class_name =:className";

                $prep = $con->prepare($sql);
                $prep->bindParam(':className', $className); 
                $prep->execute();
                $data = $prep->fetch();


                if($data == false){
                    echo "User doesnt exist";
                  } 
            
                   else if ($classCode == $data['class_code']){


                        if($data['teacher2'] == ""){
                                $sql = "UPDATE class set teacher2 =:teacher2 where class_name =:className";

                                $prep = $con->prepare($sql);
                                    $prep->bindParam(':className', $className); 
                                    $prep->bindParam(':teacher2', $_SESSION['fullname']); 
                                    $prep->execute();
                                    $data = $prep->fetch();



                                    $sql2 ="UPDATE teacher SET class=:class  WHERE fullname=:Fullname";

                                        $prep2 = $con->prepare($sql2);
                                        $prep2->bindParam(':Fullname', $data['fullname']); 
                                        $prep2->bindParam(':class',$className);
                                        $prep2->execute();


                                        header("Location: classAdmin.php");
                        }




                    elseif($data['teacher3'] == ""){
                            $sql = "UPDATE class set teacher3 =:teacher3 where class_name =:className";

                            $prep = $con->prepare($sql);
                                $prep->bindParam(':className', $className); 
                                $prep->bindParam(':teacher3', $_SESSION['fullname']); 
                                $prep->execute();
                                $data = $prep->fetch();



                                $sql2 ="UPDATE teacher SET class=:class  WHERE fullname=:Fullname";

                                    $prep2 = $con->prepare($sql2);
                                    $prep2->bindParam(':Fullname', $data['fullname']); 
                                    $prep2->bindParam(':class',$className);
                                    $prep2->execute();

                        
                                    header("Location: classAdmin.php");
                    }
              }
    }   



       



       


        elseif($classOption == 'create'){

        $sql = "INSERT INTO class (class_name, class_code, school, teacher) VALUES (:class_name, :class_code, :school, :teacher) ";
        $sql2 = "INSERT INTO teacher (class) VALUES (:class)";


            

                    $newUser = $con->prepare($sql);

                    $newUser->bindParam(':class_name',$className);
                    $newUser->bindParam(':class_code',$classCode);
                    $newUser->bindParam(':school',$_SESSION['school']);
                    $newUser->bindParam(':teacher',$_SESSION['fullname']);
            
                    $newUser->execute();



                    $sql2 ="UPDATE teacher SET class=:class  WHERE fullname=:Fullname";

                    $prep2 = $con->prepare($sql2);
                    $prep2->bindParam(':Fullname', $data['fullname']); 
                    $prep2->bindParam(':class',$className);
                    $prep2->execute();

                    

                    header("Location: classAdmin.php");
                    ob_end_flush();
                    

        }
}

?>



<script
			  src="https://code.jquery.com/jquery-3.6.0.js"
			  integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
			  crossorigin="anonymous">
            
</script>
		
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>