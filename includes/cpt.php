<?php

function referencje_post_type()
{
    $labels = array(
        'name'                => 'Referencje',
        'singular_name'       => 'Referencja',
        'menu_name'           => 'Referencje',
        'add_new_item'        => 'Dodaj referencje',
        'add_new'             => 'Dodaj nową',
        'edit_item'           => 'Edytuj',
        'update_item'         => 'Aktualizuj',
    );
    $args = array(
        'label' => 'Referencje',
        'rewrite' => array(
            'slug' => 'referencje'
        ),
        'description'         => 'Nasze referencje',
        'labels'              => $labels,
        'supports'            => array('title', 'editor', 'thumbnail'),
        'taxonomies'          => array(),
        'hierarchical'        => true,
        'public'              => true,
        'menu_icon'           => 'dashicons-id-alt',
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => true,
        'publicly_queryable'  => true,
    );
    register_post_type('referencje', $args);
}
add_action('init', 'referencje_post_type');