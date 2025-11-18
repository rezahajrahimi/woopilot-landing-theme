<?php get_header('blog'); ?>

<main id="main-content" class="single-post">
    <div class="container">
        <?php while (have_posts()) : the_post(); ?>
            <article class="post-article">
                <header class="post-header">
                    <?php if (get_the_category_list()) : ?>
                        <div class="post-categories">
                            <?php the_category(' '); ?>
                        </div>
                    <?php endif; ?>

                    <h1 class="post-title"><?php the_title(); ?></h1>

                    <div class="post-meta">
                        <span class="post-date">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <circle cx="12" cy="12" r="10"/>
                                <polyline points="12,6 12,12 16,14"/>
                            </svg>
                            <?php echo get_the_date(); ?>
                        </span>
                        <span class="post-author">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/>
                                <circle cx="12" cy="7" r="4"/>
                            </svg>
                            توسط <?php the_author(); ?>
                        </span>
                        <span class="post-reading-time">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/>
                                <polyline points="14,2 14,8 20,8"/>
                                <line x1="16" y1="13" x2="8" y2="13"/>
                                <line x1="16" y1="17" x2="8" y2="17"/>
                                <polyline points="10,9 9,9 8,9"/>
                            </svg>
                            <?php echo ceil(str_word_count(strip_tags(get_the_content())) / 200); ?> دقیقه مطالعه
                        </span>
                    </div>
                </header>

                <?php if (has_post_thumbnail()) : ?>
                    <div class="post-thumbnail">
                        <?php the_post_thumbnail('large', array('loading' => 'lazy', 'decoding' => 'async', 'sizes' => '(max-width: 800px) 100vw, 800px')); ?>
                    </div>
                <?php endif; ?>

                <div class="post-content">
                    <?php the_content(); ?>
                </div>

                <footer class="post-footer">
                    <?php if (get_the_tags()) : ?>
                        <div class="post-tags">
                            <span>برچسب‌ها:</span>
                            <?php the_tags('', ' ', ''); ?>
                        </div>
                    <?php endif; ?>

                    <div class="post-navigation">
                        <?php
                        $prev_post = get_previous_post();
                        $next_post = get_next_post();
                        ?>

                        <?php if ($prev_post) : ?>
                            <a href="<?php echo get_permalink($prev_post); ?>" class="nav-link prev">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M15 18l-6-6 6-6"/>
                                </svg>
                                <?php echo get_the_title($prev_post); ?>
                            </a>
                        <?php endif; ?>

                        <?php if ($next_post) : ?>
                            <a href="<?php echo get_permalink($next_post); ?>" class="nav-link next">
                                <?php echo get_the_title($next_post); ?>
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M9 18l6-6-6-6"/>
                                </svg>
                            </a>
                        <?php endif; ?>
                    </div>
                </footer>
            </article>

            <?php
            // Comments
            if (comments_open() || get_comments_number()) :
                comments_template();
            endif;
            ?>

        <?php endwhile; ?>
    </div>
</main>

<?php get_footer('blog'); ?>