
<div id="mybrand">
  <div class="container">
    <div class="row">
      <div class="col-sm-6">
        <h1><a href="<?php echo site_url(); ?>"><?php bloginfo('name'); ?></a></h1>
        <h2><a href="<?php echo site_url(); ?>"><?php bloginfo('description'); ?></a></h2>
      </div>
      <div class="col-sm-4 pull-right hidden-xs">
        <?php get_template_part('templates/link-bar');?>
      </div>
    </div>
  </div>
</div>
