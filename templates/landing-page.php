<?php
/*
Template Name: Landing Page
*/

// Add SEO meta tags if needed
add_action('wp_head', function() {
    echo '<meta name="description" content="اپلیکیشن WooPilot - ابزار قدرتمند و هوشمند برای صاحبان فروشگاه‌های آنلاین ووکامرس با هوش مصنوعی">';
    echo '<meta name="keywords" content="ووکامرس, هوش مصنوعی, مدیریت فروشگاه, WooPilot">';
    // Structured data for app
    echo '<script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "SoftwareApplication",
        "name": "WooPilot",
        "description": "ابزار قدرتمند و هوشمند برای صاحبان فروشگاه‌های آنلاین ووکامرس",
        "operatingSystem": "Android, iOS",
        "applicationCategory": "BusinessApplication",
        "offers": {
            "@type": "Offer",
            "price": "0",
            "priceCurrency": "IRR"
        }
    }
    </script>';
});

get_header();
?>

<main class="landing-page">
    <section class="hero" role="region" aria-labelledby="hero-heading">
        <div class="hero-glow" aria-hidden="true"></div>
        <div class="container hero-grid">
            <div class="hero-copy">
                <p class="eyebrow"><?php echo esc_html( get_theme_mod('hero_eyebrow', 'نسل جدید مدیریت فروشگاه') ); ?></p>
                <h1 id="hero-heading"><?php echo esc_html( get_theme_mod('hero_title', 'WooPilot، دستیار آسمانی برای فروشندگان ووکامرس') ); ?></h1>
                <p class="hero-lede"><?php echo esc_html( get_theme_mod('hero_subtitle', 'یک تجربه کاملاً پویای تیره‌رنگ، طراحی‌شده برای تیم‌هایی که به نوآوری اعتقاد دارند و به قدرت هوش مصنوعی برای رشد پایدار اعتماد دارند.') ); ?></p>
                <div class="hero-actions">
                    <a href="<?php echo esc_url( get_theme_mod('hero_primary_link', '#') ); ?>" class="btn btn-primary" data-cta="download"><?php echo esc_html( get_theme_mod('hero_primary_text', 'دانلود از Cafe Bazaar') ); ?></a>
                    <a href="<?php echo esc_url( get_theme_mod('hero_secondary_link', '#') ); ?>" class="btn btn-ghost" data-cta="login"><?php echo esc_html( get_theme_mod('hero_secondary_text', 'ورود به پنل هوشمند') ); ?></a>
                </div>
                <div class="hero-metrics" aria-label="اعتماد به WooPilot">
                    <div>
                        <strong><?php echo esc_html( get_theme_mod('metric_1_number', '12') ); ?></strong>
                        <span><?php echo esc_html( get_theme_mod('metric_1_label', 'پایگاه تجاری همزمان') ); ?></span>
                    </div>
                    <div>
                        <strong><?php echo esc_html( get_theme_mod('metric_2_number', '55٪') ); ?></strong>
                        <span><?php echo esc_html( get_theme_mod('metric_2_label', 'افزایش میانگین تبدیل') ); ?></span>
                    </div>
                    <div>
                        <strong><?php echo esc_html( get_theme_mod('metric_3_number', '24/7') ); ?></strong>
                        <span><?php echo esc_html( get_theme_mod('metric_3_label', 'پشتیبانی فارسی + انگلیسی') ); ?></span>
                    </div>
                </div>
                <div class="hero-trust">
                    <span><?php echo esc_html( get_theme_mod('hero_trust_text', 'بازاریاب‌های حرفه‌ای، تیم تحلیل و معماری ابری مدرن') ); ?></span>
                </div>
            </div>
            <div class="hero-visual">
                <div class="device-frame">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/mockup.svg" alt="نمای اپلیکیشن WooPilot" />
                </div>
                <div class="hero-badge">
                    <span>پیش‌نمایش زنده</span>
                    <p>داشبورد تصمیم‌سازی مبتنی بر هوش مصنوعی</p>
                </div>
            </div>
        </div>
    </section>

    <section id="pillars" class="pillars" role="region" aria-labelledby="pillars-heading">
        <div class="container">
            <div class="section-heading">
                <p class="eyebrow"><?php echo esc_html( get_theme_mod('pillars_eyebrow', 'نقاط قوت تیم WooPilot') ); ?></p>
                <h2 id="pillars-heading"><?php echo esc_html( get_theme_mod('pillars_title', 'آینده تیره، البته شفاف و قابل اعتماد') ); ?></h2>
                <p><?php echo esc_html( get_theme_mod('pillars_description', 'ما هر روز در حال بازآفرینی تجربه مدیریت فروشگاه هستیم تا احساس اعتمادی مشابه با اپل را به برند شما منتقل کند: ساده، دقیق و مستند.') ); ?></p>
            </div>
            <div class="pillars-grid">
                <?php
                $pillars = [
                    ['title' => get_theme_mod('pillar_1_title', 'معماری ابری مقیاس‌پذیر'), 'desc' => get_theme_mod('pillar_1_desc', 'بهره‌گیری از خوشه‌های هوشمندی که حتی تحت فشار اوج فروش هم پایدار می‌مانند.'), 'icon' => 'shield'],
                    ['title' => get_theme_mod('pillar_2_title', 'رابط کاربری مانند اپل'), 'desc' => get_theme_mod('pillar_2_desc', 'حرکت نرم، پس‌زمینه شبنم‌گونه و توجه به جزئیات که اعتماد می‌سازد.'), 'icon' => 'language'],
                    ['title' => get_theme_mod('pillar_3_title', 'هوش تجاری لحظه‌ای'), 'desc' => get_theme_mod('pillar_3_desc', 'بینش‌های دقیق با نوارهای پیشرفت، نگاشت رشد و توصیه‌گرهایی برای بهینه‌سازی.'), 'icon' => 'analytics'],
                ];
                foreach ($pillars as $pillar) : ?>
                    <article class="pillar-card">
                        <div class="feature-icon" aria-hidden="true">
                            <?php
                            $icon_path = get_template_directory() . '/assets/icons/' . $pillar['icon'] . '.svg';
                            if ( file_exists( $icon_path ) ) {
                                echo file_get_contents( $icon_path );
                            } else {
                                echo '<svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><circle cx="12" cy="12" r="10"/></svg>';
                            }
                            ?>
                        </div>
                        <h3><?php echo esc_html($pillar['title']); ?></h3>
                        <p><?php echo esc_html($pillar['desc']); ?></p>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section id="process" class="process" role="region" aria-labelledby="process-heading">
        <div class="container">
            <div class="section-heading">
                <h2 id="process-heading"><?php echo esc_html( get_theme_mod('process_title', 'مسیر اعتماد، در سه مرحله') ); ?></h2>
            </div>
            <ol class="process-list">
                <li>
                    <span class="step">1</span>
                    <div>
                        <h3><?php echo esc_html( get_theme_mod('process_1_title', 'پیکربندی سریع') ); ?></h3>
                        <p><?php echo esc_html( get_theme_mod('process_1_desc', 'یکپارچگی با ووکامرس، درگاه‌های پرداخت و دیجی‌کالا با تنظیمات آماده و راهنمای تعاملی.') ); ?></p>
                    </div>
                </li>
                <li>
                    <span class="step">2</span>
                    <div>
                        <h3><?php echo esc_html( get_theme_mod('process_2_title', 'هوش مصنوعی فعال') ); ?></h3>
                        <p><?php echo esc_html( get_theme_mod('process_2_desc', 'کپی‌سازی محصول، پیشنهادات قیمت‌گذاری و پیام‌های نقطه تماس با نگاه انسانی.') ); ?></p>
                    </div>
                </li>
                <li>
                    <span class="step">3</span>
                    <div>
                        <h3><?php echo esc_html( get_theme_mod('process_3_title', 'نظارت، رشد، تکرار') ); ?></h3>
                        <p><?php echo esc_html( get_theme_mod('process_3_desc', 'داشبوردهای متصل به نوتیفیکیشن، توالی کاربر، و توصیه‌های گام به گام تیم پشتیبان.') ); ?></p>
                    </div>
                </li>
            </ol>
        </div>
    </section>

    <section id="features" class="features" role="region" aria-labelledby="features-heading">
        <div class="container">
            <div class="section-heading">
                <h2 id="features-heading"><?php echo esc_html( get_theme_mod('features_title', 'ابزارهای جدید برای بانوی فروشگاه') ); ?></h2>
                <p><?php echo esc_html( get_theme_mod('features_description', 'تیم ووپایلوت با ترکیب طراحی مینیمال و تجربه‌ای پایدار هر لحظه شما را همراهی می‌کند.') ); ?></p>
            </div>
            <div class="features-grid">
                <?php
                $features = [
                    ['title' => get_theme_mod('feature_1_title', 'کاتالوگ هوشمند'), 'desc' => get_theme_mod('feature_1_desc', 'سفارشی‌سازی خودکار نام کالا، تصاویر، دسته‌بندی و قیمت با الگوریتم‌های تطبیق، برای فروش بیشتر.'), 'icon' => 'robot'],
                    ['title' => get_theme_mod('feature_2_title', 'آزمایش A/B محتوا'), 'desc' => get_theme_mod('feature_2_desc', 'نسخه‌های متفاوت توضیحات و قیمت را به شکل همزمان تست کن؛ بهترین نتیجه به صورت زنده فعال می‌شود.'), 'icon' => 'campaign'],
                    ['title' => get_theme_mod('feature_3_title', 'کارزارهایی با طعم اپل'), 'desc' => get_theme_mod('feature_3_desc', 'قالب‌های ویترین‌گونه، تایمر هوشمند و یادآوری‌های خودکار به مشتریان وفادار.'), 'icon' => 'marketing'],
                    ['title' => get_theme_mod('feature_4_title', 'امنیت لایه‌پیشرفته'), 'desc' => get_theme_mod('feature_4_desc', 'رمزگذاری کلیدهای API، محافظت DDoS و MFA برای اطمینان کامل از داده‌های فروش.'), 'icon' => 'shield'],
                    ['title' => get_theme_mod('feature_5_title', 'پیش‌بینی موجودی'), 'desc' => get_theme_mod('feature_5_desc', 'تحلیل روند مصرف، هشدار لحظه‌ای و پیشنهاد سفارش مجدد خودکار برای تیم عملیاتی.'), 'icon' => 'analytics'],
                    ['title' => get_theme_mod('feature_6_title', 'گزارش‌سازی صوتی'), 'desc' => get_theme_mod('feature_6_desc', 'هوش مصنوعی گزارش فروش را با صدای طبیعی روایت می‌کند تا تصمیم‌گیری آسان شود.'), 'icon' => 'voice'],
                ];
                foreach ($features as $feature) : ?>
                    <article class="feature-card">
                        <div class="feature-icon" aria-hidden="true">
                            <?php
                            $icon_path = get_template_directory() . '/assets/icons/' . $feature['icon'] . '.svg';
                            if ( file_exists( $icon_path ) ) {
                                echo file_get_contents( $icon_path );
                            } else {
                                echo '<svg width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><circle cx="12" cy="12" r="10"/></svg>';
                            }
                            ?>
                        </div>
                        <h3><?php echo esc_html($feature['title']); ?></h3>
                        <p><?php echo esc_html($feature['desc']); ?></p>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section id="testimonials" class="testimonials" role="region" aria-labelledby="testimonials-heading">
        <div class="container">
            <div class="section-heading">
                <p class="eyebrow"><?php echo esc_html( get_theme_mod('testimonials_eyebrow', 'داستان‌های واقعی') ); ?></p>
                <h2 id="testimonials-heading"><?php echo esc_html( get_theme_mod('testimonials_title', 'تیم‌های حرفه‌ای، آرامش ذهنی') ); ?></h2>
            </div>
            <div class="testimonials-carousel" role="list">
                <?php
                $testimonials = [
                    ['quote' => get_theme_mod('testimonial_1_quote', 'با WooPilot ویترین دیجیتال ما رنگی شد؛ تیم پشتیبانی همانند اپل، همواره در دسترس است.'), 'author' => get_theme_mod('testimonial_1_author', 'میلاد صادقی · مدیر تجربه دیجیتال')],
                    ['quote' => get_theme_mod('testimonial_2_quote', 'داده‌ها را با گوشه‌های نرم و سایه‌های ملایم می‌بینیم. اعتماد به سیستم، شرکتی در حد یک دسته کوچک از مهندسین نخبگان است.'), 'author' => get_theme_mod('testimonial_2_author', 'نفیسه رجبی · بنیان‌گذار برند پوشاک')],
                    ['quote' => get_theme_mod('testimonial_3_quote', 'داشتن یک داشبورد تاریک و دقیق باعث شد تیم فروش سریع‌تر تصمیم‌گیری کند؛ حس می‌کنیم کسی پشت صحنه تمام داده‌ها را می‌بیند.'), 'author' => get_theme_mod('testimonial_3_author', 'آرمین کاویانی · COO استارتاپ فناوری')]
                ];
                foreach ($testimonials as $testimonial) : ?>
                    <article class="testimonial-card" role="listitem">
                        <p><?php echo esc_html($testimonial['quote']); ?></p>
                        <cite><?php echo esc_html($testimonial['author']); ?></cite>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section id="cta" class="final-cta" role="region" aria-labelledby="cta-heading">
        <div class="container">
            <div class="cta-content">
                <div>
                    <p class="eyebrow"><?php echo esc_html( get_theme_mod('cta_eyebrow', 'پیوستن به تیم پیشتاز') ); ?></p>
                    <h2 id="cta-heading"><?php echo esc_html( get_theme_mod('cta_title', 'حس تازگی، حس امنیت، حس قدرت') ); ?></h2>
                    <p><?php echo esc_html( get_theme_mod('cta_description', 'راه‌اندازی رایگان در کمتر از ۵ دقیقه؛ تیم پشتیبانی ما در کنار شماست تا هر تصمیمی با اعتماد کامل گرفته شود.') ); ?></p>
                </div>
                <div class="cta-actions">
                    <a href="<?php echo esc_url( get_theme_mod('cta_primary_link', '#') ); ?>" class="btn btn-primary" data-cta="download"><?php echo esc_html( get_theme_mod('cta_primary_text', 'شروع فوری') ); ?></a>
                    <a href="<?php echo esc_url( get_theme_mod('cta_secondary_link', '#') ); ?>" class="btn btn-outline" data-cta="contact"><?php echo esc_html( get_theme_mod('cta_secondary_text', 'گفتگوی سریع با تیم') ); ?></a>
                </div>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>