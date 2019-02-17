<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package jumtechWP
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$container = get_theme_mod( 'jumtechWP_container_type' );
?>

<div class="site-footer section">
    <div class="container">
      <div class="row">
        
        <?php dynamic_sidebar( 'footerfull' ); ?>

        <div class="col-md-12">
          <div class="content-inner center">
            <div class="center-line foo-line-one">
              <div class="line line-one"></div>
              <div class="line line-two"></div>
            </div>
          </div>
        </div>

        <div class="col-md-9">
          <div class="content-inner">
            <p class="copyright">  &copy; 2017-<?php echo get_the_date('Y'); ?> <span>J</span>um<span>T</span>ech </p>
            <ul class="copyright-menu ul-none">
              <li><a href="">Terms of services</a></li>
              <li><a href="">Privacy</a></li>
              <li><a href="">Sitemap</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-3">
          <ul class="footer-social-links ul-none">
            <li><a href="https://www.facebook.com/jumtech17/" target="_blank">
              <i class="fab fa-facebook-f"></i>
            </a></li>
            <!-- <li><a href="" targer="_blank">
              <i class="fab fa-twitter"></i>
            </a></li> -->
            <li><a href="https://plus.google.com/u/0/105088754686230342948" target="_blank">
              <i class="fab fa-google-plus-g"></i>
            </a></li>
          </ul>
        </div>

      </div>
    </div>
  </div>

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>

