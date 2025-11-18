    <footer class="site-footer blog-footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-brand">
                    <h3><?php echo esc_html(get_theme_mod('blog_footer_brand_title', get_bloginfo('name'))); ?></h3>
                    <p><?php echo esc_html(get_theme_mod('blog_footer_brand_description', 'ابزار هوشمند مدیریت فروشگاه‌های ووکامرس با هوش مصنوعی')); ?></p>
                    <?php if (get_theme_mod('blog_show_social_links', true)) : ?>
                    <div class="social-links">
                        <?php if (get_theme_mod('blog_footer_social_telegram')) : ?>
                        <a href="<?php echo esc_url(get_theme_mod('blog_footer_social_telegram')); ?>" aria-label="تلگرام">📱</a>
                        <?php endif; ?>
                        <?php if (get_theme_mod('blog_footer_social_instagram')) : ?>
                        <a href="<?php echo esc_url(get_theme_mod('blog_footer_social_instagram')); ?>" aria-label="اینستاگرام">📸</a>
                        <?php endif; ?>
                        <?php if (get_theme_mod('blog_footer_social_linkedin')) : ?>
                        <a href="<?php echo esc_url(get_theme_mod('blog_footer_social_linkedin')); ?>" aria-label="لینکدین">💼</a>
                        <?php endif; ?>
                    </div>
                    <?php endif; ?>
                </div>

                <?php
                $footer_sections = array(
                    array(
                        'title' => get_theme_mod('blog_footer_section_product_title', 'محصول'),
                        'links' => array(
                            array(
                                'label' => get_theme_mod('blog_footer_product_link_overview_label', 'معرفی محصول'),
                                'url' => get_theme_mod('blog_footer_product_link_overview_url', home_url('/landing')),
                            ),
                            array(
                                'label' => get_theme_mod('blog_footer_product_link_pricing_label', 'قیمت‌گذاری'),
                                'url' => get_theme_mod('blog_footer_product_link_pricing_url', home_url('/landing#pricing')),
                            ),
                            array(
                                'label' => get_theme_mod('blog_footer_product_link_testimonials_label', 'نظرات مشتریان'),
                                'url' => get_theme_mod('blog_footer_product_link_testimonials_url', home_url('/landing#testimonials')),
                            ),
                        ),
                    ),
                    array(
                        'title' => get_theme_mod('blog_footer_section_training_title', 'آموزش'),
                        'links' => array(
                            array(
                                'label' => get_theme_mod('blog_footer_training_link_installation_label', 'آموزش نصب'),
                                'url' => get_theme_mod('blog_footer_training_link_installation_url', get_category_link(get_cat_ID('آموزش'))),
                            ),
                            array(
                                'label' => get_theme_mod('blog_footer_training_link_tips_label', 'نکات کاربردی'),
                                'url' => get_theme_mod('blog_footer_training_link_tips_url', get_category_link(get_cat_ID('نکات'))),
                            ),
                            array(
                                'label' => get_theme_mod('blog_footer_training_link_news_label', 'اخبار'),
                                'url' => get_theme_mod('blog_footer_training_link_news_url', get_category_link(get_cat_ID('اخبار'))),
                            ),
                        ),
                    ),
                    array(
                        'title' => get_theme_mod('blog_footer_section_company_title', 'شرکت'),
                        'links' => array(
                            array(
                                'label' => get_theme_mod('blog_footer_company_link_about_label', 'درباره ما'),
                                'url' => get_theme_mod('blog_footer_company_link_about_url', home_url('/about')),
                            ),
                            array(
                                'label' => get_theme_mod('blog_footer_company_link_contact_label', 'تماس با ما'),
                                'url' => get_theme_mod('blog_footer_company_link_contact_url', home_url('/contact')),
                            ),
                            array(
                                'label' => get_theme_mod('blog_footer_company_link_support_label', 'پشتیبانی'),
                                'url' => get_theme_mod('blog_footer_company_link_support_url', home_url('/support')),
                            ),
                        ),
                    ),
                );
                ?>

                <div class="footer-links">
                    <?php foreach ($footer_sections as $section) : ?>
                        <div class="footer-section">
                            <h4><?php echo esc_html($section['title']); ?></h4>
                            <ul>
                                <?php foreach ($section['links'] as $link) : ?>
                                    <?php if ($link['label']) : ?>
                                    <li><a href="<?php echo esc_url($link['url']); ?>"><?php echo esc_html($link['label']); ?></a></li>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <div class="footer-bottom">
                <p><?php echo esc_html(get_theme_mod('blog_footer_copyright', '&copy; ' . date('Y') . ' ' . get_bloginfo('name') . '. تمامی حقوق محفوظ است.')); ?></p>
                <p><?php echo esc_html(get_theme_mod('blog_footer_tagline', 'طراحی شده با ❤️ برای فروشندگان ووکامرس')); ?></p>
            </div>
        </div>
    </footer>

    <?php wp_footer(); ?>
</body>
</html>