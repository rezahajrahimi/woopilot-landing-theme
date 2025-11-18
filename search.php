<?php get_header('blog'); ?>

<main id="main-content" class="blog-main">
    <div class="container">
        <header class="search-header">
            <h1><?php printf(__('نتایج جستجو برای: %s', 'woopilot-landing'), get_search_query()); ?></h1>
            <p><?php
                global $wp_query;
                $total_results = $wp_query->found_posts;
                printf(_n('%d نتیجه یافت شد', '%d نتیجه یافت شد', $total_results, 'woopilot-landing'), $total_results);
            ?></p>
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
                <h2>نتیجه‌ای یافت نشد</h2>
                <p>متاسفانه هیچ نوشته‌ای با عبارت جستجو شده یافت نشد. لطفاً عبارت دیگری را امتحان کنید.</p>

                <div class="search-suggestions">
                    <h3>پیشنهادها:</h3>
                    <ul>
                        <li>کلمات کلیدی را بررسی کنید</li>
                        <li>از کلمات مترادف استفاده کنید</li>
                        <li>جستجوی ساده‌تری انجام دهید</li>
                    </ul>
                </div>

                <div class="search-again">
                    <h3>جستجوی مجدد:</h3>
                    <?php get_search_form(); ?>
                </div>

                <a href="<?php echo home_url(); ?>" class="btn">بازگشت به صفحه اصلی</a>
            </div>
        <?php endif; ?>
    </div>
</main>

<?php get_footer('blog'); ?>