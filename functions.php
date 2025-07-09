<?php
// Theme Setup
function hemin_theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');

    register_nav_menus([
        'main_menu' => __('Main Menu', 'hemin-theme'),
    ]);
}
add_action('after_setup_theme', 'hemin_theme_setup');

// Load CSS & JS
function hemin_theme_assets() {
    wp_enqueue_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css');

    wp_enqueue_style('hemin-atoms', get_template_directory_uri() . '/assets/css/atoms.css');
    wp_enqueue_style('hemin-molecules', get_template_directory_uri() . '/assets/css/molecules.css');
    wp_enqueue_style('hemin-organisms', get_template_directory_uri() . '/assets/css/organisms.css');
    wp_enqueue_style('hemin-style', get_template_directory_uri() . '/assets/css/style.css');

    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js', ['jquery'], null, true);
    wp_enqueue_script('hemin-main', get_template_directory_uri() . '/assets/js/main.js', ['jquery'], null, true);
}
add_action('wp_enqueue_scripts', 'hemin_theme_assets');

// Customizer
function hemin_theme_customizer($wp_customize) {
    $wp_customize->add_section('hemin_theme_options', [
        'title' => __('Theme Options', 'hemin-theme'),
        'priority' => 30,
    ]);

    $wp_customize->add_setting('hemin_theme_footer_text', [
        'default' => '© ' . date('Y') . ' Hemin Theme',
        'sanitize_callback' => 'sanitize_text_field',
    ]);

    $wp_customize->add_control('hemin_theme_footer_text_control', [
        'label' => __('Footer Text', 'hemin-theme'),
        'section' => 'hemin_theme_options',
        'settings' => 'hemin_theme_footer_text',
        'type' => 'text',
    ]);
}
add_action('customize_register', 'hemin_theme_customizer');
?>
