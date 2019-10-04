<?php

function caei_initial_widgets (){
	register_sidebar(
		array(
			'name' => 'Header Bottom',
			'id' => 'header-bottom-widget-area',
			'class' => 'header_bottom_widget_area',
			'description' => 'Header Bottom Area',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget' => '</aside>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>',
		)
    );
	register_sidebar(
		array(
			'name' => 'Footer Top',
			'id' => 'footer-top-widget-area',
			'class' => 'footer_top_widget_area',
			'description' => 'Footer Top Area',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget' => '</aside>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>',
		)
    );
    register_sidebar(
		array(
			'name' => 'Single Post Below Content',
			'id' => 'single-post-below-content-area',
			'class' => 'single_post_below_content_area',
			'description' => 'Single Post Below Content',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget' => '</aside>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>',
		)
    );
}

add_action('widgets_init', 'caei_initial_widgets');