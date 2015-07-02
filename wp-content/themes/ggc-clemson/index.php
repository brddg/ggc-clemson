<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>
      
      <div class="container title-block">
        <div class="row">
          <div class="col-md-8 col-md-offset-2">
            <h1><?php _e( 'Blog', 'html5blank' ); ?></h1>
          </div>
        </div>
      </div>

      <div class="container the-loop">
        <?php get_template_part('loop'); ?>
      </div>

			<?php get_template_part('pagination'); ?>

		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>
