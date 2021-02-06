<?php
if(isset($_POST['choose'])){
  $course=$_POST['choose'];
  require 'includes/dbh.inc.php';
  $sql ="SELECT * FROM allcourses WHERE CourseName=?";
  $stmt = mysqli_stmt_init($connadmin);
  if(!mysqli_stmt_prepare($stmt, $sql)){
    header("Location: ../index.php?error=sqlerror1");
    exit();
  }
  else{
    mysqli_stmt_bind_param($stmt, "s" ,$course);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_store_result($stmt);
    $resultCheck = mysqli_stmt_num_rows($stmt);
    if($resultCheck > 0){
    echo'<html>
<head>
  <link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="styles/course1.css">
</head>
<body>
  <!---home background --->
  <div class="home">
    <div class="home_background_container prlx_parent">
      <div class="home_background prlx" style="background-image:url(images/background.jpg)"></div>
    </div>
    <div class="home_content">
      <a href="courses1.php"><img src="images/backbutton.png" width=20px height=20px></a>
    </div>
  </div>
';
$sql ="SELECT * FROM allcourses WHERE CourseName=?";
$stmt = mysqli_stmt_init($connadmin);
if(!mysqli_stmt_prepare($stmt, $sql)){
  header("Location: ../index.php?error=sqlerror2");
  exit();
}
else{
 mysqli_stmt_bind_param($stmt, "s" ,$course);
  mysqli_stmt_execute($stmt);
  $result = mysqli_stmt_get_result($stmt);
  $row = mysqli_fetch_assoc($result);
  $descr=$row["descr"];
echo'
  <!---Title--->
  <div class="coursetitle">
   '.$course.'
  </div>
  <form action="includes/registercourse.inc.php" method="POST">
     <div  style="position: absolute;left: 85%;top:50%;">
     <button style="border-radius: 25px;background: #ffb606;padding:20px;width: 150px;height: 100px;margin-left:20%;" type="submit" name="resgister" value="'.$course.'"><span style="color: #FFFFFF;  font-size: 20px;	font-weight: 400;line-height: 0.5;">start course</span></button>
     </div>
  </form>

  <!---description-->
  <div class="description">
    <span id="desc">Description</span><br>
    <div id="description">
     '.$descr.'<br><br>

  </div>
  </div>
';
  }
}
}
}
 require "footer.php";
 ?>
