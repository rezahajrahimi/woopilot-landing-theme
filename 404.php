<?php get_header('blog'); ?>

<main class="error-404">
    <div class="container">
        <div class="error-content">
            <div class="error-code">404</div>
            <h1>صفحه مورد نظر یافت نشد</h1>
            <p>متاسفانه صفحه‌ای که به دنبال آن هستید وجود ندارد یا منتقل شده است.</p>

            <div class="error-actions">
                <a href="<?php echo home_url(); ?>" class="btn btn-primary">
                    بازگشت به صفحه اصلی
                </a>
                <a href="<?php echo home_url('/blog'); ?>" class="btn btn-secondary">
                    مشاهده نوشته‌ها
                </a>
            </div>

            <div class="error-search">
                <h3>جستجو کنید:</h3>
                <?php get_search_form(); ?>
            </div>
        </div>
    </div>
</main>

<?php get_footer('blog'); ?>