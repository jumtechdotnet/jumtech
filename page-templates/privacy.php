<?php
/**
 * Template Name: Privacy Policy
 *
 * Display as Privacy Policy page
 *
 * @package jumtechWP
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();
$container = get_theme_mod( 'jumtechWP_container_type' );
?>

	<div class="privacy-header">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="privacy-info">
            <h1>Privacy Policy</h1>
            <hr>
          </div>
        </div>
      </div>
    </div>
  </div>

	<div class="wrapper" id="page-wrapper">

		<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

			<div class="row justify-content-center">

				<div class="col-md-9">
					
					<div class="site-main">

						<p>This privacy policy sets out how jumtech uses and protect any information that you give to jumtech when you use this website. Jumtech is committed to ensuring that your privacy is protected. 
            <br>
						<br>
						
            We only collect your e-mail <strong>(if and only if you willing to give)</strong> to make you updated with our new feature and offer during your subscription in our site. Jumtech may changes this policy from time to time by updating this page. You should check this page time to time to ensure that you are happy with any changes.
            Thank You.
            <br>
            <br>
            <strong> UPDATED - 22th January, 2019.</strong></p>

					</div>
					<!-- .site-main -->

				</div>

			</div>
		</div>
	</div>
	<!-- .wrapper -->


<?php get_footer(); ?>

</div><!-- #page -->