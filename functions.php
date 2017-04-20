<?php


  $includes = [
    'lib/vendor/CMB2/init.php',
    'lib/nav-walker.php',
    'lib/assets.php',
    'lib/content.php'
  ];

  foreach ($includes as $file) {
    if (!$filepath = locate_template($file)) {
      trigger_error(sprintf('Error locating %s for inclusion', $file), E_USER_ERROR);
    }
    require_once $filepath;
  }

  function wysiwyg_output( $content ) {
    global $wp_embed;

    $content = $wp_embed->autoembed( $content );
    $content = $wp_embed->run_shortcode( $content );
    $content = do_shortcode( $content );
    $content = wpautop( $content );

    echo $content;
  }

  // Enable plugins to manage the document title
  // http://codex.wordpress.org/Function_Reference/add_theme_support#Title_Tag
  add_theme_support('title-tag');

  // Register wp_nav_menu() menus
  // http://codex.wordpress.org/Function_Reference/register_nav_menus
  register_nav_menus( array(
    'primary_navigation' => 'Primary Navigation'
  ) );


  // Add post thumbnails
  // http://codex.wordpress.org/Post_Thumbnails
  // http://codex.wordpress.org/Function_Reference/set_post_thumbnail_size
  // http://codex.wordpress.org/Function_Reference/add_image_size
  add_theme_support('post-thumbnails');
  set_post_thumbnail_size( 750, 343, true );
  add_image_size('fullwidth', 750, 9999, false );
  add_image_size('hero', 683, 1024);
  add_image_size('small', 340, 512);

  // Add post formats
  // http://codex.wordpress.org/Post_Formats
  // add_theme_support('post-formats', ['aside', 'gallery', 'link', 'image', 'quote', 'video', 'audio']);

  // Add HTML5 markup for captions
  // http://codex.wordpress.org/Function_Reference/add_theme_support#HTML5
  add_theme_support('html5', ['caption', 'comment-form', 'comment-list']);

  function cc_mime_types($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
  }
  add_filter('upload_mimes', 'cc_mime_types');

  // remove header cruft
  add_action( 'init', function(){

    remove_action( 'admin_print_styles', 'print_emoji_styles' );
    remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
    remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
    remove_action( 'wp_print_styles', 'print_emoji_styles' );

  } );

  // Following 2 sections are from this tutorial: https://www.omnicoda.com/blog/wordpress-development/beginners-guide-wordpress-menus-bootstrap-navigation

  // The CSS files for your theme
function theme_styles() {
    wp_enqueue_style('bootstrap-css', get_template_directory_uri . '/bower_components/bootstrap/dist/css/bootstrap.min.css', array(), '', 'all');
    wp_enqueue_style('bootstrap-theme', get_template_directory_uri . '/bower_components/bootstrap/dist/css/bootstrap-theme.min.css', array('bootstrap-css'), '', 'all');
}

// The JavaScript files for your theme
function theme_js() {
    wp_enqueue_script( 'bootstrap-js', get_template_directory_uri . '/js/bootstrap.min.js', array('jquery'), '', true );
}

add_action( 'wp_enqueue_scripts', 'theme_styles' );
add_action( 'wp_enqueue_scripts', 'theme_js' );
