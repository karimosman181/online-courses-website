<?php
require "header.php";
 ?>

 <main>
   <?php
   if(isset($_SESSION['AdminId'])){
     echo'
     <form action="include/modify.inc.php" method="Post">
     <input type="text" placeholder="course name" name="course" >
     <input type="text" placeholder="page number" name="pagenb">
     <input type="text" placeholder="content" name="content" size="100">
         <button  type="submit" name="update-submit" >update</button>
     </form>
     ';
   }
   ?>
