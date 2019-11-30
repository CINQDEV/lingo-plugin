<?php
// Register Custom Post Type
function custom_post_type_games() {

	$labels = array(
		'name'                  => _x( 'Games', 'Post Type General Name', 'lingo' ),
		'singular_name'         => _x( 'Game', 'Post Type Singular Name', 'lingo' ),
		'menu_name'             => __( 'Games', 'lingo' ),
		'name_admin_bar'        => __( 'Games', 'lingo' ),
		'archives'              => __( 'Item Archives', 'lingo' ),
		'attributes'            => __( 'Item Attributes', 'lingo' ),
		'parent_item_colon'     => __( 'Parent Item:', 'lingo' ),
		'all_items'             => __( 'All Items', 'lingo' ),
		'add_new_item'          => __( 'Add New Game', 'lingo' ),
		'add_new'               => __( 'Add New', 'lingo' ),
		'new_item'              => __( 'New Game', 'lingo' ),
		'edit_item'             => __( 'Edit Game', 'lingo' ),
		'update_item'           => __( 'Update Game', 'lingo' ),
		'view_item'             => __( 'View Game', 'lingo' ),
		'view_items'            => __( 'View Games', 'lingo' ),
		'search_items'          => __( 'Search Game', 'lingo' ),
		'not_found'             => __( 'Not found', 'lingo' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'lingo' ),
		'featured_image'        => __( 'Featured Image', 'lingo' ),
		'set_featured_image'    => __( 'Set featured image', 'lingo' ),
		'remove_featured_image' => __( 'Remove featured image', 'lingo' ),
		'use_featured_image'    => __( 'Use as featured image', 'lingo' ),
		'insert_into_item'      => __( 'Insert into item', 'lingo' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'lingo' ),
		'items_list'            => __( 'Games list', 'lingo' ),
		'items_list_navigation' => __( 'Games list navigation', 'lingo' ),
		'filter_items_list'     => __( 'Filter items list', 'lingo' ),
	);
	$args = array(
		'label'                 => __( 'Game', 'lingo' ),
		'description'           => __( 'Lingo Games', 'lingo' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'taxonomies'            => array( 'game_genre', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-images-alt',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
		'show_in_rest'          => true,
        'rest_base'             => 'games',
        
	);
	register_post_type( 'games', $args );

}
add_action( 'init', 'custom_post_type_games', 0 );

?>