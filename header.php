<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#0a0a0f" />
    <?php if ( function_exists('is_singular') && is_singular() ) : ?>
        <link rel="canonical" href="<?php echo esc_url( get_permalink() ); ?>" />
    <?php else : ?>
        <link rel="canonical" href="<?php echo esc_url( home_url() ); ?>" />
    <?php endif; ?>
    <?php
    // Basic Open Graph & Twitter tags for better SEO/social preview
    $og_title = get_bloginfo('name');
    $og_description = get_bloginfo('description');
    $og_url = home_url();
    $og_locale = get_locale();
    ?>
    <meta property="og:type" content="website" />
    <meta property="og:title" content="<?php echo esc_attr($og_title); ?>" />
    <meta property="og:description" content="<?php echo esc_attr($og_description); ?>" />
    <meta property="og:url" content="<?php echo esc_url($og_url); ?>" />
    <meta property="og:site_name" content="<?php bloginfo('name'); ?>" />
    <meta property="og:locale" content="<?php echo esc_attr($og_locale); ?>" />
    <meta name="twitter:card" content="summary_large_image" />
    <?php if ( function_exists('is_page_template') && ( is_front_page() || is_page_template('templates/landing-page.php') ) ) : ?>
        <link rel="preload" href="<?php echo esc_url( get_template_directory_uri() . '/assets/images/mockup.svg' ); ?>" as="image" />
    <?php endif; ?>
    <?php if ( function_exists('has_site_icon') && has_site_icon() ) : ?>
        <?php // WordPress site icon in effect ?>
    <?php else : ?>
        <link rel="icon" href="<?php echo esc_url( get_template_directory_uri() . '/assets/images/favicon.ico' ); ?>" />
    <?php endif; ?>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <a class="skip-link sr-only" href="#main-content">رفتن به محتوا</a>
    <header class="site-header">
        <div class="container header-inner">
            <div class="brand">
                <span class="brand-name"><?php bloginfo('name'); ?></span>
                <p class="brand-tagline">تیمی از مهندسان و طراحان که به آرامش دیجیتال می‌نگرند</p>
            </div>
            <button class="menu-toggle" aria-expanded="false" aria-controls="primary-menu" aria-label="باز کردن منو">
                <span class="sr-only">باز کردن منو</span>
                <svg width="18" height="12" viewBox="0 0 18 12" aria-hidden="true" focusable="false"><path d="M0 1.5h18M0 6h18M0 10.5h18" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </button>
            <nav id="primary-menu" class="primary" role="navigation" aria-label="اصلی">
                <a href="#pillars">تخصص</a>
                <a href="#process">مسیر</a>
                <a href="#features">ابزارها</a>
                <a href="#testimonials">نظرات</a>
                <a href="#cta" class="btn btn-primary">همراه شوید</a>
            </nav>
            <div class="header-cta">
                <a href="<?php echo esc_url( get_theme_mod('download_link', '#' ) ); ?>" class="btn btn-primary" aria-label="دانلود WooPilot">دانلود</a>
            </div>
        </div>
    </header>