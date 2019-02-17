<?php
/**
 * Template Name: Contact us
 *
 * Display as contact us page
 *
 * @package jumtechWP
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();
$container = get_theme_mod( 'jumtechWP_container_type' );
?>

	<div class="google-map contact-page">
    
    <?php echo do_shortcode('[wpgmza id="1"]'); ?>

  </div>

	<div class="wrapper" id="page-wrapper">

		<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

			<div class="row justify-content-center">

				<div class="col-md-6">
					
					<div class="site-main">

            <?php echo do_shortcode('[contact-form-7 id="1714" title="Contact form 1"]'); ?>

					</div>
					<!-- .site-main -->

        </div>
        
        <div class="com-md-3">

          <div class="widget-area">

            <aside class="widget">
              <h3 class="widget-title">
                Direct contact
              </h3>
              <address>
                <p>
                  <i class="fas fa-phone"></i> 
                  <span>+880 186 440 1757</span>
                  
                </p>
                <p>
                  <i class="fas fa-map-marker-alt"></i> 
                  <span>
                    3/1 Paradise Point, Ulon Road, <br> 
                    West Rampura, Dhaka-1212 <br>
                    Bangladesh
                  </span>
                  
                </p> 
              </address>
            </aside>

          </div>
          <!-- .sidebar -->

        </div>

			</div>
		</div>
	</div>
	<!-- .wrapper -->


<?php get_footer(); ?>

</div><!-- #page -->