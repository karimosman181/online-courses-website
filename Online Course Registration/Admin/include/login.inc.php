<?php
if(isset($_POST['login-submit'])){
  require 'dbh.inc.php';

  $adminname=$_POST['aid'];
  $password=$_POST['pwd'];

  if(empty($adminname) || empty($password)){
    header("Location: ../index.php?error=emptyfields");
    exit();
  }
  else{
    $sql ="SELECT * FROM  admins WHERE AdminName=?";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
      header("Location: ../index.php?error=sqlerror");
      exit();
    }
    else{
      mysqli_stmt_bind_param($stmt, "s" ,$adminname);
      mysqli_stmt_execute($stmt);
      $result = mysqli_stmt_get_result($stmt);
      if($row = mysqli_fetch_assoc($result)){
        $pwdcheck= password_verify($password, $row['password']);
        if($pwdcheck == false){
          header("Location: ../index.php?error=wrongpwd");
          exit();
        }
        else if($pwdcheck == true){
          session_start();
          $_SESSION['AdminId'] = $row['AdminId'];
          $_SESSION['AdminName'] = $row['AdminName'];
          header("Location: ../index.php?login=success");
          exit();
        }
        else{
          header("Location: ../index.php?error=wrongpwd");
          exit();
        }
      }
      else{
        header("Location: ../index.php?error=nouser");
        exit();
      }
    }
  }
}
else{
  header("Location: ../index.php");
  exit();
}
 ?>
