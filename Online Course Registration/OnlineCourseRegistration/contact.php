<?php
require "header.php";
 ?>

 <main>
   <?php
   if(isset($_SESSION['userId'])){
     echo '
     <!-- Hamburger -->
     <div class="hamburger_container">
       <i class="fas fa-bars trans_200"></i>
     </div>

   </header>


   <!-- Home -->

   <div class="home">
     <div class="home_background_container prlx_parent">
       <div class="home_background prlx" style="background-image:url(images/background.jpg)"></div>
     </div>
     <div class="home_content">
       <h1>Contact</h1>
     </div>
   </div>

   <!-- Contact -->

   <div class="contact">
     <div class="container-fluid">
       <div class="row row-xl-eq-height">
         <!-- Contact Content -->
         <div class="col-xl-6">
           <div class="contact_content">
             <div class="row">
               <div class="col-xl-6">
                 <div class="contact_about">
                   <div class="logo_container">
                         <div class="logo"><span>online courses</span></div>
                     </a>
                   </div>
                 </div>
               </div>
               </div>
             </div>
             <div class="contact_form_container">
               <form action="includes/contact.inc.php" method= "POST" id="contact_form" class="contact_form">
                 <div>
                   <div class="row">
                     <div class="col-lg-6 contact_name_col">
                       <input type="text" class="contact_input" placeholder="USer Name" name="user" required="required">
                     </div>
                     <div class="col-lg-6">
                       <input type="date" class="contact_input" placeholder="Date" name="date" required="required">
                     </div>
                   </div>
                 </div>
                 <div><input type="text" class="contact_input" placeholder="Subject" name="subject" required="required"></div>
                 <div><textarea class="contact_input contact_textarea" placeholder="Message" name="message"></textarea></div>
                 <button type="submit" class="contact_button" name="contact-submit"><span>send message</span><span class="button_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span></button>
               </form>
             </div>
           </div>
         </div>

         <!-- Contact Map -->
         <div class="col-xl-6 map_col">
           <div class="contact_map">

             <!-- Google Map -->
             <div id="google_map" class="google_map">
               <div class="map_container">
                 <div id="map"></div>
               </div>
             </div>

           </div>
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
