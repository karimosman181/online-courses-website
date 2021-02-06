<?php
require "header.php";
 ?>

 <main>
   <?php

       if(isset($_POST['search-submit'])){
       $searchitem = $_POST['searchitem'];
       $courses = array ("webdesign", "oop", "marketing",  "leadership", "introtoprog","acounting 1","accounting 2","ecommerce","math 1","math 2","feasibility study","statistics");
       echo'<div class="super_container">

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
       			<h1>search result</h1>
       		</div>
       	</div>
        <div class="popular page_section">
          <div class="container">
            <div class="row">
              <div class="col">
                <div class="section_title text-center">
                  <h1>search result of "'.$searchitem.'"</h1>
                </div>
              </div>
            </div>
            <div class="row course_boxes">
';
         $searchkey=strtolower($searchitem);

        foreach ( $courses as $course ){
          if(($course == $searchkey) || (strstr($searchkey,$course)) || (strstr($course,$searchkey))){
            echo'<!-- Popular Course Item -->
         <div class="col-lg-4 course_box">
           <div class="card">
             <img class="card-img-top" src="images/coursesbackground.jpg">
             <div class="card-body text-center">
               <div class="card-title"><a href="'.$course.'.php">'.$course.'</a></div>
               <div class="card-text"></div>
             </div>
             <div class="price_box d-flex flex-row align-items-center">
             </div>
           </div>
         </div>';

          }
        }
      echo'</div>';
}
   ?>
 </main>

<?php
require "footer.php";
 ?>
