<?php 
/*
Template Name: Page-Checkout
*/
get_header();?>

<h6>Mon Panier</h6>
<body>

    <?php echo do_shortcode('[cart_product_images]'); ?>
    <?php echo do_shortcode('[woocommerce_checkout]'); ?>
</body>

<?php get_footer();?>