


<section id="home-blurb">
  <div class="container">
    <?php while (have_posts()) : the_post(); ?>

      <div class="row">
        <div class="col-sm-6">
          <?php the_content(); ?>
        </div>
      </div>



      <div class="row">
        <div class="col-sm-6">
          <div class="row">
             <section id="contact">
              <div class="container">
                <div class="row">
                  <div class="<?php echo roots_main_class(); ?>">
                    <h1>contact</h1>
                  </div>
                </div>
              </div>
            </section> <!-- contact -->
          </div>
        </div>  



        <div class="col-sm-6">
          <section id="websites">
            <div class="container">
              <div class="row">
                <div class="<?php echo roots_main_class(); ?>">
                  <h1>websites</h1>

                    <nav>
                      <?php
                        if (has_nav_menu('website_navigation')) :
                          wp_nav_menu(array('theme_location' => 'website_navigation', 'after' => '&nbsp;&nbsp;&lt;' ));
                        endif;
                      ?>
                    </nav>

                </div>
              </div>
            </div>
          </section> <!-- websites -->
        </div>  
        
      </div>
    <?php endwhile; ?>
  </div>
</section> <!-- home-blurb -->







