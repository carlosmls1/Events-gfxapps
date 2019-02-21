<?php
/*function wpdocs_theme_name_scripts() {
    wp_enqueue_style( 'style-name', get_stylesheet_uri() );
    wp_enqueue_script( 'script-name', get_template_directory_uri() . '/js/example.js', array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'wpdocs_theme_name_scripts' );*/
function calendar_list() {
    wp_enqueue_style('gfxapps-styke',plugin_dir_url( __FILE__ ) . 'public/css/events-gfxappscr-public.css', array(), rand(), 'all' );
    wp_enqueue_script('gfxapps-stript',plugin_dir_path( dirname( __FILE__ ) ) . 'js/events-gfxappscr-public.js', array( 'jquery' ), rand(), false );
//    /return 'Hello world!';
    return(include  plugin_dir_path( dirname( __FILE__ ) ) . 'public/calendar.php');
}
add_shortcode( 'calendar_list_gfx', 'calendar_list' );