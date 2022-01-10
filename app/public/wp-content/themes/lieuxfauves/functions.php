<?php
/**
 * Lieux Fauves functions and definitions
 *
 *
 */


add_theme_support( 'title-tag' );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'custom-logo' );

function lct_register_assets() {
    // Déclarer jQuery
    wp_enqueue_script('jquery' );
    
	wp_enqueue_style( "main-style", get_template_directory_uri(  ) . "/src/style/main.css" );

    
}
add_action( 'wp_enqueue_scripts', 'lct_register_assets' );


function lf_projets_rpt() {

    $labels = array(
        // Le nom au pluriel
		'name'                => _x( 'Projets', 'Post Type General Name'),
		// Le nom au singulier
		'singular_name'       => _x( 'Projet', 'Post Type Singular Name'),
		// Le libellé affiché dans le menu
		'menu_name'           => __( 'Projets'),
		// Les différents libellés de l'administration
		'all_items'           => __( 'Tous les projets'),
		'view_item'           => __( 'Voir les projets'),
		'add_new_item'        => __( 'Ajouter un nouveau projet'),
		'add_new'             => __( 'Ajouter'),
		'edit_item'           => __( 'Editer le projet'),
		'update_item'         => __( 'Modifier le projet'),
		'search_items'        => __( 'Rechercher un projet'),
		'not_found'           => __( 'Non trouvé'),
		'not_found_in_trash'  => __( 'Non trouvé dans la corbeille'),
    );

	$args = array(
        'labels' => $labels,
        'public' => true,
        'show_in_rest' => true,
        'has_archive' => true,
        'supports' => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'revisions', 'custom-fields', 'page-attributes', ),
        'menu_position' => 5, 
        'menu_icon' => 'dashicons-admin-customizer',
	);

    // On enregistre notre custom post type
	register_post_type( 'projets', $args );
}

add_action( 'init', 'lf_projets_rpt' ); // Le hook init lance la fonction



// REGISTER POST TYPE

function wpm_custom_post_type() {

	// On rentre les différentes dénominations de notre custom post type qui seront affichées dans l'administration
	$labels = array(
		// Le nom au pluriel
		'name'                => _x( 'Explorations', 'Post Type General Name'),
		// Le nom au singulier
		'singular_name'       => _x( 'Exploration', 'Post Type Singular Name'),
		// Le libellé affiché dans le menu
		'menu_name'           => __( 'Explorations'),
		// Les différents libellés de l'administration
		'all_items'           => __( 'Toutes les explorations'),
		'view_item'           => __( 'Voir les expliorations'),
		'add_new_item'        => __( 'Ajouter une nouvelle exploration'),
		'add_new'             => __( 'Ajouter'),
		'edit_item'           => __( 'Editer l exploration'),
		'update_item'         => __( 'Modifier l exploration'),
		'search_items'        => __( 'Rechercher'),
		'not_found'           => __( 'Non trouvée'),
		'not_found_in_trash'  => __( 'Non trouvée dans la corbeille'),
	);
	
	// On peut définir ici d'autres options pour notre custom post type
	
	$args = array(
		'label'               => __( 'Explorations'),
		'description'         => __( 'Explorations'),
		'labels'              => $labels,
		// On définit les options disponibles dans l'éditeur de notre custom post type ( un titre, un auteur...)
		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'revisions', 'custom-fields', 'page-attributes', ),
		/* 
		* Différentes options supplémentaires
		*/
        'menu_position' => 5, 
		'show_in_rest' => true,
		'show_in_menu' => true,
		'hierarchical'        => false,
		'public'              => true,
		'has_archive'         => true,
		'rewrite'			  => array( 'slug' => 'explorations'),

	);
	
	// On enregistre notre custom post type
	register_post_type( 'explorations', $args );

}

add_action( 'init', 'wpm_custom_post_type', 0 );


add_action( 'init', 'wpm_add_taxonomies', 0 );

// TAXONOMIES

