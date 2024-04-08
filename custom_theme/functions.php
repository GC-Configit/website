<?php
// remove <p> tag from images 
remove_filter('the_content', 'wpautop');
// register style.css
wp_enqueue_style( 'style', get_stylesheet_uri() );

// some functions need to be called after after_setup_theme hook
function theme_setup() {
    // add support for post thumbnails
    add_theme_support( 'post-thumbnails' );
}
add_action( 'after_setup_theme', 'theme_setup' );
?>