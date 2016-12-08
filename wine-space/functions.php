<?php
/**
 * winespace engine room
 *
 * @package winespace
 */

/**
 * Initialize all the things.
 */
require get_template_directory() . '/inc/init.php';

/**
 * Note: Do not add any custom code here. Please use a child theme so that your customizations aren't lost during updates.
 * http://codex.wordpress.org/Child_Themes
 */
 
 
 
 add_action('woocommerce_before_cart_totals', 'apply_product_on_coupon');
    function apply_product_on_coupon() {
        global $woocommerce;

        if ( ! empty( $woocommerce->cart->applied_coupons ) ) {
             $my_coupon = $woocommerce->cart->get_coupons() ;
             foreach($my_coupon as $coupon){

                if ( $post = get_post( $coupon->id ) ) {
                        if ( !empty( $post->post_excerpt ) ) {
                            //echo "<span class='coupon-name'><b>".$coupon->code."</b></span>";
                            echo "<p style='padding: 1em;text-align: center; color: #fff;font-weight: 800;background-color: #a18e38;' class='coupon-description'>".$post->post_excerpt."</p>";
                        }
                }
            }
        }
    }
