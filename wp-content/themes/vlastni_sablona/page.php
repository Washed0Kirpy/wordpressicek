<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php  
            if ( is_front_page() ) {
                echo get_the_title( get_option( 'page_on_front' ) );
            } else {
                wp_title( '|', true, 'right' );
            }
        ?>
    </title>

    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

    <?php get_header(); ?>

    <main id="primary" class="site-main">
        <?php
            if ( have_posts() ) :
                while ( have_posts() ) : the_post();
                    the_content();
                endwhile;
            else :
                echo '<p>Obsah nebyl nalezen.</p>';
            endif;
        ?>
    </main>

    <?php get_footer(); ?>

    <?php wp_footer(); ?>
</body>
</html>
