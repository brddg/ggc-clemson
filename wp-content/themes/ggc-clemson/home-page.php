<?php /* Template Name: Home */ get_header(); ?>

  <main role="main">
    <!-- section -->
    <section>


    <?php if (have_posts()): while (have_posts()) : the_post(); ?>

      <?php require_once 'includes/hero.php'; ?>

      <!-- article -->
      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        
        <div class="block-half logo-block">
          <div class="container">
            <div class="row">
              <div class="col-sm-4 col-sm-offset-2">
                <a target="_blank" href="http://clemson.edu"><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/clemson-logo.png" /></a>
              </div>
              <div class="col-sm-4">
                <a target="_blank" href="http://www.ggc.org"><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/ggc-logo.png" /></a>
              </div>
            </div>
          </div>
        </div>
        
        <div class="block text-block grey">
          <div class="container">
            <div class="row">
              <div class="col-md-8 col-md-offset-2">
                <h3><?php the_field('home_block_1_title'); ?></h3>
                <div class="text-center"><?php the_field('home_block_1_text'); ?></div>
              </div>
            </div>
          </div>
        </div>
        
        <div class="image-block" style="background-image:url('<?php the_field('home_block_2_image'); ?>')"></div>
        
        <div class="block text-block">
          <div class="container">
            <div class="row">
              <div class="col-md-8 col-md-offset-2">
                <h3><?php the_field('home_block_3_title'); ?></h3>
                <div class="text-left"><?php the_field('home_block_3_text'); ?></div>
              </div>
            </div>
          </div>
        </div>
        
        <?php if (have_rows('researchers')): ?>
          <div class="block text-block yellow">
            <div class="container">
              <div class="row">
                <div class="col-md-8 col-md-offset-2">
                  
                  <div class="row">
                    <div class="col-md-8 col-md-offset-4">
                      <h2>Featured Researchers</h2>
                    </div>
                  </div>
                  
                  <?php while (have_rows('researchers')): the_row(); ?>

                    <div class="row researcher">
                      <div class="col-md-4">
                        <img class="img-responsive" src="<?php the_sub_field('image'); ?>" />
                      </div>
                      <div class="col-md-8">
                        <h4><?php the_sub_field('name'); ?></h4>
                        <?php the_sub_field('bio'); ?>
                      </div>
                    </div>
                  
                  <?php endwhile; ?>
                </div>
              </div>
            </div>
          </div>
        <?php endif; ?>
        
        <div class="container-fluid real-container no-padding">
          <div class="col-md-6 action-block-container red">
            <div class="action-block">
              <h2><?php the_field('red_block_title'); ?></h2>
              <div class="text-left"><?php the_field('red_block_description'); ?></div>
            </div>
          </div>
          <div class="col-md-6 action-block-container green">
            <div class="action-block">
              <h2><?php the_field('green_block_title'); ?></h2>
              <div class="text-left"><?php the_field('green_block_description'); ?></div>
              <a href="./donatemore-info/" class="btn-white green">Find Out How</a>
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