function wpm_add_taxonomies() {
	
	// Taxonomie Thématique

	// On déclare ici les différentes dénominations de notre taxonomie qui seront affichées et utilisées dans l'administration de WordPress
	$labels_vivant = array(
		'name'              			=> _x( 'Thématiques', 'taxonomy general name'),
		'singular_name'     			=> _x( 'Thématique', 'taxonomy singular name'),
		'search_items'      			=> __( 'Chercher une thématique vivant'),
		'all_items'        				=> __( 'Toutes les thématiques'),
		'edit_item'         			=> __( 'Editer la thématique'),
		'update_item'       			=> __( 'Mettre à jour la thématique'),
		'add_new_item'     				=> __( 'Ajouter une nouvelle thématique'),
		'new_item_name'     			=> __( 'Valeur de la nouvelle thématique'),
		'separate_items_with_commas'	=> __( 'Séparer les thématiques avec une virgule'),
		'menu_name'         => __( 'Thématiques'),
	);

	$args_annee = array(
		'hierarchical'      => true,
		'labels'            => $labels_vivant,
		'show_ui'           => true,
		'show_in_rest' => true,
		'show_in_menu' => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'vivant' ),
	);

	register_taxonomy( 'vivant',  array( 'projets', 'explorations' ), $args_annee );

	// Taxonomie Catégories
	
	$labels_cat = array(
		'name'                       => _x( 'Catégories du projet', 'taxonomy general name'),
		'singular_name'              => _x( 'Catégorie du projet', 'taxonomy singular name'),
		'search_items'               => __( 'Rechercher une catégorie'),
		'popular_items'              => __( 'Catégories populaires'),
		'all_items'                  => __( 'Toutes les catégories'),
		'edit_item'                  => __( 'Editer une catégorie'),
		'update_item'                => __( 'Mettre à jour une catégorie'),
		'add_new_item'               => __( 'Ajouter une nouvelle catégorie'),
		'new_item_name'              => __( 'Nom de la catégorie'),
		'separate_items_with_commas' => __( 'Séparer les catégories avec une virgule'),
		'add_or_remove_items'        => __( 'Ajouter ou supprimer une catégorie'),
		'choose_from_most_used'      => __( 'Choisir parmi les plus utilisés'),
		'not_found'                  => __( 'Pas de catégories trouvées'),
		'menu_name'                  => __( 'Catégories du projet'),
	);

	$args_cat = array(
		'hierarchical'          => true,
		'labels'                => $labels_cat,
		'show_ui'               => true,
		'show_in_rest'			=> true,
		'show_admin_column'     => true,
		'show_in_menu' => true,
		'update_count_callback' => '_update_post_term_count',
		'query_var'             => true,
		'rewrite'               => array( 'slug' => 'categories-projet' ),
	);

	register_taxonomy( 'categories-projet',  array( 'projets', 'explorations' ), $args_cat );

    	// Taxonomie Lieux

    $labels_cat = array(
		'name'                       => _x( 'Lieux', 'taxonomy general name'),
		'singular_name'              => _x( 'Lieu', 'taxonomy singular name'),
		'search_items'               => __( 'Rechercher un lieu'),
		'popular_items'              => __( 'Lieux populaires'),
		'all_items'                  => __( 'Tous les lieux'),
		'edit_item'                  => __( 'Editer le lieu'),
		'update_item'                => __( 'Mettre à jour le lieu'),
		'add_new_item'               => __( 'Ajouter un nouveau lieu'),
		'new_item_name'              => __( 'Nom du lieu'),
		'separate_items_with_commas' => __( 'Séparer les lieux avec une virgule'),
		'add_or_remove_items'        => __( 'Ajouter ou supprimer un lieu'),
		'choose_from_most_used'      => __( 'Choisir parmi les plus utilisés'),
		'not_found'                  => __( 'Pas de lieux trouvés'),
		'menu_name'                  => __( 'Lieux'),
	);

	$args_cat = array(
		'hierarchical'          => true,
		'labels'                => $labels_cat,
		'show_ui'               => true,
		'show_in_rest'			=> true,
		'show_in_menu' => true,
		'show_admin_column'     => true,
		'update_count_callback' => '_update_post_term_count',
		'query_var'             => true,
		'rewrite'               => array( 'slug' => 'lieux' ),
	);

	register_taxonomy( 'lieux',  array( 'projets', 'explorations' ), $args_cat );
	
	
}


if ( function_exists( 'get_field' ) ) {
	function get_group_field( string $group, string $field, $post_id = 0 ) {
		$group_data = get_field( $group, $post_id );
		if ( is_array( $group_data ) && array_key_exists( $field, $group_data ) ) {
			return $group_data[ $field ];
		}
		return null;
	}
}

register_nav_menus( array(
	'main-nav' => 'Menu Principal',
) );