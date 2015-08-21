<?php /* Template Name: Donate */ get_header(); ?>

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
        
	    <div id="thanks" class="alert alert-success alert-dismissible" role="alert" style="margin-bottom:0;display:none;">
	      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">&times;</span>
	      </button>
	      <strong>Thanks!</strong> We will be in touch soon.
	    </div>

        <div class="sign-up-block">
          <div class="container">
            
            <div class="row">
              <div class="col-sm-5 col-centered">
                <h3>Sign Up For the Latest News</h3>
              </div>
            </div>
            
            <div class="row">
              <div class="col-sm-6 col-centered text-center">
                <p>Keep up to date with our latest discoveries and the new ways you can help.</p>
              </div>
            </div>
            
            <div class="row">
              <div class="col-sm-4 col-centered">
                <form action="<?php echo get_template_directory_uri(); ?>/process.php" method="post" id="sign-up-form">
                  <input type="text" class="styled-input" name="name" placeholder="Your name..." />
                  <input type="email" class="styled-input" name="email" placeholder="Your email address..." />
                  <p class="radio-label">Please choose one of the following:</p>
                  <div><input type="radio" name="persontype" value="Patient" /> Patient</div>
                  <div><input type="radio" name="persontype" value="Family Member" /> Family Member</div>
                  <div><input type="radio" name="persontype" value="Scientist" /> Scientist</div>
                  <div><input type="radio" name="persontype" value="Other" /> Other</div>
                  <button type="submit" class="btn-blue">Enter</button>
                </form>
              </div>
            </div>
            
          </div>
        </div>
        
        <div class="green-block">
          <div class="container">
            <div class="col-md-8 col-md-offset-2">
              <h3><?php the_field('green_block_title'); ?></h3>
              <div><?php the_field('green_block_content'); ?></div>
              <a href="<?php the_field('green_block_button_link'); ?>" class="btn-white green"><?php the_field('green_block_button_text'); ?></a>
            </div>
          </div>
        </div>
        
        <div class="image-block" style="background-image:url('<?php the_field('image'); ?>')"></div>
        
        <div class="fluid-container">
          <div class="row" style="margin-right:0;">
            <div class="col-sm-6 side-block red">
              <div class="display-table">
                <div class="display-table-cell">
                  <h3><?php the_field('red_block_content'); ?></h3>
                </div>
              </div>
            </div>
            <div class="col-sm-6 side-block white">
              <div class="display-table">
                <div class="display-table-cell">
                  <h3><?php the_field('white_block_title'); ?></h3>
                  <?php the_field('white_block_content'); ?>
                </div>
              </div>
            </div>
          </div>
        </div>
        
        <div class="container bottom-block">
          <div class="row">
            <div class="col-md-5 col-centered">
              <h3 class="text-center"><?php the_field('bottom_block_title'); ?></h3>
            </div>
          </div>
            
          <div class="row">
            <div class="col-sm-6 col-sm-offset-3 text-center">
              <div class="text-left"><?php the_field('bottom_block_content'); ?></div>
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
