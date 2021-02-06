<?php
require "header.php";
 ?>

 <main>
   <?php
   if(isset($_SESSION['AdminId'])){
     echo'
     <form action="include/delete.inc.php" method="Post">
     <input type="text" placeholder="course name" name="course" >
     <input type="text" placeholder="category" name="category">
         <button  type="submit" name="delete-submit" >Delete</button>
     </form>
     ';
   }
   ?>
