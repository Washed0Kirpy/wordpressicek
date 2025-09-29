<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php  
            if ( is_front_page() ) { // Pokud je to domovská stránka (statická stránka)
                echo get_the_title( get_option( 'page_on_front' ) ); // Získá název statické domovské stránky
            } else {
                wp_title( '|', true, 'right' ); // Standardní titulek pro ostatní stránky
            }
         ?></title>
         <link rel="stylesheet" href="<?php echo $GLOBALS['moje_sablona_url']; ?>/style.css">
        
    </head>
    <body>
        <?php
            get_header();
        ?>

        <main id="primary" class="site-main">
            <?php
                the_content();
            ?>
        </main>

        <?php
            get_footer();
        ?>
    </body>
</html>