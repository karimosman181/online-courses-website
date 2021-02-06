   <?php
   if(isset($_SESSION['userId'])){
     echo '
<!-- Footer -->

<footer class="footer">
  <div class="container">

    <!-- Footer Content -->

    <div class="footer_content">
      <div class="row">

        <!-- Footer Column - About -->
        <div class="col-lg-3 footer_col">

          <!-- Logo -->
          <div class="logo_container">
            <div class="logo">
              <img src="bus1_logo.jpg" alt="">
              <span>online courses</span>
            </div>
          </div>

          <p class="footer_about_text"></p>

        </div>

        <!-- Footer Column - Menu -->

        <div class="col-lg-3 footer_col">
          <div class="footer_column_title">Menu</div>
          <div class="footer_column_content">
            <ul>
              <li class="footer_list_item"><a href="#">Home</a></li>
              <li class="footer_list_item"><a href="courses.html">Courses</a></li>
              <li class="footer_list_item"><a href="contact.html">Contact</a></li>
            </ul>
          </div>
        </div>

        <!-- Footer Column - Usefull Links -->

        <div class="col-lg-3 footer_col">
          <div class="footer_column_title">Usefull Links</div>
          <div class="footer_column_content">
            <ul>
              <li class="footer_list_item"><a href="#">Testimonials</a></li>
              <li class="footer_list_item"><a href="#">FAQ</a></li>
              <li class="footer_list_item"><a href="#">Community</a></li>
              <li class="footer_list_item"><a href="#">Campus Pictures</a></li>
              <li class="footer_list_item"><a href="#">Tuitions</a></li>
            </ul>
          </div>
        </div>

        <!-- Footer Column - Contact -->

        <div class="col-lg-3 footer_col">
          <div class="footer_column_title">Contact</div>
          <div class="footer_column_content">
            <ul>
              <li class="footer_contact_item">
                <div class="footer_contact_icon">
                  <img src="images/placeholder.svg" alt="https://www.flaticon.com/authors/lucy-g">
                </div>
                lebanon
              </li>
              <li class="footer_contact_item">
                <div class="footer_contact_icon">
                  <img src="images/smartphone.svg" alt="https://www.flaticon.com/authors/lucy-g">
                </div>
                0034 37483 2445 322
              </li>
            </ul>
          </div>
        </div>

      </div>
    </div>

    <!-- Footer Copyright -->

    <div class="footer_bar d-flex flex-column flex-sm-row align-items-center">
      <div class="footer_copyright">
        <span>
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved
        </span>
      </div>
      <div class="footer_social ml-sm-auto">
        <ul class="menu_social">
          <li class="menu_social_item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
          <li class="menu_social_item"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
          <li class="menu_social_item"><a href="#"><i class="fab fa-instagram"></i></a></li>
          <li class="menu_social_item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
          <li class="menu_social_item"><a href="#"><i class="fab fa-twitter"></i></a></li>
        </ul>
      </div>
    </div>

  </div>
</footer>

</div>';
}
?>
