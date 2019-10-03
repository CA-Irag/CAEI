<?php  

require get_template_directory(). '/inc/enqueues.php';
// require get_template_directory(). '/inc/widgets.php';

function caei_enqueue_theme_support(){
    add_theme_support('menus');
    register_nav_menu('header_menu', 'Primary Header Menu');
    // add_theme_support('custom-background');
    // add_theme_support('post-thumbnails');
    // add_theme_support('html5', array('comment-list', 'comment-form'));
}
add_action('init', 'caei_enqueue_theme_support');