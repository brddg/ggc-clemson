<?php
  $previousPostLink = get_permalink(get_adjacent_post(false,'',false));
  $nextPostLink = get_permalink(get_adjacent_post(false,'',true));
?>

<?php get_header(); ?>

	<main role="main">
	<!-- section -->
	<section>

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<!-- post title -->
      <div class="container title-block" style="margin-bottom:0;">
        <div class="row">
          <div class="col-md-8 col-md-offset-2">
            <h1><?php the_title(); ?></h1>
          </div>
        </div>
      </div>
			<!-- /post title -->

			<!-- post details -->
			<p class="small text-center"><?php the_time('F j, Y'); ?></p>
			<!-- /post details -->

      <div class="container">
        <div class="col-md-8 col-md-offset-2">
          <?php the_content(); // Dynamic Content ?>
        </div>
      </div>
      
      <div class="container">
        <div class="col-md-8 col-md-offset-2 text-center">
          <?php if ($previousPostLink !== get_permalink()): ?>
            <a href="<?php echo $previousPostLink; ?>" class="btn-white black">Previous Article</a>
          <?php endif; ?>
          <?php if ($nextPostLink !== get_permalink()): ?>
            <a href="<?php echo $nextPostLink; ?>" class="btn-white black">Next Article</a>
          <?php endif; ?>
        </div>
      </div>

		</article>
		<!-- /article -->

	<?php endwhile; ?>

	<?php else: ?>

		<!-- article -->
		<article>

			<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

		</article>
		<!-- /article -->

	<?php endif; ?>

	</section>
	<!-- /section -->
	</main>

<?php get_footer(); ?>
