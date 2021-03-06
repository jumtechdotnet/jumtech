<?php
/**
 * Template Name: Blog
 *
 * Display  blog posts
 *
 * @package jumtechWP
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();
$container = get_theme_mod( 'jumtechWP_container_type' );
?>


  <div class="wrapper" id="index-wrapper">

    <div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

      <div class="row">

        <!-- Do the left sidebar check and opens the primary div -->
        <?php get_template_part( 'global-templates/left-sidebar-check' ); ?>

        <main class="site-main" id="main">

          <?php if ( have_posts() ) : ?>

            <?php /* Start the Loop */ ?>

            <?php while ( have_posts() ) : the_post(); ?>

              <?php

              /*
              * Include the Post-Format-specific template for the content.
              * If you want to override this in a child theme, then include a file
              * called content-___.php (where ___ is the Post Format name) and that will be used instead.
              */
              get_template_part( 'loop-templates/content', get_post_format() );
              ?>

            <?php endwhile; ?>

            <div class="theme-pagination">
              <!-- The pagination component -->
              <?php jumtechWP_pagination(); ?>
            </div>

          <?php else : ?>

            <?php get_template_part( 'loop-templates/content', 'none' ); ?>

          <?php endif; ?>

        </main><!-- #main -->

        <!-- Do the right sidebar check -->
        <?php get_template_part( 'global-templates/right-sidebar-check' ); ?>

      </div><!-- .row -->

    </div><!-- #content -->

  </div><!-- #index-wrapper -->


<?php get_footer(); ?>

</div><!-- #page -->


