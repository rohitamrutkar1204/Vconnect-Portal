<?php
    session_start();
    if (isset($_GET['logout'])) { 
    session_destroy(); 
    unset($_SESSION['email']); 
    header("location: login.php"); 
} 
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>VConnect of VIT College</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.css">
    <link rel="stylesheet" media="screen" href="head.css">
    <link rel="stylesheet" media="screen" href="footer.css">
    <link rel="icon" href="image/logo.png">
    <style>
        body
        {
            background-image: linear-gradient(#5e60ce,#80ffdb);
        }
        .contact-main{
            width: 100%;
            height: 500px;
            margin-top: 70px;
            display:block;
            float:left
            
        }
         .contact-call{
            background: #56cfe1; 
            display:block;
            width: 300px;
/*            margin-left: 100px;*/
            padding: 20px;
            border-radius: 5px;
                margin: 0px auto;
        }
        .contact-call i{
            font-size: 80px;
            color:#074972;
        }
        .contact-call a{
            float: right;
            width: 150px;
            padding: 10px;
            margin-top: 50px;
            text-decoration: none;
            
        }
        .contact-address{
            display:block;
            width: 300px;
/*            margin-right: 100px;*/
            height: 100px;
            padding: 20px;
            background: #56cfe1;
            border-radius: 5px;
            margin: 0px auto;   
            margin-top:50px;
        }
        .contact-address i{
            font-size: 80px;
            color:#074972;
        }
        .contact-address p 
        {   
            position:absolute;
            top:360px;  
            display: inline;
            text-align: right;
            
        }
        .contact-call a
        {   position:absolute;
            top:130px; 
             display: inline;
            text-align: right;
        }
         .foot_second h2
        {
            color:aqua;
            margin-left:650px;
        } 
        .foot_second .foot_second_inner 
        {

            display:block;
            float: right;
            text-align: center;
            margin-left: 10px;
        }
          .foot_second p
        {
            display:block;clear: right;text-align: center;margin-left: 400px;
        }
        .foot_second  h3 
        {
                display:block;clear: right;text-align: center;margin-left: 400px;
            margin-top:80px;color:beige;
        }
        .foot_second  h4
        {
                display:block;clear: right;text-align: center;margin-left: 400px;
          color:beige;
        }
        .navbar .align 
        {
            margin-left:350px;
        }
    </style>
</head>
<body>
    <header>
        <div id="first">
           <ul>
                <li><a href="index.php?logout=1">  Logout </a></li>
                <li><a href="#"><?php echo($_SESSION['email'])   ?></a></li>
                <li><a href="forstudent2.php">Forstudent</a></li>
                <li><a href="http://localhost:777/">ForTeacher</a></li>
                <li><a href="contact.html">Contact</a></li>
                
            </ul>
        </div>
        <div class="navbar">
            <div class="align">
                <a href="index2.php">HOME</a>
                <a href="forstudent2.php">STUDENT</a>
                <a href="forteacher.html">TEACHER</a>
                <a href="about2.php">ABOUT US</a>
                <div class="dropdown">
                  <button class="dropbtn">MORE 
                    <i class="fa fa-caret-down"></i>
                  </button>
                  <div class="dropdown-content">
                    <a href="projects.html">Projects</a>
                 <a href="events2.php">Events</a>
                    <a href="interview.php">Interview Experience</a>
                    <a href="attendance.html">Attendance</a>
                  </div>
                </div> 
            </div>
        <a href="index.html"> <img src="image/logo.png" alt="VIT college logo" height="130px" width="100px"></a>
        </div>
    </header>
    <div class="contact-main">
        <div class="contact-call">
            <i class="fa fa-phone"></i>
            <a >+91-7548977567 +91-7548977568</a>
            
        </div>
        <div class="contact-address">
            <i class="fa fa-map-marker"></i>
            <p> 
                Vishwakarma Institute of Technology<br>Pune,Bibvewadi <br>
                PIN-411037
             </p>
        </div>
    </div>
    <footer>
        
            <div class="foot_second">
                <!-- Vconnect info -->
<!--                    <h2 >About Us</h2>-->
                   
                    <!-- footer links -->
                    <div class="foot_second_inner">
                    <a href="index.php">HOME</a></div>
                    <div class="foot_second_inner">
                    <a href="forstudent.html">STUDENT</a></div>
                    <div class="foot_second_inner">
                        <a href="events2.php">EVENTS</a></div>
                    <div class="foot_second_inner">
                        <a href="http://localhost:777/">TEACHER</a></div>
                    <div class="foot_second_inner">
                        <a href="contact.html">CONTACT</a></div>
                
                    <h3>Contact Us</h3>
                    <h4 id="one"> <i class="fa fa-phone">+91-7548977567</i></h4>
                    
                    
                   <p style="color:rgb(247, 239, 239); margin-top: 10px;"> &copy;Copyright 2020 All rights reserved. </p>
               
                </div>
                
        </footer>
</body>
</html>