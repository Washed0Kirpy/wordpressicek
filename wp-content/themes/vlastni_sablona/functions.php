<?php
// Vytvoření globální proměnné s URL šablony
function moje_globalni_promenne() {
    // Používá funkci get_template_directory_uri() pro získání URL šablony
    $GLOBALS['moje_sablona_url'] = get_template_directory_uri();
}
add_action('init', 'moje_globalni_promenne');

function moje_sablona_nacti_scripty() {
    // CSS
    wp_enqueue_style(
        'moje-styly',
        get_template_directory_uri() . '/style.css',
        array(),
        filemtime(get_template_directory() . '/style.css')
    );
    wp_enqueue_style(
        'moje-styly',
        get_template_directory_uri() . '/footer.css',
        array(),
        filemtime(get_template_directory() . '/footer.css')
    );

    // JavaScript
    wp_enqueue_script(
        'moje-skript',
        get_template_directory_uri() . '/script/script.js',
        array(), // zde můžeš přidat závislosti (např. jQuery)
        filemtime(get_template_directory() . '/script/script.js'),
        true // true = vloží do footeru
    );
}
add_action('wp_enqueue_scripts', 'moje_sablona_nacti_scripty');

?>





