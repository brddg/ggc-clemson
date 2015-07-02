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
        
        <div class="sign-up-block">
          <div class="container">
            
            <div class="row">
              <div class="col-sm-5 col-centered">
                <h3>Sign Up For The Latest News</h3>
              </div>
            </div>
            
            <div class="row">
              <div class="col-sm-6 col-centered text-center">
                <p>Keep up to date with our latest discoveries and the new ways you can help.</p>
              </div>
            </div>
            
            <div class="row">
              <div class="col-sm-4 col-centered">
                <form action="#" method="post" id="sign-up-form">
                  <input type="text" class="styled-input" name="name" placeholder="Your name..." />
                  <input type="email" class="styled-input" name="email" placeholder="Your email address..." />
                  <p class="radio-label">Please choose one of the following:</p>
                  <div><input type="radio" name="persontype" value="patient" /> Patient</div>
                  <div><input type="radio" name="persontype" value="familymember" /> Family Member</div>
                  <div><input type="radio" name="persontype" value="scientist" /> Scienties</div>
                  <div><input type="radio" name="persontype" value="other" /> Other</div>
                  <button type="submit" class="btn-blue">Enter</button>
                </form>
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