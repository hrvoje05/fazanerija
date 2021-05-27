<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since Twenty Nineteen 1.0
 */

?>

<footer class="ftco-footer ftco-section">
      <div class="container">
        <div class="row">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <p class="text-center"><img src="<?php bloginfo('template_url'); ?>/images/logo.png" alt="Logo LD Fazan" style="max-height: 200px"></p>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-4">
              <h2 class="ftco-heading-2">LD "Fazan"</h2>
              <?php
			wp_nav_menu( array(
			'menu'  		  => '3',
			'depth'           => 1, // 1 = no dropdowns, 2 = with dropdowns.
			'container'       => '',
			'container_class' => '',
			'container_id'    => '',
			'menu_class'      => 'list-unstyled',
			'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
			'walker'          => new WP_Bootstrap_Navwalker(),
		) );
			?>
            </div>
          </div>
          <div class="col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Korisni linkovi</h2>
              <ul class="list-unstyled">
                <li><a href="http://www.lovacki-savez-osijek.hr/index.php/clanice-saveza/item/60-ld-srndac-beli-manastir"><span class="icon-long-arrow-right mr-2"></span>Lovište</a></li>
                <li><a href="https://www.hls.com.hr/"><span class="icon-long-arrow-right mr-2"></span>Hrvatski lovački savez</a></li>
                <li><a href="http://www.lovacki-savez-osijek.hr/"><span class="icon-long-arrow-right mr-2"></span>Lovački savez OBŽ</a></li>
                <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Pravila privatnosti</a></li>
                <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Uvjeti korištenja</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Imate li pitanja?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><a href="https://goo.gl/maps/fLJvXtCHRaJwqgBm9" target="_blank"><span class="icon icon-map-marker"></span><span class="text">Ljudevita Gaja 1G, 31326 Darda</span></a></li>
	                <li><a href="tel:+38531740204"><span class="icon icon-phone"></span><span class="text">+385 31 740204</span></a></li>
	                <li><a href="mailto:ldfazan@gmail.com"><span class="icon icon-envelope"></span><span class="text">ldfazan@gmail.com</span></a></li>
	              </ul>
                <ul class="ftco-footer-social list-unstyled float-md-left float-lft" style="display: flex;">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> | LD "FAZAN"
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
    

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="<?php bloginfo('template_url'); ?>/js/jquery.min.js"></script>
  <script src="<?php bloginfo('template_url'); ?>/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="<?php bloginfo('template_url'); ?>/js/popper.min.js"></script>
  <script src="<?php bloginfo('template_url'); ?>/js/bootstrap.min.js"></script>
  <script src="<?php bloginfo('template_url'); ?>/js/jquery.easing.1.3.js"></script>
  <script src="<?php bloginfo('template_url'); ?>/js/jquery.waypoints.min.js"></script>
  <script src="<?php bloginfo('template_url'); ?>/js/jquery.stellar.min.js"></script>
  <script src="<?php bloginfo('template_url'); ?>/js/owl.carousel.min.js"></script>
  <script src="<?php bloginfo('template_url'); ?>/js/jquery.magnific-popup.min.js"></script>
  <script src="<?php bloginfo('template_url'); ?>/js/aos.js"></script>
  <script src="<?php bloginfo('template_url'); ?>/js/jquery.animateNumber.min.js"></script>
  <script src="<?php bloginfo('template_url'); ?>/js/bootstrap-datepicker.js"></script>
  <script src="<?php bloginfo('template_url'); ?>/js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="<?php bloginfo('template_url'); ?>/js/google-map.js"></script>
  <script src="<?php bloginfo('template_url'); ?>/js/main.js"></script>
    

<?php wp_footer(); ?>

</body>
</html>
