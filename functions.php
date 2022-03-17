<?php 
function load_stylesheets () {
	wp_enqueue_style( 'main', get_template_directory_uri() . '/style.css' );
}

add_action('wp_enqueue_scripts', 'load_stylesheets');
add_theme_support('menus');
register_nav_menus(
    array(
    'top-menu' => __('Top Menu', 'theme'),
)
);
?>
