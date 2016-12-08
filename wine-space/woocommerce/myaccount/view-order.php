<?php
/**
 * View Order
 *
 * Shows the details of a particular order on the account page
 *
 * @author    WooThemes
 * @package   WooCommerce/Templates
 * @version   2.2.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

?>

<?php wc_print_notices(); ?>

<style>

	#primary{
		background-color: #fff;
		padding: 1em;
	}
	#primary a{
		color : #38393a;
		font-weight: 800;
	}
	mark {
	    color: #000;
	    background: none;
	    font-weight: 800;
	}
	
	header.title{
		margin-bottom: 10px;
	}
	
	@media only screen and (max-width: 480px) { 
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
			padding-left: 0;
			text-align: center;
		}	
		table tr td:before { 
			position: absolute;
			top: 6px;
			left: 6px;
			width: 45%; 
			padding-right: 10px; 
			white-space: nowrap;
		}	
		table tr td:nth-of-type(1):before { content: ""; }
		table tr td:nth-of-type(2):before { content: ""; }
		table tr td:nth-of-type(3):before { content: ""; }
		table tr td:nth-of-type(4):before { content: ""; }
		table tr td:nth-of-type(5):before { content: ""; }
		
		a.edit{
		    margin-top: 10px;
		    display: block;
	    }
	}
</style>

<p class="order-info"><?php printf( __( 'Order #<mark class="order-number">%s</mark> was placed on <mark class="order-date">%s</mark> and is currently <mark class="order-status">%s</mark>.', 'woocommerce' ), $order->get_order_number(), date_i18n( get_option( 'date_format' ), strtotime( $order->order_date ) ), wc_get_order_status_name( $order->get_status() ) ); ?></p>

<?php if ( $notes = $order->get_customer_order_notes() ) :
	?>
	<h2><?php _e( 'Order Updates', 'woocommerce' ); ?></h2>
	<ol class="commentlist notes">
		<?php foreach ( $notes as $note ) : ?>
		<li class="comment note">
			<div class="comment_container">
				<div class="comment-text">
					<p class="meta"><?php echo date_i18n( __( 'l jS \o\f F Y, h:ia', 'woocommerce' ), strtotime( $note->comment_date ) ); ?></p>
					<div class="description">
						<?php echo wpautop( wptexturize( $note->comment_content ) ); ?>
					</div>
	  				<div class="clear"></div>
	  			</div>
				<div class="clear"></div>
			</div>
		</li>
		<?php endforeach; ?>
	</ol>
	<?php
endif;

do_action( 'woocommerce_view_order', $order_id );
