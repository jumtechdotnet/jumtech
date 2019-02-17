<div class="col-md-4">
  <article class="featured-post">

    <div class="post-image">
      <?php if ( ! has_post_thumbnail() ) { ?>
        <img src="<?php echo get_template_directory_uri(); ?>/images/post-images/fallback-image.jpg" alt="<?php the_title(); ?>">
      <?php } else {
        echo get_the_post_thumbnail( $post->ID, 'post-thumbnail' );
      } ?>

      <?php the_title(
        sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ),
        '</a></h2>'
      ); ?>
    </div>
    
  </article>
</div>