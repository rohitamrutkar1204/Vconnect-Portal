<?php
    session_start();
    if (isset($_GET['logout'])) { 
    session_destroy(); 
    unset($_SESSION['email']); 
    header("location: login.php"); 
} 
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" media="screen" href="footer.css">
    <link rel="stylesheet" media="screen" href="head.css">
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.css">
    <link rel="icon" href="image/logo.png">
    <title>VConnect</title>
    <style>
        .about-main{
            padding: 10px;
            animation:mymove 3s ; 
             position: relative;
            animation-timing-function:ease-out;
        }
        @keyframes mymove
        {
            from{left:-200px;}
            to{left:0px;}
        }
        .about-main h2{
            padding: 10px;
        }
        .about-main h4{
            padding-bottom:10px; 
        }
        .about-main p{
            text-align: justify;
            padding-bottom:20px;
            line-height: 25px;
            /* margin-left: 20px; */
            margin: auto;
            width: 800px; 
        }
        #cen{
            text-align: center;
            margin: auto;
        }
            .foot_second h2
        {
            color:aqua;
            margin-left:650px;
        } 
        .foot_second .foot_second_inner 
        {
/*
            background-color: goldenrod;
            color: black;
            padding: 14px 25px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
*/
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
                <li><a href="contact2.php">Contact</a></li>
                
            </ul>
            
        </div>
        <div class="navbar">
            <div class="align">
                <a href="index2.php">HOME</a>
                <a href="forstudent2.php">STUDENT</a>
                <a href="forteacher.html">TEACHER</a>
                <a href="about2.php">ABOUT US</a>
                <div class="dropdown">
                  <button class="dropbtn">Vconnect
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
            <!-- burger section -->
            <div class="burger">
                <div class="line1"></div>
                <div class="line2"></div>
                <div class="line3"></div>
            </div>
        </div>
        <a href="index.html"> <img src="image/logo.png" alt="sea college logo" height="130px" width="100px"></a>
    </header>
    
        <img src="image/college1.jpg" alt="college image" height="450px" width="100%">
        <div class="about-main">
            <div id= "cen">
                <h2>VConnect of VIT Engineering College</h2>
                
                <!-- still needs some changes here-->
                <p>
                    We Get this idea to create a website by our personal expierence , like some time teacher dont have time to take attendace and also 
                    student some time might forget to mark there attendace and also some project and interview expierence of passedout student
                    dont reach to the graduating student, so this website come with all the solution mention.
                </p>
            </div>
        </div>
    <footer>
        
            <div class="foot_second">
                <!-- Vconnect info -->
<!--                    <h2 >About Us</h2>-->
                   
                    <!-- footer links -->
                    <div class="foot_second_inner">
                    <a href="index2.php">HOME</a></div>
                    <div class="foot_second_inner">
                        <a href="forstudent.html">STUDENT</a></div>
                <div class="foot_second_inner">
                    <a href="events1.html">EVENTS</a></div>
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