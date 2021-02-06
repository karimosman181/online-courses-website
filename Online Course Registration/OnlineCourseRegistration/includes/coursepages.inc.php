
<?php
require 'sidenav.php';
  $course=$_SESSION['course'];
  require 'dbh.inc.php';

  $userId= $_SESSION['userId'];

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
          $pagenb = $row['pageNb'];
    }

$sql ="SELECT * FROM $course Where pagenb=?";
$stmt = mysqli_stmt_init($connadmin);
if(!mysqli_stmt_prepare($stmt, $sql)){
  header("Location: ../description.php?error=sqlerror2");
  exit();
}
else{
  mysqli_stmt_bind_param($stmt, "s" ,$pagenb);
  mysqli_stmt_execute($stmt);
  $result = mysqli_stmt_get_result($stmt);
 $row = mysqli_fetch_assoc($result);
 $content = $row["content"];
 $title=$row["title"];
echo'
<div class="main">
<h1>'.$title.'</h1>
'.$content.'
</div>
';
}
}


 ?>
