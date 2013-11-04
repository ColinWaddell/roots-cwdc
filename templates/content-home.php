


<section id="home-blurb">
  <div class="container">
    <?php while (have_posts()) : the_post(); ?>
      <div class="row">
        <div class="col-sm-6">
          <?php the_content(); ?>
        </div>  
      </div>
    <?php endwhile; ?>
  </div>
</section> <!-- home-blurb -->





<section id="link-bar">
  <div class="container">
    <div class="row">
      <div class="col-xs-2">
        <a class="link-icon" href="" data-toggle="tooltip" title="facebook">
          <img src="<?php echo site_url('/assets/img/facebook.svg'); ?>" alt="">
        </a>
      </div>
      <div class="col-xs-2">
        <a class="link-icon" href="" data-toggle="tooltip" title="facebook">
          <img src="<?php echo site_url('/assets/img/facebook.svg'); ?>" alt="">
        </a>
      </div>
      <div class="col-xs-2">
        <a class="link-icon" href="" data-toggle="tooltip" title="twitter">
          <img src="<?php echo site_url('/assets/img/twitter.svg'); ?>" alt="">
          </a>
      </div>
      <div class="col-xs-2">
        <a class="link-icon" href="" data-toggle="tooltip" title="google+">
          <img src="<?php echo site_url('/assets/img/google-plus.svg'); ?>" alt="">
        </a>
      </div>
      <div class="col-xs-2">
        <a class="link-icon" href="" data-toggle="tooltip" title="github">
          <img src="<?php echo site_url('/assets/img/github.svg'); ?>" alt="">
        </a>
      </div>
      <div class="col-xs-2">
        <a class="link-icon" href="" data-toggle="tooltip" title="instagram">
          <img src="<?php echo site_url('/assets/img/instagram.svg'); ?>" alt="">
        </a>
      </div>
    </div>
  </div>
</section> <!-- link bar -->







<section id="websites">
  <div class="container">
    <div class="row">
      <div class="<?php echo roots_main_class(); ?>">
        <h1>websites</h1>
      </div>
    </div>
  </div>
</section> <!-- websites -->







<section id="projects">
  <div class="container">
    <div class="row">
      <div class="<?php echo roots_main_class(); ?>">
        <h1>projects</h1>

      </div>
    </div>
    <div class="row">
      <div class="col-sm-12">
        <div id="my-github-projects"></div>
        <?php wp_enqueue_script('nvd3-libs'); wp_enqueue_script('git-graphs'); ?>
        <script>
          $(document).ready(function() {
            gitFancyRepos('#my-github-projects');
          }); 
        </script>
      </div>
    </div>
  </div>
</section> <!-- projects -->









<section id="contact">
  <div class="container">
    <div class="row">
      <div class="<?php echo roots_main_class(); ?>">
        <h1>contact</h1>
      </div>
    </div>
  </div>
</section> <!-- contact -->




