<?php

	if( isset($_POST['id']) && isset($_POST['quant'])){
		if ( WC()->cart->get_cart_contents_count() == 0 ) {
	        $woocommerce->cart->add_to_cart(8);
	        $verif=1;
		}
	    $product_id = $_POST['id'];
	    $quantity = $_POST['quant'];
	    for($i=1; $i<=$quantity; $i++){
	    	$woocommerce->cart->add_to_cart($product_id);
	    }
	    if($verif==1){
	    	$cart = WC()->instance()->cart;
			$id = 8;
			$cart_id = $cart->generate_cart_id($id);
			$cart_item_id = $cart->find_product_in_cart($cart_id);
			
			if($cart_item_id){
			   $cart->set_quantity($cart_item_id,0);
			}
	    }
	}
		
?>