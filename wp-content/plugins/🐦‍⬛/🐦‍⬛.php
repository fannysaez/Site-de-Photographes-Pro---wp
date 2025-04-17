<?php
/*
* Plugin Name: 🐦‍⬛
*/

// https://www.youtube.com/watch?v=UWwjADp9BWc

// Fonction pour charger le CSS et le JS
function 🐦‍⬛()
{
    // Charger le JS
    wp_enqueue_script(
        'custom-js',
        plugins_url('🐦‍⬛.js', __FILE__),
        [],
        false,
        [
            'strategy' => 'defer'
        ],
    );

    // Charger le CSS
    wp_enqueue_style(
        'custom-css',
        plugins_url('🐦‍⬛.css', __FILE__),
    );
}

// Hook pour charger les fichiers
add_action('wp_enqueue_scripts', '🐦‍⬛');
