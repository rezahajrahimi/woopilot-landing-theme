<?php
/**
 * Search form template
 */
?>

<form role="search" method="get" class="search-form" action="<?php echo home_url('/'); ?>">
    <label>
        <span class="screen-reader-text"><?php _e('جستجو برای:', 'woopilot-landing'); ?></span>
        <input type="search" class="search-field" placeholder="<?php _e('جستجو...', 'woopilot-landing'); ?>" value="<?php echo get_search_query(); ?>" name="s" />
    </label>
    <input type="submit" class="search-submit" value="<?php _e('جستجو', 'woopilot-landing'); ?>" />
</form>