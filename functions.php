<?php
function custom_theme_enqueue_styles() {
    wp_enqueue_style('style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'custom_theme_enqueue_styles');

function custom_theme_setup() {
    add_theme_support('post-thumbnails');

    add_image_size('project-thumb', 400, 300, true); 
}
add_action('after_setup_theme', 'custom_theme_setup');


function mytheme_setup() {
    add_theme_support( 'title-tag' );
}
add_action( 'after_setup_theme', 'mytheme_setup' );

function malaz_theme_setup() {

    add_theme_support( 'automatic-feed-links' );
}
add_action( 'after_setup_theme', 'malaz_theme_setup' );

function malaz_theme_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Primary Sidebar', 'malaz' ),
        'id'            => 'primary-sidebar',
        'description'   => __( 'Main sidebar that appears on the right.', 'malaz' ),
        'before_widget' => '<div class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'malaz_theme_widgets_init' );

function malaz_register_block_styles() {

    register_block_style(
        'core/paragraph',
        array(
            'name'  => 'fancy-paragraph',
            'label' => __( 'Fancy Paragraph', 'malaz' ),
            'inline_style' => '.wp-block-paragraph.is-style-fancy-paragraph { color: #0073aa; font-style: italic; }',
        )
    );


    register_block_style(
        'core/image',
        array(
            'name'  => 'bordered-image',
            'label' => __( 'Bordered Image', 'malaz' ),
            'inline_style' => '.wp-block-image.is-style-bordered-image img { border: 5px solid #0073aa; }',
        )
    );
}
add_action( 'init', 'malaz_register_block_styles' );


function malaz_add_responsive_embeds() {
    add_theme_support( 'responsive-embeds' );
}
add_action( 'after_setup_theme', 'malaz_add_responsive_embeds' );
?>
