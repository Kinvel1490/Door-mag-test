<?php
add_action( 'wp_enqueue_scripts', 'enq_scripts_n_styles');
add_action( 'after_setup_theme', 'add_supps' );

function add_supps () {
    add_theme_support( 'custom-logo', [
        'height' => 50,
        'width' => 100,
        'flex-width' => false,
        'flex-height' => false,
        'header-text' => '',
        'unlink-homepage-logo' => false,
    ]);
    add_theme_support( 'custom-background' );

    register_nav_menu( 'top', 'Главное меню' );
    register_nav_menu( 'bot', 'Политка конфиденциальности' );

    add_theme_support( 'post-thumbnails', array('post') );
    add_image_size( 'adv_thumb', 100, 100, true );
}

function enq_scripts_n_styles () {
    if(is_page_template( 'templates/portfolio.php') || is_single() ){
        wp_enqueue_style( 'bag-box', get_template_directory_uri() . '/assets/css/baguetteBox.min.css');
        wp_enqueue_script ( 'bag-box', get_template_directory_uri() . '/assets/js/baguetteBox.min.js', null, null, true );
    }
    if(is_page_template( 'templates/contacts.php') ){
        wp_enqueue_script ( 'list', get_template_directory_uri() . '/assets/js/list.min.js', null, null, true );
    }
    if(is_category( "catalog" )) {
        wp_enqueue_script( "mix", get_template_directory_uri().'/assets/js/mixitup.min.js', null, null, true);
    }
    wp_enqueue_style( 'main', get_stylesheet_uri());
}
?>
