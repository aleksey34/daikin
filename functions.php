<?php


/**
 * Carbon fields init
 * Read  my comment in  this file
 * this problem is unknown
 */
require_once  get_stylesheet_directory() . "/inc/carbon-fields-init.php";

/**
 * enqueue  styles and scripts
 */
//require_once get_template_directory() . "/inc/mind-style-script.php";

/**
 * Add TGM settings.
 */
require_once get_stylesheet_directory() . '/inc/TGM-settings.php';


/**
 *
 * custom shortcodes
 */
require_once get_stylesheet_directory() . '/inc/daikin-custom-shortcodes.php';



add_action('ocean_before_outer_wrap' , function (){
    get_template_part('/template-part/top-nav-panel');
}   , 100);



// don't need  @import  in css
// parent style in parent assents
add_action( 'wp_enqueue_scripts', 'daikin_child_theme_scripts' );
function daikin_child_theme_scripts() {
//wp_enqueue_style( 'oceanwp-parent-style',  . '/style.css' );
//wp_enqueue_style( 'oceanwp-parent-style', get_template_directory_uri() . '/style.css' );
  //  wp_enqueue_style( 'mytheme-style', get_template_directory_uri() .'/style.css' );
   // wp_enqueue_style( 'daikin-theme', trailingslashit( get_stylesheet_directory_uri() ) . '/style.css');
    wp_enqueue_style( 'daikin-theme-style',  get_stylesheet_directory_uri()  . '/style.css');
//    wp_enqueue_style( 'style_name_1', trailingslashit( get_stylesheet_directory_uri() ) . '/assets/your_style_name.css');
}
