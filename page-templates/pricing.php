<?php
/**
 * Template Name: Pricing
 *
 * Display as pricing page
 *
 * @package jumtechWP
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();
$container = get_theme_mod( 'jumtechWP_container_type' );
?>

	<div class="wrapper" id="page-wrapper">

		<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

			<div class="row justify-content-center">

				<div class="col-md-8">
					
					<div class="site-main">


            <table class="table table-hover">
              <thead>
                <tr class="table-header">
                  <th scope="col">Service Name</th>
                  <th scope="col">Price</th>
                  <th scope="col">Duration</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Domain &#40;.com, .net, .org&#41; </td>
                  <td>BDT 990</td>
                  <td>1 Year</td>
                </tr>
                <tr>
                  <td>Web Hosting <br> <span>edu</span> &#40;256MB Storage, 5GB Transfer&#41;</td>
                  <td>BDT 1500</td>
                  <td>1 Year</td>
                </tr>
                <tr>
                  <td>Web Hosting <br> <span>starter</span> (1GB Storage, 30GB Transfer)</td>
                  <td>BDT 2,990</td>
                  <td>1 Year</td>
                </tr>
                <tr>
                  <td>Web Hosting <br> <span>semi pro</span> (3GB Storage, 50GB Transfer)</td>
                  <td>BDT 4,990</td>
                  <td>1 Year</td>
                </tr>
                <tr>
                  <td>Web Hosting <br> <span>pro</span> (5GB Storage, 50GB Transfer)</td>
                  <td>BDT 7,990</td>
                  <td>1 Year</td>
                </tr>
                <tr>
                  <td>Website Development</td>
                  <td> Project based <i class="fas fa-arrow-right"></i> <a href="<?php echo esc_url( home_url( '/' ) ); ?>contact">contact us</td>
                  <td>One time</td>
                </tr>
                <tr>
                  <td>Digital Marketing</td>
                  <td> Project based <i class="fas fa-arrow-right"></i> <a href="<?php echo esc_url( home_url( '/' ) ); ?>contact">contact us</td>
                  <td>Project based</td>
                </tr>

              </tbody>
            </table>



            </div>

					</div>
					<!-- .site-main -->

        </div>

			</div>
		</div>
	</div>
	<!-- .wrapper -->


<?php get_footer(); ?>

</div><!-- #page -->