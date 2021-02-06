<?php
require "header.php";
 ?>

 <main>
   <?php
   if(isset($_SESSION['userId'])){
  echo'   <!-- Home -->
     <div class="home">
       <div class="home_background_container prlx_parent">
         <div class="home_background prlx" style="background-image:url(images/background.jpg)"></div>
       </div>
       <div class="home_content">
         <h1>Online Courses</h1>
       </div>
     </div>

     <!--categories-->
   <div class="categories">
     <header class="fcategories">
         <h2 class="fcat">Featured categories</h2>
     </header>
   <div class="catlist">
   <ul class="categorieslist">
     <li class="imgcat"><img src="images/comupter.jpg" width=7% height=7%/></li>
     <li class="imgcat"><img src="images/accounting.jpg" width=7% height=7%/></li>
     <li class="imgcat"><img src="images/marketing.jpg" width=7% height=7%/></li>
     <li class="imgcat"><img src="images/finance.jpg" width=7% height=7%/></li>
     <li class="imgcat"><img src="images/management.jpg" width=7% height=7%/></li>
     <li class="imgcat"><img src="images/accounting.jpg" width=7% height=7%/></li>
   </ul>
   <ul class="categorieslist">
     <li class="defcat">IT &nbsp </li>
     <li class="defcat">Accounting</li>
     <li class="defcat">Marketing</li>
     <li class="defcat">Finance</li>
     <li class="defcat">Management</li>
     <li class="defcat">Math and Logic</li>
   </ul>
   </div>
   </div>';
   ?>
   <?php
  require 'includes/recent.inc.php';
  ?>
<?php
   echo'<!--featured courses-->
     <section class="featured-courses horizontal-column courses-wrap">
         <div class="container">
             <div class="row">
                 <div class="col-12">
                     <header class="heading flex justify-content-between align-items-center">
                         <h2 class="entry-title">Featured Courses

                         <a class="btn mt-4 mt-sm-0" href="courses1.php">view all</a></h2>
                     </header><!-- .heading -->
                 </div><!-- .col -->

                 <div class="col-12 col-lg-6">
                     <div class="course-content flex flex-wrap justify-content-between align-content-lg-stretch">
                         <figure class="course-thumbnail">
                             <a href="#"></a>
                         </figure><!-- .course-thumbnail -->

                         <div class="course-content-wrap">
                             <header class="entry-header">

                                 <h2 class="entry-title"><a href="#">The Complete Android Developer Course</a></h2>

                                 <div class="entry-meta flex flex-wrap align-items-center">
                                     <div class="course-author"><a href="#"></a></div>
                                 </div><!-- .course-date -->
                             </header><!-- .entry-header -->

                             <footer class="entry-footer flex justify-content-between align-items-center">
                                 <div class="course-cost">
                                     <span class="free-cost"></span>
                                 </div><!-- .course-cost -->
                             </footer><!-- .entry-footer -->
                         </div><!-- .course-content-wrap -->
                     </div><!-- .course-content -->
                 </div><!-- .col -->

                 <div class="col-12 col-lg-6">
                     <div class="course-content flex flex-wrap justify-content-between align-content-lg-stretch">
                         <figure class="course-thumbnail">
                             <a href="#"></a>
                         </figure><!-- .course-thumbnail -->

                         <div class="course-content-wrap">
                             <header class="entry-header">

                                 <h2 class="entry-title"><a href="#">web development</a></h2>

                                 <div class="entry-meta flex flex-wrap align-items-center">
                                     <div class="course-author"><a href="#"></a></div>
                                     <br>
                             </header><!-- .entry-header -->
                         </div><!-- .course-content-wrap -->
                     </div><!-- .course-content -->
                 </div><!-- .col -->
             </div><!-- .row -->
         </div><!-- .container -->
     </section><!-- .courses-wrap -->



     <!-- Services -->

     <div class="services page_section">

       <div class="container">
         <div class="row">
           <div class="col">
             <div class="section_title text-center">
               <h1>Our Services</h1>
             </div>
           </div>
         </div>

         <div class="row services_row">

           <div class="col-lg-4 service_item text-left d-flex flex-column align-items-start justify-content-start">
             <div class="icon_container d-flex flex-column justify-content-end">
               <img src="images/earth-globe.svg" alt="">
             </div>
             <h3>Online Courses</h3>
             <p></p>
           </div>

           <div class="col-lg-4 service_item text-left d-flex flex-column align-items-start justify-content-start">
             <div class="icon_container d-flex flex-column justify-content-end">
               <img src="images/exam.svg" alt="">
             </div>
             <h3>Indoor Courses</h3>
             <p></p>
           </div>

           <div class="col-lg-4 service_item text-left d-flex flex-column align-items-start justify-content-start">
             <div class="icon_container d-flex flex-column justify-content-end">
               <img src="images/books.svg" alt="">
             </div>
             <h3>Amazing Library</h3>
             <p></p>
           </div>
         </div>
       </div>
     </div>';

   }
   else{

   }
    ?>
 </main>

<?php
require "footer.php";
 ?>
