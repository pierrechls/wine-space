<?php
/**
 * My Account page
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

wc_print_notices(); ?>

<style>

	#primary{
		background-color: #fff;
		padding: 1em;
	}
	header.entry-header{
		display: none;
	}
	#primary a{
		color : #38393a;
		font-weight: 800;
	}
	td.order-actions a{
		padding-right: 10px;
	}
	div.col2-set.addresses div.col-1.address a.edit {
	    margin-top: 10px;
	    display: block;
    }
    
    @media only screen and (max-width: 900px) { 
		table, thead, tbody, th, td, tr { 
			display: block; 
		}	
		table thead tr { 
			position: absolute;
			top: -9999px;
			left: -9999px;
		}	
		table tr { border: 1px solid #ccc; }	
		table tr td { 
			border: none;
			border-bottom: 1px solid #eee; 
			position: relative;
			padding-left: 50%; 
		}	
		table tr td:before { 
			position: absolute;
			top: 6px;
			left: 6px;
			width: 45%; 
			padding-right: 10px; 
			white-space: nowrap;
		}	
		table tr td:nth-of-type(1):before { content: "Commande"; }
		table tr td:nth-of-type(2):before { content: "Date"; }
		table tr td:nth-of-type(3):before { content: "État"; }
		table tr td:nth-of-type(4):before { content: "Total"; }
		table tr td:nth-of-type(5):before { content: ""; }
		
		a.edit{
		    margin-top: 10px;
		    display: block;
	    }
	}
	
</style>

<h1>Mon compte</h1>

<p class="myaccount_user">
	<?php
	printf(
		__( 'Hello <strong>%1$s</strong> (not %1$s? <a href="%2$s">Sign out</a>).', 'woocommerce' ) . ' ',
		$current_user->display_name,
		wc_get_endpoint_url( 'customer-logout', '', wc_get_page_permalink( 'myaccount' ) )
	);

	printf( __( 'From your account dashboard you can view your recent orders, manage your shipping and billing addresses and <a href="%s">edit your password and account details</a>.', 'woocommerce' ),
		wc_customer_edit_account_url()
	);
	?>
</p>

<?php do_action( 'woocommerce_before_my_account' ); ?>

<?php wc_get_template( 'myaccount/my-downloads.php' ); ?>

<?php wc_get_template( 'myaccount/my-orders.php', array( 'order_count' => $order_count ) ); ?>

<?php wc_get_template( 'myaccount/my-address.php' ); ?>

<?php do_action( 'woocommerce_after_my_account' ); ?>
