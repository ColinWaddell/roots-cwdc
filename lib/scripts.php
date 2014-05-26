<?php
/**
 * Enqueue scripts and stylesheets
 *
 * Enqueue stylesheets in the following order:
 * 1. /theme/assets/css/main.min.css
 *
 * Enqueue scripts in the following order:
 * 1. jquery-1.10.2.min.js via Google CDN
 * 2. /theme/assets/js/vendor/modernizr-2.6.2.min.js
 * 3. /theme/assets/js/main.min.js (in footer)
 */
function roots_scripts() {
  wp_enqueue_style('roots_main', get_template_directory_uri() . '/assets/css/main.min.css', false, '52f9d84dcb0246e21f264e9585be20a4');
  wp_enqueue_style('flow_up_labels', get_template_directory_uri() . '/assets/css/jquery.FlowupLabels.css', false);

  // jQuery is loaded using the same method from HTML5 Boilerplate:
  // Grab Google CDN's latest jQuery with a protocol relative URL; fallback to local if offline
  // It's kept in the header instead of footer to avoid conflicts with plugins.
  if (!is_admin() && current_theme_supports('jquery-cdn')) {
    wp_deregister_script('jquery');
    wp_register_script('jquery', '//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js', false, null, false);
    add_filter('script_loader_src', 'roots_jquery_local_fallback', 10, 2);
  }

  if (is_single() && comments_open() && get_option('thread_comments')) {
    wp_enqueue_script('comment-reply');
  }

  wp_register_script('modernizr', get_template_directory_uri() . '/assets/js/vendor/modernizr-2.6.2.min.js', false, null, false);
  wp_register_script('roots_scripts', get_template_directory_uri() . '/assets/js/scripts.min.js', false, '51a802c4ac040cf2de5c86acb9420464', true);
  wp_register_script('git-graphs', get_template_directory_uri() . '/assets/js/plugins/github-calendar/js/github-graphs-repos.js', false, false, false);
  wp_register_script('nvd3-libs', get_template_directory_uri() . '/assets/js/plugins/github-calendar/js/nvd3.libs.js', false, false, false);
  wp_register_script('flow-up-labels', get_template_directory_uri() . '/assets/js/plugins/jquery.FlowupLabels.js', false, false, false);
  wp_register_script('autogrow-textarea', get_template_directory_uri() . '/assets/js/plugins/jquery.autogrow-textarea.js', false, false, false);
  wp_enqueue_script('modernizr');
  wp_enqueue_script('jquery');
  wp_enqueue_script('roots_scripts');
  wp_enqueue_script('flow-up-labels');
  wp_enqueue_script('autogrow-textarea');
}
add_action('wp_enqueue_scripts', 'roots_scripts', 100);

// http://wordpress.stackexchange.com/a/12450
function roots_jquery_local_fallback($src, $handle = null) {
  static $add_jquery_fallback = false;

  if ($add_jquery_fallback) {
    echo '<script>window.jQuery || document.write(\'<script src="' . get_template_directory_uri() . '/assets/js/vendor/jquery-1.10.2.min.js"><\/script>\')</script>' . "\n";
    $add_jquery_fallback = false;
  }

  if ($handle === 'jquery') {
    $add_jquery_fallback = true;
  }

  return $src;
}
add_action('wp_head', 'roots_jquery_local_fallback');

function roots_google_analytics() { ?>
<script>
  (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
  function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
  e=o.createElement(i);r=o.getElementsByTagName(i)[0];
  e.src='//www.google-analytics.com/analytics.js';
  r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
  ga('create','<?php echo GOOGLE_ANALYTICS_ID; ?>');ga('send','pageview');
</script>

<?php }
if (GOOGLE_ANALYTICS_ID) {
  add_action('wp_footer', 'roots_google_analytics', 20);
}




/* Removes the Contact Form 7 scripts and styles from all pages */
//remove_action( 'wp_enqueue_scripts', 'wpcf7_enqueue_scripts' ); // Prevents the scripts from loading on all pages
remove_action( 'wp_enqueue_scripts', 'wpcf7_enqueue_styles' ); // Prevents the styles from loading on all pages

