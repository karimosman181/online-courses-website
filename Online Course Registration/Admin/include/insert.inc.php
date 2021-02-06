<?php
if(isset($_POST['create-submit'])){
  require 'dbh.inc.php';
  $dbtable =$_POST['course'];
  $pagenb=$_POST['pagenb'];
  $title=$_POST['title'];
  $content=$_POST['content'];

  if(empty($dbtable) ||empty($pagenb) || empty($title)  || empty($content)){
    header("Location: ../addpage.php?error=emptyfields");
    exit();
  }
  else{
    $sql ="SELECT * FROM  $dbtable WHERE pagenb=?";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
      header("Location: ../addpage.php?error=sqlerror");
      exit();
    }
    else{
      mysqli_stmt_bind_param($stmt, "s" ,$pagenb);
      mysqli_stmt_execute($stmt);
      $result = mysqli_stmt_get_result($stmt);
      if($row = mysqli_fetch_assoc($result)){
        header("Location: ../addpage.php?error=pagealreadyexsit");
        exit();
      }
      else{
        $sql = "INSERT INTO $dbtable (pagenb, title, content) Values (?, ?, ?)";
        $stmt=mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt, $sql)){
           header("Location: ../addpage.php?error=sqlerror2");
           exit();
                 }
                 else{
                   mysqli_stmt_bind_param($stmt, "sss" ,$pagenb,$title, $content);
                   mysqli_stmt_execute($stmt);
                   header("Location: ../addpage.php");
                   exit();
      }
    }
  }
}
}

      ?>
