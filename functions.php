<?php
// filepath: c:\xampp\htdocs\landing\wp-content\themes\woopilot-landing-theme\functions.php

function woopilot_landing_enqueue_scripts() {
    wp_enqueue_style('woopilot-style', get_stylesheet_uri());
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Vazirmatn:wght@400;700&display=swap', array(), null);
    wp_enqueue_script('woopilot-js', get_template_directory_uri() . '/js/script.js', array(), '1.0', true);
}
add_action('wp_enqueue_scripts', 'woopilot_landing_enqueue_scripts');

function woopilot_landing_theme_support() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
    add_theme_support('html5', array('search-form', 'comment-form', 'comment-list'));
    load_theme_textdomain('woopilot-landing', get_template_directory() . '/languages');
}
add_action('after_setup_theme', 'woopilot_landing_theme_support');

// Include customizer if exists
if (file_exists(get_template_directory() . '/includes/customizer.php')) {
    require get_template_directory() . '/includes/customizer.php';
}

// Load customizer live preview script
function woopilot_landing_customizer_live_preview() {
    wp_enqueue_script('woopilot-customizer', get_template_directory_uri() . '/js/customizer.js', array('jquery', 'customize-preview'), '1.0', true);
}
add_action('customize_preview_init', 'woopilot_landing_customizer_live_preview');

// Add Google Analytics
function woopilot_landing_google_analytics() {
    $ga_id = get_theme_mod('google_analytics_id', '');
    if (!empty($ga_id)) {
        echo "<!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src='https://www.googletagmanager.com/gtag/js?id=" . esc_attr($ga_id) . "'></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());
          gtag('config', '" . esc_attr($ga_id) . "');
        </script>";
    }
}
add_action('wp_head', 'woopilot_landing_google_analytics');