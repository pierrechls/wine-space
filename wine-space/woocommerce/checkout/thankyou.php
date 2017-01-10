<?php
/**
 * Thankyou page
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.2.0
 */
?>

 <style>

  #primary {
	  color: #000;
	  line-height: 1.2;
	  padding: 0 !important;
  }

  #primary h1.entry-title {
	    background: #c4af78;
	    padding: 3.5rem 1rem;
	    color: #FFF;
	    margin: 0;
	    font-size: 2.5rem;
    }

  #primary .article_content a.return-to-shop {
	  color: #FFF !important;
  }

  #primary .myaccount-content {
	    padding: 1rem 2rem 10rem 2rem;
	    font-size: 1.7rem;
	    color: #000;
    }

  #primary h2.thankyou-title {
	  background: #c4af78;
	  padding: 6rem 1rem;
	  color: #FFF;
	  margin: 0;
	  font-size: 2.5rem;
	  text-align: center;
  }

  .entry-content {
	  padding: 3rem 2rem;
  }

  #primary strong{
		font-weight: 600;
	}

	#primary table th {
		font-weight: 600;
	}

  @media screen and (max-width: 60em){

		#primary h1.entry-title {
			padding: 10rem 1rem 3rem 1rem;
			text-align: center;
		}

		#primary h2.thankyou-title {
		  padding: 10rem 1rem 6rem 1rem;
	  }

	}


 </style>

<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

if ( $order ) : ?>

	<?php if ( $order->has_status( 'failed' ) ) : ?>

		<h2 class="thankyou-title">Oups...!</h2>

		<div class="myaccount-content" >

		<p><?php _e( 'Unfortunately your order cannot be processed as the originating bank/merchant has declined your transaction.', 'woocommerce' ); ?></p>

		<p><?php
			if ( is_user_logged_in() )
				_e( 'Please attempt your purchase again or go to your account page.', 'woocommerce' );
			else
				_e( 'Please attempt your purchase again.', 'woocommerce' );
		?></p>

		<p>
			<a href="<?php echo esc_url( $order->get_checkout_payment_url() ); ?>" class="button pay"><?php _e( 'Pay', 'woocommerce' ) ?></a>
			<?php if ( is_user_logged_in() ) : ?>
			<a href="<?php echo esc_url( wc_get_page_permalink( 'myaccount' ) ); ?>" class="button pay"><?php _e( 'My Account', 'woocommerce' ); ?></a>
			<?php endif; ?>
		</p>

	<?php else : ?>

		<h2 class="thankyou-title">Merci !</h2>

		<div class="myaccount-content" >

		<p><?php echo apply_filters( 'woocommerce_thankyou_order_received_text', __( 'Thank you. Your order has been received.', 'woocommerce' ), $order ); ?></p>

		<ul class="order_details">
			<li class="order">
				<?php _e( 'Order Number:', 'woocommerce' ); ?>
				<strong><?php echo $order->get_order_number(); ?></strong>
			</li>
			<li class="date">
				<?php _e( 'Date:', 'woocommerce' ); ?>
				<strong><?php echo date_i18n( get_option( 'date_format' ), strtotime( $order->order_date ) ); ?></strong>
			</li>
			<li class="total">
				<?php _e( 'Total:', 'woocommerce' ); ?>
				<strong><?php echo $order->get_formatted_order_total(); ?></strong>
			</li>
			<?php if ( $order->payment_method_title ) : ?>
			<li class="method">
				<?php _e( 'Payment Method:', 'woocommerce' ); ?>
				<strong><?php echo $order->payment_method_title; ?></strong>
			</li>
			<?php endif; ?>
		</ul>
		<div class="clear"></div>

	<?php endif; ?>

	<?php do_action( 'woocommerce_thankyou_' . $order->payment_method, $order->id ); ?>
	<?php do_action( 'woocommerce_thankyou', $order->id ); ?>

<?php else : ?>

	<p><?php echo apply_filters( 'woocommerce_thankyou_order_received_text', __( 'Thank you. Your order has been received.', 'woocommerce' ), null ); ?></p>

<?php endif; ?>

</div>
