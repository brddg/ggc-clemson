<?php /* Template Name: Home */ get_header(); ?>

  <main role="main">
    <!-- section -->
    <section>


    <?php if (have_posts()): while (have_posts()) : the_post(); ?>

      <?php require_once 'includes/hero.php'; ?>

      <!-- article -->
      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        
        <div class="block-half">
          <div class="container">
            <div class="row">
              <div class="col-md-4 col-md-offset-2">
                <img src="<?php echo get_template_directory_uri(); ?>/img/clemson-logo.png" />
              </div>
              <div class="col-md-4">
                <img src="<?php echo get_template_directory_uri(); ?>/img/ggc-logo.png" />
              </div>
            </div>
          </div>
        </div>
        
        <div class="block text-block">
          <div class="container">
            <div class="row">
              <div class="col-md-7 col-centered">
                <h3><?php the_field('home_block_1_title'); ?></h3>
                <?php the_field('home_block_1_text'); ?>
              </div>
            </div>
          </div>
        </div>
        
        <div class="image-block" style="background-image:url('<?php the_field('home_block_2_image'); ?>')"></div>
        

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