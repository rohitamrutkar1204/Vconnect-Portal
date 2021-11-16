<?php
    session_start();
    if (isset($_GET['logout'])) { 
    session_destroy(); 
    unset($_SESSION['email']); 
    header("location: login.php"); 
} 
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- stylesheets -->
    <link rel="stylesheet" media="screen" href="main.css">
    <link rel="stylesheet" media="screen" href="footer.css">
    <link rel="stylesheet" media="screen" href="forstudent2.css">
    <link rel="stylesheet" media="screen" href="head.css">
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.css">
    <!-- icon -->
    <link rel="icon" href="image/logo.png">
    <title>VConnect</title>
    <style>
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
            a:hover
        {
            color:black;
            background-color:darksalmon;
        }
        .btn-left .but, .btn-right .but
        {
            margin-left: 200px;
            padding:50px;
            border-radius: 5px;
        }
        .btn-left,  .btn-right  
        {
            padding:30px 0px 30px 0px;
            height:200px;
        }
         .btn-right p,.btn-left p
        {
            text-align: center;
            font-size: 25px;
            padding:10px;
            font-family: monospace;
           text-shadow: 2px 2px 15px #000000;
        }
        .btn-left .but :hover{
           color:aqua;
        }
</style>
    
</head>
<body>
    <header>
        <!-- login and signup -->
        <div id="first">
            <ul>
                <li><a href="index.php?logout=1">  Logout </a></li>
                <li><a href="#"><?php echo($_SESSION['email'])   ?></a></li>
                <li><a href="forstudent2.php">Forstudent</a></li>
                <li><a href="http://localhost:777/">ForTeacher</a></li>
                <li><a href="contact2.php">Contact</a></li>
                
            </ul>
            <!-- contact number -->
           
        </div>
        <!-- navigation bar -->
        <div class="navbar">
            <div class="align">
                <a href="index2.php">HOME</a>
                <a href="forstudent2.php">STUDENT</a>
                <a href="http://localhost:777/">TEACHER</a>
                <a href="about2.php">ABOUT US</a>
                <div class="dropdown">
                  <button class="dropbtn">VConnect
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
    </header>
<!-- Mid section-->
<marquee style="color: rgb(235, 3, 235); font-size: 25px; "><b>Click here to know more about projects or interview and also share yours.</b></marquee>
<h1 style="color:darkred;margin-left:550px;">Time to get skilled up !!</h1>
<div class="btn-group" >
    
    <div class="btn-left " >

    <button class="but" style="cursor: pointer;"  ><a href="inteform.php" style="text-decoration:none;color:white;"> <b style="font-size:20px;">Add Interview Experience</b></a></button>
        <p>Cracked An Interview! Share With Others. </p>
    </div>
    <div class="btn-right ">
    
        <button class="but"style="cursor: pointer;"><b style="font-size:20px;"><a href="interview.php" style="text-decoration:none; color:white;">Past Interview Experience</a></b></button>
    <p>Read what your colleagues have to say about their interview experience with tech giants ... </p>
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
                        <a href="forstudent2.php">STUDENT</a></div>
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



            <!-- javascript link -->
            <script src="app.js"></script>    
    </body>
    </html>
    <script src="app.js"></script>   