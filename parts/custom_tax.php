<?php
// Register Custom Taxonomy
function custom_taxonomy_genre() {

	$labels = array(
		'name'                       => _x( 'Genres', 'Taxonomy General Name', 'linco' ),
		'singular_name'              => _x( 'Genre', 'Taxonomy Singular Name', 'linco' ),
		'menu_name'                  => __( 'Genres', 'linco' ),
		'all_items'                  => __( 'All Items', 'linco' ),
		'parent_item'                => __( 'Parent Item', 'linco' ),
		'parent_item_colon'          => __( 'Parent Item:', 'linco' ),
		'new_item_name'              => __( 'New Item Name', 'linco' ),
		'add_new_item'               => __( 'Add New Item', 'linco' ),
		'edit_item'                  => __( 'Edit Item', 'linco' ),
		'update_item'                => __( 'Update Item', 'linco' ),
		'view_item'                  => __( 'View Item', 'linco' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'linco' ),
		'add_or_remove_items'        => __( 'Add or remove items', 'linco' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'linco' ),
		'popular_items'              => __( 'Popular Items', 'linco' ),
		'search_items'               => __( 'Search Items', 'linco' ),
		'not_found'                  => __( 'Not Found', 'linco' ),
		'no_terms'                   => __( 'No items', 'linco' ),
		'items_list'                 => __( 'Items list', 'linco' ),
		'items_list_navigation'      => __( 'Items list navigation', 'linco' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
        'show_tagcloud'              => true,
        'show_in_rest'               => true,
		'rest_base'                  => 'genres',
	);
	register_taxonomy( 'Genre', array( 'games' ), $args );

}
add_action( 'init', 'custom_taxonomy_genre', 0 );
?>