<footer class="content-info container" role="contentinfo">
  <div class="visible-xs">
    <?php get_template_part('templates/link-bar');?>
  </div>

  <div class="row">
    <div class="col-lg-12">
      <?php dynamic_sidebar('sidebar-footer'); ?>
      <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?></p>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>
