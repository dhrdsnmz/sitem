<?php

/**
 * Enqueue scripts and styles.
 */
function lawgist_scripts() {
    wp_enqueue_style( 'lawgist-google-fonts', '//fonts.googleapis.com/css2?family=Crimson+Pro:ital,wght@0,500;0,600;0,700;1,500&family=DM+Sans:ital,wght@0,400;0,500;1,400&display=swap' );
    wp_enqueue_style( 'font-awesomes', get_theme_file_uri( '/assets/css/all.min.css' ), array(), '5.15.1' );
	wp_enqueue_style( 'select2', get_theme_file_uri( '/assets/css/select2.min.css'), array(), null);
    wp_enqueue_style( 'bootstrap', get_theme_file_uri( '/assets/css/bootstrap.min.css' ), array(), '4.0' );
    wp_enqueue_style( 'nice-select', get_theme_file_uri( '/assets/css/nice-select.min.css' ), array(), 'null' );
    wp_enqueue_style( 'lawgist-core', get_theme_file_uri( '/assets/css/core.css' ), array(), LAWGIST_THEME_VERSION );
    wp_enqueue_style( 'lawgist-guten', get_theme_file_uri( '/assets/css/gutenberg.css' ), array(), LAWGIST_THEME_VERSION );
    wp_enqueue_style( 'lawgist-custom', get_theme_file_uri( '/assets/css/theme-style.css' ), array(), LAWGIST_THEME_VERSION );
    wp_enqueue_style( 'lawgist-custom-fonts', get_theme_file_uri( '/assets/css/custom-fonts.css' ), array(), LAWGIST_THEME_VERSION );
    wp_enqueue_style( 'lawgist-style', get_stylesheet_uri(), array(), LAWGIST_THEME_VERSION );
    wp_enqueue_style( 'lawgist-responsive', get_theme_file_uri( '/assets/css/theme-responsive.css' ), array(), LAWGIST_THEME_VERSION );

    wp_enqueue_script( 'jquery-masonry' );
	wp_enqueue_script('select2', get_theme_file_uri( '/assets/js/select2.min.js'), array('jquery'), null, true);
    wp_enqueue_script( 'nice-select', get_theme_file_uri( '/assets/js/jquery.nice-select.min.js' ), array( 'jquery' ), null, true );
    wp_enqueue_script( 'lawgist-main', get_theme_file_uri( '/assets/js/lawgist-main.js' ), array( 'jquery' ), LAWGIST_THEME_VERSION, true );
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'lawgist_scripts' );

/**
 * Registers an editor stylesheet for the theme.
 */
function lawgist_theme_add_editor_styles() {
    add_editor_style( get_theme_file_uri( '/assets/css/editor-style.css' ) );
}
add_action( 'admin_init', 'lawgist_theme_add_editor_styles' );
