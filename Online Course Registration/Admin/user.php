<?php
require "header.php";
 ?>

 <main>
   <?php
   if(isset($_SESSION['AdminId'])){
     echo'
     <form action="user.php" method="Post">
     <input type="text" placeholder="user name or write all to get all users" name="user" size="50">
         <button  type="submit" name="user-submit" >get</button>
     </form>
     ';
   }
   ?>
    <?php
    if(isset($_POST['user-submit'])){

      require 'include/dbh.inc.php';
$user = $_POST['user'];
      echo'regiterated courses for '.$user;
      echo'<br>';
      echo'<table style="width:100%;border: 1px solid black;">
  <tr>
    <th>User Id</th>
    <th>Username</th>
    <th>cousres</th>
  </tr>';
if ($user == "all"){
  $sql ="SELECT users.idUsers, users.uidUsers, allcourses.course FROM allcourses JOIN users on allcourses.idUsers = users.idUsers";
  $stmt = mysqli_stmt_init($connuser);
  if(!mysqli_stmt_prepare($stmt, $sql)){
              header("Location: ../user.php?error=sqlerror2");
              exit();
  }
  else{
              mysqli_stmt_execute($stmt);
              $result = mysqli_stmt_get_result($stmt);
          while($row = mysqli_fetch_assoc($result)){
            $iduser = $row["idUsers"];
            $username =$row["uidUsers"];
             $course = $row["course"];
              echo'<tr>
<td>'.$iduser.'</td>
<td>'.$username.'</td>
<td>'.$course.'</td>
</tr>';
}
}
}
  else{
      $sql ="SELECT * FROM users WHERE uidUsers=?";
      $stmt = mysqli_stmt_init($connuser);
if(!mysqli_stmt_prepare($stmt, $sql)){
  header("Location: ../index.php?error=sqlerror1");
  exit();
}
else{
  mysqli_stmt_bind_param($stmt, "s" ,$user);
  mysqli_stmt_execute($stmt);
  mysqli_stmt_store_result($stmt);
  $resultCheck = mysqli_stmt_num_rows($stmt);
  if($resultCheck > 0){
        $sql ="SELECT users.idUsers, users.uidUsers, allcourses.course FROM allcourses JOIN users on allcourses.idUsers = users.idUsers where users.uidUsers = ?";
        $stmt = mysqli_stmt_init($connuser);
        if(!mysqli_stmt_prepare($stmt, $sql)){
                    header("Location: ../index.php?error=sqlerror2");
                    exit();
        }
        else{
                   mysqli_stmt_bind_param($stmt, "s" ,$user);
                    mysqli_stmt_execute($stmt);
                    $result = mysqli_stmt_get_result($stmt);
                while($row = mysqli_fetch_assoc($result)){
                  $iduser = $row["idUsers"];
                   $course = $row["course"];
                    echo'<tr>
    <td>'.$iduser.'</td>
    <td>'.$user.'</td>
    <td>'.$course.'</td>
  </tr>';
             }

  }
}
}
}
}

    ?>
