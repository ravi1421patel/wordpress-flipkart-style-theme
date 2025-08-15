<?php get_header(); ?>
<div class='container my-4'>
<h2>Hot Deals</h2>
<div class='row row-cols-1 row-cols-sm-2 row-cols-md-4 g-3'>
<?php
$args = array('post_type'=>'product','posts_per_page'=>8);
$loop = new WP_Query($args);
while($loop->have_posts()): $loop->the_post(); global $product; ?>
<div class='col'>
  <div class='card'>
    <?php if($product->get_sale_price()) echo '<div class="badge bg-danger">Sale</div>'; ?>
    <a href='<?php the_permalink(); ?>'><?php the_post_thumbnail('medium', array('class'=>'card-img-top')); ?></a>
    <div class='card-body'>
      <h5 class='card-title'><?php the_title(); ?></h5>
      <p class='card-text'><?php echo $product->get_price_html(); ?></p>
      <a href='<?php echo esc_url( $product->add_to_cart_url() ); ?>' class='btn btn-primary'>Add to Cart</a>
    </div>
  </div>
</div>
<?php endwhile; wp_reset_postdata(); ?>
</div>
</div>
<?php get_footer(); ?>
