<?php
defined( 'ABSPATH' ) || exit;
do_action( 'woocommerce_before_checkout_form', $checkout ); ?>
<form name="checkout" method="post" class="checkout woocommerce-checkout" action="<?php echo esc_url( wc_get_checkout_url() ); ?>" enctype="multipart/form-data">
<?php
if ( $checkout->get_checkout_fields() ) :
    do_action( 'woocommerce_checkout_before_customer_details' );
    do_action( 'woocommerce_checkout_billing' );
    do_action( 'woocommerce_checkout_shipping' );
    do_action( 'woocommerce_checkout_after_customer_details' );
endif;
do_action( 'woocommerce_checkout_order_review' ); ?>
</form>
<?php do_action( 'woocommerce_after_checkout_form', $checkout ); ?>