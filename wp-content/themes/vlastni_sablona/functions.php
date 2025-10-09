<?php

// Načtení CSS a JS souborů pro šablonu
function moje_sablona_nacti_scripty() {
    $theme_dir     = get_template_directory();
    $theme_dir_uri = get_template_directory_uri();

    // Načtení hlavního stylu
    wp_enqueue_style(
        'moje-style',
        $theme_dir_uri . '/style.css',
        array(),
        filemtime($theme_dir . '/style.css')
    );

    // Načtení stylu pro footer
    wp_enqueue_style(
        'moje-footer-style',
        $theme_dir_uri . '/footer.css',
        array(),
        filemtime($theme_dir . '/footer.css')
    );

    // Načtení JavaScriptu
    wp_enqueue_script(
        'moje-script',
        $theme_dir_uri . '/script/script.js',
        array(), // Zde můžeš přidat např. 'jquery'
        filemtime($theme_dir . '/script/script.js'),
        true // Načte se do footeru stránky
    );
}
add_action('wp_enqueue_scripts', 'moje_sablona_nacti_scripty');

?>
