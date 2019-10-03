<?php 

function caei_enqueue_styles(){
    wp_enqueue_style( 'caei-new-fonts', 'https://fonts.googleapis.com/css?family=Lobster|Crete+Round|Oswald|Roboto|Roboto+Slab|PT+Sans|Open+Sans|Montserrat:300,400,500,600,700' );
    wp_enqueue_style('caei-main-style', get_template_directory_uri().'/style.css', array(), '1.0.0', 'all');
}

add_action('wp_enqueue_scripts', 'caei_enqueue_styles');