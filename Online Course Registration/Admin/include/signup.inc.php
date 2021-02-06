<?php
if(isset($_POST['signup-submit'])){
  require 'dbh.inc.php';

  $adminname=$_POST['aid'];
  $password=$_POST['pwd'];
  $passwordRepeat=$_POST['pwd-repeat'];
 if(empty($adminname) || empty($password) || empty($passwordRepeat)){
   header("Location: ../signup.php?error=emptyfield");
   exit();
 }
 elseif($password !== $passwordRepeat){
   header("Location: ../signup.php?error=passwordcheck");
   exit();
 }
 else{

   $sql ="SELECT AdminName FROM admins WHERE AdminName=?";
   $stmt = mysqli_stmt_init($conn);
   if(!mysqli_stmt_prepare($stmt, $sql)){
     header("Location: ../signup.phpl?error=sqlerror1");
     exit();
   }
   else{
     mysqli_stmt_bind_param($stmt, "s" ,$adminname);
     mysqli_stmt_execute($stmt);
     mysqli_stmt_store_result($stmt);
     $resultCheck = mysqli_stmt_num_rows($stmt);
     if($resultCheck > 0){
       header("Location: ../signup.php?error=usernametaken");
       exit();
     }
     else{
      $sql = "INSERT INTO admins (AdminName, password) Values (?, ?)";
      $stmt=mysqli_stmt_init($conn);
      if(!mysqli_stmt_prepare($stmt, $sql)){
         header("Location: ../signup.php?error=sqlerror2");
         exit();
       }
       else{
         $hashedPwd = password_hash($password, PASSWORD_DEFAULT);
         mysqli_stmt_bind_param($stmt, "ss" ,$adminname, $hashedPwd);
         mysqli_stmt_execute($stmt);
         header("Location: ../signup.php?signup=success");
         exit();
       }
     }
   }
 }
 mysqli_stmt_close($stmt);
 mysql_close($conn);
}
else{
  header("Location: ../signup.php");
  exit();
}
 ?>
 ?>
