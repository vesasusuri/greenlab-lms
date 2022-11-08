<?php
    include_once 'config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--These are the fonts-->
    <link rel="stylesheet" href="css/tasks.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@100;300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined" rel="stylesheet">


    <title>pupill</title>
</head>
<body>


<a href="index.html"  style="

        position: absolute;
        left: 96px;
        top: 55px;
        
        font-family: Josefin Sans;
        font-style: normal;
        font-weight: bold;
        
        font-size: 1.4vw;    
        background: -webkit-linear-gradient(360deg, #000000, #94B0DABA);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;">pupill</a>



<!--Dashboard-->

<span style="height: 1080px; width: 1%; position: absolute; left:20%; border-right: solid #E4E4E4 1px;"></span>
<i style="position: absolute; left: 5%; top: 24.7%; scale: 1.2;" class="material-icons-outlined"> dashboard </i>     
<a id="dashboard" style="
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
    <i style="position: absolute; left: 5%; top: 29.7%; scale: 1.2;" class="material-icons-outlined"> school </i>
<a id="class" style="
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
     <i style="position: absolute; left: 5%; top: 34.7%; scale: 1.2;" class="material-icons-outlined"> assignment </i>
<a id="tasks" style="
     position: absolute;
           left: 8%;
           top: 35%;
           
           font-family: Josefin Sans;
           font-style: normal;
           font-weight: normal;
           text-decoration: none;
           
           font-size: 1vw;    
           color: black;" href="#">Tasks</a>


    <!--Meeting-->
    <i style="position: absolute; left: 5%; top: 39.7%; scale: 1.2;" class="material-icons-outlined"> groups </i>
<a id="meeting" style="
    position: absolute;
          left: 8%;
          top: 40%;
          
          font-family: Josefin Sans;
          font-style: normal;
          font-weight: normal;
          text-decoration: none;
          
          font-size: 1vw;    
          color: black;" href="#">Video Meeting</a>

<!--This is the actual to do list-->


<div class="main-section">
       <div class="add-section">
          <form action="add.php" method="POST" autocomplete="off">
             <?php if(isset($_GET['mess']) && $_GET['mess'] == 'error'){ ?>
                <input type="text" 
                     name="title" 
                     style="border-color: #ff6666"
                     placeholder="This field is required" />
              <button type="submit">Add &nbsp; <span>&#43;</span></button>

             <?php }else{ ?>
              <input type="text" 
                     name="title" 
                     placeholder="What do you need to do?" />
              <button type="submit">Add &nbsp; <span>&#43;</span></button>
             <?php } ?>
          </form>
       </div>
       <?php 
          $tasks = $con->query("SELECT * FROM tasks ORDER BY id DESC");
       ?>
       <div class="show-todo-section">
            <?php if($tasks->rowCount() <= 0){ ?>
                <div class="todo-item">
                    <div class="empty">
                        <img src="foto/f.png" width="100%" />
                        <img src="foto/Ellipsis.gif" width="80px">
                    </div>
                </div>
            <?php } ?>

            <?php while($task = $tasks->fetch(PDO::FETCH_ASSOC)) { ?>
                <div class="todo-item">
                    <span id="<?php echo $task['id']; ?>"
                          class="remove-to-do">x</span>
                    <?php if($task['checked']){ ?> 
                        <input type="checkbox"
                               class="check-box"
                               data-todo-id ="<?php echo $task['id']; ?>"
                               checked />
                        <h2 class="checked"><?php echo $task['title'] ?></h2>
                    <?php }else { ?>
                        <input type="checkbox"
                               data-todo-id ="<?php echo $task['id']; ?>"
                               class="check-box" />
                        <h2><?php echo $task['title'] ?></h2>
                    <?php } ?>
                    <br>
                    <small>created: <?php echo $task['date_time'] ?></small> 
                </div>
            <?php } ?>
       </div>
    </div>



</body>
</html>