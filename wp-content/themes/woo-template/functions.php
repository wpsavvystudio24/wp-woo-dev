<?php
function theme_setup() {
    // Add support for various theme features
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');

    // Register primary menu
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'text_domain'),
    ));
}
add_action('after_setup_theme', 'theme_setup');

function enqueue_styles_and_scripts() {
    // Enqueue styles
    wp_enqueue_style('bootstrap-icons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css');
    wp_enqueue_style('core-styles', get_template_directory_uri() . '/css/styles.css');
    wp_enqueue_style('custom-styles', get_template_directory_uri() . '/css/custom.css');

    // Enqueue scripts
    wp_enqueue_script('bootstrap-bundle', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js', array(), null, true);
    wp_enqueue_script('core-scripts', get_template_directory_uri() . '/js/scripts.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'enqueue_styles_and_scripts');

// Add classes to nav menu items
function add_additional_class_on_li($classes, $item, $args) {
    if(isset($args->add_li_class)) {
        $classes[] = $args->add_li_class;
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);

function add_additional_class_on_a($classes, $item, $args) {
    if (isset($args->link_class)) {
        $classes['class'] = $args->link_class;
    }
    return $classes;
}
add_filter('nav_menu_link_attributes', 'add_additional_class_on_a', 1, 3);

function mytheme_add_woocommerce_support() {
    add_theme_support('woocommerce');
}

add_action('after_setup_theme', 'mytheme_add_woocommerce_support');

?>
