<?php
/**
 * LijMec Theme Functions
 *
 * @package LijMec
 */

// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Theme Setup
 */
function lijmec_theme_setup()
{
    // Add theme support
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));

    // Register navigation menus
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'lijmec'),
        'footer' => __('Footer Menu', 'lijmec'),
    ));

    // Add excerpt support to pages
    add_post_type_support('page', 'excerpt');
}
add_action('after_setup_theme', 'lijmec_theme_setup');

/**
 * Enqueue Scripts and Styles
 */
function lijmec_enqueue_scripts()
{
    // Main CSS
    wp_enqueue_style('lijmec-main', get_template_directory_uri() . '/css/main.css', array(), '1.0');

    // JavaScript Libraries
    wp_enqueue_script('imagesloaded');
    wp_enqueue_script('lijmec-gsap', get_template_directory_uri() . '/js/lib/gsap.min.js', array(), '1.0', true);
    wp_enqueue_script('lijmec-scrolltrigger', get_template_directory_uri() . '/js/lib/ScrollTrigger.min.js', array('lijmec-gsap'), '1.0', true);
    wp_enqueue_script('lijmec-lenis', get_template_directory_uri() . '/js/lib/lenis.min.js', array(), '1.0', true);
    wp_enqueue_script('lijmec-split-types', get_template_directory_uri() . '/js/lib/split-types.min.js', array(), '1.0', true);
    wp_enqueue_script('lijmec-matter', get_template_directory_uri() . '/js/lib/matter.min.js', array(), '1.0', true);
    wp_enqueue_script('lijmec-swiper', get_template_directory_uri() . '/js/lib/swiper.min.js', array(), '1.0', true);
    wp_enqueue_script('lijmec-headroom', get_template_directory_uri() . '/js/lib/headroom.min.js', array(), '1.0', true);
    wp_enqueue_script('lijmec-marquee', get_template_directory_uri() . '/js/lib/vanila-marquee.min.js', array(), '1.0', true);

    // Theme Scripts
    wp_enqueue_script('lijmec-career-tabs', get_template_directory_uri() . '/js/career-tabs.js', array(), '1.0', true);
    wp_enqueue_script('lijmec-script', get_template_directory_uri() . '/js/script.js', array('jquery'), '1.0', true);
}
add_action('wp_enqueue_scripts', 'lijmec_enqueue_scripts');

/**
 * Register Widget Areas
 */
function lijmec_widgets_init()
{
    register_sidebar(array(
        'name' => __('Footer Widget Area', 'lijmec'),
        'id' => 'footer-1',
        'description' => __('Add widgets here to appear in your footer.', 'lijmec'),
        'before_widget' => '<div class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h5 class="text-2xl leading-[1.1] mb-4">',
        'after_title' => '</h5>',
    ));
}
add_action('widgets_init', 'lijmec_widgets_init');

/**
 * Custom Excerpt Length
 */
function lijmec_excerpt_length($length)
{
    return 30;
}
add_filter('excerpt_length', 'lijmec_excerpt_length');

/**
 * Custom Excerpt More
 */
function lijmec_excerpt_more($more)
{
    return '...';
}
add_filter('excerpt_more', 'lijmec_excerpt_more');

/**
 * Add custom body classes
 */
function lijmec_body_classes($classes)
{
    // $classes[] = 'max-w-[1600px]';
    // $classes[] = 'mx-auto';
    return $classes;
}
add_filter('body_class', 'lijmec_body_classes');

/**
 * Custom Logo Output
 */
function lijmec_custom_logo()
{
    if (has_custom_logo()) {
        the_custom_logo();
    } else {
        echo '<img class="max-h-[68px] w-auto inline-block" src="' . get_template_directory_uri() . '/images/images/LijMec-Logo-Black.svg" alt="' . get_bloginfo('name') . '" />';
    }
}

/**
 * Register Custom Post Types
 */
function lijmec_register_post_types()
{
    // Services Post Type
    register_post_type('services', array(
        'labels' => array(
            'name' => __('Services', 'lijmec'),
            'singular_name' => __('Service', 'lijmec'),
        ),
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-admin-tools',
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),
        'rewrite' => array('slug' => 'services'),
    ));

    // Industries Post Type
    register_post_type('industries', array(
        'labels' => array(
            'name' => __('Industries', 'lijmec'),
            'singular_name' => __('Industry', 'lijmec'),
        ),
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-building',
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),
        'rewrite' => array('slug' => 'industries'),
    ));
}
add_action('init', 'lijmec_register_post_types');

/**
 * Add theme customizer options
 */
