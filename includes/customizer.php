<?php
/**
 * WooPilot Landing Theme Customizer - پنل مدیریت کامل
 *
 * @package WooPilotLanding
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Add theme customizer options
 */
function woopilot_landing_customizer_settings($wp_customize) {
    // Remove default sections we don't need
    $wp_customize->remove_section('static_front_page');
    $wp_customize->remove_section('custom_css');

    // Add theme panel
    $wp_customize->add_panel('woopilot_landing_panel', array(
        'title' => __('🎨 تنظیمات WooPilot', 'woopilot-landing'),
        'description' => __('پنل مدیریت کامل صفحه فرود WooPilot - همه چیز را از اینجا کنترل کنید', 'woopilot-landing'),
        'priority' => 30,
    ));

    // ===== بخش هیرو (Hero Section) =====
    $wp_customize->add_section('woopilot_hero_section', array(
        'title' => __('🚀 بخش هیرو (Hero)', 'woopilot-landing'),
        'panel' => 'woopilot_landing_panel',
        'priority' => 10,
        'description' => __('تنظیمات بخش اصلی صفحه فرود شامل عنوان، متن و لینک‌ها', 'woopilot-landing'),
    ));

    // Hero Title
    $wp_customize->add_setting('hero_title', array(
        'default' => 'WooPilot، دستیار آسمانی برای فروشندگان ووکامرس',
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'postMessage',
    ));
    $wp_customize->add_control('hero_title', array(
        'label' => __('📝 عنوان اصلی هیرو', 'woopilot-landing'),
        'section' => 'woopilot_hero_section',
        'type' => 'text',
        'description' => __('عنوان بزرگ و جذاب بخش هیرو', 'woopilot-landing'),
    ));

    // Hero Subtitle
    $wp_customize->add_setting('hero_subtitle', array(
        'default' => 'یک تجربه کاملاً پویای تیره‌رنگ، طراحی‌شده برای تیم‌هایی که به نوآوری اعتقاد دارند و به قدرت هوش مصنوعی برای رشد پایدار اعتماد دارند.',
        'sanitize_callback' => 'sanitize_textarea_field',
        'transport' => 'postMessage',
    ));
    $wp_customize->add_control('hero_subtitle', array(
        'label' => __('📖 زیرعنوان هیرو', 'woopilot-landing'),
        'section' => 'woopilot_hero_section',
        'type' => 'textarea',
        'description' => __('توضیحات جذاب زیر عنوان اصلی', 'woopilot-landing'),
    ));

    // Hero Links
    $wp_customize->add_setting('download_link', array(
        'default' => '#',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control('download_link', array(
        'label' => __('📱 لینک دانلود از Cafe Bazaar', 'woopilot-landing'),
        'section' => 'woopilot_hero_section',
        'type' => 'url',
        'description' => __('لینک دانلود اپلیکیشن از مارکت کافه بازار', 'woopilot-landing'),
    ));

    $wp_customize->add_setting('login_link', array(
        'default' => '#',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control('login_link', array(
        'label' => __('🔐 لینک ورود به پنل هوشمند', 'woopilot-landing'),
        'section' => 'woopilot_hero_section',
        'type' => 'url',
        'description' => __('لینک ورود به داشبورد مدیریت', 'woopilot-landing'),
    ));

    // Hero Metrics
    $wp_customize->add_setting('metric_1_number', array(
        'default' => '12',
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'postMessage',
    ));
    $wp_customize->add_control('metric_1_number', array(
        'label' => __('📊 متریک ۱ - عدد', 'woopilot-landing'),
        'section' => 'woopilot_hero_section',
        'type' => 'text',
        'description' => __('عدد اولین آمار (مثال: 12)', 'woopilot-landing'),
    ));

    $wp_customize->add_setting('metric_1_label', array(
        'default' => 'پایگاه تجاری همزمان',
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'postMessage',
    ));
    $wp_customize->add_control('metric_1_label', array(
        'label' => __('📊 متریک ۱ - برچسب', 'woopilot-landing'),
        'section' => 'woopilot_hero_section',
        'type' => 'text',
        'description' => __('توضیح اولین آمار', 'woopilot-landing'),
    ));

    $wp_customize->add_setting('metric_2_number', array(
        'default' => '55%',
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'postMessage',
    ));
    $wp_customize->add_control('metric_2_number', array(
        'label' => __('📈 متریک ۲ - عدد', 'woopilot-landing'),
        'section' => 'woopilot_hero_section',
        'type' => 'text',
        'description' => __('عدد دومین آمار (مثال: 55%)', 'woopilot-landing'),
    ));

    $wp_customize->add_setting('metric_2_label', array(
        'default' => 'افزایش میانگین تبدیل',
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'postMessage',
    ));
    $wp_customize->add_control('metric_2_label', array(
        'label' => __('📈 متریک ۲ - برچسب', 'woopilot-landing'),
        'section' => 'woopilot_hero_section',
        'type' => 'text',
        'description' => __('توضیح دومین آمار', 'woopilot-landing'),
    ));

    $wp_customize->add_setting('metric_3_number', array(
        'default' => '24/7',
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'postMessage',
    ));
    $wp_customize->add_control('metric_3_number', array(
        'label' => __('⏰ متریک ۳ - عدد', 'woopilot-landing'),
        'section' => 'woopilot_hero_section',
        'type' => 'text',
        'description' => __('عدد سومین آمار (مثال: 24/7)', 'woopilot-landing'),
    ));

    $wp_customize->add_setting('metric_3_label', array(
        'default' => 'پشتیبانی فارسی + انگلیسی',
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'postMessage',
    ));
    $wp_customize->add_control('metric_3_label', array(
        'label' => __('⏰ متریک ۳ - برچسب', 'woopilot-landing'),
        'section' => 'woopilot_hero_section',
        'type' => 'text',
        'description' => __('توضیح سومین آمار', 'woopilot-landing'),
    ));

    // Hero Trust Text
    $wp_customize->add_setting('hero_trust_text', array(
        'default' => 'بازاریاب‌های حرفه‌ای، تیم تحلیل و معماری ابری مدرن',
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'postMessage',
    ));
    $wp_customize->add_control('hero_trust_text', array(
        'label' => __('✨ متن اعتماد و اعتبار', 'woopilot-landing'),
        'section' => 'woopilot_hero_section',
        'type' => 'text',
        'description' => __('متن کوتاه درباره تیم و تخصص شما', 'woopilot-landing'),
    ));

    // ===== بخش نقاط قوت (Pillars) =====
    $wp_customize->add_section('woopilot_pillars_section', array(
        'title' => __('💪 بخش نقاط قوت (Pillars)', 'woopilot-landing'),
        'panel' => 'woopilot_landing_panel',
        'priority' => 20,
        'description' => __('سه ستون اصلی مزایای محصول شما', 'woopilot-landing'),
    ));

    $wp_customize->add_setting('pillars_eyebrow', array(
        'default' => 'نقاط قوت تیم WooPilot',
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'postMessage',
    ));
    $wp_customize->add_control('pillars_eyebrow', array(
        'label' => __('🏷️ عنوان کوچک بخش', 'woopilot-landing'),
        'section' => 'woopilot_pillars_section',
        'type' => 'text',
        'description' => __('عنوان کوتاه بالای عنوان اصلی', 'woopilot-landing'),
    ));

    $wp_customize->add_setting('pillars_title', array(
        'default' => 'آینده تیره، البته شفاف و قابل اعتماد',
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'postMessage',
    ));
    $wp_customize->add_control('pillars_title', array(
        'label' => __('🎯 عنوان اصلی بخش', 'woopilot-landing'),
        'section' => 'woopilot_pillars_section',
        'type' => 'text',
        'description' => __('عنوان جذاب بخش نقاط قوت', 'woopilot-landing'),
    ));

    $wp_customize->add_setting('pillars_description', array(
        'default' => 'ما هر روز در حال بازآفرینی تجربه مدیریت فروشگاه هستیم تا احساس اعتمادی مشابه با اپل را به برند شما منتقل کند: ساده، دقیق و مستند.',
        'sanitize_callback' => 'sanitize_textarea_field',
        'transport' => 'postMessage',
    ));
    $wp_customize->add_control('pillars_description', array(
        'label' => __('📝 توضیحات بخش', 'woopilot-landing'),
        'section' => 'woopilot_pillars_section',
        'type' => 'textarea',
        'description' => __('توضیحات کامل درباره نقاط قوت شما', 'woopilot-landing'),
    ));

    // Pillar 1
    $wp_customize->add_setting('pillar_1_title', array(
        'default' => 'معماری ابری مقیاس‌پذیر',
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'postMessage',
    ));
    $wp_customize->add_control('pillar_1_title', array(
        'label' => __('🔧 ستون ۱ - عنوان', 'woopilot-landing'),
        'section' => 'woopilot_pillars_section',
        'type' => 'text',
        'description' => __('عنوان اولین نقطه قوت', 'woopilot-landing'),
    ));

    $wp_customize->add_setting('pillar_1_desc', array(
        'default' => 'بهره‌گیری از خوشه‌های هوشمندی که حتی تحت فشار اوج فروش هم پایدار می‌مانند.',
        'sanitize_callback' => 'sanitize_textarea_field',
        'transport' => 'postMessage',
    ));
    $wp_customize->add_control('pillar_1_desc', array(
        'label' => __('🔧 ستون ۱ - توضیحات', 'woopilot-landing'),
        'section' => 'woopilot_pillars_section',
        'type' => 'textarea',
        'description' => __('توضیحات اولین نقطه قوت', 'woopilot-landing'),
    ));

    // Pillar 2
    $wp_customize->add_setting('pillar_2_title', array(
        'default' => 'رابط کاربری مانند اپل',
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'postMessage',
    ));
    $wp_customize->add_control('pillar_2_title', array(
        'label' => __('🎨 ستون ۲ - عنوان', 'woopilot-landing'),
        'section' => 'woopilot_pillars_section',
        'type' => 'text',
        'description' => __('عنوان دومین نقطه قوت', 'woopilot-landing'),
    ));

    $wp_customize->add_setting('pillar_2_desc', array(
        'default' => 'حرکت نرم، پس‌زمینه شبنم‌گونه و توجه به جزئیات که اعتماد می‌سازد.',
        'sanitize_callback' => 'sanitize_textarea_field',
        'transport' => 'postMessage',
    ));
    $wp_customize->add_control('pillar_2_desc', array(
        'label' => __('🎨 ستون ۲ - توضیحات', 'woopilot-landing'),
        'section' => 'woopilot_pillars_section',
        'type' => 'textarea',
        'description' => __('توضیحات دومین نقطه قوت', 'woopilot-landing'),
    ));

    // Pillar 3
    $wp_customize->add_setting('pillar_3_title', array(
        'default' => 'هوش تجاری لحظه‌ای',
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'postMessage',
    ));
    $wp_customize->add_control('pillar_3_title', array(
        'label' => __('🧠 ستون ۳ - عنوان', 'woopilot-landing'),
        'section' => 'woopilot_pillars_section',
        'type' => 'text',
        'description' => __('عنوان سومین نقطه قوت', 'woopilot-landing'),
    ));

    $wp_customize->add_setting('pillar_3_desc', array(
        'default' => 'بینش‌های دقیق با نوارهای پیشرفت، نگاشت رشد و توصیه‌گرهایی برای بهینه‌سازی.',
        'sanitize_callback' => 'sanitize_textarea_field',
        'transport' => 'postMessage',
    ));
    $wp_customize->add_control('pillar_3_desc', array(
        'label' => __('🧠 ستون ۳ - توضیحات', 'woopilot-landing'),
        'section' => 'woopilot_pillars_section',
        'type' => 'textarea',
        'description' => __('توضیحات سومین نقطه قوت', 'woopilot-landing'),
    ));

    // ===== بخش مسیر (Process) =====
    $wp_customize->add_section('woopilot_process_section', array(
        'title' => __('🛣️ بخش مسیر (Process)', 'woopilot-landing'),
        'panel' => 'woopilot_landing_panel',
        'priority' => 30,
        'description' => __('مراحل استفاده از محصول شما', 'woopilot-landing'),
    ));

    $wp_customize->add_setting('process_title', array(
        'default' => 'مسیر اعتماد، در سه مرحله',
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'postMessage',
    ));
    $wp_customize->add_control('process_title', array(
        'label' => __('🎯 عنوان بخش مسیر', 'woopilot-landing'),
        'section' => 'woopilot_process_section',
        'type' => 'text',
        'description' => __('عنوان جذاب بخش مراحل', 'woopilot-landing'),
    ));

    // Process Step 1
    $wp_customize->add_setting('process_1_title', array(
        'default' => 'پیکربندی سریع',
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'postMessage',
    ));
    $wp_customize->add_control('process_1_title', array(
        'label' => __('1️⃣ مرحله ۱ - عنوان', 'woopilot-landing'),
        'section' => 'woopilot_process_section',
        'type' => 'text',
        'description' => __('عنوان اولین مرحله', 'woopilot-landing'),
    ));

    $wp_customize->add_setting('process_1_desc', array(
        'default' => 'یکپارچگی با ووکامرس، درگاه‌های پرداخت و دیجی‌کالا با تنظیمات آماده و راهنمای تعاملی.',
        'sanitize_callback' => 'sanitize_textarea_field',
        'transport' => 'postMessage',
    ));
    $wp_customize->add_control('process_1_desc', array(
        'label' => __('1️⃣ مرحله ۱ - توضیحات', 'woopilot-landing'),
        'section' => 'woopilot_process_section',
        'type' => 'textarea',
        'description' => __('توضیحات اولین مرحله', 'woopilot-landing'),
    ));

    // Process Step 2
    $wp_customize->add_setting('process_2_title', array(
        'default' => 'هوش مصنوعی فعال',
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'postMessage',
    ));
    $wp_customize->add_control('process_2_title', array(
        'label' => __('2️⃣ مرحله ۲ - عنوان', 'woopilot-landing'),
        'section' => 'woopilot_process_section',
        'type' => 'text',
        'description' => __('عنوان دومین مرحله', 'woopilot-landing'),
    ));

    $wp_customize->add_setting('process_2_desc', array(
        'default' => 'کپی‌سازی محصول، پیشنهادات قیمت‌گذاری و پیام‌های نقطه تماس با نگاه انسانی.',
        'sanitize_callback' => 'sanitize_textarea_field',
        'transport' => 'postMessage',
    ));
    $wp_customize->add_control('process_2_desc', array(
        'label' => __('2️⃣ مرحله ۲ - توضیحات', 'woopilot-landing'),
        'section' => 'woopilot_process_section',
        'type' => 'textarea',
        'description' => __('توضیحات دومین مرحله', 'woopilot-landing'),
    ));

    // Process Step 3
    $wp_customize->add_setting('process_3_title', array(
        'default' => 'نظارت، رشد، تکرار',
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'postMessage',
    ));
    $wp_customize->add_control('process_3_title', array(
        'label' => __('3️⃣ مرحله ۳ - عنوان', 'woopilot-landing'),
        'section' => 'woopilot_process_section',
        'type' => 'text',
        'description' => __('عنوان سومین مرحله', 'woopilot-landing'),
    ));

    $wp_customize->add_setting('process_3_desc', array(
        'default' => 'داشبوردهای متصل به نوتیفیکیشن، توالی کاربر، و توصیه‌های گام به گام تیم پشتیبان.',
        'sanitize_callback' => 'sanitize_textarea_field',
        'transport' => 'postMessage',
    ));
    $wp_customize->add_control('process_3_desc', array(
        'label' => __('3️⃣ مرحله ۳ - توضیحات', 'woopilot-landing'),
        'section' => 'woopilot_process_section',
        'type' => 'textarea',
        'description' => __('توضیحات سومین مرحله', 'woopilot-landing'),
    ));

    // ===== بخش ابزارها (Features) =====
    $wp_customize->add_section('woopilot_features_section', array(
        'title' => __('🛠️ بخش ابزارها (Features)', 'woopilot-landing'),
        'panel' => 'woopilot_landing_panel',
        'priority' => 40,
        'description' => __('ابزارها و قابلیت‌های محصول شما', 'woopilot-landing'),
    ));

    $wp_customize->add_setting('features_title', array(
        'default' => 'ابزارهای جدید برای بانوی فروشگاه',
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'postMessage',
    ));
    $wp_customize->add_control('features_title', array(
        'label' => __('🎯 عنوان بخش ابزارها', 'woopilot-landing'),
        'section' => 'woopilot_features_section',
        'type' => 'text',
        'description' => __('عنوان جذاب بخش قابلیت‌ها', 'woopilot-landing'),
    ));

    $wp_customize->add_setting('features_description', array(
        'default' => 'تیم ووپایلوت با ترکیب طراحی مینیمال و تجربه‌ای پایدار هر لحظه شما را همراهی می‌کند.',
        'sanitize_callback' => 'sanitize_textarea_field',
        'transport' => 'postMessage',
    ));
    $wp_customize->add_control('features_description', array(
        'label' => __('📝 توضیحات بخش ابزارها', 'woopilot-landing'),
        'section' => 'woopilot_features_section',
        'type' => 'textarea',
        'description' => __('توضیحات کلی درباره ابزارهای شما', 'woopilot-landing'),
    ));

    // Feature 1
    $wp_customize->add_setting('feature_1_title', array(
        'default' => 'کاتالوگ هوشمند',
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'postMessage',
    ));
    $wp_customize->add_control('feature_1_title', array(
        'label' => __('🤖 ابزار ۱ - عنوان', 'woopilot-landing'),
        'section' => 'woopilot_features_section',
        'type' => 'text',
        'description' => __('عنوان اولین ابزار', 'woopilot-landing'),
    ));

    $wp_customize->add_setting('feature_1_desc', array(
        'default' => 'سفارشی‌سازی خودکار نام کالا، تصاویر، دسته‌بندی و قیمت با الگوریتم‌های تطبیق، برای فروش بیشتر.',
        'sanitize_callback' => 'sanitize_textarea_field',
        'transport' => 'postMessage',
    ));
    $wp_customize->add_control('feature_1_desc', array(
        'label' => __('🤖 ابزار ۱ - توضیحات', 'woopilot-landing'),
        'section' => 'woopilot_features_section',
        'type' => 'textarea',
        'description' => __('توضیحات اولین ابزار', 'woopilot-landing'),
    ));

    // Feature 2
    $wp_customize->add_setting('feature_2_title', array(
        'default' => 'آزمایش A/B محتوا',
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'postMessage',
    ));
    $wp_customize->add_control('feature_2_title', array(
        'label' => __('🧪 ابزار ۲ - عنوان', 'woopilot-landing'),
        'section' => 'woopilot_features_section',
        'type' => 'text',
        'description' => __('عنوان دومین ابزار', 'woopilot-landing'),
    ));

    $wp_customize->add_setting('feature_2_desc', array(
        'default' => 'نسخه‌های متفاوت توضیحات و قیمت را به شکل همزمان تست کن؛ بهترین نتیجه به صورت زنده فعال می‌شود.',
        'sanitize_callback' => 'sanitize_textarea_field',
        'transport' => 'postMessage',
    ));
    $wp_customize->add_control('feature_2_desc', array(
        'label' => __('🧪 ابزار ۲ - توضیحات', 'woopilot-landing'),
        'section' => 'woopilot_features_section',
        'type' => 'textarea',
        'description' => __('توضیحات دومین ابزار', 'woopilot-landing'),
    ));

    // Feature 3
    $wp_customize->add_setting('feature_3_title', array(
        'default' => 'کارزارهایی با طعم اپل',
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'postMessage',
    ));
    $wp_customize->add_control('feature_3_title', array(
        'label' => __('📢 ابزار ۳ - عنوان', 'woopilot-landing'),
        'section' => 'woopilot_features_section',
        'type' => 'text',
        'description' => __('عنوان سومین ابزار', 'woopilot-landing'),
    ));

    $wp_customize->add_setting('feature_3_desc', array(
        'default' => 'قالب‌های ویترین‌گونه، تایمر هوشمند و یادآوری‌های خودکار به مشتریان وفادار.',
        'sanitize_callback' => 'sanitize_textarea_field',
        'transport' => 'postMessage',
    ));
    $wp_customize->add_control('feature_3_desc', array(
        'label' => __('📢 ابزار ۳ - توضیحات', 'woopilot-landing'),
        'section' => 'woopilot_features_section',
        'type' => 'textarea',
        'description' => __('توضیحات سومین ابزار', 'woopilot-landing'),
    ));

    // Feature 4
    $wp_customize->add_setting('feature_4_title', array(
        'default' => 'امنیت لایه‌پیشرفته',
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'postMessage',
    ));
    $wp_customize->add_control('feature_4_title', array(
        'label' => __('🔒 ابزار ۴ - عنوان', 'woopilot-landing'),
        'section' => 'woopilot_features_section',
        'type' => 'text',
        'description' => __('عنوان چهارمین ابزار', 'woopilot-landing'),
    ));

    $wp_customize->add_setting('feature_4_desc', array(
        'default' => 'رمزگذاری کلیدهای API، محافظت DDoS و MFA برای اطمینان کامل از داده‌های فروش.',
        'sanitize_callback' => 'sanitize_textarea_field',
        'transport' => 'postMessage',
    ));
    $wp_customize->add_control('feature_4_desc', array(
        'label' => __('🔒 ابزار ۴ - توضیحات', 'woopilot-landing'),
        'section' => 'woopilot_features_section',
        'type' => 'textarea',
        'description' => __('توضیحات چهارمین ابزار', 'woopilot-landing'),
    ));

    // Feature 5
    $wp_customize->add_setting('feature_5_title', array(
        'default' => 'پیش‌بینی موجودی',
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'postMessage',
    ));
    $wp_customize->add_control('feature_5_title', array(
        'label' => __('📊 ابزار ۵ - عنوان', 'woopilot-landing'),
        'section' => 'woopilot_features_section',
        'type' => 'text',
        'description' => __('عنوان پنجمین ابزار', 'woopilot-landing'),
    ));

    $wp_customize->add_setting('feature_5_desc', array(
        'default' => 'تحلیل روند مصرف، هشدار لحظه‌ای و پیشنهاد سفارش مجدد خودکار برای تیم عملیاتی.',
        'sanitize_callback' => 'sanitize_textarea_field',
        'transport' => 'postMessage',
    ));
    $wp_customize->add_control('feature_5_desc', array(
        'label' => __('📊 ابزار ۵ - توضیحات', 'woopilot-landing'),
        'section' => 'woopilot_features_section',
        'type' => 'textarea',
        'description' => __('توضیحات پنجمین ابزار', 'woopilot-landing'),
    ));

    // Feature 6
    $wp_customize->add_setting('feature_6_title', array(
        'default' => 'گزارش‌سازی صوتی',
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'postMessage',
    ));
    $wp_customize->add_control('feature_6_title', array(
        'label' => __('🔊 ابزار ۶ - عنوان', 'woopilot-landing'),
        'section' => 'woopilot_features_section',
        'type' => 'text',
        'description' => __('عنوان ششمین ابزار', 'woopilot-landing'),
    ));

    $wp_customize->add_setting('feature_6_desc', array(
        'default' => 'هوش مصنوعی گزارش فروش را با صدای طبیعی روایت می‌کند تا تصمیم‌گیری آسان شود.',
        'sanitize_callback' => 'sanitize_textarea_field',
        'transport' => 'postMessage',
    ));
    $wp_customize->add_control('feature_6_desc', array(
        'label' => __('🔊 ابزار ۶ - توضیحات', 'woopilot-landing'),
        'section' => 'woopilot_features_section',
        'type' => 'textarea',
        'description' => __('توضیحات ششمین ابزار', 'woopilot-landing'),
    ));

    // ===== بخش نظرات (Testimonials) =====
    $wp_customize->add_section('woopilot_testimonials_section', array(
        'title' => __('💬 بخش نظرات (Testimonials)', 'woopilot-landing'),
        'panel' => 'woopilot_landing_panel',
        'priority' => 50,
        'description' => __('نظرات و تجربیات مشتریان شما', 'woopilot-landing'),
    ));

    $wp_customize->add_setting('testimonials_eyebrow', array(
        'default' => 'داستان‌های واقعی',
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'postMessage',
    ));
    $wp_customize->add_control('testimonials_eyebrow', array(
        'label' => __('🏷️ عنوان کوچک بخش نظرات', 'woopilot-landing'),
        'section' => 'woopilot_testimonials_section',
        'type' => 'text',
        'description' => __('عنوان کوتاه بالای عنوان اصلی', 'woopilot-landing'),
    ));

    $wp_customize->add_setting('testimonials_title', array(
        'default' => 'تیم‌های حرفه‌ای، آرامش ذهنی',
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'postMessage',
    ));
    $wp_customize->add_control('testimonials_title', array(
        'label' => __('🎯 عنوان اصلی بخش نظرات', 'woopilot-landing'),
        'section' => 'woopilot_testimonials_section',
        'type' => 'text',
        'description' => __('عنوان جذاب بخش نظرات مشتریان', 'woopilot-landing'),
    ));

    // Testimonial 1
    $wp_customize->add_setting('testimonial_1_quote', array(
        'default' => 'با WooPilot ویترین دیجیتال ما رنگی شد؛ تیم پشتیبانی همانند اپل، همواره در دسترس است.',
        'sanitize_callback' => 'sanitize_textarea_field',
        'transport' => 'postMessage',
    ));
    $wp_customize->add_control('testimonial_1_quote', array(
        'label' => __('💬 نظر ۱ - متن', 'woopilot-landing'),
        'section' => 'woopilot_testimonials_section',
        'type' => 'textarea',
        'description' => __('متن اولین نظر مشتری', 'woopilot-landing'),
    ));

    $wp_customize->add_setting('testimonial_1_author', array(
        'default' => 'میلاد صادقی · مدیر تجربه دیجیتال',
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'postMessage',
    ));
    $wp_customize->add_control('testimonial_1_author', array(
        'label' => __('👤 نظر ۱ - نویسنده', 'woopilot-landing'),
        'section' => 'woopilot_testimonials_section',
        'type' => 'text',
        'description' => __('نام و عنوان اولین مشتری', 'woopilot-landing'),
    ));

    // Testimonial 2
    $wp_customize->add_setting('testimonial_2_quote', array(
        'default' => 'داده‌ها را با گوشه‌های نرم و سایه‌های ملایم می‌بینیم. اعتماد به سیستم، شرکتی در حد یک دسته کوچک از مهندسین نخبگان است.',
        'sanitize_callback' => 'sanitize_textarea_field',
        'transport' => 'postMessage',
    ));
    $wp_customize->add_control('testimonial_2_quote', array(
        'label' => __('💬 نظر ۲ - متن', 'woopilot-landing'),
        'section' => 'woopilot_testimonials_section',
        'type' => 'textarea',
        'description' => __('متن دومین نظر مشتری', 'woopilot-landing'),
    ));

    $wp_customize->add_setting('testimonial_2_author', array(
        'default' => 'نفیسه رجبی · بنیان‌گذار برند پوشاک',
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'postMessage',
    ));
    $wp_customize->add_control('testimonial_2_author', array(
        'label' => __('👤 نظر ۲ - نویسنده', 'woopilot-landing'),
        'section' => 'woopilot_testimonials_section',
        'type' => 'text',
        'description' => __('نام و عنوان دومین مشتری', 'woopilot-landing'),
    ));

    // Testimonial 3
    $wp_customize->add_setting('testimonial_3_quote', array(
        'default' => 'داشتن یک داشبورد تاریک و دقیق باعث شد تیم فروش سریع‌تر تصمیم‌گیری کند؛ حس می‌کنیم کسی پشت صحنه تمام داده‌ها را می‌بیند.',
        'sanitize_callback' => 'sanitize_textarea_field',
        'transport' => 'postMessage',
    ));
    $wp_customize->add_control('testimonial_3_quote', array(
        'label' => __('💬 نظر ۳ - متن', 'woopilot-landing'),
        'section' => 'woopilot_testimonials_section',
        'type' => 'textarea',
        'description' => __('متن سومین نظر مشتری', 'woopilot-landing'),
    ));

    $wp_customize->add_setting('testimonial_3_author', array(
        'default' => 'آرمین کاویانی · COO استارتاپ فناوری',
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'postMessage',
    ));
    $wp_customize->add_control('testimonial_3_author', array(
        'label' => __('👤 نظر ۳ - نویسنده', 'woopilot-landing'),
        'section' => 'woopilot_testimonials_section',
        'type' => 'text',
        'description' => __('نام و عنوان سومین مشتری', 'woopilot-landing'),
    ));

    // ===== بخش فراخوان اقدام (CTA) =====
    $wp_customize->add_section('woopilot_cta_section', array(
        'title' => __('🎯 بخش فراخوان اقدام (CTA)', 'woopilot-landing'),
        'panel' => 'woopilot_landing_panel',
        'priority' => 60,
        'description' => __('بخش پایانی برای دعوت به اقدام', 'woopilot-landing'),
    ));

    $wp_customize->add_setting('cta_eyebrow', array(
        'default' => 'پیوستن به تیم پیشتاز',
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'postMessage',
    ));
    $wp_customize->add_control('cta_eyebrow', array(
        'label' => __('🏷️ عنوان کوچک بخش CTA', 'woopilot-landing'),
        'section' => 'woopilot_cta_section',
        'type' => 'text',
        'description' => __('عنوان کوتاه بالای عنوان اصلی', 'woopilot-landing'),
    ));

    $wp_customize->add_setting('cta_title', array(
        'default' => 'حس تازگی، حس امنیت، حس قدرت',
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'postMessage',
    ));
    $wp_customize->add_control('cta_title', array(
        'label' => __('🎯 عنوان اصلی بخش CTA', 'woopilot-landing'),
        'section' => 'woopilot_cta_section',
        'type' => 'text',
        'description' => __('عنوان جذاب بخش پایانی', 'woopilot-landing'),
    ));

    $wp_customize->add_setting('cta_description', array(
        'default' => 'راه‌اندازی رایگان در کمتر از ۵ دقیقه؛ تیم پشتیبانی ما در کنار شماست تا هر تصمیمی با اعتماد کامل گرفته شود.',
        'sanitize_callback' => 'sanitize_textarea_field',
        'transport' => 'postMessage',
    ));
    $wp_customize->add_control('cta_description', array(
        'label' => __('📝 توضیحات بخش CTA', 'woopilot-landing'),
        'section' => 'woopilot_cta_section',
        'type' => 'textarea',
        'description' => __('توضیحات نهایی برای ترغیب کاربران', 'woopilot-landing'),
    ));

    $wp_customize->add_setting('cta_primary_text', array(
        'default' => 'شروع فوری',
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'postMessage',
    ));
    $wp_customize->add_control('cta_primary_text', array(
        'label' => __('🔥 متن دکمه اصلی CTA', 'woopilot-landing'),
        'section' => 'woopilot_cta_section',
        'type' => 'text',
        'description' => __('متن دکمه اصلی (شروع رایگان و غیره)', 'woopilot-landing'),
    ));

    $wp_customize->add_setting('cta_primary_link', array(
        'default' => '#',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control('cta_primary_link', array(
        'label' => __('🔗 لینک دکمه اصلی CTA', 'woopilot-landing'),
        'section' => 'woopilot_cta_section',
        'type' => 'url',
        'description' => __('لینک دکمه اصلی (دانلود، ثبت‌نام و غیره)', 'woopilot-landing'),
    ));

    $wp_customize->add_setting('cta_secondary_text', array(
        'default' => 'گفتگوی سریع با تیم',
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'postMessage',
    ));
    $wp_customize->add_control('cta_secondary_text', array(
        'label' => __('💬 متن دکمه ثانویه CTA', 'woopilot-landing'),
        'section' => 'woopilot_cta_section',
        'type' => 'text',
        'description' => __('متن دکمه ثانویه (تماس، پشتیبانی و غیره)', 'woopilot-landing'),
    ));

    $wp_customize->add_setting('cta_secondary_link', array(
        'default' => '#',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control('cta_secondary_link', array(
        'label' => __('🔗 لینک دکمه ثانویه CTA', 'woopilot-landing'),
        'section' => 'woopilot_cta_section',
        'type' => 'url',
        'description' => __('لینک دکمه ثانویه (تماس، پشتیبانی و غیره)', 'woopilot-landing'),
    ));

    // ===== تنظیمات بلاگ =====
    $wp_customize->add_section('woopilot_blog_section', array(
        'title' => __('📝 تنظیمات بلاگ', 'woopilot-landing'),
        'panel' => 'woopilot_landing_panel',
        'priority' => 75,
        'description' => __('تنظیمات صفحه بلاگ و نوشته‌ها', 'woopilot-landing'),
    ));

    $wp_customize->add_setting('blog_title', array(
        'default' => 'نوشته‌های اخیر',
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'postMessage',
    ));
    $wp_customize->add_control('blog_title', array(
        'label' => __('📖 عنوان صفحه بلاگ', 'woopilot-landing'),
        'section' => 'woopilot_blog_section',
        'type' => 'text',
        'description' => __('عنوان اصلی صفحه لیست نوشته‌ها', 'woopilot-landing'),
    ));

    $wp_customize->add_setting('blog_description', array(
        'default' => 'آخرین اخبار، آموزش‌ها و نکات کاربردی WooPilot',
        'sanitize_callback' => 'sanitize_textarea_field',
        'transport' => 'postMessage',
    ));
    $wp_customize->add_control('blog_description', array(
        'label' => __('📝 توضیحات صفحه بلاگ', 'woopilot-landing'),
        'section' => 'woopilot_blog_section',
        'type' => 'textarea',
        'description' => __('توضیحات زیر عنوان صفحه بلاگ', 'woopilot-landing'),
    ));

    // ===== تنظیمات هدر بلاگ =====
    $wp_customize->add_section('woopilot_blog_header_section', array(
        'title' => __('📋 تنظیمات هدر بلاگ', 'woopilot-landing'),
        'panel' => 'woopilot_landing_panel',
        'priority' => 76,
        'description' => __('تنظیمات هدر صفحات پست‌ها و بلاگ', 'woopilot-landing'),
    ));

    $wp_customize->add_setting('blog_brand_name', array(
        'default' => 'WooPilot',
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'postMessage',
    ));
    $wp_customize->add_control('blog_brand_name', array(
        'label' => __('🏷️ نام برند در هدر', 'woopilot-landing'),
        'section' => 'woopilot_blog_header_section',
        'type' => 'text',
        'description' => __('نام برند که در هدر نمایش داده می‌شود', 'woopilot-landing'),
    ));

    $wp_customize->add_setting('blog_brand_tagline', array(
        'default' => 'وبلاگ WooPilot - آموزش، نکات و اخبار',
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'postMessage',
    ));
    $wp_customize->add_control('blog_brand_tagline', array(
        'label' => __('📝 شعار برند در هدر', 'woopilot-landing'),
        'section' => 'woopilot_blog_header_section',
        'type' => 'text',
        'description' => __('شعار کوتاه زیر نام برند', 'woopilot-landing'),
    ));

    $wp_customize->add_setting('blog_show_search', array(
        'default' => true,
        'sanitize_callback' => 'wp_validate_boolean',
        'transport' => 'postMessage',
    ));
    $wp_customize->add_control('blog_show_search', array(
        'label' => __('🔍 نمایش جستجو در هدر', 'woopilot-landing'),
        'section' => 'woopilot_blog_header_section',
        'type' => 'checkbox',
        'description' => __('فعال/غیرفعال کردن جستجو در هدر', 'woopilot-landing'),
    ));

    $wp_customize->add_setting('blog_header_bg_color', array(
        'default' => '#ffffff',
        'sanitize_callback' => 'sanitize_hex_color',
        'transport' => 'postMessage',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'blog_header_bg_color', array(
        'label' => __('🎨 رنگ پس‌زمینه هدر بلاگ', 'woopilot-landing'),
        'section' => 'woopilot_blog_header_section',
    )));

    $wp_customize->add_setting('blog_header_text_color', array(
        'default' => '#1a1a1a',
        'sanitize_callback' => 'sanitize_hex_color',
        'transport' => 'postMessage',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'blog_header_text_color', array(
        'label' => __('🎨 رنگ متن هدر بلاگ', 'woopilot-landing'),
        'section' => 'woopilot_blog_header_section',
    )));

    $header_nav_items = array(
        'product' => array(
            'label' => __('محصول', 'woopilot-landing'),
            'url' => home_url('/landing'),
        ),
        'training' => array(
            'label' => __('آموزش', 'woopilot-landing'),
            'url' => home_url('/support'),
        ),
        'company' => array(
            'label' => __('شرکت', 'woopilot-landing'),
            'url' => home_url('/about'),
        ),
    );

    foreach ($header_nav_items as $slug => $data) {
        $wp_customize->add_setting("blog_nav_{$slug}_label", array(
            'default' => $data['label'],
            'sanitize_callback' => 'sanitize_text_field',
            'transport' => 'postMessage',
        ));
        $wp_customize->add_control("blog_nav_{$slug}_label", array(
            'label' => sprintf(__('متن منوی %s', 'woopilot-landing'), $data['label']),
            'section' => 'woopilot_blog_header_section',
            'type' => 'text',
        ));

        $wp_customize->add_setting("blog_nav_{$slug}_url", array(
            'default' => $data['url'],
            'sanitize_callback' => 'esc_url_raw',
        ));
        $wp_customize->add_control("blog_nav_{$slug}_url", array(
            'label' => sprintf(__('آدرس منوی %s', 'woopilot-landing'), $data['label']),
            'section' => 'woopilot_blog_header_section',
            'type' => 'url',
        ));
    }

    $wp_customize->add_setting('blog_header_cta_label', array(
        'default' => 'درخواست دموی رایگان',
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'postMessage',
    ));
    $wp_customize->add_control('blog_header_cta_label', array(
        'label' => __('متن دکمه CTA', 'woopilot-landing'),
        'section' => 'woopilot_blog_header_section',
        'type' => 'text',
    ));

    $wp_customize->add_setting('blog_header_cta_url', array(
        'default' => home_url('/landing'),
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control('blog_header_cta_url', array(
        'label' => __('آدرس دکمه CTA', 'woopilot-landing'),
        'section' => 'woopilot_blog_header_section',
        'type' => 'url',
    ));

    // ===== تنظیمات فوتر بلاگ =====
    $wp_customize->add_section('woopilot_blog_footer_section', array(
        'title' => __('📄 تنظیمات فوتر بلاگ', 'woopilot-landing'),
        'panel' => 'woopilot_landing_panel',
        'priority' => 77,
        'description' => __('تنظیمات فوتر صفحات پست‌ها و بلاگ', 'woopilot-landing'),
    ));

    $wp_customize->add_setting('blog_footer_brand_title', array(
        'default' => 'WooPilot',
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'postMessage',
    ));
    $wp_customize->add_control('blog_footer_brand_title', array(
        'label' => __('🏷️ عنوان برند در فوتر', 'woopilot-landing'),
        'section' => 'woopilot_blog_footer_section',
        'type' => 'text',
        'description' => __('عنوان برند در بخش برندینگ فوتر', 'woopilot-landing'),
    ));

    $wp_customize->add_setting('blog_footer_brand_description', array(
        'default' => 'ابزار هوشمند مدیریت فروشگاه‌های ووکامرس با هوش مصنوعی',
        'sanitize_callback' => 'sanitize_textarea_field',
        'transport' => 'postMessage',
    ));
    $wp_customize->add_control('blog_footer_brand_description', array(
        'label' => __('📝 توضیحات برند در فوتر', 'woopilot-landing'),
        'section' => 'woopilot_blog_footer_section',
        'type' => 'textarea',
        'description' => __('توضیحات برند در فوتر', 'woopilot-landing'),
    ));

    $wp_customize->add_setting('blog_footer_social_telegram', array(
        'default' => '#',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control('blog_footer_social_telegram', array(
        'label' => __('📱 لینک تلگرام', 'woopilot-landing'),
        'section' => 'woopilot_blog_footer_section',
        'type' => 'url',
        'description' => __('لینک کانال یا گروه تلگرام', 'woopilot-landing'),
    ));

    $wp_customize->add_setting('blog_footer_social_instagram', array(
        'default' => '#',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control('blog_footer_social_instagram', array(
        'label' => __('📸 لینک اینستاگرام', 'woopilot-landing'),
        'section' => 'woopilot_blog_footer_section',
        'type' => 'url',
        'description' => __('لینک پیج اینستاگرام', 'woopilot-landing'),
    ));

    $wp_customize->add_setting('blog_footer_social_linkedin', array(
        'default' => '#',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control('blog_footer_social_linkedin', array(
        'label' => __('💼 لینک لینکدین', 'woopilot-landing'),
        'section' => 'woopilot_blog_footer_section',
        'type' => 'url',
        'description' => __('لینک پیج لینکدین', 'woopilot-landing'),
    ));

    $wp_customize->add_setting('blog_show_social_links', array(
        'default' => true,
        'sanitize_callback' => 'wp_validate_boolean',
        'transport' => 'postMessage',
    ));
    $wp_customize->add_control('blog_show_social_links', array(
        'label' => __('🔗 نمایش لینک‌های اجتماعی', 'woopilot-landing'),
        'section' => 'woopilot_blog_footer_section',
        'type' => 'checkbox',
        'description' => __('فعال/غیرفعال کردن نمایش لینک‌های اجتماعی در فوتر', 'woopilot-landing'),
    ));

    $wp_customize->add_setting('blog_footer_bg_color', array(
        'default' => '#f8f9fa',
        'sanitize_callback' => 'sanitize_hex_color',
        'transport' => 'postMessage',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'blog_footer_bg_color', array(
        'label' => __('🎨 رنگ پس‌زمینه فوتر بلاگ', 'woopilot-landing'),
        'section' => 'woopilot_blog_footer_section',
    )));

    $wp_customize->add_setting('blog_footer_text_color', array(
        'default' => '#1a1a1a',
        'sanitize_callback' => 'sanitize_hex_color',
        'transport' => 'postMessage',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'blog_footer_text_color', array(
        'label' => __('🎨 رنگ متن فوتر بلاگ', 'woopilot-landing'),
        'section' => 'woopilot_blog_footer_section',
    )));

    $wp_customize->add_setting('blog_footer_accent_color', array(
        'default' => '#7c3aed',
        'sanitize_callback' => 'sanitize_hex_color',
        'transport' => 'postMessage',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'blog_footer_accent_color', array(
        'label' => __('🎨 رنگ آیکون‌ها و لینک‌های فوتر بلاگ', 'woopilot-landing'),
        'section' => 'woopilot_blog_footer_section',
    )));

    $footer_columns = array(
        'product' => array(
            'title' => __('محصول', 'woopilot-landing'),
            'links' => array(
                array('key' => 'overview', 'label' => __('معرفی محصول', 'woopilot-landing'), 'url' => home_url('/landing')),
                array('key' => 'pricing', 'label' => __('قیمت‌گذاری', 'woopilot-landing'), 'url' => home_url('/landing#pricing')),
                array('key' => 'testimonials', 'label' => __('نظرات مشتریان', 'woopilot-landing'), 'url' => home_url('/landing#testimonials')),
            ),
        ),
        'training' => array(
            'title' => __('آموزش', 'woopilot-landing'),
            'links' => array(
                array('key' => 'installation', 'label' => __('آموزش نصب', 'woopilot-landing'), 'url' => get_category_link(get_cat_ID('آموزش'))),
                array('key' => 'tips', 'label' => __('نکات کاربردی', 'woopilot-landing'), 'url' => get_category_link(get_cat_ID('نکات'))),
                array('key' => 'news', 'label' => __('اخبار', 'woopilot-landing'), 'url' => get_category_link(get_cat_ID('اخبار'))),
            ),
        ),
        'company' => array(
            'title' => __('شرکت', 'woopilot-landing'),
            'links' => array(
                array('key' => 'about', 'label' => __('درباره ما', 'woopilot-landing'), 'url' => home_url('/about')),
                array('key' => 'contact', 'label' => __('تماس با ما', 'woopilot-landing'), 'url' => home_url('/contact')),
                array('key' => 'support', 'label' => __('پشتیبانی', 'woopilot-landing'), 'url' => home_url('/support')),
            ),
        ),
    );

    foreach ($footer_columns as $section => $data) {
        $title_setting = "blog_footer_section_{$section}_title";
        $wp_customize->add_setting($title_setting, array(
            'default' => $data['title'],
            'sanitize_callback' => 'sanitize_text_field',
            'transport' => 'postMessage',
        ));
        $wp_customize->add_control($title_setting, array(
            'label' => sprintf(__('عنوان ستون %s', 'woopilot-landing'), $data['title']),
            'section' => 'woopilot_blog_footer_section',
            'type' => 'text',
        ));

        foreach ($data['links'] as $link) {
            $label_setting = "blog_footer_{$section}_link_{$link['key']}_label";
            $url_setting = "blog_footer_{$section}_link_{$link['key']}_url";

            $wp_customize->add_setting($label_setting, array(
                'default' => $link['label'],
                'sanitize_callback' => 'sanitize_text_field',
                'transport' => 'postMessage',
            ));
            $wp_customize->add_control($label_setting, array(
                'label' => sprintf(__('متن لینک %s - %s', 'woopilot-landing'), $data['title'], $link['label']),
                'section' => 'woopilot_blog_footer_section',
                'type' => 'text',
            ));

            $wp_customize->add_setting($url_setting, array(
                'default' => $link['url'],
                'sanitize_callback' => 'esc_url_raw',
            ));
            $wp_customize->add_control($url_setting, array(
                'label' => sprintf(__('آدرس لینک %s - %s', 'woopilot-landing'), $data['title'], $link['label']),
                'section' => 'woopilot_blog_footer_section',
                'type' => 'url',
            ));
        }
    }

    $wp_customize->add_setting('blog_footer_copyright', array(
        'default' => 'تمامی حقوق محفوظ است.',
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'postMessage',
    ));
    $wp_customize->add_control('blog_footer_copyright', array(
        'label' => __('©️ متن کپی‌رایت', 'woopilot-landing'),
        'section' => 'woopilot_blog_footer_section',
        'type' => 'text',
        'description' => __('متن کپی‌رایت در پایین فوتر', 'woopilot-landing'),
    ));

    $wp_customize->add_setting('blog_footer_tagline', array(
        'default' => 'طراحی شده با ❤️ برای فروشندگان ووکامرس',
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'postMessage',
    ));
    $wp_customize->add_control('blog_footer_tagline', array(
        'label' => __('💝 شعار فوتر', 'woopilot-landing'),
        'section' => 'woopilot_blog_footer_section',
        'type' => 'text',
        'description' => __('شعار انگیزشی در پایین فوتر', 'woopilot-landing'),
    ));

    // ===== تنظیمات رنگ‌ها =====
    $wp_customize->add_section('woopilot_colors_section', array(
        'title' => __('🎨 تنظیمات رنگ‌ها و تم', 'woopilot-landing'),
        'panel' => 'woopilot_landing_panel',
        'priority' => 70,
        'description' => __('کنترل کامل رنگ‌های تم تاریک', 'woopilot-landing'),
    ));

    $wp_customize->add_setting('primary_color', array(
        'default' => '#7c3aed',
        'sanitize_callback' => 'sanitize_hex_color',
        'transport' => 'postMessage',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'primary_color', array(
        'label' => __('🎨 رنگ اصلی (Primary)', 'woopilot-landing'),
        'section' => 'woopilot_colors_section',
        'description' => __('رنگ اصلی برند شما (بنفش در تم تاریک)', 'woopilot-landing'),
    )));

    $wp_customize->add_setting('accent_color', array(
        'default' => '#a855f7',
        'sanitize_callback' => 'sanitize_hex_color',
        'transport' => 'postMessage',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'accent_color', array(
        'label' => __('✨ رنگ accent', 'woopilot-landing'),
        'section' => 'woopilot_colors_section',
        'description' => __('رنگ accent برای هایلایت‌ها', 'woopilot-landing'),
    )));

    $wp_customize->add_setting('background_color', array(
        'default' => '#0a0a0f',
        'sanitize_callback' => 'sanitize_hex_color',
        'transport' => 'postMessage',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'background_color', array(
        'label' => __('🌙 رنگ پس‌زمینه اصلی', 'woopilot-landing'),
        'section' => 'woopilot_colors_section',
        'description' => __('رنگ تاریک پس‌زمینه', 'woopilot-landing'),
    )));

    $wp_customize->add_setting('text_color', array(
        'default' => '#f8f9ff',
        'sanitize_callback' => 'sanitize_hex_color',
        'transport' => 'postMessage',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'text_color', array(
        'label' => __('📝 رنگ متن اصلی', 'woopilot-landing'),
        'section' => 'woopilot_colors_section',
        'description' => __('رنگ متن سفید/خاکستری روشن', 'woopilot-landing'),
    )));

    $wp_customize->add_setting('text_muted_color', array(
        'default' => 'rgba(248, 249, 255, 0.65)',
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'postMessage',
    ));
    $wp_customize->add_control('text_muted_color', array(
        'label' => __('🌫️ رنگ متن کم‌رنگ (RGBA)', 'woopilot-landing'),
        'section' => 'woopilot_colors_section',
        'type' => 'text',
        'description' => __('رنگ متن کم‌رنگ با transparency (مثال: rgba(248, 249, 255, 0.65))', 'woopilot-landing'),
    ));

    // ===== تنظیمات تحلیلی =====
    $wp_customize->add_section('woopilot_analytics_section', array(
        'title' => __('📊 تنظیمات تحلیلی', 'woopilot-landing'),
        'panel' => 'woopilot_landing_panel',
        'priority' => 80,
        'description' => __('Google Analytics و ردیابی رفتار کاربران', 'woopilot-landing'),
    ));

    $wp_customize->add_setting('google_analytics_id', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('google_analytics_id', array(
        'label' => __('🔍 Google Analytics ID', 'woopilot-landing'),
        'section' => 'woopilot_analytics_section',
        'type' => 'text',
        'description' => __('شناسه Google Analytics (مثال: G-XXXXXXXXXX یا UA-XXXXXXXXX-X)', 'woopilot-landing'),
    ));

    // ===== تنظیمات SEO =====
    $wp_customize->add_section('woopilot_seo_section', array(
        'title' => __('🔎 تنظیمات SEO', 'woopilot-landing'),
        'panel' => 'woopilot_landing_panel',
        'priority' => 75,
        'description' => __('تنظیمات SEO — توضیحات متا سایت و گزینه‌های مرتبط', 'woopilot-landing'),
    ));

    $wp_customize->add_setting('meta_description', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    $wp_customize->add_control('meta_description', array(
        'label' => __('📝 توضیحات متا سایت', 'woopilot-landing'),
        'section' => 'woopilot_seo_section',
        'type' => 'textarea',
        'description' => __('توضیح متای کلی سایت که در نتایج جستجو نشان داده می‌شود (اگر توضیح متای صفحه/پست مشخص نشده باشد).', 'woopilot-landing'),
    ));

    // Add live preview support
    if ($wp_customize->is_preview() && !is_admin()) {
        add_action('wp_footer', 'woopilot_landing_customizer_preview');
    }
}
add_action('customize_register', 'woopilot_landing_customizer_settings');

/**
 * Live preview JavaScript
 */
function woopilot_landing_customizer_preview() {
    ?>
    <script>
    (function($) {
        wp.customize('hero_title', function(value) {
            value.bind(function(newval) {
                $('#hero-heading').text(newval);
            });
        });

        wp.customize('hero_subtitle', function(value) {
            value.bind(function(newval) {
                $('.hero-lede').text(newval);
            });
        });

        wp.customize('pillars_title', function(value) {
            value.bind(function(newval) {
                $('#pillars-heading').text(newval);
            });
        });

        wp.customize('features_title', function(value) {
            value.bind(function(newval) {
                $('#features-heading').text(newval);
            });
        });

        wp.customize('testimonials_title', function(value) {
            value.bind(function(newval) {
                $('#testimonials-heading').text(newval);
            });
        });

        wp.customize('cta_title', function(value) {
            value.bind(function(newval) {
                $('#cta-heading').text(newval);
            });
        });

        wp.customize('primary_color', function(value) {
            value.bind(function(newval) {
                document.documentElement.style.setProperty('--accent', newval);
            });
        });

        wp.customize('accent_color', function(value) {
            value.bind(function(newval) {
                document.documentElement.style.setProperty('--accent-strong', newval);
            });
        });

        wp.customize('background_color', function(value) {
            value.bind(function(newval) {
                document.documentElement.style.setProperty('--bg', newval);
            });
        });

        wp.customize('text_color', function(value) {
            value.bind(function(newval) {
                document.documentElement.style.setProperty('--text', newval);
            });
        });

        wp.customize('text_muted_color', function(value) {
            value.bind(function(newval) {
                document.documentElement.style.setProperty('--text-muted', newval);
            });
        });
    })(jQuery);
    </script>
    <?php
}

/**
 * Enqueue customizer scripts
 */
function woopilot_landing_customizer_scripts() {
    wp_enqueue_script('woopilot-customizer', get_template_directory_uri() . '/js/customizer.js', array('jquery', 'customize-preview'), '1.0', true);
}
add_action('customize_preview_init', 'woopilot_landing_customizer_scripts');

/**
 * Add customizer CSS
 */
function woopilot_landing_customizer_css() {
    $primary_color = get_theme_mod('primary_color', '#7c3aed');
    $accent_color = get_theme_mod('accent_color', '#a855f7');
    $background_color = get_theme_mod('background_color', '#0a0a0f');
    $text_color = get_theme_mod('text_color', '#f8f9ff');
    $text_muted_color = get_theme_mod('text_muted_color', 'rgba(248, 249, 255, 0.65)');
    $blog_header_bg = get_theme_mod('blog_header_bg_color', '#ffffff');
    $blog_header_text = get_theme_mod('blog_header_text_color', '#1a1a1a');
    $blog_footer_bg = get_theme_mod('blog_footer_bg_color', '#f8f9fa');
    $blog_footer_text = get_theme_mod('blog_footer_text_color', '#1a1a1a');
    $blog_footer_accent = get_theme_mod('blog_footer_accent_color', '#7c3aed');

    ?>
    <style>
    :root {
        --accent: <?php echo esc_attr($primary_color); ?>;
        --accent-strong: <?php echo esc_attr($accent_color); ?>;
        --bg: <?php echo esc_attr($background_color); ?>;
        --text: <?php echo esc_attr($text_color); ?>;
        --text-muted: <?php echo esc_attr($text_muted_color); ?>;
        --blog-header-bg: <?php echo esc_attr($blog_header_bg); ?>;
        --blog-header-text: <?php echo esc_attr($blog_header_text); ?>;
        --blog-footer-bg: <?php echo esc_attr($blog_footer_bg); ?>;
        --blog-footer-text: <?php echo esc_attr($blog_footer_text); ?>;
        --blog-footer-accent: <?php echo esc_attr($blog_footer_accent); ?>;
    }
    </style>
    <?php
}
add_action('wp_head', 'woopilot_landing_customizer_css');