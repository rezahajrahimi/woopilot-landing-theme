<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header class="site-header">
        <div class="container header-inner">
            <div class="brand">
                <span class="brand-name"><?php bloginfo('name'); ?></span>
                <p class="brand-tagline">تیمی از مهندسان و طراحان که به آرامش دیجیتال می‌نگرند</p>
            </div>
            <button class="menu-toggle" aria-expanded="false" aria-controls="primary-menu">
                <span>منو</span>
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