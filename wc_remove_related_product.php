<?php

/**
 * Plugin Name: Remove Related Products
 * Plugin URI: https://github.com/hellomohsinkhan/WooCommerce-Addon
 * Description: This plugin removed related products from single plroducts page
 * Version: 1.0.0
 * Author: Mohsin Khan
 * Author URI: https://github.com/hellomohsinkhan/
 * License: GPL2
 */
function wcm_remove_related_products($args) {
    return array();
}
add_filter('woocommerce_related_products_args', 'wcm_remove_related_products', 10);
