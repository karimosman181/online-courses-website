<?php
  session_start();
 ?>
<?php
if(isset($_POST['resgister'])){
    require 'dbh.inc.php';
$userId= $_SESSION['userId'];
$course=$_POST['resgister'];
session_start();
$_SESSION['course']=$course;
$sql ="SELECT * FROM $course WHERE idUsers=?";
$stmt = mysqli_stmt_init($conn);
if(!mysqli_stmt_prepare($stmt, $sql)){
  header("Location: ../description.phpl?error=sqlerror1");
  exit();
}
else{
  mysqli_stmt_bind_param($stmt, "s" ,$userId);
  mysqli_stmt_execute($stmt);
  $result = mysqli_stmt_get_result($stmt);
    if($row = mysqli_fetch_assoc($result)){
      header("Location: ../includes/coursepages.inc.php");
      exit();
  }
  else{
   $sql = "INSERT INTO $course (idUsers, pageNb) Values (?, '1')";
   $stmt=mysqli_stmt_init($conn);
   if(!mysqli_stmt_prepare($stmt, $sql)){
      header("Location: ../description.php?error=sqlerror2");
      exit();
            }
            else{
              mysqli_stmt_bind_param($stmt, "s" ,$userId);
              mysqli_stmt_execute($stmt);
              $sql = "INSERT INTO allcourses (idUsers, course) Values (?, ?)";
              $stmt=mysqli_stmt_init($conn);
              if(!mysqli_stmt_prepare($stmt, $sql)){
                 header("Location: ../description.php?error=sqlerror3");
                 exit();
                       }
                       else{
                         mysqli_stmt_bind_param($stmt, "ss" ,$userId,$course);
                         mysqli_stmt_execute($stmt);
                       }
              header("Location: ../includes/coursepages.inc.php");
              exit();
            }
     }
  }
mysqli_stmt_close($stmt);
mysql_close($conn);
}
?>
