<?php
// Sécurité : empêcher l'accès direct au fichier
if (!defined('ABSPATH')) {
    exit;
}

function niveau_child_register_portfolio_cpt() {
    $labels = array(
        'name'               => 'Portfolio',
        'singular_name'      => 'Réalisation',
        'menu_name'          => 'Portfolio',
        'name_admin_bar'     => 'Portfolio',
        'add_new'            => 'Ajouter une réalisation',
        'add_new_item'       => 'Ajouter une nouvelle réalisation',
        'new_item'           => 'Nouvelle réalisation',
        'edit_item'          => 'Modifier la réalisation',
        'view_item'          => 'Voir la réalisation',
        'all_items'          => 'Toutes les réalisations',
        'search_items'       => 'Rechercher une réalisation',
        'not_found'          => 'Aucune réalisation trouvée',
        'not_found_in_trash' => 'Aucune réalisation trouvée dans la corbeille'
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array('slug' => 'portfolio'), // Permalien personnalisé
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 5,
        'supports'           => array('title', 'editor', 'thumbnail'), // Ajout des images mises en avant
        'taxonomies'         => array('type_realisation'), // Catégories
        'menu_icon'          => 'dashicons-portfolio'
    );

    register_post_type('portfolio', $args);
}
add_action('init', 'niveau_child_register_portfolio_cpt');

function niveau_child_register_portfolio_taxonomy() {
    register_taxonomy('type_realisation', 'portfolio', array(
        'labels' => array(
            'name'              => 'Catégories de réalisation',
            'singular_name'     => 'Catégorie de réalisation',
            'search_items'      => 'Rechercher une catégorie',
            'all_items'         => 'Toutes les catégories',
            'edit_item'         => 'Modifier la catégorie',
            'update_item'       => 'Mettre à jour',
            'add_new_item'      => 'Ajouter une nouvelle catégorie',
            'menu_name'         => 'Catégories'
        ),
        'hierarchical' => true, // comportement comme des catégories
        'rewrite' => array('slug' => 'categorie-realisation'),
        'show_admin_column' => true
    ));
}
add_action('init', 'niveau_child_register_portfolio_taxonomy');

