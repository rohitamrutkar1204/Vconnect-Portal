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
     <link rel="stylesheet" media="screen" href="events1.css">
    <link rel="stylesheet" media="screen" href="footer.css">
    <link rel="stylesheet" media="screen" href="head.css">
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.css">
    <link rel="icon" href="image/logo.png">
    <title>Vconnect</title>
  
</head>
<body>
      <header>
        <!-- login and signup -->
        <div id="first">
            <ul>
                        <li><a href="index.php?logout=1">  Logout </a></li>
                <li><a href="#"><?php echo($_SESSION['email'])   ?></a></li>
                <li><a href="forstudent.html">Forstudent</a></li>
                <li><a href="http://localhost:777/">ForTeacher</a></li>
                <li><a href="contact.html">Contact</a></li>
                
            </ul>
          
        </div>
        <!-- navigation bar -->
        <div class="navbar">
            <div class="align">
                <a href="index.php">HOME</a>
                <a href="forstudent.html">STUDENT</a>
                <a href="http://localhost:777/">TEACHER</a>
                <a href="about.html">ABOUT US</a>
                <div class="dropdown">
                  <button class="dropbtn">MORE 
                    <i class="fa fa-caret-down"></i>
                  </button>
                  <div class="dropdown-content">
                    <a href="projects.html">Projects</a>
                    <a href="#">Events</a>
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
        <!-- logo with link -->
        <a href="index.html"> <img src="image/logo.png" alt="V connect logo" height="130px" width="100px"></a>
    </header>
    
    <section>
        <div class="leftbox">
            <div class="content">
            <h1>Events</h1>
                <p>See all upcoming events going to be held in our college.</p>
            </div>
        </div>
        
        <div class="events">
        <ul>
            <li>
                <div class="time">
                    <h2>26<br><span>Jan</span> </h2>
                </div>
                <div class="details">
                    <h3>Republic Day</h3>
<!--                    <p>sdadadadad</p>-->
                    <a href="#">View Details></a>
                </div>
            </li>
              <li>
                <div class="time">
                    <h2>18<br><span>Feb</span> </h2>
                </div>
                <div class="details">
                    <h3>Karandak</h3>
<!--                    <p>The Intra-College Event!!Show-Up your skils.</p>-->
                    <a href="#">View Details></a>
                </div>
            </li>
            
              <li>
                <div class="time">
                    <h2>1<br><span>Oct</span> </h2>
                </div>
                <div class="details">
                    <h3>Melange</h3>
<!--                    <p>The Inter-College Event!!Wrestle with the best.</p>-->
                    <a href="#">View Details></a>
                </div>
            </li>
        </ul>
            
            
        </div>
        
    </section>
  
</body>
</html>


