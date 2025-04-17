<?php
/*
 * Plugin Name:       Custom Post Types
 * Description:       Un plugin simple pour ajouter un post type personnalisé.
 */

function perso_post_type()
{
  $labels = [
    'name' => 'Perso',
    'singular_name' => 'Perso',
    'menu_name' => 'Perso'
  ];

  $args = array(
    'labels' => $labels,
    'description' => 'Mon post type presonnalisé',
    'public' => true,
    'has_archive' => true,
    'query_var' => true,
  );

  register_post_type('perso', $args);
}

add_action('init', 'perso_post_type');