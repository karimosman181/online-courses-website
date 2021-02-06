<?php
  session_start();
 ?>
<?php
  $course=$_SESSION['course'];
  require 'dbh.inc.php';
  $sql ="SELECT * FROM $course";
  $stmt = mysqli_stmt_init($connadmin);
  if(!mysqli_stmt_prepare($stmt, $sql)){
    header("Location: ../description.php?error=sqlerror1");
    exit();
  }
  else{
    mysqli_stmt_execute($stmt);
    mysqli_stmt_store_result($stmt);
    $resultCheck = mysqli_stmt_num_rows($stmt);
    if($resultCheck > 0){
  echo '
<html>
<head>
  <style>
  /* The sidebar menu */
.sidenav {
  height: 100%; /* Full-height: remove this if you want "auto" height */
  width: 160px; /* Set the width of the sidebar */
  position: fixed; /* Fixed Sidebar (stay in place on scroll) */
  z-index: 1; /* Stay on top */
  top: 0; /* Stay at the top */
  left: 0;
  background-color: #111; /* Black */
  overflow-x: hidden; /* Disable horizontal scroll */
  padding-top: 20px;
}

/* The navigation menu links */
.sidenav a {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 25px;
  color: #ffb606;
  display: block;
}

/* When you mouse over the navigation links, change their color */
.sidenav a:hover {
  color: #f1f1f1;
}

/* Style page content */
.main {
  margin-left: 160px; /* Same as the width of the sidebar */
  padding: 0px 10px;
}

.button {
  background-color: #ffb606;
  border: none;
  color: #ffb606;
  padding: 5px;
  width:100%;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 25px;
  margin: 10px;
  transition-duration: 0.4s;
  cursor: pointer;
}

.button1 {
  background-color: #111;
  color: #ffb606;
  border: 2px solid #111;
}

.button1:hover {
  background-color: #ffb606;
  color: black;
}

.dot {
  height: 15px;
  width: 15px;
  background-color:  #ffb606;
  border-radius: 50%;
  display: inline-block;
  margin-right:5px;
}

#htmlcode{
  background-color: #E6E6E6;
  color:#ffb606;
}

.examplebox{
  background-color:#D8D8D8;
  font-size:40px;
  width:70%;
  padding:2%;
  margin-left:10%;
  margin-top:3%;
  margin-bottom:3%;
}
#examplebox{
  background-color:white;
  border-left-style: solid;
  border-color: #ffb606;
  font-size:20px;
}

/* On smaller screens, where height is less than 450px, change the style of the sidebar (less padding and a smaller font size) */
@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
  </style>
</head>
<body>
  <div class="sidenav">
  <a href="/New%20folder%20(3)/courses1.php">Courses</a>
  <form action="sidenav.inc.php" method="POST">
  ';
  $sql ="SELECT * FROM $course";
  $stmt = mysqli_stmt_init($connadmin);
  if(!mysqli_stmt_prepare($stmt, $sql)){
    header("Location: ../index.php?error=sqlerror2");
    exit();
  }
  else{
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
while($row = mysqli_fetch_assoc($result)){
   $pagenb = $row["pagenb"];
   $title=$row["title"];
  echo'
  <button class="button button1" type="submit" name="change-page" value="'.$pagenb.'">'.$title.'</button>';
}
echo'</form>
</div>';
}
}
}



?>
