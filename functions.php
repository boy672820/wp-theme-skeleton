<?php

add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );

function add_theme_scripts() {
	wp_enqueue_style( 'reset', get_template_directory_uri() . '/assets/stylesheets/reset.css', array(), '1.0', 'all' );

	wp_enqueue_script( 'script', get_template_directory_uri() . '/assets/javascripts/script.js', array( 'jquery' ), '1.0', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
