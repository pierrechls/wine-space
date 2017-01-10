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
                            echo "<p style='padding: 1em;text-align: center; color: #fff;font-weight: 800;background-color: #b7a56d;' class='coupon-description'>".$post->post_excerpt."</p>";
                        }
                }
            }
        }
    }


/**
* is_realy_woocommerce_page - Returns true if on a page which uses WooCommerce templates (cart and checkout are standard pages with shortcodes and which are also included)
*
* @access public
* @return bool
*/
function is_realy_woocommerce_page () {
        if(  function_exists ( "is_woocommerce" ) && is_woocommerce()){
                return true;
        }
        $woocommerce_keys   =   array ( "woocommerce_shop_page_id" ,
                                        "woocommerce_terms_page_id" ,
                                        "woocommerce_cart_page_id" ,
                                        "woocommerce_checkout_page_id" ,
                                        "woocommerce_pay_page_id" ,
                                        "woocommerce_thanks_page_id" ,
                                        "woocommerce_myaccount_page_id" ,
                                        "woocommerce_edit_address_page_id" ,
                                        "woocommerce_view_order_page_id" ,
                                        "woocommerce_change_password_page_id" ,
                                        "woocommerce_logout_page_id" ,
                                        "woocommerce_lost_password_page_id" ) ;
        foreach ( $woocommerce_keys as $wc_page_id ) {
                if ( get_the_ID () == get_option ( $wc_page_id , 0 ) ) {
                        return true ;
                }
        }
        return false;
}