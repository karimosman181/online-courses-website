
<?php
if(isset($_SESSION['userId'])){
  require 'dbh.inc.php';
$userId= $_SESSION['userId'];
$sql ="SELECT * FROM allcourses WHERE idUsers=?";
$stmt = mysqli_stmt_init($conn);
if(!mysqli_stmt_prepare($stmt, $sql)){
  header("Location: ../index.php?error=sqlerror1");
  exit();
}
else{
  mysqli_stmt_bind_param($stmt, "s" ,$userId);
  mysqli_stmt_execute($stmt);
  mysqli_stmt_store_result($stmt);
  $resultCheck = mysqli_stmt_num_rows($stmt);
  if($resultCheck > 0){
    echo'<!--featured courses-->
      <section class="featured-courses horizontal-column courses-wrap">
          <div class="container">
              <div class="row">
                  <div class="col-12">
                      <header class="heading flex justify-content-between align-items-center">
                          <h2 class="entry-title">recent Courses

                          <a class="btn mt-4 mt-sm-0" href="recent.php">view all</a></h2>
                      </header><!-- .heading -->
                  </div><!-- .col -->';
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
                while(($row = mysqli_fetch_assoc($result)) && ($count < 2)){
                   $course = $row["course"];
                    echo'<div class="col-12 col-lg-6">
                     <div class="course-content flex flex-wrap justify-content-between align-content-lg-stretch">
                         <figure class="course-thumbnail">
                             <a href="#"></a>
                         </figure><!-- .course-thumbnail -->

                         <div class="course-content-wrap">
                             <header class="entry-header">

                                 <h2 class="entry-title"><a href="'.$course.'.php">'.$course.'</a></h2>

                                 <div class="entry-meta flex flex-wrap align-items-center">
                                     <div class="course-author"><a href="#"></a></div>
                                 </div><!-- .course-date -->
                             </header><!-- .entry-header -->

                             <footer class="entry-footer flex justify-content-between align-items-center">
                                 <div class="course-cost">
                                     <span class="free-cost">registered</span>
                                 </div><!-- .course-cost -->
                             </footer><!-- .entry-footer -->
                         </div><!-- .course-content-wrap -->
                     </div><!-- .course-content -->
                 </div><!-- .col -->';
                 $count = $count+1;
             }
             echo'   </div><!-- .row -->
            </div><!-- .container -->
        </section><!-- .courses-wrap -->';
  }
}
}
}
