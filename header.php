<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package jumtechWP
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$container = get_theme_mod( 'jumtechWP_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	
	<link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,400i,500,500i,600,700,800" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="site" id="page">

	<div class="site-header">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="site-logo">

						<div class="logo">
							<!-- Your site title as branding in the menu -->
							<?php if ( ! has_custom_logo() ) { ?>

								<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
									<img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
								</a>

							<?php } else {
							the_custom_logo();
							} ?><!-- end custom logo -->

						</div>


          </div>
        </div>
        <div class="col-md-12">

					<!-- main menu -->
					<?php wp_nav_menu(
						array(
							'theme_location'  => 'primary',
							'menu_class'      => 'site-navigation',
							'fallback_cb'     => '',
							'menu_id'         => 'site-navigation',
						)
					); ?>

        </div>
      </div>
    </div>
  </div>
