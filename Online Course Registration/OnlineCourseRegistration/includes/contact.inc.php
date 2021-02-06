<?php
    if(isset($_POST['contact-submit'])){

      require 'dbh.inc.php';

      $user = $_POST['user'];
      $date = $_POST['date'];
      $subject = $_POST['subject'];
      $message = $_POST['message'];

      $sql ="SELECT uidUsers FROM users WHERE uidUsers=?";
      $stmt = mysqli_stmt_init($conn);
      if(!mysqli_stmt_prepare($stmt, $sql)){
        header("Location: OnlineCourseRegistration/contact.php?error=sqlerror1");
        exit();
      }
      else{
        mysqli_stmt_bind_param($stmt, "s" ,$user);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_store_result($stmt);
        $resultCheck = mysqli_stmt_num_rows($stmt);
        if($resultCheck = 0){
          header("Location: ../OnlineCourseRegistration/contact.php?error=username");
          exit();
        }
        else{
      $sql = "INSERT INTO report (uidName, reportdate, subject, message) Values (?, ?, ?, ?)";
      $stmt=mysqli_stmt_init($conn);
      if(!mysqli_stmt_prepare($stmt, $sql)){
         header("Location: OnlineCourseRegistration/contact.php?error=sqlerror2");
         exit();
       }
       else{
         mysqli_stmt_bind_param($stmt, "ssss" ,$user, $date, $subject, $message);
         mysqli_stmt_execute($stmt);
         header("Location: /OnlineCourseRegistration/contact.php");
         exit();
       }
       }
     }
}


     ?>
