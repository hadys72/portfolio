<?php
/**
 * Plugin Name: Portfolio Complet (CPT + Champs SCF)
 * Description: Déclare le CPT "portfolio" + ses champs SCF
 */

use Smart_Custom_Fields\SCF;


// 🔁 Enregistrer le CPT plus tard, au bon moment
add_action('init', function () {
    register_post_type('portfolio', [
        'label'               => 'Réalisations',
        'labels'              => [
            'name'          => 'Réalisations',
            'singular_name' => 'Réalisation',
            'add_new'       => 'Ajouter',
            'add_new_item'  => 'Ajouter une réalisation',
            'edit_item'     => 'Modifier la réalisation',
            'new_item'      => 'Nouvelle réalisation',
            'view_item'     => 'Voir la réalisation',
            'search_items'  => 'Rechercher une réalisation',
            'not_found'     => 'Aucune réalisation trouvée',
        ],
        'public'              => true,
        'has_archive'         => true,
        'menu_icon'           => 'dashicons-portfolio',
        'supports'            => ['title', 'editor', 'thumbnail'],
        'rewrite'             => ['slug' => 'portfolio'],
        'show_in_rest'        => true,
    ]);
});

// ✅ Ajouter les champs SCF (après chargement des plugins)
add_action('plugins_loaded', function () {
    if (!class_exists('\Smart_Custom_Fields\SCF')) {
        return;
    }

    add_filter('smart-cf-register-fields', function ($settings, $type, $id, $meta_type, $meta_id) {
        if ($type !== 'post' || get_post_type($meta_id) !== 'portfolio') {
            return $settings;
        }

        $settings[] = [
            'group_name' => 'champs_portfolio',
            'repeatable' => false,
            'fields'     => [
                [
                    'name'  => 'client',
                    'label' => 'Client',
                    'type'  => 'text',
                ],
                [
                    'name'  => 'date_de_realisation',
                    'label' => 'Date de réalisation',
                    'type'  => 'date',
                ],
                [
                    'name'  => 'lien_du_projet',
                    'label' => 'Lien du projet',
                    'type'  => 'text',
                ],
                [
                    'name'     => 'galerie_dimages',
                    'label'    => 'Galerie d\'images',
                    'type'     => 'image',
                    'multiple' => true,
                ],
            ],
        ];

        return $settings;
    }, 10, 5);
});
