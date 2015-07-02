<?php /* Template Name: Research */ get_header(); ?>

  <main role="main">
    <!-- section -->
    <section>


    <?php if (have_posts()): while (have_posts()) : the_post(); ?>

      <div class="container title-block">
        <div class="row">
          <div class="col-md-8 col-md-offset-2">
            <h1><?php the_title(); ?></h1>
          </div>
        </div>
      </div>

      <!-- article -->
      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        
        <div class="block text-block" style="padding-top:0;">
          <div class="container">
            <div class="row">
              <div class="col-md-8 col-md-offset-2">
                <?php the_content(); ?>
              </div>
            </div>
          </div>
        </div>
        
        <div class="container-fluid no-padding quote-block">
          <div class="col-sm-6 no-padding bg-image" style="background-image: url('<?php the_field('block_image'); ?>');"></div>
          <div class="col-sm-6" style="height: 100%;">
            <div class="display-table">
              <div class="display-table-cell">
                <h3><?php the_field('block_title'); ?></h3>
                <div><?php the_field('block_quote'); ?></div>
              </div>
            </div>
          </div>
          <div style="clear:both;"></div>
        </div>

      </article>
      <!-- /article -->

    <?php endwhile; ?>

    <?php else: ?>

      <!-- article -->
      <article>

        <div class="container">
          <h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
        </div>

      </article>
      <!-- /article -->

    <?php endif; ?>

    </section>
    <!-- /section -->
  </main>

<?php get_footer(); ?>