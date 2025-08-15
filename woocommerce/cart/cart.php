<?php
defined( 'ABSPATH' ) || exit;
do_action( 'woocommerce_before_cart' ); ?>
<form class="woocommerce-cart-form" action="<?php echo esc_url( wc_get_cart_url() ); ?>" method="post">
<?php do_action( 'woocommerce_before_cart_table' ); ?>
<table class="shop_table shop_table_responsive cart woocommerce-cart-form__contents">
    <thead>
        <tr>
            <th class="product-name">Product</th>
            <th class="product-price">Price</th>
            <th class="product-quantity">Quantity</th>
            <th class="product-subtotal">Total</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {
            $_product   = $cart_item['data'];
            $product_id = $cart_item['product_id'];
            ?>
            <tr class="woocommerce-cart-form__cart-item">
                <td class="product-name"><?php echo $_product->get_name(); ?></td>
                <td class="product-price"><?php echo wc_price($_product->get_price()); ?></td>
                <td class="product-quantity"><?php woocommerce_quantity_input( array(), $_product, false ); ?></td>
                <td class="product-subtotal"><?php echo WC()->cart->get_product_subtotal( $_product, $cart_item['quantity'] ); ?></td>
            </tr>
        <?php } ?>
    </tbody>
</table>
<?php do_action( 'woocommerce_after_cart_table' ); ?>
</form>
<?php do_action( 'woocommerce_after_cart' ); ?>
