<?php get_header('blog'); ?>

<main class="blog-main">
    <div class="container">
        <header class="archive-header">
            <?php if (is_category()) : ?>
                <h1><?php printf(__('نوشته‌های دسته‌بندی: %s', 'woopilot-landing'), single_cat_title('', false)); ?></h1>
                <?php if (category_description()) : ?>
                    <div class="archive-description"><?php echo category_description(); ?></div>
                <?php endif; ?>

            <?php elseif (is_tag()) : ?>
                <h1><?php printf(__('نوشته‌های برچسب: %s', 'woopilot-landing'), single_tag_title('', false)); ?></h1>
                <?php if (tag_description()) : ?>
                    <div class="archive-description"><?php echo tag_description(); ?></div>
                <?php endif; ?>

            <?php elseif (is_author()) : ?>
                <h1><?php printf(__('نوشته‌های نویسنده: %s', 'woopilot-landing'), get_the_author()); ?></h1>
                <?php if (get_the_author_meta('description')) : ?>
                    <div class="archive-description"><?php echo get_the_author_meta('description'); ?></div>
                <?php endif; ?>

            <?php elseif (is_date()) : ?>
                <h1>
                    <?php
                    if (is_year()) {
                        printf(__('نوشته‌های سال: %s', 'woopilot-landing'), get_the_date('Y'));
                    } elseif (is_month()) {
                        printf(__('نوشته‌های ماه: %s', 'woopilot-landing'), get_the_date('F Y'));
                    } elseif (is_day()) {
                        printf(__('نوشته‌های روز: %s', 'woopilot-landing'), get_the_date('F j, Y'));
                    }
                    ?>
                </h1>

            <?php else : ?>
                <h1><?php _e('آرشیو', 'woopilot-landing'); ?></h1>

            <?php endif; ?>
        </header>

        <?php if (have_posts()) : ?>
            <div class="posts-grid">
                <?php while (have_posts()) : the_post(); ?>
                    <article class="post-card">
                        <?php if (has_post_thumbnail()) : ?>
                            <div class="post-thumbnail">
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_post_thumbnail('medium_large'); ?>
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
                <p>متاسفانه هیچ نوشته‌ای در این آرشیو وجود ندارد.</p>
                <a href="<?php echo home_url(); ?>" class="btn">بازگشت به صفحه اصلی</a>
            </div>
        <?php endif; ?>
    </div>
</main>

<?php get_footer('blog'); ?>