<?php

namespace Roots\Sage\Extras;

use Roots\Sage\Setup;

/**
 * Add <body> classes
 */
function body_class($classes) {
  // Add page slug if it doesn't exist
  if (is_single() || is_page() && !is_front_page()) {
    if (!in_array(basename(get_permalink()), $classes)) {
      $classes[] = basename(get_permalink());
    }
  }

  // Add class if sidebar is active
  if (Setup\display_sidebar()) {
    $classes[] = 'sidebar-primary';
  }

  return $classes;
}
add_filter('body_class', __NAMESPACE__ . '\\body_class');

/**
 * Clean up the_excerpt()
 */
function excerpt_more() {
  return ' &hellip; <a href="' . get_permalink() . '">' . __('Continued', 'sage') . '</a>';
}
add_filter('excerpt_more', __NAMESPACE__ . '\\excerpt_more');









// Color Picker
/**
 * Function that will add the options page under Setting Menu.
 */
public function add_page() { 
     
    // $page_title, $menu_title, $capability, $menu_slug, $callback_function
    add_options_page( 'Theme Options', 'Theme Options', 'manage_options', __FILE__, array( $this, 'display_page' ) );
}
 
/**
 * Function that will display the options page.
 */
public function display_page() { 
    ?>
    <div class="wrap">
     
        <h2>Theme Options</h2>
        <form method="post" action="options.php">     
        <?php 
            settings_fields(__FILE__);      
            do_settings_sections(__FILE__);
            submit_button();
        ?>
        </form>
    </div> <!-- /wrap -->
    <?php    
}
