<?php 
/*
Template Name: Mon-Panier
*/
get_header();?>
<div class="cart">
<h6>Mon Panier</h6>

    <?php echo do_shortcode('[woocommerce_cart]'); ?>
</div>

<?php get_footer();?>