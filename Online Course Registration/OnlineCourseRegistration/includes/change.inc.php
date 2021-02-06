<?php
  session_start();
 ?>
<?php
if(isset($_POST['change-submit'])){
  require 'dbh.inc.php';
$mailuid=$_SESSION['userUid'];
$oldpassword = $_POST['oldpwd'];
$newpassword = $_POST['newpwd'];
$confirmpassword = $_POST['cnfpwd'];
if(empty($oldpassword) || empty($newpassword) || empty($confirmpassword)){
  header("Location: /OnlineCourseRegistration/changepassword.php?error=emptyfields");
  exit();
}
if($newpassword != $confirmpassword){
  header("Location: /OnlineCourseRegistration/changepassword.php?error=passwordsarenotthesimilar");
  exit();
}
else{
  $sql ="SELECT * FROM users WHERE uidUsers=?";
  $stmt = mysqli_stmt_init($conn);
  if(!mysqli_stmt_prepare($stmt, $sql)){
    header("Location: /OnlineCourseRegistration/changepassword.php?error=sqlerror");
    exit();
  }
  else{
    mysqli_stmt_bind_param($stmt, "s" ,$mailuid);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    if($row = mysqli_fetch_assoc($result)){
      $pwdcheck= password_verify($oldpassword, $row['pwdUsers']);
      if($pwdcheck == false){
        header("Location: /OnlineCourseRegistration/changepassword.php?error=wrongpwd");
        exit();
      }
      else if($pwdcheck == true){
        $sql = "UPDATE users SET pwdUsers=? WHERE uidUsers=?";
        $stmt=mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt, $sql)){
           header("Location: /OnlineCourseRegistration/changepassword.php?error=sqlerror2");
           exit();
         }
         else{
           $hashedPwd = password_hash($newpassword, PASSWORD_DEFAULT);
           mysqli_stmt_bind_param($stmt, "ss" ,$hashedPwd,$mailuid);
           mysqli_stmt_execute($stmt);
           session_unset();
           session_destroy();
           header("Location: /OnlineCourseRegistration/index.php?changepassword=success");
         }
        }
      }
    }
  }
}

?>
