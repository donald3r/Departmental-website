<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Home</title>
    </head>
    <link rel="stylesheet" href="css/index.css">

    <body style="background-image: url(images/dl.jpg) ">
            
          <?php include "header.php"?>
        <div>
            <div class="first" style = "background-image: url(images/cor.jpeg); background-repeat: no-repeat; " ><a href="#" style = "color: white" ><b id = "bg">My Courses</b></a> </div>
            <div class="second" style = "background-image: url(images/cor.jpeg); background-repeat: no-repeat; "><a href="#" style = "color: white"><b id = "bg">Register Courses</b></a> </div>
            <div class="third" style = "background-image: url(images/cor.jpeg); background-repeat: no-repeat; "><a href="#" style = "color: white"><b id = "bg">Assignements</b></a> </div>
            <div class="fourth" style = "background-image: url(images/cor.jpeg); background-repeat: no-repeat; c"><a href="$" style = "color: white"><b id = "bg">Upcoming Classes</b></a> </div>
        </div>

       <section id="descript">
           <p><strong>WELCOME!!</strong</p>
       </section><br>
       <section id="option">
        <p>Not Your Account?</p>
        <a href="landingpage.php" name = "logout">Logout</a>
        <?php
        if (isset($_COOKIE[session_name()])){
            setcookie(session_name(), '', time() - 3600);
            session_destroy();
        }
        ?>
       </section>
      

    </body>

   <center><footer>
    <p>$Powered by AndMarc</p>
</footer></center> 
</html>