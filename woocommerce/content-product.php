<?php
defined( 'ABSPATH' ) || exit;
global $product;
?>
<div <?php wc_product_class( 'col card mb-3', $product ); ?>>
    <?php
    echo '<a href="' . get_the_permalink() . '">' . woocommerce_get_product_thumbnail() . '</a>';
    echo '<h5 class="card-title">' . get_the_title() . '</h5>';
    echo '<p class="card-text">' . $product->get_price_html() . '</p>';
    echo '<a href="' . esc_url( $product->add_to_cart_url() ) . '" class="btn btn-primary">Add to Cart</a>';
    ?>
</div>