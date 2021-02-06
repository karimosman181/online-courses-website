<?php
  require 'dbh.inc.php';
  $category="accounting";
$sql ="SELECT * FROM allcourses WHERE Category=?";
$stmt = mysqli_stmt_init($connadmin);
if(!mysqli_stmt_prepare($stmt, $sql)){
  header("Location: ../index.php?error=sqlerror1");
  exit();
}
else{
  mysqli_stmt_bind_param($stmt, "s" ,$category);
  mysqli_stmt_execute($stmt);
  mysqli_stmt_store_result($stmt);
  $resultCheck = mysqli_stmt_num_rows($stmt);
  if($resultCheck > 0){
    echo'<div class="categ">
        IT:
        <a class="btn mt-4 mt-sm-0" href="allit.php">view all</a>
        </div><br><!-- .col -->
        <div class="row course_boxes">';
                  $count = 0;
                  $sql ="SELECT * FROM allcourses WHERE Category=?";
                  $stmt = mysqli_stmt_init($connadmin);
                  if(!mysqli_stmt_prepare($stmt, $sql)){
                    header("Location: ../index.php?error=sqlerror2");
                    exit();
                  }
                  else{
                   mysqli_stmt_bind_param($stmt, "s" ,$category);
                    mysqli_stmt_execute($stmt);
                    $result = mysqli_stmt_get_result($stmt);
                while(($row = mysqli_fetch_assoc($result)) && ($count < 3)){
                   $course = $row["CourseName"];
                   $cardtext=$row["cardtext"];
                    echo'
                 <!-- Popular Course Item -->
          				<div class="col-lg-4 course_box">
          					<div class="card">
          						<img class="card-img-top" src="images/coursesbackground.jpg">
          						<div class="card-body text-center">
          							<div class="card-title">
                        <form action="/OnlineCourseRegistration/description.php" method="Post">
                        <button style="border: none;text-align: center;text-decoration: none; font-size: 30px;background-color: white;" type="submit" name="choose" value="'.$course.'">'.$course.'</button>
                        <form>
                        </div>
          							<div class="card-text">'.$cardtext.'</div>
          						</div>
          						<div class="price_box d-flex flex-row align-items-center">
          						</div>
          					</div>
          				</div>';
                 $count = $count+1;
             }

  }
}
}
