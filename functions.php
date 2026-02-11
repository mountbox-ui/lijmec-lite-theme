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
function lijmec_theme_setup() {
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
function lijmec_enqueue_scripts() {
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
function lijmec_widgets_init() {
    register_sidebar(array(
        'name'          => __('Footer Widget Area', 'lijmec'),
        'id'            => 'footer-1',
        'description'   => __('Add widgets here to appear in your footer.', 'lijmec'),
        'before_widget' => '<div class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h5 class="text-2xl leading-[1.1] mb-4">',
        'after_title'   => '</h5>',
    ));
}
add_action('widgets_init', 'lijmec_widgets_init');

/**
 * Custom Excerpt Length
 */
function lijmec_excerpt_length($length) {
    return 30;
}
add_filter('excerpt_length', 'lijmec_excerpt_length');

/**
 * Custom Excerpt More
 */
function lijmec_excerpt_more($more) {
    return '...';
}
add_filter('excerpt_more', 'lijmec_excerpt_more');

/**
 * Add custom body classes
 */
function lijmec_body_classes($classes) {
    $classes[] = 'max-w-[1600px]';
    $classes[] = 'mx-auto';
    return $classes;
}
add_filter('body_class', 'lijmec_body_classes');

/**
 * Custom Logo Output
 */
function lijmec_custom_logo() {
    if (has_custom_logo()) {
        the_custom_logo();
    } else {
        echo '<img class="max-h-[68px] w-auto inline-block dark:hidden" src="' . get_template_directory_uri() . '/images/images/header-logo.svg" alt="' . get_bloginfo('name') . '" />';
        echo '<img class="max-h-[68px] w-auto dark:inline-block hidden" src="' . get_template_directory_uri() . '/images/images/header-logo.svg" alt="' . get_bloginfo('name') . '" />';
    }
}

/**
 * Register Custom Post Types
 */
function lijmec_register_post_types() {
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
function lijmec_customize_register($wp_customize) {
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
function lijmec_handle_contact_form() {
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
    
    // Prepare email
    $to = get_theme_mod('lijmec_email', get_option('admin_email'));
    $subject = sprintf(__('New Contact Form Submission from %s', 'lijmec'), $name);
    $body = sprintf(
        __("Name: %s\nEmail: %s\nPlace: %s\n\nMessage:\n%s", 'lijmec'),
        $name,
        $email,
        $place,
        $message
    );
    $headers = array(
        'Content-Type: text/plain; charset=UTF-8',
        'Reply-To: ' . $email
    );
    
    // Send email
    $sent = wp_mail($to, $subject, $body, $headers);
    
    // Redirect with status
    if ($sent) {
        wp_redirect(add_query_arg('contact', 'success', wp_get_referer()));
    } else {
        wp_redirect(add_query_arg('contact', 'error', wp_get_referer()));
    }
    exit;
}
add_action('admin_post_nopriv_lijmec_contact_form', 'lijmec_handle_contact_form');
add_action('admin_post_lijmec_contact_form', 'lijmec_handle_contact_form');
