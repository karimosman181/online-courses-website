<?php
  session_start();
 ?>
<html>
<head>
  <title>Course</title>
  <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>
      <?php
      if(isset($_SESSION['AdminId'])){
         echo '
         <!-- Main Navigation -->
         <nav class="main_nav_container">
           <div>
             <ul class="nav">
             <li class="logo">Online courses</li>
               <li><a href="addcourses.php">Add courses</a></li>
               <li><a href="addpage.php">Add page</a></li>
               <li><a href="deletecourse.php">Delete courses</a></li>
               <li><a href="modify.php">Modify courses</a></li>
                <li><a href="user.php">users</a></li>
                <li><a href="deleteusers.php">Delete users</a></li>
                <li><a href="report.php">reports</a></li>
         <form action="include/logout.inc.php" method="Post">
             <button  type="submit" name="logout-submit" >logout</button>
         </form>
         </ul>
       </div>
     </nav>
   </div>
  </header>';
      }
      else{
        echo '
        <!-- Main Navigation -->
        <nav class="main_nav_container">
          <div class="main_nav">
            <ul class="main_nav_list">
            <li class="main_nav_item  logo">Online courses&nbsp&nbsp&nbsp</li>
            <li class="main_nav_list"><h1>Login</h1></li>
        <form action="include/login.inc.php" method="POST">
              <li class="main_nav_list"><input  type="text" name="aid" placeholder="username"  id="rcorners2" required="required"><br>
              <li class="main_nav_list"><input   type="password" name="pwd" placeholder="password"  id="rcorners2" required="required"><br>
              <li class="main_nav_list"><button type="submit" name="login-submit" id="rcorners1">login</button>
        </form>

        <li class="main_nav_list" ><a href="signup.php">signup</a></li>
        </ul>
      </div>
    </nav>
  </div>
 </header>
';
      }
       ?>
    </div>
  </nav>
</body>
</html>