function lijmec_customize_register($wp_customize)
{
    // Contact Information Section
    $wp_customize->add_section('lijmec_contact_info', array(
        'title' => __('Contact Information', 'lijmec'),
        'priority' => 30,
    ));

    // Email
    $wp_customize->add_setting('lijmec_email', array(
        'default' => 'info@lijmec.com',
        'sanitize_callback' => 'sanitize_email',
    ));
    $wp_customize->add_control('lijmec_email', array(
        'label' => __('Email Address', 'lijmec'),
        'section' => 'lijmec_contact_info',
        'type' => 'email',
    ));

    // Secondary Email
    $wp_customize->add_setting('lijmec_email_secondary', array(
        'default' => 'lijmec@gmail.com',
        'sanitize_callback' => 'sanitize_email',
    ));
    $wp_customize->add_control('lijmec_email_secondary', array(
        'label' => __('Secondary Email', 'lijmec'),
        'section' => 'lijmec_contact_info',
        'type' => 'email',
    ));

    // Phone
    $wp_customize->add_setting('lijmec_phone', array(
        'default' => '+91 99958 22922',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('lijmec_phone', array(
        'label' => __('Phone Number', 'lijmec'),
        'section' => 'lijmec_contact_info',
        'type' => 'text',
    ));

    // Address
    $wp_customize->add_setting('lijmec_address', array(
        'default' => 'Building No: XIV | 484-A Kodunga, Vellikulangara, P.O, Chalakudy, Thrissur, Kerala, India - 680699',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    $wp_customize->add_control('lijmec_address', array(
        'label' => __('Address', 'lijmec'),
        'section' => 'lijmec_contact_info',
        'type' => 'textarea',
    ));

    // Social Media Section
    $wp_customize->add_section('lijmec_social_media', array(
        'title' => __('Social Media Links', 'lijmec'),
        'priority' => 31,
    ));

    // Facebook
    $wp_customize->add_setting('lijmec_facebook', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control('lijmec_facebook', array(
        'label' => __('Facebook URL', 'lijmec'),
        'section' => 'lijmec_social_media',
        'type' => 'url',
    ));

    // YouTube
    $wp_customize->add_setting('lijmec_youtube', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control('lijmec_youtube', array(
        'label' => __('YouTube URL', 'lijmec'),
        'section' => 'lijmec_social_media',
        'type' => 'url',
    ));

    // Instagram
    $wp_customize->add_setting('lijmec_instagram', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control('lijmec_instagram', array(
        'label' => __('Instagram URL', 'lijmec'),
        'section' => 'lijmec_social_media',
        'type' => 'url',
    ));

    // LinkedIn
    $wp_customize->add_setting('lijmec_linkedin', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control('lijmec_linkedin', array(
        'label' => __('LinkedIn URL', 'lijmec'),
        'section' => 'lijmec_social_media',
        'type' => 'url',
    ));
}
add_action('customize_register', 'lijmec_customize_register');

/**
 * Handle Contact Form Submission
 */
function lijmec_handle_contact_form()
{
    // Verify nonce
    if (!isset($_POST['lijmec_contact_nonce']) || !wp_verify_nonce($_POST['lijmec_contact_nonce'], 'lijmec_contact_form')) {
        wp_die(__('Security check failed', 'lijmec'));
    }

    // Sanitize form data
    $name = sanitize_text_field($_POST['name']);
    $email = sanitize_email($_POST['email']);
    $place = sanitize_text_field($_POST['place']);
    $message = sanitize_textarea_field($_POST['message']);

    // Validate required fields
    if (empty($name) || empty($email) || !is_email($email)) {
        wp_redirect(add_query_arg('contact', 'error', wp_get_referer()));
        exit;
    }

    // Prepare HTML Email Content helper function (inline closure won't work in older PHP, so we'll just write it here)
    $site_name = get_bloginfo('name');
    if (empty($site_name))
        $site_name = 'LijMec';

    $admin_email_addr = 'hudaifath.m@mountbox.in';
    $phone = get_theme_mod('lijmec_phone', '+91 99958 22922');
    $year = date('Y');

    // Email Template Generator
    $generate_email_html = function ($is_admin) use ($name, $email, $place, $message, $site_name, $admin_email_addr, $phone, $year) {
        $title = $is_admin ? "New Contact Request!" : "Thank you for your contact request!";
        $greeting = $is_admin ? "Hello Admin," : "Dear " . esc_html($name) . ",";

        $intro_text = $is_admin
            ? "You have received a new contact request from " . esc_html($name) . ". Here are the details:"
            : "Thank you for contacting " . esc_html($site_name) . ". We have received your message and will get back to you as soon as possible.";

        $footer_text = $is_admin
            ? "Please review this message."
            : "We will review your message and get back to you within 2-3 business days.<br><br>If you have any questions, please don't hesitate to contact us.";

        // Grab SVG logo
        $logo_svg = get_template_directory_uri() . '/images/images/LijMec-Logo-Black.svg';

        ob_start();
        ?>
        <!DOCTYPE html>
        <html>

        <head>
            <meta charset="UTF-8">
            <title>Contact Form</title>
            <style>
                body {
                    background-color: #f9f9f9;
                    font-family: Arial, sans-serif;
                    margin: 0;
                    padding: 40px 0;
                    color: #333333;
                }

                .container {
                    max-width: 600px;
                    margin: 0 auto;
                    background-color: #ffffff;
                    padding: 40px;
                    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
                }

                .logo {
                    text-align: center;
                    margin-bottom: 30px;
                }

                .logo img {
                    max-height: 60px;
                    max-width: 200px;
                }

                .divider {
                    border-top: 2px solid #005A64;
                    margin: 20px 0 30px 0;
                    opacity: 0.2;
                }

                h2 {
                    color: #005A64;
                    font-size: 22px;
                    margin-top: 0;
                    margin-bottom: 20px;
                }

                p {
                    font-size: 15px;
                    line-height: 1.6;
                    margin-bottom: 15px;
                    color: #4b5563;
                }

                .details-box {
                    background-color: #f8f9fa;
                    padding: 25px;
                    border-radius: 6px;
                    margin: 30px 0;
                }

                .details-box h3 {
                    margin-top: 0;
                    font-size: 16px;
                    color: #005A64;
                    margin-bottom: 15px;
                }

                .details-box p {
                    margin: 8px 0;
                    font-size: 14px;
                    color: #374151;
                }

                .details-box strong {
                    color: #111827;
                }

                .footer {
                    margin-top: 40px;
                    text-align: center;
                    font-size: 12px;
                    color: #9ca3af;
                    border-top: 1px solid #e5e7eb;
                    padding-top: 20px;
                }

                .footer a {
                    color: #3b82f6;
                    text-decoration: none;
                }

                .brand-text {
                    color: #005A64;
                    font-weight: bold;
                }
            </style>
        </head>

        <body>
            <div class="container">
                <div class="logo">
                    <img src="<?php echo esc_url($logo_svg); ?>" alt="<?php echo esc_attr($site_name); ?>"
                        onerror="this.outerHTML='<h1 style=\'color:#005A64;margin:0;font-size:28px;\'>'+this.alt+'</h1>'">
                </div>

                <div class="divider"></div>

                <h2><?php echo esc_html($title); ?></h2>
                <p><?php echo esc_html($greeting); ?></p>
                <p><?php echo $intro_text; ?></p>

                <div class="details-box">
                    <h3>Details:</h3>
                    <p><strong>Name:</strong> <?php echo esc_html($name); ?></p>
                    <p><strong>Email:</strong> <a
                            href="mailto:<?php echo esc_attr($email); ?>"><?php echo esc_html($email); ?></a></p>
                    <p><strong>Place:</strong> <?php echo esc_html($place); ?></p>
                    <p><strong>Message:</strong><br> <?php echo nl2br(esc_html($message)); ?></p>
                </div>

                <p><?php echo $footer_text; ?></p>
                <p><strong>Best regards,</strong><br><span class="brand-text"><?php echo esc_html($site_name); ?></span> Team
                </p>

                <div class="footer">
                    &copy; <?php echo $year; ?> <span class="brand-text"><?php echo esc_html($site_name); ?></span>. All rights
                    reserved.<br>
                    Email: <a
                        href="mailto:<?php echo esc_attr($admin_email_addr); ?>"><?php echo esc_html($admin_email_addr); ?></a>
                    | Phone: <?php echo esc_html($phone); ?>
                </div>
            </div>
        </body>

        </html>
        <?php
        return ob_get_clean();
    };

    $from_name = esc_html($site_name);
    $from_email = 'no-reply@' . str_replace('www.', '', $_SERVER['HTTP_HOST']); // Fallback to a domain-based email
    // Or try to use admin email
    if (is_email($admin_email_addr)) {
        $from_email = $admin_email_addr;
    }

    // Send emails
    $admin_subject = sprintf(__('New Contact Request from %s', 'lijmec'), $name);
    $admin_headers = array(
        'Content-Type: text/html; charset=UTF-8',
        'Reply-To: ' . $email,
        'From: ' . $from_name . ' <' . $from_email . '>'
    );
    $sent_admin = wp_mail($admin_email_addr, $admin_subject, $generate_email_html(true), $admin_headers);

    $customer_subject = sprintf(__('Thank you for contacting %s', 'lijmec'), $site_name);
    $customer_headers = array(
        'Content-Type: text/html; charset=UTF-8',
        'Reply-To: ' . $admin_email_addr,
        'From: ' . $from_name . ' <' . $from_email . '>'
    );
    $sent_customer = wp_mail($email, $customer_subject, $generate_email_html(false), $customer_headers);

    // Redirect with status
    if ($sent_admin || $sent_customer) {
        wp_redirect(add_query_arg('contact', 'success', wp_get_referer()));
    } else {
        wp_redirect(add_query_arg('contact', 'error', wp_get_referer()));
    }
    exit;
}
add_action('admin_post_nopriv_lijmec_contact_form', 'lijmec_handle_contact_form');
add_action('admin_post_lijmec_contact_form', 'lijmec_handle_contact_form');
