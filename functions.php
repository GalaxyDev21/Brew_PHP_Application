<?php
if (!defined('URI_PATH')) define('URI_PATH', '/wp-content/themes/beerwoowp');

function mytheme_add_woocommerce_support(){
	add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );

function beerwoowp_scripts() {
  // wp_enqueue_style('custom-woocommerce-style',get_template_directory_uri() . '/css');
  wp_enqueue_script('jquery');
  wp_enqueue_script('beerwoowpjs', URI_PATH . '/dist/js/beerwoowp.js', array() );
}
add_action( 'wp_enqueue_scripts' , 'beerwoowp_scripts' );

function register_my_menus() {
  register_nav_menus(
    array(
      'top-menu' => __( 'Top Menu' ),
      'footer-menu-1' => __( 'Foooter Menu 1' ),
      'footer-menu-2' => __( 'Foooter Menu 2' ),
      'footer-menu-3' => __( 'Foooter Menu 3' ),
      'social-menu' => __( 'Social Menu' ),
    )
  );
}
add_action( 'init', 'register_my_menus' );
/**
 * Override theme default specification for product # per row
 */
function loop_columns() {
return 2; // 5 products per row
}
add_filter('loop_shop_columns', 'loop_columns', 999);

function woo_hide_page_title() {
	return false;
}
add_filter( 'woocommerce_show_page_title' , 'woo_hide_page_title' );


remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart' );
//remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart', 30 );

remove_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_rating', 5 );

remove_action( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30 );


// Remove the result count from WooCommerce
remove_action( 'woocommerce_before_shop_loop' , 'woocommerce_result_count', 20 );

remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_rating', 10);

remove_action('woocommerce_after_single_product_summary','woocommerce_output_product_data_tabs',10);

function cw_remove_quantity_fields( $return, $product ) {
    return true;
}
add_filter( 'woocommerce_is_sold_individually', 'cw_remove_quantity_fields', 10, 2 );


?>