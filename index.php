<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package jumtechWP
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();

$container = get_theme_mod( 'jumtechWP_container_type' );
?>

<?php if ( is_front_page() && is_home() ) : ?>
	<?php get_template_part( 'global-templates/hero' ); ?>
<?php endif; ?>

<div class="featured-posts">
	<div class="<?php echo esc_attr( $container ); ?>">
		<div class="row">

			<?php
				$args = array(
					// Arguments for your query.
					'category_name' => 'featured',
					'posts_per_page' => '3',
					'order' => 'DESC',
					'orderby' => 'date',
					'ignore_sticky_posts' => true,
					'post_type' => 'post',
					'post_status' => 'publish'
				);

				// Custom query.
				$query = new WP_Query( $args );
				
				// Check that we have query results.
				if ( $query->have_posts() ) {
				
					// Start looping over the query results.
					while ( $query->have_posts() ) {

						$query->the_post();
						
						// Contents of the queried post results go here.
						get_template_part( 'loop-templates/content-featured' );

					}
				
				}
				// Restore original post data.
				wp_reset_postdata();
			?>

		</div>
	</div>
</div>

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
						get_template_part( 'loop-templates/content-blog' );
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
