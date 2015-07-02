<?php if (have_posts()): while (have_posts()) : the_post(); ?>

	<!-- article -->
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<!-- post title -->
    <div class="row">
      <div class="col-md-7 col-centered">
        <h2 class="text-center">
          <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
        </h2>
      </div>
    </div>
		<!-- /post title -->

    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <!-- post details -->
        <p class="small text-center text-black"><?php the_time('F j, Y'); ?></p>
        <!-- /post details -->

        <div class="text-center loop-excerpt"><?php html5wp_excerpt('html5wp_index'); // Build your custom callback length in functions.php ?></div>

        <p class="small text-center"><a href="<?php the_permalink(); ?>">Keep Reading</a></p>
        
        <div class="border-me"></div>
      </div>
    </div>

	</article>
	<!-- /article -->

<?php endwhile; ?>

<?php else: ?>

	<!-- article -->
	<article>
		<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
	</article>
	<!-- /article -->

<?php endif; ?>
