<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#ffffff" />
    <?php if ( function_exists('is_singular') && is_singular() ) : ?>
        <link rel="canonical" href="<?php echo esc_url( get_permalink() ); ?>" />
    <?php else : ?>
        <link rel="canonical" href="<?php echo esc_url( home_url() ); ?>" />
    <?php endif; ?>
    <?php // Basic Open Graph tags for blog pages
    $og_title = get_bloginfo('name');
    $og_description = get_bloginfo('description');
    $og_url = home_url();
    ?>
    <meta property="og:type" content="website" />
    <meta property="og:title" content="<?php echo esc_attr($og_title); ?>" />
    <meta property="og:description" content="<?php echo esc_attr($og_description); ?>" />
    <meta property="og:url" content="<?php echo esc_url($og_url); ?>" />
    <meta property="og:site_name" content="<?php bloginfo('name'); ?>" />
    <?php wp_head(); ?>
</head>
<body <?php body_class('blog-theme'); ?>>
    <a class="skip-link sr-only" href="#main-content">رفتن به محتوا</a>
    <header class="site-header blog-header">
        <div class="container header-inner">
            <div class="brand">
                <a href="<?php echo home_url(); ?>" class="brand-link">
                    <span class="brand-name"><?php echo esc_html( get_theme_mod('blog_brand_name', 'WooPilot') ); ?></span>
                </a>
                <p class="brand-tagline"><?php echo esc_html( get_theme_mod('blog_brand_tagline', 'وبلاگ WooPilot - آموزش، نکات و اخبار') ); ?></p>
            </div>

            <nav class="primary blog-nav" role="navigation" aria-label="ناوبری اصلی">
                <a href="<?php echo home_url(); ?>" class="nav-link <?php if (is_home() && !is_front_page()) echo 'active'; ?>">خانه</a>
                <a href="<?php echo esc_url( get_theme_mod('blog_nav_product_url', home_url('/landing')) ); ?>" class="nav-link"><?php echo esc_html( get_theme_mod('blog_nav_product_label', 'محصول') ); ?></a>
                <a href="<?php echo esc_url( get_theme_mod('blog_nav_training_url', home_url('/support')) ); ?>" class="nav-link"><?php echo esc_html( get_theme_mod('blog_nav_training_label', 'آموزش') ); ?></a>
                <a href="<?php echo esc_url( get_theme_mod('blog_nav_company_url', home_url('/about')) ); ?>" class="nav-link"><?php echo esc_html( get_theme_mod('blog_nav_company_label', 'شرکت') ); ?></a>
            </nav>

            <div class="header-actions">
                <?php if ( get_theme_mod('blog_show_search', true) ) : ?>
                <form role="search" method="get" class="search-form" action="<?php echo home_url('/'); ?>">
                    <label>
                        <span class="screen-reader-text">جستجو</span>
                        <input type="search" class="search-field" placeholder="جستجو..." value="<?php echo get_search_query(); ?>" name="s" />
                    </label>
                    <button type="submit" class="search-submit">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <circle cx="11" cy="11" r="8"/>
                            <path d="M21 21l-4.35-4.35"/>
                        </svg>
                    </button>
                </form>
                <?php endif; ?>
            </div>

            <?php if ( $cta_label = get_theme_mod('blog_header_cta_label', 'درخواست دموی رایگان') ) : ?>
            <div class="header-cta">
                <a class="btn btn-primary" href="<?php echo esc_url( get_theme_mod('blog_header_cta_url', home_url('/landing')) ); ?>">
                    <?php echo esc_html( $cta_label ); ?>
                </a>
            </div>
            <?php endif; ?>
        </div>
    </header>