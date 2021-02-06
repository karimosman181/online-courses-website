<?php
if(isset($_POST['create-submit'])){
  require 'dbh.inc.php';

  $course =$_POST['course'];
  $category =$_POST['category'];
  $disc =$_POST['disc'];
  $ctext =$_POST['ctext'];
  $pages =$_POST['pages'];

  if(empty($course) || empty($category) || empty($disc) || empty($ctext) || empty($pages)){
    header("Location: ../addcourses.php?error=emptyfields");
    exit();
  }
  else{
    $sql ="SELECT * FROM  allcourses WHERE CourseName	=?";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
      header("Location: ../addcourses.php?error=sqlerror");
      exit();
    }
    else{
      mysqli_stmt_bind_param($stmt, "s" ,$course);
      mysqli_stmt_execute($stmt);
      $result = mysqli_stmt_get_result($stmt);
      if($row = mysqli_fetch_assoc($result)){
        header("Location: ../addcourses.php?error=coursealreadyexsit");
        exit();
      }
      else{
        $sql = "INSERT INTO allcourses (CourseName, Category, descr, cardtext, pages) Values (?, ?, ?, ?, ?)";
        $stmt=mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt, $sql)){
           header("Location: ../addcourses.php?error=sqlerror2");
           exit();
                 }
                 else{
                   mysqli_stmt_bind_param($stmt, "sssss" ,$course,$category, $disc,$ctext,$pages);
                   mysqli_stmt_execute($stmt);
                   $sql = "CREATE TABLE $course (pagenb int,title varchar(255),content LONGTEXT);";
                   $stmt=mysqli_stmt_init($conn);
                   if(!mysqli_stmt_prepare($stmt, $sql)){
                      header("Location: ../addcourses.php?error=sqlerror3");
                      exit();
                            }
                            else{
                              mysqli_stmt_execute($stmt);
                            }
                            $sql = "CREATE TABLE $course (idUsers TINYTEXT,pageNb varchar(255));";
                            $stmt=mysqli_stmt_init($connuser);
                            if(!mysqli_stmt_prepare($stmt, $sql)){
                               header("Location: ../addcourses.php?error=sqlerror4");
                               exit();
                                     }
                                     else{
                                       mysqli_stmt_execute($stmt);
                                     }
                   header("Location: ../addcourses.php");
                   exit();
                 }
          }
       }
     mysqli_stmt_close($stmt);
     mysql_close($conn);
     }
      }
 ?>
