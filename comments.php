<?php
/**
 * Comments template for WooPilot Landing Theme
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

if (post_password_required()) {
    return;
}
?>

<div id="comments" class="comments-area">
    <?php if (have_comments()) : ?>
        <h3 class="comments-title">
            <?php
            $comments_number = get_comments_number();
            if ($comments_number === 1) {
                printf(__('یک دیدگاه', 'woopilot-landing'));
            } else {
                printf(__('%s دیدگاه', 'woopilot-landing'), number_format_i18n($comments_number));
            }
            ?>
        </h3>

        <ol class="comment-list">
            <?php
            wp_list_comments(array(
                'style'      => 'ol',
                'short_ping' => true,
                'avatar_size' => 40,
                'callback'   => 'woopilot_comment_callback'
            ));
            ?>
        </ol>

        <?php if (get_comment_pages_count() > 1 && get_option('page_comments')) : ?>
            <nav class="comment-navigation">
                <div class="nav-previous"><?php previous_comments_link(__('دیدگاه‌های قدیمی‌تر', 'woopilot-landing')); ?></div>
                <div class="nav-next"><?php next_comments_link(__('دیدگاه‌های جدیدتر', 'woopilot-landing')); ?></div>
            </nav>
        <?php endif; ?>

    <?php endif; ?>

    <?php if (!comments_open() && get_comments_number() && post_type_supports(get_post_type(), 'comments')) : ?>
        <p class="no-comments"><?php _e('دیدگاه‌ها بسته شده‌اند.', 'woopilot-landing'); ?></p>
    <?php endif; ?>

    <?php
    comment_form(array(
        'title_reply'          => __('دیدگاه خود را بنویسید', 'woopilot-landing'),
        'title_reply_to'       => __('پاسخ به %s', 'woopilot-landing'),
        'cancel_reply_link'    => __('لغو پاسخ', 'woopilot-landing'),
        'label_submit'         => __('ارسال دیدگاه', 'woopilot-landing'),
        'comment_field'        => '<p class="comment-form-comment"><label for="comment">' . __('دیدگاه', 'woopilot-landing') . '</label><textarea id="comment" name="comment" cols="45" rows="8" aria-required="true"></textarea></p>',
        'must_log_in'          => '<p class="must-log-in">' . sprintf(__('برای ارسال دیدگاه باید <a href="%s">وارد شوید</a>.', 'woopilot-landing'), wp_login_url(apply_filters('the_permalink', get_permalink()))) . '</p>',
        'logged_in_as'         => '<p class="logged-in-as">' . sprintf(__('وارد شده‌اید به عنوان <a href="%1$s">%2$s</a>. <a href="%3$s" title="خروج از این حساب">خروج؟</a>', 'woopilot-landing'), admin_url('profile.php'), $user_identity, wp_logout_url(apply_filters('the_permalink', get_permalink()))) . '</p>',
        'comment_notes_before' => '<p class="comment-notes">' . __('نشانی ایمیل شما منتشر نخواهد شد. بخش‌های موردنیاز علامت‌گذاری شده‌اند *', 'woopilot-landing') . '</p>',
        'comment_notes_after'  => '',
        'fields' => apply_filters('comment_form_default_fields', array(
            'author' => '<p class="comment-form-author">' . '<label for="author">' . __('نام', 'woopilot-landing') . ' <span class="required">*</span></label> ' . '<input id="author" name="author" type="text" value="' . esc_attr($commenter['comment_author']) . '" size="30" aria-required="true" /></p>',
            'email'  => '<p class="comment-form-email"><label for="email">' . __('ایمیل', 'woopilot-landing') . ' <span class="required">*</span></label> ' . '<input id="email" name="email" name="email" type="text" value="' . esc_attr($commenter['comment_author_email']) . '" size="30" aria-required="true" /></p>',
            'url'    => '<p class="comment-form-url"><label for="url">' . __('وب‌سایت', 'woopilot-landing') . '</label>' . '<input id="url" name="url" name="url" type="text" value="' . esc_attr($commenter['comment_author_url']) . '" size="30" /></p>'
        ))
    ));
    ?>
</div>

<?php
/**
 * Custom comment callback function
 */
function woopilot_comment_callback($comment, $args, $depth) {
    $GLOBALS['comment'] = $comment;
    ?>
    <li <?php comment_class(); ?> id="comment-<?php comment_ID(); ?>">
        <article class="comment-body">
            <footer class="comment-meta">
                <div class="comment-author vcard">
                    <?php echo get_avatar($comment, 40, '', '', array('class' => 'avatar')); ?>
                    <b class="fn"><?php echo get_comment_author_link(); ?></b>
                    <span class="says"><?php _e('گفت:', 'woopilot-landing'); ?></span>
                </div>

                <div class="comment-metadata">
                    <a href="<?php echo esc_url(get_comment_link($comment->comment_ID)); ?>">
                        <time datetime="<?php comment_time('c'); ?>">
                            <?php printf(__('%1$s در %2$s', 'woopilot-landing'), get_comment_date('', $comment), get_comment_time()); ?>
                        </time>
                    </a>
                    <?php edit_comment_link(__('ویرایش', 'woopilot-landing'), '<span class="edit-link">', '</span>'); ?>
                </div>
            </footer>

            <div class="comment-content">
                <?php if ($comment->comment_approved == '0') : ?>
                    <em class="comment-awaiting-moderation"><?php _e('دیدگاه شما در انتظار بررسی است.', 'woopilot-landing'); ?></em>
                <?php endif; ?>
                <?php comment_text(); ?>
            </div>

            <div class="reply">
                <?php comment_reply_link(array_merge($args, array('depth' => $depth, 'max_depth' => $args['max_depth']))); ?>
            </div>
        </article>
    <?php
}