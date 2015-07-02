<?php /* Template Name: Who We Are */ get_header(); ?>

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
        
        <div class="block-half logo-block grey">
          <div class="container">
            <div class="row">
              <div class="col-sm-4 col-sm-offset-2">
                <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/clemson-logo.png" />
              </div>
              <div class="col-sm-4">
                <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/ggc-logo.png" />
              </div>
            </div>
          </div>
        </div>
        
        <div class="block text-block">
          <div class="container">
            <div class="row">
              <div class="col-md-8 col-md-offset-2">
                <?php the_content(); ?>
              </div>
            </div>
          </div>
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