<?php
// filepath: c:\xampp\htdocs\landing\wp-content\themes\woopilot-landing-theme\functions.php

function woopilot_landing_enqueue_scripts() {
    wp_enqueue_style('woopilot-style', get_stylesheet_uri());
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Vazirmatn:wght@400;700&display=swap', array(), null);
    wp_enqueue_script('woopilot-js', get_template_directory_uri() . '/js/script.js', array(), '1.0', true);
}
add_action('wp_enqueue_scripts', 'woopilot_landing_enqueue_scripts');

// Add resource hints (preconnect) for Google Fonts to improve loading performance
function woopilot_landing_resource_hints($hints, $relation_type) {
    if ('preconnect' === $relation_type) {
        $hints[] = 'https://fonts.gstatic.com';
        $hints[] = 'https://fonts.googleapis.com';
    }
    return $hints;
}
add_filter('wp_resource_hints', 'woopilot_landing_resource_hints', 10, 2);

// Provide a basic site-wide meta description if none provided by plugins
function woopilot_landing_meta_description() {
    // Manual override from customizer
    $custom_desc = function_exists('get_theme_mod') ? get_theme_mod('meta_description', '') : '';
    if ( function_exists('is_singular') && is_singular() ) {
        global $post;
        if ( isset( $post ) && has_excerpt( $post ) ) {
            $desc = get_the_excerpt( $post );
        } elseif ( isset( $post ) ) {
            $desc = wp_trim_words( wp_strip_all_tags( $post->post_content ), 30 );
        } elseif ( !empty( $custom_desc ) ) {
            $desc = $custom_desc;
        } else {
            $desc = get_bloginfo( 'description' );
        }
    } else {
        if ( !empty( $custom_desc ) ) {
            $desc = $custom_desc;
        } else {
            $desc = get_bloginfo( 'description' );
        }
    }
    // If popular SEO plugins are active, they manage metadesc — don't duplicate
    if ( defined('WPSEO_VERSION') || defined('AIOSEO_VERSION') ) {
        return;
    }
    if ( $desc ) {
        echo '<meta name="description" content="' . esc_attr( $desc ) . '">' . PHP_EOL;
    }
}
add_action('wp_head', 'woopilot_landing_meta_description', 1);

// Print preload for main CSS and inline critical CSS to improve LCP
function woopilot_landing_preload_and_critical_css() {
    $stylesheet = get_stylesheet_uri();
    // Preload the stylesheet early
    echo '<link rel="preload" href="' . esc_url( $stylesheet ) . '" as="style" onload="this.rel=\'stylesheet\'">' . PHP_EOL;
    echo '<noscript><link rel="stylesheet" href="' . esc_url( $stylesheet ) . '"></noscript>' . PHP_EOL;

    // Minimal critical CSS: header, hero layout, buttons (small snippet)
    $critical_css = "html,body{width:100%;} .site-header{padding:1rem 0;} .header-inner{display:flex;align-items:center;justify-content:space-between;} .hero-grid{display:grid;grid-template-columns:1fr minmax(220px,420px);gap:1.25rem;} .device-frame{max-width:420px;} .btn{display:inline-flex;}";
    echo "<style id=\"woopilot-critical\">" . $critical_css . "</style>" . PHP_EOL;
}
add_action('wp_head', 'woopilot_landing_preload_and_critical_css', 2);

// Add defer attribute to our main JS file to improve parser-blocking behavior
function woopilot_add_defer($tag, $handle, $src) {
    if ($handle === 'woopilot-js' || $handle === 'woopilot-customizer') {
        return '<script src="' . esc_url($src) . '" defer></script>';
    }
    return $tag;
}
add_filter('script_loader_tag', 'woopilot_add_defer', 10, 3);

// Structured data JSON-LD for app; only output on the landing page or front page
function woopilot_landing_json_ld() {
    if ( function_exists('is_page_template') && ( is_front_page() || is_page_template('templates/landing-page.php') ) ) {
        $app_data = array(
            '@context' => 'https://schema.org',
            '@type' => 'SoftwareApplication',
            'name' => get_bloginfo('name'),
            'description' => get_bloginfo('description'),
            'applicationCategory' => 'BusinessApplication',
            'offers' => array(
                '@type' => 'Offer',
                'price' => '0',
                'priceCurrency' => 'IRR'
            )
        );
        echo '<script type="application/ld+json">' . wp_json_encode( $app_data ) . '</script>' . "\n";
    }
}
add_action('wp_head', 'woopilot_landing_json_ld', 5);

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