<?php /* Template Name: Goals */ get_header(); ?>

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
                <?php the_field('first_block_content'); ?>
              </div>
            </div>
          </div>
        </div>
        
        <div class="fluid-container no-padding dual-images">
          <div class="col-sm-6 bg-image" style="background-image: url('<?php the_field("image_block_left"); ?>');"></div>
          <div class="col-sm-6 bg-image" style="background-image: url('<?php the_field("image_block_right"); ?>');"></div>
        </div>
        
        <div class="block text-block" style="padding-top:0;padding-bottom:50px;">
          <div class="container">
            <div class="row">
              <div class="col-md-8 col-md-offset-2">
                <?php the_field('second_block_content'); ?>
              </div>
            </div>
          </div>
        </div>
        
        <div class="block quote" style="padding-top:0;">
          <div class="container">
            <div class="row">
              <div class="col-md-8 col-md-offset-2">
                <h3><?php the_field('quote'); ?></h3>
              </div>
            </div>
          </div>
        </div>
        
        <div class="container-fluid real-container no-padding">
          <div class="col-md-6 action-block-container red">
            <div class="action-block">
              <h2><?php the_field('red_block_title'); ?></h2>
              <div class="text-left text-small"><?php the_field('red_block_preview'); ?></div>
              <a class="btn-white red more" data-show="red">Show More</a>
            </div>
          </div>
          <div class="col-md-6 action-block-container green">
            <div class="action-block">
              <h2><?php the_field('green_block_title'); ?></h2>
              <div class="text-left text-small"><?php the_field('green_block_preview'); ?></div>
              <a class="btn-white green more" data-show="green">Show More</a>
            </div>
          </div>
          <div style="clear:both;"></div>
        </div>
        
        <div class="container show-content red">
          
          <div class="row">
            <div class="col-sm-5 col-centered">
              <h2><?php the_field('red_block_title'); ?></h2>
            </div>
          </div>
          
          <div class="row">
            <div class="col-md-6">
              <?php the_field('red_block_content_left'); ?>
            </div>
            <div class="col-md-6">
              <?php the_field('red_block_content_right'); ?>
            </div>
          </div>
          
        </div>
        
        <div class="container show-content green">
          
          <div class="row">
            <div class="col-sm-5 col-centered">
              <h2><?php the_field('green_block_title'); ?></h2>
            </div>
          </div>
          
          <div class="row">
            <div class="col-md-6">
              <?php the_field('green_block_content_left'); ?>
            </div>
            <div class="col-md-6">
              <?php the_field('green_block_content_right'); ?>
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