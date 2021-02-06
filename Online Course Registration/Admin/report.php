<?php
require "header.php";
 ?>

 <main>
   <?php
   if(isset($_SESSION['AdminId'])){
     echo'
     <form action="report.php" method="Post">
     <input type="text" placeholder="enter the date of the report or all for all reports" name="report" size="50">
         <button  type="submit" name="date-submit" >get</button>
     </form>
     ';
   }
   ?>
<?php
if(isset($_POST['date-submit'])){

  require 'include/dbh.inc.php';
$date = $_POST['report'];
  echo'reports on '.$date;
  echo'<br>';
  echo'<table style="width:100%;border: 1px solid black;">
<tr>
<th>Username</th>
<th>Date</th>
<th>subject</th>
<th>message</th>
</tr>';
if ($date == "all"){
$sql ="SELECT * FROM report";
$stmt = mysqli_stmt_init($connuser);
if(!mysqli_stmt_prepare($stmt, $sql)){
          header("Location: ../user.php?error=sqlerror2");
          exit();
}
else{
          mysqli_stmt_execute($stmt);
          $result = mysqli_stmt_get_result($stmt);
      while($row = mysqli_fetch_assoc($result)){
        $username = $row["uidName"];
        $date =$row["reportdate"];
         $subject = $row["subject"];
         $content = $row["message"];
          echo'<tr>
<td>'.$username.'</td>
<td>'.$date.'</td>
<td>'.$subject.'</td>
<td>'.$content.'</td>
</tr>';
}
}
}
else{
    $sql ="SELECT * FROM report where reportdate=?";
    $stmt = mysqli_stmt_init($connuser);
    if(!mysqli_stmt_prepare($stmt, $sql)){
                header("Location: ../index.php?error=sqlerror2");
                exit();
    }
    else{
               mysqli_stmt_bind_param($stmt, "s" ,$date);
                mysqli_stmt_execute($stmt);
                $result = mysqli_stmt_get_result($stmt);
            while($row = mysqli_fetch_assoc($result)){
              $username = $row["uidName"];
              $date =$row["reportdate"];
               $subject = $row["subject"];
               $content = $row["message"];
                echo'<tr>
      <td>'.$username.'</td>
      <td>'.$date.'</td>
      <td>'.$subject.'</td>
      <td>'.$content.'</td>
      </tr>';
         }

}
}
}
?>
