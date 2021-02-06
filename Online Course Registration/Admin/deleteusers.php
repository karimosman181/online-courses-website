<?php
require "header.php";
 ?>

 <main>
   <?php
   if(isset($_SESSION['AdminId'])){
     echo'
     <form action="deleteusers.php" method="Post">
        <input type="text" placeholder="enter user id" name="id" required>
     <input type="text" placeholder="enter username" name="name" size="50" required>
         <button  type="submit" name="deleteuser-submit" >Delete</button>
     </form>
     ';
   }
   ?>
   <?php
   if(isset($_POST['deleteuser-submit'])){

     require 'include/dbh.inc.php';

       $id =$_POST['id'];
       $username =$_POST['name'];


       $sql ="SELECT * FROM users WHERE uidUsers=?";
       $stmt = mysqli_stmt_init($connuser);
       if(!mysqli_stmt_prepare($stmt, $sql)){
         header("Location: ../deleteusers.php?error=sqlerror");
         exit();
       }
       else{
         mysqli_stmt_bind_param($stmt, "s" ,$username);
         mysqli_stmt_execute($stmt);
         $result = mysqli_stmt_get_result($stmt);
         if($row = mysqli_fetch_assoc($result)){
           $sql ="DELETE FROM users WHERE uidUsers=?";
           $stmt = mysqli_stmt_init($connuser);
           if(!mysqli_stmt_prepare($stmt, $sql)){
              header("Location: ../deleteusers.php?error=sqlerror2");
              exit();
                    }
                    else{
                      mysqli_stmt_bind_param($stmt, "s" ,$username);
                      mysqli_stmt_execute($stmt);
                      $sql = "DELETE FROM allcourses WHERE idUsers=?";
                      $stmt=mysqli_stmt_init($connuser);
                      if(!mysqli_stmt_prepare($stmt, $sql)){
                         header("Location: ../deleteusers.php?error=sqlerror3");
                         exit();
                               }
                               else{
                                 mysqli_stmt_bind_param($stmt, "s" ,$id);
                                 mysqli_stmt_execute($stmt);
                               }
                             }
                           }
                         }
                       }
?>
