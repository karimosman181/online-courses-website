<?php
if(isset($_POST['update-submit'])){

  require 'dbh.inc.php';

    $course =$_POST['course'];
    $pagenb =$_POST['pagenb'];
    $content =$_POST['content'];

    if(empty($course) || empty($pagenb) || empty($content)){
      header("Location: ../modify.php?error=emptyfields");
      exit();
  }
  else{
    $sql ="SELECT * FROM allcourses WHERE CourseName=?";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
      header("Location: ../modify.php?error=sqlerror");
      exit();
    }
    else{
      mysqli_stmt_bind_param($stmt, "s" ,$course);
      mysqli_stmt_execute($stmt);
      $result = mysqli_stmt_get_result($stmt);
      if($row = mysqli_fetch_assoc($result)){
        $sql ="UPDATE $course SET content=?	WHERE pagenb=?";
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt, $sql)){
           header("Location: ../modify.php?error=sqlerror2");
           exit();
                 }
                 else{
                   mysqli_stmt_bind_param($stmt, "ss" ,$content,$pagenb);
                   mysqli_stmt_execute($stmt);
                   header("Location: ../modify.php?success");
                   exit();
                 }
               }
      else{
        header("Location: ../modify.php?error=cousredoesnotexsit");
        exit();
      }
    }
}
}
?>
