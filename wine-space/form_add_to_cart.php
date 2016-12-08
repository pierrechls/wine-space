<?php 

if( isset($_POST['variable']) ){
    $product_id = $_POST['variable'];
}

$link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$link .="?add-to-cart=";
$link .= $product_id;

//header("Location: Refresh:0; url=$link");
header("Location: ".$link.);

//WC()->cart->add_to_cart( $product_id );
//$woocommerce->cart->add_to_cart($product_id);

?>