<?php
require "header.php";
 ?>

 <main>
   <?php
   if(isset($_SESSION['AdminId'])){
     echo'
     <form action="include/create.inc.php" method="Post">
     <input type="text" placeholder="course name" name="course" >
     <input type="text" placeholder="category" name="category">
     <input type="text" placeholder="discription" name="disc">
     <input type="text" placeholder="card-text" name="ctext">
     <input type="text" placeholder="how many pages" name="pages">
         <button  type="submit" name="create-submit" >create</button>
     </form>
     ';
   }
   ?>
