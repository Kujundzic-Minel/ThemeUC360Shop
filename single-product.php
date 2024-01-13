<?php get_header();?>
<div class="wrapper",class="single-product">
    <?php
    while ( have_posts() ) :
        the_post();
        ?>
                <?php
                // Product Title
                the_title( '<h1 class="product_title entry-title">', '</h1>' );
                ?>
                <?php
                // Product Description
                the_content();
                ?>
            </div>
        </div>
        <?php endwhile; // end of the loop.
        ?>
</div>
<?php get_footer();?>