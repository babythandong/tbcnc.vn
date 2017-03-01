
<div id="account-registration">
<style>
	p#billing_last_name_field {
    width: 50%;
    float: left;
	}
	input#billing_last_name {
		width: 85%;
	}
	input#billing_company {
		width: 50%;
	}
	p#billing_email_field {
		width: 50%;
		float: left;
	}
	input#billing_email {
		width: 85%;
	}
	input#billing_phone {
		width: 50%;
	}
	p#billing_address_1_field {
		width: 50%;
		float: left;
	}
	input#billing_address_1 {
		width: 85%;
	}
	input#billing_ma_so_thue {
		width: 50%;
	}
	textarea#order_comments {
		width: 100%;
		height:150px;
	}
	h3 {
		display: none;
	}
	table.shop_table.woocommerce-checkout-review-order-table {
		display: none;
	}
	ul.wc_payment_methods.payment_methods.methods {
		display: none;
	}
</style>
<form name="checkout" method="post" class="checkout woocommerce-checkout" action="<?php echo esc_url( wc_get_checkout_url() ); ?>" enctype="multipart/form-data">

	<?php if ( sizeof( $checkout->checkout_fields ) > 0 ) : ?>

		<?php do_action( 'woocommerce_checkout_before_customer_details' ); ?>

		<div class="col2-set" id="customer_details">
			<div class="col-1">
				<?php do_action( 'woocommerce_checkout_billing' ); ?>
			</div>

			<div class="col-2">
				<?php do_action( 'woocommerce_checkout_shipping' ); ?>
			</div>
		</div>

		<?php do_action( 'woocommerce_checkout_after_customer_details' ); ?>

	<?php endif; ?>

	<h3 id="order_review_heading"><?php _e( 'Your order', 'woocommerce' ); ?></h3>

	<?php do_action( 'woocommerce_checkout_before_order_review' ); ?>

	<div id="order_review" class="woocommerce-checkout-review-order">
		<?php do_action( 'woocommerce_checkout_order_review' ); ?>
	</div>

	<?php do_action( 'woocommerce_checkout_after_order_review' ); ?>

</form>
</div>
<?php do_action( 'woocommerce_after_checkout_form', $checkout ); ?>
