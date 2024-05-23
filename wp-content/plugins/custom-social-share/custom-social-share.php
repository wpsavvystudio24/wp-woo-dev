<?php
/**
 * Plugin Name: Custom Social Share
 * Plugin URI: https://benjoco.com
 * Description: A plugin to share WooCommerce products on social media.
 * Version: 1.0.0
 * Author: Benjamin Co
 * Author URI: https://benjoco.com
 * Text Domain: custom-social-share
 * Domain Path: /languages
 */

 if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

// Enqueue Scripts and Styles
function custom_social_share_enqueue_scripts() {
    wp_enqueue_style( 'custom-social-share', plugins_url( '/css/style.css', __FILE__ ) );
    wp_enqueue_script( 'custom-social-share', plugins_url( '/js/script.js', __FILE__ ), array( 'jquery' ), '1.0', true );
    
    // Enqueue Bootstrap Icons
    wp_enqueue_style( 'bootstrap-icons', 'https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.0/font/bootstrap-icons.min.css' );
}
add_action( 'wp_enqueue_scripts', 'custom_social_share_enqueue_scripts' );

// Add Social Share Buttons
function custom_social_share_buttons() {
    global $product;
    $product_url = get_permalink( $product->get_id() );
    $product_title = $product->get_name();
    $product_image = wp_get_attachment_url( $product->get_image_id() );

    echo '<div id="test-id" class="custom-social-share">';
    echo '<a href="https://www.facebook.com/sharer/sharer.php?u=' . urlencode( $product_url ) . '" target="_blank" class="btn btn-outline-primary me-2"><i class="bi bi-facebook"></i> Facebook</a>';
    echo '<a href="https://twitter.com/intent/tweet?url=' . urlencode( $product_url ) . '&text=' . urlencode( $product_title ) . '" target="_blank" class="btn btn-outline-info me-2"><i class="bi bi-twitter"></i> Twitter</a>';
    echo '<a href="https://www.linkedin.com/shareArticle?mini=true&url=' . urlencode( $product_url ) . '&title=' . urlencode( $product_title ) . '" target="_blank" class="btn btn-outline-primary me-2"><i class="bi bi-linkedin"></i> LinkedIn</a>';
    echo '</div>';
}
add_action( 'woocommerce_share', 'custom_social_share_buttons' );