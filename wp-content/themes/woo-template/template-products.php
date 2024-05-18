<?php
/**
 * Template Name: Custom Products Page
 */

get_header();
?>

<div class="container mt-5">
    <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
        <?php
        // Define custom query to fetch all WooCommerce products
        $args = array(
            'post_type' => 'product',
            'posts_per_page' => -1, // Change this to limit the number of products displayed
        );

        $loop = new WP_Query($args);

        if ($loop->have_posts()) {
            while ($loop->have_posts()) {
                $loop->the_post();
                global $product;
                ?>
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Product image-->
                        <a href="<?php the_permalink(); ?>">
                            <?php if (has_post_thumbnail()) : ?>
                                <?php the_post_thumbnail('shop_catalog', ['class' => 'card-img-top']); ?>
                            <?php else : ?>
                                <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="<?php the_title(); ?>">
                            <?php endif; ?>
                        </a>
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                                <!-- Product price-->
                                <?php echo $product->get_price_html(); ?>
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="<?php echo esc_url($product->add_to_cart_url()); ?>">Add to cart</a></div>
                        </div>
                    </div>
                </div>
                <?php
            }
        } else {
            echo __('No products found');
        }

        wp_reset_postdata();
        ?>
    </div>
</div>

<?php
get_footer();
?>
