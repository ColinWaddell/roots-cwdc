


<section id="home-blurb">
  <div class="container">
    <?php while (have_posts()) : the_post(); ?>

      <div class="row">
        <div class="col-sm-6">
          <?php the_content(); ?>
       </div>
      </div>


      <div class="row menus">
        <div class="col-sm-3">
          <section id="contact">
            <div class="container">
              <div class="row">
                <img src="<?php echo site_url('/assets/img/colin_waddell.png'); ?>" alt="Colin Waddell">
              </div>
            </div>
          </section> <!-- ma face -->
        </div>   


        <div class="col-sm-3">
          <section id="projects">
            <div class="container">
              <div class="row">
                <div class="<?php echo roots_main_class(); ?>">
                  <h1>projects</h1>

                    <nav>
                      <?php
                        if (has_nav_menu('projects_navigation')) :
                          wp_nav_menu(array('theme_location' => 'projects_navigation', 'before' => '&gt;&nbsp;&nbsp;' ));
                        endif;
                      ?>
                    </nav>

                </div>
              </div>
            </div>
          </section> <!-- project -->
        </div>  
        

        <div class="col-sm-3">
          <section id="websites">
            <div class="container">
              <div class="row">
                <div class="<?php echo roots_main_class(); ?>">
                  <h1>websites</h1>

                    <nav>
                      <?php
                        if (has_nav_menu('website_navigation')) :
                          wp_nav_menu(array('theme_location' => 'website_navigation', 'before' => '&gt;&nbsp;&nbsp;' ));
                        endif;
                      ?>
                    </nav>

                </div>
              </div>
            </div>
          </section> <!-- websites -->
        </div>  


        <div class="col-sm-3">
          <section id="contact">
            <div class="container">
              <div class="row">
                <div class="<?php echo roots_main_class(); ?>">
                  <h1>contact</h1>

                    <nav>
                      <?php
                        if (has_nav_menu('contact_navigation')) :
                          wp_nav_menu(array('theme_location' => 'contact_navigation', 'before' => '&gt;&nbsp;&nbsp;' ));
                        endif;
                      ?>
                    </nav>

                    <?php dynamic_sidebar('sidebar-contacts'); ?>

                </div>
              </div>
            </div>
          </section> <!-- contact -->
        </div>   


      </div> <!-- row -->
    <?php endwhile; ?>
  </div>
</section> <!-- home-blurb -->




<script>
  $('.FlowupLabels').FlowupLabels({
          /*
          These are all the default values
          You may exclude any/all of these options
          if you won't be changing them
           */
          // Handles the possibility of having input boxes prefilled on page load
          feature_onInitLoad: false, 

          // Class when focusing an input
          class_focused:      'focused',
          // Class when an input has text entered
          class_populated:    'populated' 
  });


  $('#wpcf7_message').autogrow();

</script>
