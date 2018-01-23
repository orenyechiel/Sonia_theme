<?php 
add_theme_support('menus');

function sonia_register_theme_menus() {
    register_nav_menus([
        'primary-menu' => __('Primary Menu'),
        'secondary-menu' => __('Secondary Menu')
    ]);
}
add_action('init', 'sonia_register_nav_menus');



function sonia_theme_styles(){ //wps stands for "wordpress sonia" to prevent conflicts.
    wp_enqueue_style('vendor_css', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css');
    wp_enqueue_style('googlefont_css', 'https://fonts.googleapis.com/css?family=Bellefair');
    wp_enqueue_style('main_css', get_template_directory_uri() . '/style.css');
    
}
add_action('wp_enqueue_scripts', 'sonia_theme_styles');



function sonia_theme_js(){
    wp_enqueue_script('script_js', get_template_directory_uri() . '/js/script.js', array('jquery'), '', true);
    
}
add_action('wp_enqueue_scripts', 'sonia_theme_js');



function sonia_widgets_init() {
 
    register_sidebar([
        'name' => __( 'Sidebar'),
        'description' => 'החלק השמאלי בעמוד הראשי',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ]);
}
add_action( 'wp_register_sidebar_widget', 'sonia_widgets_init' );