<?php
/**
 * Template Name: About us
 *
 * Display as homepage
 *
 * @package jumtechWP
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();
$container = get_theme_mod( 'jumtechWP_container_type' );
?>


	<div class="about-story-info">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="about-info">
              <h1>jumtech story</h1>
              <hr>
              <p>Behind every initiative lies a story</p>
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

						<p>
						A large number of people, organization, companies and uprising small businesses understand and feel the need of an online platform to get the best outcome of their goal. But they are still out of online platform and We see it as an opportunity to help them to achieve it. We are excited to help people from all over the world. Jumtech is ready to provide all the services in the easiest way and most economic condition. <br> <br> 
						Our Mission is to connect with people, small organization, companies and uprising small businesses and help them to access and grow in their particular niche.
						</p>

					</div>
					<!-- .site-main -->

				</div>

			</div>
		</div>
	</div>
	<!-- .wrapper -->


<?php get_footer(); ?>

</div><!-- #page -->