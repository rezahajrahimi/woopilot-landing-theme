<?php get_header('blog'); ?>

<main id="main-content" class="blog-main">
    <div class="container">
        <header class="blog-header">
            <h1><?php echo esc_html( get_theme_mod('blog_title', 'نوشته‌های اخیر') ); ?></h1>
            <p><?php echo esc_html( get_theme_mod('blog_description', 'آخرین اخبار، آموزش‌ها و نکات کاربردی WooPilot') ); ?></p>
        </header>

        <?php if (have_posts()) : ?>
            <div class="posts-grid">
                <?php while (have_posts()) : the_post(); ?>
                    <article class="post-card">
                        <?php if (has_post_thumbnail()) : ?>
                            <div class="post-thumbnail">
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_post_thumbnail('medium_large', array('loading' => 'lazy', 'decoding' => 'async', 'sizes' => '(max-width: 768px) 100vw, 33vw')); ?>
                                </a>
                            </div>
                        <?php endif; ?>

                        <div class="post-content">
                            <header class="post-header">
                                <div class="post-meta">
                                    <span class="post-date"><?php echo get_the_date(); ?></span>
                                    <span class="post-author">توسط <?php the_author(); ?></span>
                                    <?php if (get_the_category_list()) : ?>
                                        <span class="post-categories"><?php the_category(', '); ?></span>
                                    <?php endif; ?>
                                </div>
                                <h2 class="post-title">
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                </h2>
                            </header>

                            <div class="post-excerpt">
                                <?php echo wp_trim_words(get_the_excerpt(), 25); ?>
                            </div>

                            <footer class="post-footer">
                                <a href="<?php the_permalink(); ?>" class="read-more">
                                    ادامه خواندن
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path d="M9 18l6-6-6-6"/>
                                    </svg>
                                </a>
                            </footer>
                        </div>
                    </article>
                <?php endwhile; ?>
            </div>

            <?php the_posts_pagination(array(
                'prev_text' => 'قبلی',
                'next_text' => 'بعدی',
            )); ?>

        <?php else : ?>
            <div class="no-posts">
                <h2>هیچ نوشته‌ای یافت نشد</h2>
                <p>متاسفانه هیچ نوشته‌ای برای نمایش وجود ندارد.</p>
            </div>
        <?php endif; ?>
    </div>
</main>

<?php get_footer('blog'); ?>