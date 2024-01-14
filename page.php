<?php 
/*
Template Name: Mes-Pages
*/
get_header();?>
<?php 
/*
Template Name: Mes-Pages
*/
get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">

    <?php
    // Démarre la boucle WordPress
    while ( have_posts() ) :
        the_post();

        // Affiche le contenu de la page
        the_content();

        // Si vous souhaitez ajouter des commentaires, décommentez la ligne suivante
        // if ( comments_open() || get_comments_number() ) :
        //     comments_template();
        // endif;

    endwhile; // Fin de la boucle
    ?>

    </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>
<?php get_footer();?>