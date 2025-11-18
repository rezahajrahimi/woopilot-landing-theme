/**
 * WooPilot Landing Theme Customizer Live Preview
 *
 * @package WooPilotLanding
 */

(function($) {
    'use strict';

    // Hero Section Updates
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

    wp.customize('metric_1_number', function(value) {
        value.bind(function(newval) {
            $('.hero-metrics div:nth-child(1) strong').text(newval);
        });
    });

    wp.customize('metric_1_label', function(value) {
        value.bind(function(newval) {
            $('.hero-metrics div:nth-child(1) span').text(newval);
        });
    });

    wp.customize('metric_2_number', function(value) {
        value.bind(function(newval) {
            $('.hero-metrics div:nth-child(2) strong').text(newval);
        });
    });

    wp.customize('metric_2_label', function(value) {
        value.bind(function(newval) {
            $('.hero-metrics div:nth-child(2) span').text(newval);
        });
    });

    wp.customize('metric_3_number', function(value) {
        value.bind(function(newval) {
            $('.hero-metrics div:nth-child(3) strong').text(newval);
        });
    });

    wp.customize('metric_3_label', function(value) {
        value.bind(function(newval) {
            $('.hero-metrics div:nth-child(3) span').text(newval);
        });
    });

    wp.customize('hero_trust_text', function(value) {
        value.bind(function(newval) {
            $('.hero-trust span').text(newval);
        });
    });

    // Pillars Section Updates
    wp.customize('pillars_eyebrow', function(value) {
        value.bind(function(newval) {
            $('#pillars .eyebrow').text(newval);
        });
    });

    wp.customize('pillars_title', function(value) {
        value.bind(function(newval) {
            $('#pillars-heading').text(newval);
        });
    });

    wp.customize('pillars_description', function(value) {
        value.bind(function(newval) {
            $('#pillars .section-heading p').text(newval);
        });
    });

    wp.customize('pillar_1_title', function(value) {
        value.bind(function(newval) {
            $('.pillars-grid .pillar-card:nth-child(1) h3').text(newval);
        });
    });

    wp.customize('pillar_1_desc', function(value) {
        value.bind(function(newval) {
            $('.pillars-grid .pillar-card:nth-child(1) p').text(newval);
        });
    });

    wp.customize('pillar_2_title', function(value) {
        value.bind(function(newval) {
            $('.pillars-grid .pillar-card:nth-child(2) h3').text(newval);
        });
    });

    wp.customize('pillar_2_desc', function(value) {
        value.bind(function(newval) {
            $('.pillars-grid .pillar-card:nth-child(2) p').text(newval);
        });
    });

    wp.customize('pillar_3_title', function(value) {
        value.bind(function(newval) {
            $('.pillars-grid .pillar-card:nth-child(3) h3').text(newval);
        });
    });

    wp.customize('pillar_3_desc', function(value) {
        value.bind(function(newval) {
            $('.pillars-grid .pillar-card:nth-child(3) p').text(newval);
        });
    });

    // Process Section Updates
    wp.customize('process_title', function(value) {
        value.bind(function(newval) {
            $('#process-heading').text(newval);
        });
    });

    wp.customize('process_1_title', function(value) {
        value.bind(function(newval) {
            $('.process-list li:nth-child(1) h3').text(newval);
        });
    });

    wp.customize('process_1_desc', function(value) {
        value.bind(function(newval) {
            $('.process-list li:nth-child(1) p').text(newval);
        });
    });

    wp.customize('process_2_title', function(value) {
        value.bind(function(newval) {
            $('.process-list li:nth-child(2) h3').text(newval);
        });
    });

    wp.customize('process_2_desc', function(value) {
        value.bind(function(newval) {
            $('.process-list li:nth-child(2) p').text(newval);
        });
    });

    wp.customize('process_3_title', function(value) {
        value.bind(function(newval) {
            $('.process-list li:nth-child(3) h3').text(newval);
        });
    });

    wp.customize('process_3_desc', function(value) {
        value.bind(function(newval) {
            $('.process-list li:nth-child(3) p').text(newval);
        });
    });

    // Features Section Updates
    wp.customize('features_title', function(value) {
        value.bind(function(newval) {
            $('#features-heading').text(newval);
        });
    });

    wp.customize('features_description', function(value) {
        value.bind(function(newval) {
            $('#features .section-heading p').text(newval);
        });
    });

    // Update feature cards (1-6)
    for (let i = 1; i <= 6; i++) {
        wp.customize('feature_' + i + '_title', function(value) {
            value.bind(function(newval) {
                $('.features-grid .feature-card:nth-child(' + i + ') h3').text(newval);
            });
        });

        wp.customize('feature_' + i + '_desc', function(value) {
            value.bind(function(newval) {
                $('.features-grid .feature-card:nth-child(' + i + ') p').text(newval);
            });
        });
    }

    // Testimonials Section Updates
    wp.customize('testimonials_eyebrow', function(value) {
        value.bind(function(newval) {
            $('#testimonials .eyebrow').text(newval);
        });
    });

    wp.customize('testimonials_title', function(value) {
        value.bind(function(newval) {
            $('#testimonials-heading').text(newval);
        });
    });

    wp.customize('testimonial_1_quote', function(value) {
        value.bind(function(newval) {
            $('.testimonials-carousel .testimonial-card:nth-child(1) p').text(newval);
        });
    });

    wp.customize('testimonial_1_author', function(value) {
        value.bind(function(newval) {
            $('.testimonials-carousel .testimonial-card:nth-child(1) cite').text(newval);
        });
    });

    wp.customize('testimonial_2_quote', function(value) {
        value.bind(function(newval) {
            $('.testimonials-carousel .testimonial-card:nth-child(2) p').text(newval);
        });
    });

    wp.customize('testimonial_2_author', function(value) {
        value.bind(function(newval) {
            $('.testimonials-carousel .testimonial-card:nth-child(2) cite').text(newval);
        });
    });

    wp.customize('testimonial_3_quote', function(value) {
        value.bind(function(newval) {
            $('.testimonials-carousel .testimonial-card:nth-child(3) p').text(newval);
        });
    });

    wp.customize('testimonial_3_author', function(value) {
        value.bind(function(newval) {
            $('.testimonials-carousel .testimonial-card:nth-child(3) cite').text(newval);
        });
    });

    // CTA Section Updates
    wp.customize('cta_eyebrow', function(value) {
        value.bind(function(newval) {
            $('.final-cta .eyebrow').text(newval);
        });
    });

    wp.customize('cta_title', function(value) {
        value.bind(function(newval) {
            $('#cta-heading').text(newval);
        });
    });

    wp.customize('cta_description', function(value) {
        value.bind(function(newval) {
            $('.cta-content p').text(newval);
        });
    });

    wp.customize('cta_primary_text', function(value) {
        value.bind(function(newval) {
            $('.cta-actions .btn-primary').text(newval);
        });
    });

    wp.customize('cta_secondary_text', function(value) {
        value.bind(function(newval) {
            $('.cta-actions .btn-outline').text(newval);
        });
    });

    // Blog Updates
    wp.customize('blog_title', function(value) {
        value.bind(function(newval) {
            $('.blog-header h1').text(newval);
        });
    });

    wp.customize('blog_description', function(value) {
        value.bind(function(newval) {
            $('.blog-header p').text(newval);
        });
    });

    // Color Updates
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

    wp.customize('blog_header_bg_color', function(value) {
        value.bind(function(newval) {
            document.documentElement.style.setProperty('--blog-header-bg', newval);
        });
    });

    wp.customize('blog_header_text_color', function(value) {
        value.bind(function(newval) {
            document.documentElement.style.setProperty('--blog-header-text', newval);
        });
    });

    wp.customize('blog_footer_bg_color', function(value) {
        value.bind(function(newval) {
            document.documentElement.style.setProperty('--blog-footer-bg', newval);
        });
    });

    wp.customize('blog_footer_text_color', function(value) {
        value.bind(function(newval) {
            document.documentElement.style.setProperty('--blog-footer-text', newval);
        });
    });

    wp.customize('blog_footer_accent_color', function(value) {
        value.bind(function(newval) {
            document.documentElement.style.setProperty('--blog-footer-accent', newval);
        });
    });

    // Blog Header Settings
    wp.customize('blog_brand_name', function(value) {
        value.bind(function(newval) {
            $('.blog-header .brand-name').text(newval);
        });
    });

    wp.customize('blog_brand_tagline', function(value) {
        value.bind(function(newval) {
            $('.blog-header .brand-tagline').text(newval);
        });
    });

    wp.customize('blog_show_search', function(value) {
        value.bind(function(newval) {
            if (newval) {
                $('.header-actions .search-form').show();
            } else {
                $('.header-actions .search-form').hide();
            }
        });
    });

    wp.customize('blog_nav_product_label', function(value) {
        value.bind(function(newval) {
            $('.blog-nav .nav-link:nth-child(2)').text(newval);
        });
    });

    wp.customize('blog_nav_training_label', function(value) {
        value.bind(function(newval) {
            $('.blog-nav .nav-link:nth-child(3)').text(newval);
        });
    });

    wp.customize('blog_nav_company_label', function(value) {
        value.bind(function(newval) {
            $('.blog-nav .nav-link:nth-child(4)').text(newval);
        });
    });

    wp.customize('blog_header_cta_label', function(value) {
        value.bind(function(newval) {
            $('.header-cta .btn').text(newval);
        });
    });

    wp.customize('blog_header_cta_url', function(value) {
        value.bind(function(newval) {
            $('.header-cta .btn').attr('href', newval);
        });
    });

    // Blog Footer Settings
    wp.customize('blog_footer_brand_title', function(value) {
        value.bind(function(newval) {
            $('.blog-footer .footer-brand h3').text(newval);
        });
    });

    wp.customize('blog_footer_brand_description', function(value) {
        value.bind(function(newval) {
            $('.blog-footer .footer-brand p').text(newval);
        });
    });

    wp.customize('blog_footer_social_telegram', function(value) {
        value.bind(function(newval) {
            $('.blog-footer .social-links a[aria-label="تلگرام"]').attr('href', newval);
        });
    });

    wp.customize('blog_footer_social_instagram', function(value) {
        value.bind(function(newval) {
            $('.blog-footer .social-links a[aria-label="اینستاگرام"]').attr('href', newval);
        });
    });

    wp.customize('blog_footer_social_linkedin', function(value) {
        value.bind(function(newval) {
            $('.blog-footer .social-links a[aria-label="لینکدین"]').attr('href', newval);
        });
    });

    wp.customize('blog_show_social_links', function(value) {
        value.bind(function(newval) {
            if (newval) {
                $('.blog-footer .social-links').show();
            } else {
                $('.blog-footer .social-links').hide();
            }
        });
    });

    wp.customize('blog_footer_copyright', function(value) {
        value.bind(function(newval) {
            $('.blog-footer .footer-bottom p:first-child').text(newval);
        });
    });

    wp.customize('blog_footer_tagline', function(value) {
        value.bind(function(newval) {
            $('.blog-footer .footer-bottom p:last-child').text(newval);
        });
    });

})(jQuery);