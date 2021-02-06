<?php
require "header.php";
 ?>


 <main>
   <?php
   if(isset($_SESSION['userId'])){
     echo '<div class="super_container">

       <!-- Header -->


         <!-- Hamburger -->
         <div class="hamburger_container">
           <i class="fas fa-bars trans_200"></i>
         </div>

       </header>

       <!-- Menu -->

       <!-- Home -->

       <div class="home">
         <div class="home_background_container prlx_parent">
           <div class="home_background prlx" style="background-image:url(images/background.jpg)"></div>
         </div>
         <div class="home_content">
           <h1>Recent Courses</h1>
         </div>
       </div>

       <div class="popular page_section">
         <div class="container">
           <div class="row">
             <div class="col">
               <div class="section_title text-center">
                 <h1>Recent Courses</h1>
               </div>
             </div>
           </div>

           	<div class="row course_boxes">';

            require 'includes/dbh.inc.php';
          $userId= $_SESSION['userId'];
          $sql ="SELECT * FROM allcourses WHERE idUsers=?";
          $stmt = mysqli_stmt_init($conn);
          if(!mysqli_stmt_prepare($stmt, $sql)){
            header("Location: ../login.php?error=sqlerror1");
            exit();
          }
          else{
            mysqli_stmt_bind_param($stmt, "s" ,$userId);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $resultCheck = mysqli_stmt_num_rows($stmt);
            if($resultCheck > 0){
              $count = 0;
              $sql ="SELECT * FROM allcourses WHERE idUsers=?";
              $stmt = mysqli_stmt_init($conn);
              if(!mysqli_stmt_prepare($stmt, $sql)){
                header("Location: ../index.php?error=sqlerror2");
                exit();
              }
              else{
                mysqli_stmt_bind_param($stmt, "s" ,$userId);
                mysqli_stmt_execute($stmt);
                $result = mysqli_stmt_get_result($stmt);
            while($row = mysqli_fetch_assoc($result)){
               $course = $row["course"];
               echo '<!-- recent Course Item -->
                 <div class="col-lg-4 course_box">
                   <div class="card">
                     <img class="card-img-top" src="images/coursesbackground.jpg">
                     <div class="card-body text-center">
                       <div class="card-title"><a href="'.$course.'.php">'.$course.'</a></div>
                       <div class="card-text"></div>
                     </div>
                     <div class="price_box d-flex flex-row align-items-center">
                     registered
                     </div>
                   </div>
                 </div>';
             }
            }
          }
     }
     echo '</div>';
}
  ?>
</main>

<?php
require "footer.php";
?>
