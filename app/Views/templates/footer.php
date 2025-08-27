<!--============================
=            Footer            =
=============================-->
<footer>
  <div class="footer-main">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-12 m-md-auto align-self-center">
          <div class="block">
            <div class="homepage-logo-footer">
							<a class="navbar-brand" href="<?= site_url('/') ?>"><img class="footer-logo" src="<?php echo base_url('public/assets/images/message-svgrepo-com.svg'); ?>" alt="logo"></a>
							<h3 class="footer-logo-title font-weight-bold">Chattrix</h4>
						</div>
            <!-- Social Site Icons -->
            <ul class="social-icon list-inline">
              <li class="list-inline-item">
                <a href="https://www.facebook.com/themefisher"><i class="ti-facebook"></i></a>
              </li>
              <li class="list-inline-item">
                <a href="https://twitter.com/themefisher"><i class="ti-twitter"></i></a>
              </li>
              <li class="list-inline-item">
                <a href="https://www.instagram.com/themefisher/"><i class="ti-instagram"></i></a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-lg-2 col-md-3 col-6 mt-5 mt-lg-0">
          <div class="block-2">
            <!-- heading -->
            <h6>Home</h6>
            <!-- links -->
            <ul>
              <li><a href="<?= site_url('/') ?>">Landing</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-2 col-md-3 col-6 mt-5 mt-lg-0">
          <div class="block-2">
            <!-- heading -->
            <h6>Join Us</h6>
            <!-- links -->
            <ul>
              <li><a href="<?= site_url('sign_up') ?>">Singup</a></li>
              <li><a href="<?= site_url('sign_in') ?>">Signin</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-2 col-md-3 col-6 mt-5 mt-lg-0">
          <div class="block-2">
            <!-- heading -->
            <h6>Company</h6>
            <!-- links -->
            <ul>
              <li><a href="<?= site_url('team') ?>">Team</a></li>
              <li><a href="<?= site_url('privacy') ?>">Privacy</a></li>
              <li><a href="<?= site_url('FAQ') ?>">FAQ</a></li>
              <li><a href="<?= site_url('about') ?>">About</a></li>
              <li><a href="<?= site_url('contact') ?>">Contact</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="text-center bg-dark py-4">
    <small class="text-secondary">Copyright &copy; <script>document.write(new Date().getFullYear())</script>. Designed &amp; Developed by BSCS 3-A</a></small class="text-secondary">
  </div>
</footer>


  <!-- To Top -->
  <div class="scroll-top-to">
    <i class="ti-angle-up"></i>
  </div>
  
  <!-- JAVASCRIPTS -->
  <script src="<?php echo base_url('public/assets/plugins/jquery/jquery.min.js'); ?>"></script>
  <!-- <script src="<?php echo base_url('public/assets/plugins/bootstrap/bootstrap.min.js"'); ?>"></script> -->
  <script src="<?php echo base_url('public/assets/plugins/slick/slick.min.js'); ?>"></script>
  <script src="<?php echo base_url('public/assets/plugins/fancybox/jquery.fancybox.min.js'); ?>"></script>
  <script src="<?php echo base_url('public/assets/plugins/syotimer/jquery.syotimer.min.js'); ?>"></script>
  <script src="<?php echo base_url('public/assets/plugins/aos/aos.js'); ?>"></script>
  <!-- google map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAgeuuDfRlweIs7D6uo4wdIHVvJ0LonQ6g"></script>
  <script src="<?php echo base_url('public/assets/plugins/google-map/gmap.js'); ?>"></script>
  
  <script src="<?php echo base_url('public/assets/js/script.js'); ?>"></script>
</body>

</html>