<?php
function ttb_styles(){
wp_enqueue_style('normalize', get_stylesheet_directory_uri(). '/css/normalize.css' );
wp_enqueue_style('fontawesome', get_stylesheet_directory_uri(). '/css/font-awesome.min.css' );
wp_enqueue_style('bootstrap', "https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css");
wp_enqueue_style('raleway', "https://fonts.googleapis.com/css2?family=Raleway:wght@900&display=swap");
wp_enqueue_style('baskerville', "https://fonts.googleapis.com/css?family=Libre+Baskerville:wght@400,700");

wp_enqueue_style('ttb_stylesheet', get_stylesheet_uri() );


wp_enqueue_style('jquery');

wp_enqueue_script('bootstrapjs',"https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js", array('jquery'), '3.4.0' , true );
}
add_action('wp_enqueue_scripts', 'ttb_styles');


register_nav_menus( array(
'main_menu' => __('Main Menu', 'thetravelblog'),
'social_menu' => __('Social Menu', 'thetravelblog')

));
add_theme_support('post-thumbnails');

add_image_size('entry', 750, 490, true);

function ttb_widgets(){
    register_sidebar(array(

        'name'=> __('Footer Widget'),
        'id' => 'footer_widget',
        'description' => 'Widgets for the footer',
        'before_widget'=> '<div id="%1$s"  class="widget col-sm-6 %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>'
    ));
    register_sidebar(array(

        'name'=> __('Sidebar Widget'),
        'id' => 'sidebar_widget',
        'description' => 'Widgets for the sidebar',
        'before_widget'=> '<div id="%1$s"  class="widget  %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>'
    ));



}
add_action('widgets_init', 'ttb_widgets');
?>
