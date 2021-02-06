<?php
if(isset($_POST['delete-submit'])){

  require 'dbh.inc.php';

    $course =$_POST['course'];
    $category =$_POST['category'];

    if(empty($course) || empty($category)){
      header("Location: ../deletecourse.php?error=emptyfields");
      exit();
  }
  else{
    $sql ="SELECT * FROM allcourses WHERE CourseName=?";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
      header("Location: ../deletecourse.php?error=sqlerror");
      exit();
    }
    else{
      mysqli_stmt_bind_param($stmt, "s" ,$course);
      mysqli_stmt_execute($stmt);
      $result = mysqli_stmt_get_result($stmt);
      if($row = mysqli_fetch_assoc($result)){
        $sql ="DELETE FROM allcourses WHERE CourseName=?";
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt, $sql)){
           header("Location: ../deletecourse.php?error=sqlerror2");
           exit();
                 }
                 else{
                   mysqli_stmt_bind_param($stmt, "s" ,$course);
                   mysqli_stmt_execute($stmt);
                   $sql = "DROP TABLE $course";
                   $stmt=mysqli_stmt_init($conn);
                   if(!mysqli_stmt_prepare($stmt, $sql)){
                      header("Location: ../deletecourse.php?error=sqlerror3");
                      exit();
                            }
                            else{
                              mysqli_stmt_execute($stmt);
                            }
                            $sql = "DROP TABLE $course";
                            $stmt=mysqli_stmt_init($connuser);
                            if(!mysqli_stmt_prepare($stmt, $sql)){
                               header("Location: ../deletecourse.php?error=sqlerror3");
                               exit();
                                     }
                                     else{
                                       mysqli_stmt_execute($stmt);
                                     }
                   header("Location: ../deletecourse.php?success");
                   exit();
                 }
               }
      else{
        header("Location: ../deletecourse.php?error=cousredoesnotexsit");
        exit();
      }
    }
}
}
?>
