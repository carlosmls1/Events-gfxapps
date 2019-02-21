<?php
/*function wpdocs_theme_name_scripts() {
    wp_enqueue_style( 'style-name', get_stylesheet_uri() );
    wp_enqueue_script( 'script-name', get_template_directory_uri() . '/js/example.js', array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'wpdocs_theme_name_scripts' );*/
function calendar_list($atts) {
    $a = shortcode_atts( array(
        'setlocale' => 'es_ES'
    ), $atts );
    $month=date("Y").'-01-';
    $param=array(
        'key'     => 'date',
        'value'   => $month, // This is an unique value.
        'compare' => 'LIKE',
    );
    $args = array(
        'post_type'   => 'events',
        'post_status' => 'publish',
        'orderby' => 'meta_value',
        'meta_key' => 'date',
        'order'    => 'ASC',
        /*'meta_key' => 'date',
         'meta_value' => '2019-04-%' ,
         'meta_compare' => 'LIKE',*/
        'meta_query'      => array(
            $param
        )
    );
    $enero = new WP_Query( $args );
    $month=date("Y").'-02-';
    $param=array(
        'key'     => 'date',
        'value'   => $month, // This is an unique value.
        'compare' => 'LIKE',
    );
    $args = array(
        'post_type'   => 'events',
        'post_status' => 'publish',
        'orderby' => 'meta_value',
        'meta_key' => 'date',
        'order'    => 'ASC',
        'meta_query'      => array(
            $param
        )
    );
    $febrero = new WP_Query( $args );
    $month=date("Y").'-03-';
    $param=array(
        'key'     => 'date',
        'value'   => $month, // This is an unique value.
        'compare' => 'LIKE',
    );
    $args = array(
        'post_type'   => 'events',
        'post_status' => 'publish',
        'orderby' => 'meta_value',
        'meta_key' => 'date',
        'order'    => 'ASC',
        'meta_query'      => array(
            $param
        )
    );
    $marzo = new WP_Query( $args );
    $month=date("Y").'-04-';
    $param=array(
        'key'     => 'date',
        'value'   => $month, // This is an unique value.
        'compare' => 'LIKE',
    );
    $args = array(
        'post_type'   => 'events',
        'post_status' => 'publish',
        'orderby' => 'meta_value',
        'meta_key' => 'date',
        'order'    => 'ASC',
        'meta_query'      => array(
            $param
        )
    );
    $abril = new WP_Query( $args );
    $month=date("Y").'-05-';
    $param=array(
        'key'     => 'date',
        'value'   => $month, // This is an unique value.
        'compare' => 'LIKE',
    );
    $args = array(
        'post_type'   => 'events',
        'post_status' => 'publish',
        'orderby' => 'meta_value',
        'meta_key' => 'date',
        'order'    => 'ASC',
        'meta_query'      => array(
            $param
        )
    );
    $mayo = new WP_Query( $args );
    $month=date("Y").'-06-';
    $param=array(
        'key'     => 'date',
        'value'   => $month, // This is an unique value.
        'compare' => 'LIKE',
    );
    $args = array(
        'post_type'   => 'events',
        'post_status' => 'publish',
        'orderby' => 'meta_value',
        'meta_key' => 'date',
        'order'    => 'ASC',
        'meta_query'      => array(
            $param
        )
    );
    $junio = new WP_Query( $args );
    $month=date("Y").'-07-';
    $param=array(
        'key'     => 'date',
        'value'   => $month, // This is an unique value.
        'compare' => 'LIKE',
    );
    $args = array(
        'post_type'   => 'events',
        'post_status' => 'publish',
        'orderby' => 'meta_value',
        'meta_key' => 'date',
        'order'    => 'ASC',
        'meta_query'      => array(
            $param
        )
    );
    $julio = new WP_Query( $args );
    $month=date("Y").'-08-';
    $param=array(
        'key'     => 'date',
        'value'   => $month, // This is an unique value.
        'compare' => 'LIKE',
    );
    $args = array(
        'post_type'   => 'events',
        'post_status' => 'publish',
        'meta_key' => 'date',
        'orderby' => 'meta_value',
        'order'    => 'ASC',
        'meta_query'      => array(
            $param
        )
    );
    $agosto = new WP_Query( $args );
    $month=date("Y").'-09-';
    $param=array(
        'key'     => 'date',
        'value'   => $month, // This is an unique value.
        'compare' => 'LIKE',
    );
    $args = array(
        'post_type'   => 'events',
        'post_status' => 'publish',
        'orderby' => 'meta_value',
        'meta_key' => 'date',
        'order'    => 'ASC',
        'meta_query'      => array(
            $param
        )
    );
    $septiembre = new WP_Query( $args );
    $month=date("Y").'-10-';
    $param=array(
        'key'     => 'date',
        'value'   => $month, // This is an unique value.
        'compare' => 'LIKE',
    );
    $args = array(
        'post_type'   => 'events',
        'post_status' => 'publish',
        'orderby' => 'meta_value',
        'meta_key' => 'date',
        'order'    => 'ASC',
        'meta_query'      => array(
            $param
        )
    );
    $octubre = new WP_Query( $args );
    $month=date("Y").'-11-';
    $param=array(
        'key'     => 'date',
        'value'   => $month, // This is an unique value.
        'compare' => 'LIKE',
    );
    $args = array(
        'post_type'   => 'events',
        'post_status' => 'publish',
        'orderby' => 'meta_value',
        'meta_key' => 'date',
        'order'    => 'ASC',
        'meta_query'      => array(
            $param
        )
    );
    $noviembre = new WP_Query( $args );
    $month=date("Y").'-12-';
    $param=array(
        'key'     => 'date',
        'value'   => $month, // This is an unique value.
        'compare' => 'LIKE',
    );
    $args = array(
        'post_type'   => 'events',
        'post_status' => 'publish',
        'orderby' => 'meta_value',
        'meta_key' => 'date',
        'order'    => 'ASC',
        'meta_query'      => array(
            $param
        )
    );
    $diciembre = new WP_Query( $args );
    wp_enqueue_style('gfxapps-styke',plugin_dir_url( __FILE__ ) . 'css/events-gfxappscr-public.css', array(), rand(), 'all' );
    wp_enqueue_script('gfxapps-styke', plugin_dir_url( __FILE__ ) . 'js/events-gfxappscr-public.js', array(), rand(), false );
//    /return 'Hello world!';
    return(include  plugin_dir_path( dirname( __FILE__ ) ) . 'public/calendar.php');
}
add_shortcode( 'calendar_list_gfx', 'calendar_list' );