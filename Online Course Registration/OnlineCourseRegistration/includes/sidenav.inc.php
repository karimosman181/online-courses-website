<?php
  session_start();
 ?>
<?php
if(isset($_POST['change-page'])){
  require 'dbh.inc.php';
$userId= $_SESSION['userId'];
$pageNb=$_POST['change-page'];
$course=$_SESSION['course'];
$sql ="UPDATE $course SET pageNb=? WHERE idUsers=?";
$stmt = mysqli_stmt_init($conn);
if(!mysqli_stmt_prepare($stmt, $sql)){
  header("Location: ../description.phpl?error=sqlerror1");
  exit();
}
else{
  mysqli_stmt_bind_param($stmt, "ss" ,$pageNb,$userId);
  mysqli_stmt_execute($stmt);
  $result = mysqli_stmt_get_result($stmt);
    header("Location: ../includes/coursepages.inc.php");
      exit();
  }
}
 ?>
