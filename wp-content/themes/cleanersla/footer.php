      <footer class="footer_outr">
         <div class="container-fluid">
            <div class="footer_news">
               <?php dynamic_sidebar('sidebar-2') ?>
               <div class="foo_form wow fadeInUp" data-wow-delay="0.4s">
                     <?php echo do_shortcode('[footer_newsleter]') ?>
               </div>
            </div>
            <div class="footer_menu wow fadeInUp" data-wow-delay="0.6s">
               <div class="foo_logo">
                  <a href="<?php echo home_url('/') ?>"><?php dynamic_sidebar('footer-logo') ?></a>
               </div>
               <div class="foo_menulist">
                  <?php 
                     wp_nav_menu( array(
                        'theme_location'  => 'footer',
                        'depth'           => 1, // 1 = no dropdowns, 2 = with dropdowns.
                     ) );
                     ?>
               </div>
            </div>
            <div class="foo_opyright wow fadeInUp" data-wow-delay="0.8s">
               <p>©php<?php echo date('Y') ?> TCLEANERS LA. All Rights Reserved.</p>
            </div>
         </div>
	  </footer>
	  
      <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script src="http://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
      <!-- Popper JS -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
      <!-- Latest compiled JavaScript -->
      <script src="<?php bloginfo('template_url') ?>/assets/js/wow.min.js" ></script>
      <script src="<?php bloginfo('template_url') ?>/assets/js/swiper.js" ></script>
	  <script src="<?php bloginfo('template_url') ?>/assets/js/custom.js"></script>
	  
		<?php wp_footer() ?>

   </body>
</html>