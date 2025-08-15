<?php
defined( 'ABSPATH' ) || exit;
do_action( 'woocommerce_before_my_account' ); ?>
<div class="woocommerce-account">
    <?php
    do_action( 'woocommerce_account_navigation' );
    do_action( 'woocommerce_account_content' );
    ?>
</div>
<?php do_action( 'woocommerce_after_my_account' ); ?>
