<?php

	if( isset($_POST['cartDetails']) ){
		if( WC()->cart->get_cart_contents_count() > 1 ) {
			echo sprintf ( _n( '%d produits', '%d produits', WC()->cart->get_cart_contents_count() ), WC()->cart->get_cart_contents_count() ); ?> - <?php echo WC()->cart->get_cart_total();
		} else {
			echo sprintf ( _n( '%d produit', '%d produit', WC()->cart->get_cart_contents_count() ), WC()->cart->get_cart_contents_count() ); ?> - <?php echo WC()->cart->get_cart_total();
		};
		die;
    }

?>