<?php
/**
 * Šablona pro zobrazení statické stránky (page.php)
 * 
 * @package TvojeTema
 */

get_header(); // načte header.php (včetně <html>, <head>, <body>)
?>

<main id="primary" class="site-main">

    <?php
    // Zobrazí obsah stránky
    if ( have_posts() ) :
        while ( have_posts() ) : the_post();
            the_content();
        endwhile;
    else :
        echo '<p>Omlouváme se, žádný obsah nebyl nalezen.</p>';
    endif;
    ?>

</main><!-- #primary -->

<?php get_footer(); // načte footer.php (včetně wp_footer() a </html>) ?>
