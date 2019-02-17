<?php
/**
 * Post rendering content according to caller of get_template_part.
 *
 * @package jumtechWP
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<div class="post-image">
		<?php if ( ! has_post_thumbnail() ) { ?>
			<img src="<?php echo get_template_directory_uri(); ?>/images/post-images/fallback-image.jpg" alt="<?php the_title(); ?>">
		<?php } else {
			echo get_the_post_thumbnail( $post->ID, 'large' ); 
		} ?>

		<?php the_title(
			sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ),
			'</a></h2>'
		); ?>

	</div>

	<div class="post-meta">
		<span><i class="far fa-calendar-alt"></i> <?php echo get_the_date('j F, Y'); ?></span>
		<span><i class="fas fa-user-tie"></i> by <a href="<?php the_permalink();?>"> <?php the_author(); ?></a></span>
	</div>

	<div class="entry-content">

		<?php the_excerpt(); ?>

	</div><!-- .entry-content -->

</article><!-- #post-## -->
