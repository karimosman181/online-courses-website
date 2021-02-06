<?php
  session_start();
 ?>
<html>
<head>
  <title>Course</title>
  <meta charset="utf-8">
  <meta name="description" content="Course Project">
  <link rel="stylesheet" type="text/css" href="styles/courses_styles.css">
  <link rel="stylesheet" type="text/css" href="styles/courses_responsive.css">
  <script src="styles/bootstrap4/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="styles/main_styles.css">
  <link rel="stylesheet" type="text/css" href="styles/contact.css">
  <script src="js/custom.js"></script>
</head>
<body>
  <div class="super_container">

  	<!-- Header -->

  	<header class="header d-flex flex-row">
  		<div class="header_content d-flex flex-row align-items-center">
  			<!-- Logo -->
  			<div class="logo_container">
  				<div class="logo">
  					<span> online courses</span>
  				</div>
  			</div>

  			<!-- Main Navigation -->
  			<nav class="main_nav_container">
  				<div class="main_nav">
  					<ul class="main_nav_list">
  						<li class="main_nav_item"><a href="index.php">home</a></li>
  						<li class="main_nav_item"><a href="courses1.php">courses</a></li>
  						<li class="main_nav_item"><a href="contact.php">contact</a></li>
  					</ul>
  				</div>
  			</nav>
  		</div>
      <?php
      if(isset($_SESSION['userId'])){
         echo '<form action="includes/account.inc.php" method="Post">
         	<div class="header_side d-flex flex-row justify-content-center align-items-center">
             <button style="border-radius: 25px;background: #ffb606;padding:20px;width: 150px;height: 50px;margin-left:20%;" type="submit" name="Account-submit" ><span style="color: #FFFFFF;  font-size: 20px;	font-weight: 400;line-height: 0.5;">Account</span></button>
             <span></span>
           </div>

         </form></header>';
      }
      else{
        echo '<div class="header_side d-flex flex-row justify-content-center align-items-center">
        <span></span>
      </div></header>
        <div class="homelogin">
          <div class="homelogin_background_container prlx_parent">
            <div class="homelogin_background prlx" style="background-image:url(images/background.jpg)">
            <h1 style="position:absolute;top:28%;left:45%;font-size:450%;color:#ffb606;">Login</h1>
        <form style="position:absolute;top:40%;left:40%;" action="includes/login.inc.php" method="POST">
          <input  style="border-radius: 25px;border: 2px solid  #ffb606;padding: 20px;margin-bottom:15px;width: 300px;height: 50px;" type="text" name="mailuid" placeholder="username"  id="rcorners2" required="required"><br>
          <input  style="border-radius: 25px;border: 2px solid  #ffb606;padding: 20px;margin-bottom:15px;width: 300px;height: 50px;" type="password" name="pwd" placeholder="password"  id="rcorners2" required="required"><br>
          <button style="border-radius: 25px;background: #ffb606;padding: 20px;width: 100px;height: 50px;margin-left:40%;" type="submit" name="login-submit" id="rcorners1"><span style="color: #FFFFFF;  font-size: 20px;	font-weight: 400;line-height: 0.5;">login</span></button>
        </form>
        <div  style="position:absolute;top:57%;left:60%;">
        <a href="signup.php"  style="color: #ffb606;  font-size: 20px;	font-weight: 400;">signup</a></div>
      </div></div></div>';
      }
       ?>
    </div>
  </nav>
</body>
</html>
