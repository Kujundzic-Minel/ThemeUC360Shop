<?php get_header();?>
<body>

    <?php
    // insere un short code dans la page
    echo do_shortcode ('[products category="vedette" limit="1"]');
    ?>

<h6>Nos Vêtements</h6>
<hr class="product-line_purple" />
<hr class="product-line_purple2" />

    <?php
    echo do_shortcode('[products category="vetements" limit="-1"]');
    ?>

<h6>Nos Accessoires</h6>
<hr class="product-line_purple" />
<hr class="product-line_purple2" />

    <?php
    echo do_shortcode('[products category="accessoires" limit="-1"]');
    ?>
</body>

<?php get_footer();?>
