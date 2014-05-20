<header class="banner navbar navbar-default navbar-fixed-top aligned" role="banner">
  <div class="navbar-inner">
    <div class="container aligned">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>

      <nav class="collapse navbar-collapse" role="navigation">
        <?php
          if (has_nav_menu('primary_navigation')) :
            wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav'));
          endif;
        ?>
      </nav>
    </div>
  </div>
</header>

<div id="mybrand">
  <div class="container">
    <div class="row">
      <div class="col-sm-6">
        <h1><?php bloginfo('name'); ?></h1>
        <h2><?php bloginfo('description'); ?></h2>
      </div>
      <div class="col-sm-4 pull-right" id="link-bar">
        <div class="row">

          <div class="col-xs-4">
            <a class="link-icon" href="" data-toggle="tooltip" title="facebook">
              <img src="<?php echo site_url('/assets/img/facebook.svg'); ?>" alt="">
            </a>
          </div>
          <div class="col-xs-4">
            <a class="link-icon" href="" data-toggle="tooltip" title="facebook">
              <img src="<?php echo site_url('/assets/img/facebook.svg'); ?>" alt="">
            </a>
          </div>
          <div class="col-xs-4">
            <a class="link-icon" href="" data-toggle="tooltip" title="twitter">
              <img src="<?php echo site_url('/assets/img/twitter.svg'); ?>" alt="">
              </a>
          </div>

        </div> <!-- row -->


        <div class="row">

          <div class="col-xs-4">
            <a class="link-icon" href="" data-toggle="tooltip" title="google+">
              <img src="<?php echo site_url('/assets/img/google-plus.svg'); ?>" alt="">
            </a>
          </div>
          <div class="col-xs-4">
            <a class="link-icon" href="" data-toggle="tooltip" title="github">
              <img src="<?php echo site_url('/assets/img/github.svg'); ?>" alt="">
            </a>
          </div>
          <div class="col-xs-4">
            <a class="link-icon" href="" data-toggle="tooltip" title="instagram">
              <img src="<?php echo site_url('/assets/img/instagram.svg'); ?>" alt="">
            </a>
          </div>

       </div> <!-- row -->

     </div>
    </div>



  </div>
</div>
