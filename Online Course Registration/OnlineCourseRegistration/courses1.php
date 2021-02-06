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
     			<h1>Courses</h1>
     		</div>
     	</div>

     <!--search-->
     <div class="row">
     	<div class="col">
     		<div class="course_search">
     			<form action="search.php" method="Post" class="course_search_form d-flex flex-md-row flex-column align-items-start justify-content-between">
     				<div><input type="text" class="course_input" placeholder="Enter the name of the course or category in the next feild" disabled></div>
     				<div><input type="text" class="course_input" placeholder="Course / category" required="required" name="searchitem"></div>
     				<button class="course_button" name="search-submit"><span>search course</span><span class="button_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span></button>
     			</form>
     		</div>
     	</div>
     </div>

     	<!-- Popular -->

     	<div class="popular page_section">
     		<div class="container">
     			<div class="row">
     				<div class="col">
     					<div class="section_title text-center">
     						<h1>Courses</h1>
     					</div>
     				</div>
     			</div>
          	

          ';

          require 'includes/it.inc.php';
              echo'


          </div>
     <br>
     ';

     require 'includes/marketing.inc.php';
         echo'


          </div>
     <br>
     ';

     require 'includes/accounting.inc.php';
         echo'

     	</div>
      <br>
      ';

      require 'includes/managment.inc.php';
          echo'


           </div>
      <br>
      ';

      require 'includes/finance.inc.php';
          echo'


           </div>
      <br>
     <!--page selection-->
     <ul class="page_selection">
     	<li class="page_list_item"><a href="courses1.php"><<</a></li>
     	<li class="page_list_item"><a href="courses1.php">1</a></li>
     	<li class="page_list_item"><a href="courses2.php">2</a></li>
     	<li class="page_list_item"><a href="courses2.php">>></a></li>
     </ul>';
   }
   else{

   }
    ?>
 </main>

<?php
require "footer.php";
 ?>
