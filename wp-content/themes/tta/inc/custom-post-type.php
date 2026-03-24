<?php
// Register Custom Post Type Speaker
function custom_post_type_speaker() {

	$labels = array(
		'name'                  => _x( 'Speakers', 'Post Type General Name', 'tta' ),
		'singular_name'         => _x( 'Speakers', 'Post Type Singular Name', 'tta' ),
		'menu_name'             => __( 'Speakers', 'tta' ),
		'name_admin_bar'        => __( 'Speakers', 'tta' ),
		'archives'              => __( 'Item Archives', 'tta' ),
		'attributes'            => __( 'Item Attributes', 'tta' ),
		'parent_item_colon'     => __( 'Parent Item:', 'tta' ),
		'all_items'             => __( 'All Items', 'tta' ),
		'add_new_item'          => __( 'Add New Item', 'tta' ),
		'add_new'               => __( 'Add New', 'tta' ),
		'new_item'              => __( 'New Item', 'tta' ),
		'edit_item'             => __( 'Edit Item', 'tta' ),
		'update_item'           => __( 'Update Item', 'tta' ),
		'view_item'             => __( 'View Item', 'tta' ),
		'view_items'            => __( 'View Items', 'tta' ),
		'search_items'          => __( 'Search Item', 'tta' ),
		'not_found'             => __( 'Not found', 'tta' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'tta' ),
		'featured_image'        => __( 'Featured Image', 'tta' ),
		'set_featured_image'    => __( 'Set featured image', 'tta' ),
		'remove_featured_image' => __( 'Remove featured image', 'tta' ),
		'use_featured_image'    => __( 'Use as featured image', 'tta' ),
		'insert_into_item'      => __( 'Insert into item', 'tta' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'tta' ),
		'items_list'            => __( 'Items list', 'tta' ),
		'items_list_navigation' => __( 'Items list navigation', 'tta' ),
		'filter_items_list'     => __( 'Filter items list', 'tta' ),
	);
	$args = array(
		'label'                 => __( 'Speakers', 'tta' ),
		'description'           => __( 'Post Type Description', 'tta' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' , 'revisions'),
		'menu_icon'            => 'dashicons-businessperson',
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'speaker', $args );

}
add_action( 'init', 'custom_post_type_speaker', 0 );

// Register Custom Post Type Podcast
function custom_post_type_podcast() {

	$labels = array(
		'name'                  => _x( 'Podcasts', 'Post Type General Name', 'tta' ),
		'singular_name'         => _x( 'Podcasts', 'Post Type Singular Name', 'tta' ),
		'menu_name'             => __( 'Podcasts', 'tta' ),
		'name_admin_bar'        => __( 'Podcasts', 'tta' ),
		'archives'              => __( 'Item Archives', 'tta' ),
		'attributes'            => __( 'Item Attributes', 'tta' ),
		'parent_item_colon'     => __( 'Parent Item:', 'tta' ),
		'all_items'             => __( 'All Items', 'tta' ),
		'add_new_item'          => __( 'Add New Item', 'tta' ),
		'add_new'               => __( 'Add New', 'tta' ),
		'new_item'              => __( 'New Item', 'tta' ),
		'edit_item'             => __( 'Edit Item', 'tta' ),
		'update_item'           => __( 'Update Item', 'tta' ),
		'view_item'             => __( 'View Item', 'tta' ),
		'view_items'            => __( 'View Items', 'tta' ),
		'search_items'          => __( 'Search Item', 'tta' ),
		'not_found'             => __( 'Not found', 'tta' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'tta' ),
		'featured_image'        => __( 'Featured Image', 'tta' ),
		'set_featured_image'    => __( 'Set featured image', 'tta' ),
		'remove_featured_image' => __( 'Remove featured image', 'tta' ),
		'use_featured_image'    => __( 'Use as featured image', 'tta' ),
		'insert_into_item'      => __( 'Insert into item', 'tta' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'tta' ),
		'items_list'            => __( 'Items list', 'tta' ),
		'items_list_navigation' => __( 'Items list navigation', 'tta' ),
		'filter_items_list'     => __( 'Filter items list', 'tta' ),
	);
	$args = array(
		'label'                 => __( 'Podcasts', 'tta' ),
		'description'           => __( 'Post Type Description', 'tta' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' , 'revisions', 'author'),
		'menu_icon'            => 'dashicons-megaphone',
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'podcast', $args );

}
add_action( 'init', 'custom_post_type_podcast', 0 );

// Register Custom Taxonomy - podcast-service
function custom_taxonomy_podcast() {

	$labels = array(
		'name'                       => _x( 'Services', 'Taxonomy General Name', 'tta' ),
		'singular_name'              => _x( 'Service', 'Taxonomy Singular Name', 'tta' ),
		'menu_name'                  => __( 'Services', 'tta' ),
		'all_items'                  => __( 'All Items', 'tta' ),
		'parent_item'                => __( 'Parent Item', 'tta' ),
		'parent_item_colon'          => __( 'Parent Item:', 'tta' ),
		'new_item_name'              => __( 'New Item Name', 'tta' ),
		'add_new_item'               => __( 'Add New Item', 'tta' ),
		'edit_item'                  => __( 'Edit Item', 'tta' ),
		'update_item'                => __( 'Update Item', 'tta' ),
		'view_item'                  => __( 'View Item', 'tta' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'tta' ),
		'add_or_remove_items'        => __( 'Add or remove items', 'tta' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'tta' ),
		'popular_items'              => __( 'Popular Items', 'tta' ),
		'search_items'               => __( 'Search Items', 'tta' ),
		'not_found'                  => __( 'Not Found', 'tta' ),
		'no_terms'                   => __( 'No items', 'tta' ),
		'items_list'                 => __( 'Items list', 'tta' ),
		'items_list_navigation'      => __( 'Items list navigation', 'tta' ),
	);
	$rewrite = array(
		'slug'                       => 'podcast-services',
		'with_front'                 => true,
		'hierarchical'               => false,
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
		'rewrite'                    => $rewrite,
	);
	register_taxonomy( 'podcast-services', array( 'podcast' ), $args );
	
	
	
	$labels = array(
		'name'                       => _x( 'Industries', 'Taxonomy General Name', 'tta' ),
		'singular_name'              => _x( 'Industry', 'Taxonomy Singular Name', 'tta' ),
		'menu_name'                  => __( 'Industries', 'tta' ),
		'all_items'                  => __( 'All Items', 'tta' ),
		'parent_item'                => __( 'Parent Item', 'tta' ),
		'parent_item_colon'          => __( 'Parent Item:', 'tta' ),
		'new_item_name'              => __( 'New Item Name', 'tta' ),
		'add_new_item'               => __( 'Add New Item', 'tta' ),
		'edit_item'                  => __( 'Edit Item', 'tta' ),
		'update_item'                => __( 'Update Item', 'tta' ),
		'view_item'                  => __( 'View Item', 'tta' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'tta' ),
		'add_or_remove_items'        => __( 'Add or remove items', 'tta' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'tta' ),
		'popular_items'              => __( 'Popular Items', 'tta' ),
		'search_items'               => __( 'Search Items', 'tta' ),
		'not_found'                  => __( 'Not Found', 'tta' ),
		'no_terms'                   => __( 'No items', 'tta' ),
		'items_list'                 => __( 'Items list', 'tta' ),
		'items_list_navigation'      => __( 'Items list navigation', 'tta' ),
	);
	$rewrite = array(
		'slug'                       => 'podcast-industries',
		'with_front'                 => true,
		'hierarchical'               => false,
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
		'rewrite'                    => $rewrite,
	);
	register_taxonomy( 'podcast-industries', array( 'podcast' ), $args );

}
add_action( 'init', 'custom_taxonomy_podcast', 0 );


// Register Custom Post Type Testimonial
function custom_post_type_testimonial() {

	$labels = array(
		'name'                  => _x( 'Testimonials', 'Post Type General Name', 'tta' ),
		'singular_name'         => _x( 'Testimonials', 'Post Type Singular Name', 'tta' ),
		'menu_name'             => __( 'Testimonials', 'tta' ),
		'name_admin_bar'        => __( 'Testimonials', 'tta' ),
		'archives'              => __( 'Item Archives', 'tta' ),
		'attributes'            => __( 'Item Attributes', 'tta' ),
		'parent_item_colon'     => __( 'Parent Item:', 'tta' ),
		'all_items'             => __( 'All Items', 'tta' ),
		'add_new_item'          => __( 'Add New Item', 'tta' ),
		'add_new'               => __( 'Add New', 'tta' ),
		'new_item'              => __( 'New Item', 'tta' ),
		'edit_item'             => __( 'Edit Item', 'tta' ),
		'update_item'           => __( 'Update Item', 'tta' ),
		'view_item'             => __( 'View Item', 'tta' ),
		'view_items'            => __( 'View Items', 'tta' ),
		'search_items'          => __( 'Search Item', 'tta' ),
		'not_found'             => __( 'Not found', 'tta' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'tta' ),
		'featured_image'        => __( 'Featured Image', 'tta' ),
		'set_featured_image'    => __( 'Set featured image', 'tta' ),
		'remove_featured_image' => __( 'Remove featured image', 'tta' ),
		'use_featured_image'    => __( 'Use as featured image', 'tta' ),
		'insert_into_item'      => __( 'Insert into item', 'tta' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'tta' ),
		'items_list'            => __( 'Items list', 'tta' ),
		'items_list_navigation' => __( 'Items list navigation', 'tta' ),
		'filter_items_list'     => __( 'Filter items list', 'tta' ),
	);
	$args = array(
		'label'                 => __( 'Testimonials', 'tta' ),
		'description'           => __( 'Post Type Description', 'tta' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' , 'revisions'),
		'menu_icon'            => 'dashicons-testimonial',
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'testimonial', $args );

}
add_action( 'init', 'custom_post_type_testimonial', 0 );

// Register Custom Post Type Workshops
function custom_post_type_workshop() {

	$labels = array(
		'name'                  => _x( 'Workshops', 'Post Type General Name', 'tta' ),
		'singular_name'         => _x( 'Workshops', 'Post Type Singular Name', 'tta' ),
		'menu_name'             => __( 'Workshops', 'tta' ),
		'name_admin_bar'        => __( 'Workshops', 'tta' ),
		'archives'              => __( 'Item Archives', 'tta' ),
		'attributes'            => __( 'Item Attributes', 'tta' ),
		'parent_item_colon'     => __( 'Parent Item:', 'tta' ),
		'all_items'             => __( 'All Items', 'tta' ),
		'add_new_item'          => __( 'Add New Item', 'tta' ),
		'add_new'               => __( 'Add New', 'tta' ),
		'new_item'              => __( 'New Item', 'tta' ),
		'edit_item'             => __( 'Edit Item', 'tta' ),
		'update_item'           => __( 'Update Item', 'tta' ),
		'view_item'             => __( 'View Item', 'tta' ),
		'view_items'            => __( 'View Items', 'tta' ),
		'search_items'          => __( 'Search Item', 'tta' ),
		'not_found'             => __( 'Not found', 'tta' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'tta' ),
		'featured_image'        => __( 'Featured Image', 'tta' ),
		'set_featured_image'    => __( 'Set featured image', 'tta' ),
		'remove_featured_image' => __( 'Remove featured image', 'tta' ),
		'use_featured_image'    => __( 'Use as featured image', 'tta' ),
		'insert_into_item'      => __( 'Insert into item', 'tta' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'tta' ),
		'items_list'            => __( 'Items list', 'tta' ),
		'items_list_navigation' => __( 'Items list navigation', 'tta' ),
		'filter_items_list'     => __( 'Filter items list', 'tta' ),
	);
	$args = array(
		'label'                 => __( 'Workshops', 'tta' ),
		'description'           => __( 'Post Type Description', 'tta' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' , 'revisions'),
		'menu_icon'            => 'dashicons-welcome-learn-more',
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'workshop', $args );

}
add_action( 'init', 'custom_post_type_workshop', 0 );

// Register Custom Post Type Awards
function custom_post_type_award() {

	$labels = array(
		'name'                  => _x( 'Awards', 'Post Type General Name', 'tta' ),
		'singular_name'         => _x( 'Awards', 'Post Type Singular Name', 'tta' ),
		'menu_name'             => __( 'Awards', 'tta' ),
		'name_admin_bar'        => __( 'Awards', 'tta' ),
		'archives'              => __( 'Item Archives', 'tta' ),
		'attributes'            => __( 'Item Attributes', 'tta' ),
		'parent_item_colon'     => __( 'Parent Item:', 'tta' ),
		'all_items'             => __( 'All Items', 'tta' ),
		'add_new_item'          => __( 'Add New Item', 'tta' ),
		'add_new'               => __( 'Add New', 'tta' ),
		'new_item'              => __( 'New Item', 'tta' ),
		'edit_item'             => __( 'Edit Item', 'tta' ),
		'update_item'           => __( 'Update Item', 'tta' ),
		'view_item'             => __( 'View Item', 'tta' ),
		'view_items'            => __( 'View Items', 'tta' ),
		'search_items'          => __( 'Search Item', 'tta' ),
		'not_found'             => __( 'Not found', 'tta' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'tta' ),
		'featured_image'        => __( 'Featured Image', 'tta' ),
		'set_featured_image'    => __( 'Set featured image', 'tta' ),
		'remove_featured_image' => __( 'Remove featured image', 'tta' ),
		'use_featured_image'    => __( 'Use as featured image', 'tta' ),
		'insert_into_item'      => __( 'Insert into item', 'tta' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'tta' ),
		'items_list'            => __( 'Items list', 'tta' ),
		'items_list_navigation' => __( 'Items list navigation', 'tta' ),
		'filter_items_list'     => __( 'Filter items list', 'tta' ),
	);
	$args = array(
		'label'                 => __( 'Awards', 'tta' ),
		'description'           => __( 'Post Type Description', 'tta' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' , 'revisions'),
		'menu_icon'            => 'dashicons-awards',
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'award', $args );

}
add_action( 'init', 'custom_post_type_award', 0 );

// Register Custom Post Type - Case Study
function custom_post_type_casestudy() {

	$labels = array(
		'name'                  => _x( 'Case Study', 'Post Type General Name', 'tta' ),
		'singular_name'         => _x( 'Case Study', 'Post Type Singular Name', 'tta' ),
		'menu_name'             => __( 'Case Study', 'tta' ),
		'name_admin_bar'        => __( 'Case Study', 'tta' ),
		'archives'              => __( 'Item Archives', 'tta' ),
		'attributes'            => __( 'Item Attributes', 'tta' ),
		'parent_item_colon'     => __( 'Parent Item:', 'tta' ),
		'all_items'             => __( 'All Items', 'tta' ),
		'add_new_item'          => __( 'Add New Item', 'tta' ),
		'add_new'               => __( 'Add New', 'tta' ),
		'new_item'              => __( 'New Item', 'tta' ),
		'edit_item'             => __( 'Edit Item', 'tta' ),
		'update_item'           => __( 'Update Item', 'tta' ),
		'view_item'             => __( 'View Item', 'tta' ),
		'view_items'            => __( 'View Items', 'tta' ),
		'search_items'          => __( 'Search Item', 'tta' ),
		'not_found'             => __( 'Not found', 'tta' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'tta' ),
		'featured_image'        => __( 'Featured Image', 'tta' ),
		'set_featured_image'    => __( 'Set featured image', 'tta' ),
		'remove_featured_image' => __( 'Remove featured image', 'tta' ),
		'use_featured_image'    => __( 'Use as featured image', 'tta' ),
		'insert_into_item'      => __( 'Insert into item', 'tta' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'tta' ),
		'items_list'            => __( 'Items list', 'tta' ),
		'items_list_navigation' => __( 'Items list navigation', 'tta' ),
		'filter_items_list'     => __( 'Filter items list', 'tta' ),
	);
	$rewrite = array(
		'slug'                  => 'casestudy',
		'with_front'            => true,
		'pages'                 => true,
		'feeds'                 => true,
	);
	$args = array(
		'label'                 => __( 'Case Study', 'tta' ),
		'description'           => __( 'Post Type Description', 'tta' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'excerpt', 'revisions' ),
		'menu_icon'            => 'dashicons-book',
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'rewrite'               => $rewrite,
		'capability_type'       => 'page',
	);
	register_post_type( 'casestudy', $args );

}
add_action( 'init', 'custom_post_type_casestudy', 0 );

// Register Custom Taxonomy - casestudy-service
function custom_taxonomy_casestudy() {

	$labels = array(
		'name'                       => _x( 'Services', 'Taxonomy General Name', 'tta' ),
		'singular_name'              => _x( 'Service', 'Taxonomy Singular Name', 'tta' ),
		'menu_name'                  => __( 'Services', 'tta' ),
		'all_items'                  => __( 'All Items', 'tta' ),
		'parent_item'                => __( 'Parent Item', 'tta' ),
		'parent_item_colon'          => __( 'Parent Item:', 'tta' ),
		'new_item_name'              => __( 'New Item Name', 'tta' ),
		'add_new_item'               => __( 'Add New Item', 'tta' ),
		'edit_item'                  => __( 'Edit Item', 'tta' ),
		'update_item'                => __( 'Update Item', 'tta' ),
		'view_item'                  => __( 'View Item', 'tta' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'tta' ),
		'add_or_remove_items'        => __( 'Add or remove items', 'tta' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'tta' ),
		'popular_items'              => __( 'Popular Items', 'tta' ),
		'search_items'               => __( 'Search Items', 'tta' ),
		'not_found'                  => __( 'Not Found', 'tta' ),
		'no_terms'                   => __( 'No items', 'tta' ),
		'items_list'                 => __( 'Items list', 'tta' ),
		'items_list_navigation'      => __( 'Items list navigation', 'tta' ),
	);
	$rewrite = array(
		'slug'                       => 'casestudy-services',
		'with_front'                 => true,
		'hierarchical'               => false,
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
		'rewrite'                    => $rewrite,
	);
	register_taxonomy( 'casestudy-services', array( 'casestudy' ), $args );
	
	
	
	$labels = array(
		'name'                       => _x( 'Industries', 'Taxonomy General Name', 'tta' ),
		'singular_name'              => _x( 'Industry', 'Taxonomy Singular Name', 'tta' ),
		'menu_name'                  => __( 'Industries', 'tta' ),
		'all_items'                  => __( 'All Items', 'tta' ),
		'parent_item'                => __( 'Parent Item', 'tta' ),
		'parent_item_colon'          => __( 'Parent Item:', 'tta' ),
		'new_item_name'              => __( 'New Item Name', 'tta' ),
		'add_new_item'               => __( 'Add New Item', 'tta' ),
		'edit_item'                  => __( 'Edit Item', 'tta' ),
		'update_item'                => __( 'Update Item', 'tta' ),
		'view_item'                  => __( 'View Item', 'tta' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'tta' ),
		'add_or_remove_items'        => __( 'Add or remove items', 'tta' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'tta' ),
		'popular_items'              => __( 'Popular Items', 'tta' ),
		'search_items'               => __( 'Search Items', 'tta' ),
		'not_found'                  => __( 'Not Found', 'tta' ),
		'no_terms'                   => __( 'No items', 'tta' ),
		'items_list'                 => __( 'Items list', 'tta' ),
		'items_list_navigation'      => __( 'Items list navigation', 'tta' ),
	);
	$rewrite = array(
		'slug'                       => 'casestudy-industries',
		'with_front'                 => true,
		'hierarchical'               => false,
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
		'rewrite'                    => $rewrite,
	);
	register_taxonomy( 'casestudy-industries', array( 'casestudy' ), $args );

}
add_action( 'init', 'custom_taxonomy_casestudy', 0 );


// Register Custom Post Type - Resources
function custom_post_type_resource() {

	$labels = array(
		'name'                  => _x( 'Resources', 'Post Type General Name', 'tta' ),
		'singular_name'         => _x( 'Resources', 'Post Type Singular Name', 'tta' ),
		'menu_name'             => __( 'Resources', 'tta' ),
		'name_admin_bar'        => __( 'Resources', 'tta' ),
		'archives'              => __( 'Item Archives', 'tta' ),
		'attributes'            => __( 'Item Attributes', 'tta' ),
		'parent_item_colon'     => __( 'Parent Item:', 'tta' ),
		'all_items'             => __( 'All Items', 'tta' ),
		'add_new_item'          => __( 'Add New Item', 'tta' ),
		'add_new'               => __( 'Add New', 'tta' ),
		'new_item'              => __( 'New Item', 'tta' ),
		'edit_item'             => __( 'Edit Item', 'tta' ),
		'update_item'           => __( 'Update Item', 'tta' ),
		'view_item'             => __( 'View Item', 'tta' ),
		'view_items'            => __( 'View Items', 'tta' ),
		'search_items'          => __( 'Search Item', 'tta' ),
		'not_found'             => __( 'Not found', 'tta' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'tta' ),
		'featured_image'        => __( 'Featured Image', 'tta' ),
		'set_featured_image'    => __( 'Set featured image', 'tta' ),
		'remove_featured_image' => __( 'Remove featured image', 'tta' ),
		'use_featured_image'    => __( 'Use as featured image', 'tta' ),
		'insert_into_item'      => __( 'Insert into item', 'tta' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'tta' ),
		'items_list'            => __( 'Items list', 'tta' ),
		'items_list_navigation' => __( 'Items list navigation', 'tta' ),
		'filter_items_list'     => __( 'Filter items list', 'tta' ),
	);
	$rewrite = array(
		'slug'                  => 'resource',
		'with_front'            => true,
		'pages'                 => true,
		'feeds'                 => true,
	);
	$args = array(
		'label'                 => __( 'Resources', 'tta' ),
		'description'           => __( 'Post Type Description', 'tta' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'excerpt', 'revisions' ),
		'menu_icon'            => 'dashicons-info',
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'rewrite'               => $rewrite,
		'capability_type'       => 'page',
	);
	register_post_type( 'resource', $args );

}
add_action( 'init', 'custom_post_type_resource', 0 );

// Register Custom Taxonomy - Resource-category
function custom_taxonomy_resource() {

	$labels = array(
		'name'                       => _x( 'Categories', 'Taxonomy General Name', 'tta' ),
		'singular_name'              => _x( 'Category', 'Taxonomy Singular Name', 'tta' ),
		'menu_name'                  => __( 'Categories', 'tta' ),
		'all_items'                  => __( 'All Items', 'tta' ),
		'parent_item'                => __( 'Parent Item', 'tta' ),
		'parent_item_colon'          => __( 'Parent Item:', 'tta' ),
		'new_item_name'              => __( 'New Item Name', 'tta' ),
		'add_new_item'               => __( 'Add New Item', 'tta' ),
		'edit_item'                  => __( 'Edit Item', 'tta' ),
		'update_item'                => __( 'Update Item', 'tta' ),
		'view_item'                  => __( 'View Item', 'tta' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'tta' ),
		'add_or_remove_items'        => __( 'Add or remove items', 'tta' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'tta' ),
		'popular_items'              => __( 'Popular Items', 'tta' ),
		'search_items'               => __( 'Search Items', 'tta' ),
		'not_found'                  => __( 'Not Found', 'tta' ),
		'no_terms'                   => __( 'No items', 'tta' ),
		'items_list'                 => __( 'Items list', 'tta' ),
		'items_list_navigation'      => __( 'Items list navigation', 'tta' ),
	);
	$rewrite = array(
		'slug'                       => 'resource-category',
		'with_front'                 => true,
		'hierarchical'               => false,
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
		'rewrite'                    => $rewrite,
	);
	register_taxonomy( 'resource-category', array( 'resource' ), $args );
	
	$labels = array(
		'name'                       => _x( 'Services', 'Taxonomy General Name', 'tta' ),
		'singular_name'              => _x( 'Service', 'Taxonomy Singular Name', 'tta' ),
		'menu_name'                  => __( 'Services', 'tta' ),
		'all_items'                  => __( 'All Items', 'tta' ),
		'parent_item'                => __( 'Parent Item', 'tta' ),
		'parent_item_colon'          => __( 'Parent Item:', 'tta' ),
		'new_item_name'              => __( 'New Item Name', 'tta' ),
		'add_new_item'               => __( 'Add New Item', 'tta' ),
		'edit_item'                  => __( 'Edit Item', 'tta' ),
		'update_item'                => __( 'Update Item', 'tta' ),
		'view_item'                  => __( 'View Item', 'tta' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'tta' ),
		'add_or_remove_items'        => __( 'Add or remove items', 'tta' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'tta' ),
		'popular_items'              => __( 'Popular Items', 'tta' ),
		'search_items'               => __( 'Search Items', 'tta' ),
		'not_found'                  => __( 'Not Found', 'tta' ),
		'no_terms'                   => __( 'No items', 'tta' ),
		'items_list'                 => __( 'Items list', 'tta' ),
		'items_list_navigation'      => __( 'Items list navigation', 'tta' ),
	);
	$rewrite = array(
		'slug'                       => 'resource-services',
		'with_front'                 => true,
		'hierarchical'               => false,
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
		'rewrite'                    => $rewrite,
	);
	register_taxonomy( 'resource-services', array( 'resource' ), $args );
	
	
	
	$labels = array(
		'name'                       => _x( 'Industries', 'Taxonomy General Name', 'tta' ),
		'singular_name'              => _x( 'Industry', 'Taxonomy Singular Name', 'tta' ),
		'menu_name'                  => __( 'Industries', 'tta' ),
		'all_items'                  => __( 'All Items', 'tta' ),
		'parent_item'                => __( 'Parent Item', 'tta' ),
		'parent_item_colon'          => __( 'Parent Item:', 'tta' ),
		'new_item_name'              => __( 'New Item Name', 'tta' ),
		'add_new_item'               => __( 'Add New Item', 'tta' ),
		'edit_item'                  => __( 'Edit Item', 'tta' ),
		'update_item'                => __( 'Update Item', 'tta' ),
		'view_item'                  => __( 'View Item', 'tta' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'tta' ),
		'add_or_remove_items'        => __( 'Add or remove items', 'tta' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'tta' ),
		'popular_items'              => __( 'Popular Items', 'tta' ),
		'search_items'               => __( 'Search Items', 'tta' ),
		'not_found'                  => __( 'Not Found', 'tta' ),
		'no_terms'                   => __( 'No items', 'tta' ),
		'items_list'                 => __( 'Items list', 'tta' ),
		'items_list_navigation'      => __( 'Items list navigation', 'tta' ),
	);
	$rewrite = array(
		'slug'                       => 'resource-industries',
		'with_front'                 => true,
		'hierarchical'               => false,
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
		'rewrite'                    => $rewrite,
	);
	register_taxonomy( 'resource-industries', array( 'resource' ), $args );
	
}
add_action( 'init', 'custom_taxonomy_resource', 0 );


// Register Custom Post Type - News
function custom_post_type_news() {

	$labels = array(
		'name'                  => _x( 'News', 'Post Type General Name', 'tta' ),
		'singular_name'         => _x( 'News', 'Post Type Singular Name', 'tta' ),
		'menu_name'             => __( 'News', 'tta' ),
		'name_admin_bar'        => __( 'News', 'tta' ),
		'archives'              => __( 'Item Archives', 'tta' ),
		'attributes'            => __( 'Item Attributes', 'tta' ),
		'parent_item_colon'     => __( 'Parent Item:', 'tta' ),
		'all_items'             => __( 'All Items', 'tta' ),
		'add_new_item'          => __( 'Add New Item', 'tta' ),
		'add_new'               => __( 'Add New', 'tta' ),
		'new_item'              => __( 'New Item', 'tta' ),
		'edit_item'             => __( 'Edit Item', 'tta' ),
		'update_item'           => __( 'Update Item', 'tta' ),
		'view_item'             => __( 'View Item', 'tta' ),
		'view_items'            => __( 'View Items', 'tta' ),
		'search_items'          => __( 'Search Item', 'tta' ),
		'not_found'             => __( 'Not found', 'tta' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'tta' ),
		'featured_image'        => __( 'Featured Image', 'tta' ),
		'set_featured_image'    => __( 'Set featured image', 'tta' ),
		'remove_featured_image' => __( 'Remove featured image', 'tta' ),
		'use_featured_image'    => __( 'Use as featured image', 'tta' ),
		'insert_into_item'      => __( 'Insert into item', 'tta' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'tta' ),
		'items_list'            => __( 'Items list', 'tta' ),
		'items_list_navigation' => __( 'Items list navigation', 'tta' ),
		'filter_items_list'     => __( 'Filter items list', 'tta' ),
	);
	$rewrite = array(
		'slug'                  => 'news',
		'with_front'            => true,
		'pages'                 => true,
		'feeds'                 => true,
	);
	$args = array(
		'label'                 => __( 'News', 'tta' ),
		'description'           => __( 'Post Type Description', 'tta' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'excerpt', 'revisions' ),
		'menu_icon'            => 'dashicons-text-page',
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'rewrite'               => $rewrite,
		'capability_type'       => 'page',
	);
	register_post_type( 'news', $args );

}
add_action( 'init', 'custom_post_type_news', 0 );

// Register Custom Taxonomy - news-category
function custom_taxonomy_news() {

	$labels = array(
		'name'                       => _x( 'Services', 'Taxonomy General Name', 'tta' ),
		'singular_name'              => _x( 'Service', 'Taxonomy Singular Name', 'tta' ),
		'menu_name'                  => __( 'Services', 'tta' ),
		'all_items'                  => __( 'All Items', 'tta' ),
		'parent_item'                => __( 'Parent Item', 'tta' ),
		'parent_item_colon'          => __( 'Parent Item:', 'tta' ),
		'new_item_name'              => __( 'New Item Name', 'tta' ),
		'add_new_item'               => __( 'Add New Item', 'tta' ),
		'edit_item'                  => __( 'Edit Item', 'tta' ),
		'update_item'                => __( 'Update Item', 'tta' ),
		'view_item'                  => __( 'View Item', 'tta' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'tta' ),
		'add_or_remove_items'        => __( 'Add or remove items', 'tta' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'tta' ),
		'popular_items'              => __( 'Popular Items', 'tta' ),
		'search_items'               => __( 'Search Items', 'tta' ),
		'not_found'                  => __( 'Not Found', 'tta' ),
		'no_terms'                   => __( 'No items', 'tta' ),
		'items_list'                 => __( 'Items list', 'tta' ),
		'items_list_navigation'      => __( 'Items list navigation', 'tta' ),
	);
	$rewrite = array(
		'slug'                       => 'news-services',
		'with_front'                 => true,
		'hierarchical'               => false,
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
		'rewrite'                    => $rewrite,
	);
	register_taxonomy( 'news-services', array( 'news' ), $args );
	
	$labels = array(
		'name'                       => _x( 'Industries', 'Taxonomy General Name', 'tta' ),
		'singular_name'              => _x( 'Industry', 'Taxonomy Singular Name', 'tta' ),
		'menu_name'                  => __( 'Industries', 'tta' ),
		'all_items'                  => __( 'All Items', 'tta' ),
		'parent_item'                => __( 'Parent Item', 'tta' ),
		'parent_item_colon'          => __( 'Parent Item:', 'tta' ),
		'new_item_name'              => __( 'New Item Name', 'tta' ),
		'add_new_item'               => __( 'Add New Item', 'tta' ),
		'edit_item'                  => __( 'Edit Item', 'tta' ),
		'update_item'                => __( 'Update Item', 'tta' ),
		'view_item'                  => __( 'View Item', 'tta' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'tta' ),
		'add_or_remove_items'        => __( 'Add or remove items', 'tta' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'tta' ),
		'popular_items'              => __( 'Popular Items', 'tta' ),
		'search_items'               => __( 'Search Items', 'tta' ),
		'not_found'                  => __( 'Not Found', 'tta' ),
		'no_terms'                   => __( 'No items', 'tta' ),
		'items_list'                 => __( 'Items list', 'tta' ),
		'items_list_navigation'      => __( 'Items list navigation', 'tta' ),
	);
	$rewrite = array(
		'slug'                       => 'news-industries',
		'with_front'                 => true,
		'hierarchical'               => false,
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
		'rewrite'                    => $rewrite,
	);
	register_taxonomy( 'news-industries', array( 'news' ), $args );
}
add_action( 'init', 'custom_taxonomy_news', 0 );


if( function_exists('acf_add_options_page') ) {
	
 acf_add_options_sub_page(array(
        'page_title'   => 'Settings',
        'menu_title'    => 'Settings',
        'menu_slug'    => 'news_settings',
        'capability'    => 'edit_posts',
        'parent_slug'  => 'edit.php?post_type=news',
    ));
	
   acf_add_options_sub_page(array(
        'page_title'   => 'Settings',
        'menu_title'    => 'Settings',
        'menu_slug'    => 'team_settings',
        'capability'    => 'edit_posts',
        'parent_slug'  => 'edit.php?post_type=team',
    ));
	
	 acf_add_options_sub_page(array(
        'page_title'   => 'Settings',
        'menu_title'    => 'Settings',
        'menu_slug'    => 'event_settings',
        'capability'    => 'edit_posts',
        'parent_slug'  => 'edit.php?post_type=event',
    ));
	
		
	 acf_add_options_sub_page(array(
        'page_title'   => 'Settings',
        'menu_title'    => 'Settings',
        'menu_slug'    => 'clientevent_settings',
        'capability'    => 'edit_posts',
        'parent_slug'  => 'edit.php?post_type=client-event',
    ));
	
}

// Register Custom Post Type - Teams
function custom_post_type_team() {

	$labels = array(
		'name'                  => _x( 'Teams', 'Post Type General Name', 'tta' ),
		'singular_name'         => _x( 'Teams', 'Post Type Singular Name', 'tta' ),
		'menu_name'             => __( 'Teams', 'tta' ),
		'name_admin_bar'        => __( 'Teams', 'tta' ),
		'archives'              => __( 'Item Archives', 'tta' ),
		'attributes'            => __( 'Item Attributes', 'tta' ),
		'parent_item_colon'     => __( 'Parent Item:', 'tta' ),
		'all_items'             => __( 'All Items', 'tta' ),
		'add_new_item'          => __( 'Add New Item', 'tta' ),
		'add_new'               => __( 'Add New', 'tta' ),
		'new_item'              => __( 'New Item', 'tta' ),
		'edit_item'             => __( 'Edit Item', 'tta' ),
		'update_item'           => __( 'Update Item', 'tta' ),
		'view_item'             => __( 'View Item', 'tta' ),
		'view_items'            => __( 'View Items', 'tta' ),
		'search_items'          => __( 'Search Item', 'tta' ),
		'not_found'             => __( 'Not found', 'tta' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'tta' ),
		'featured_image'        => __( 'Featured Image', 'tta' ),
		'set_featured_image'    => __( 'Set featured image', 'tta' ),
		'remove_featured_image' => __( 'Remove featured image', 'tta' ),
		'use_featured_image'    => __( 'Use as featured image', 'tta' ),
		'insert_into_item'      => __( 'Insert into item', 'tta' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'tta' ),
		'items_list'            => __( 'Items list', 'tta' ),
		'items_list_navigation' => __( 'Items list navigation', 'tta' ),
		'filter_items_list'     => __( 'Filter items list', 'tta' ),
	);
	$rewrite = array(
		'slug'                  => 'teams',
		'with_front'            => true,
		'pages'                 => true,
		'feeds'                 => true,
	);
	$args = array(
		'label'                 => __( 'Teams', 'tta' ),
		'description'           => __( 'Post Type Description', 'tta' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'excerpt', 'revisions' ),
		'menu_icon'            => 'dashicons-groups',
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'rewrite'               => $rewrite,
		'capability_type'       => 'page',
	);
	register_post_type( 'team', $args );

}
add_action( 'init', 'custom_post_type_team', 0 );

// Register Custom Taxonomy - team-category
function custom_taxonomy_team() {

	$labels = array(
		'name'                       => _x( 'Categories', 'Taxonomy General Name', 'tta' ),
		'singular_name'              => _x( 'Category', 'Taxonomy Singular Name', 'tta' ),
		'menu_name'                  => __( 'Categories', 'tta' ),
		'all_items'                  => __( 'All Items', 'tta' ),
		'parent_item'                => __( 'Parent Item', 'tta' ),
		'parent_item_colon'          => __( 'Parent Item:', 'tta' ),
		'new_item_name'              => __( 'New Item Name', 'tta' ),
		'add_new_item'               => __( 'Add New Item', 'tta' ),
		'edit_item'                  => __( 'Edit Item', 'tta' ),
		'update_item'                => __( 'Update Item', 'tta' ),
		'view_item'                  => __( 'View Item', 'tta' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'tta' ),
		'add_or_remove_items'        => __( 'Add or remove items', 'tta' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'tta' ),
		'popular_items'              => __( 'Popular Items', 'tta' ),
		'search_items'               => __( 'Search Items', 'tta' ),
		'not_found'                  => __( 'Not Found', 'tta' ),
		'no_terms'                   => __( 'No items', 'tta' ),
		'items_list'                 => __( 'Items list', 'tta' ),
		'items_list_navigation'      => __( 'Items list navigation', 'tta' ),
	);
	$rewrite = array(
		'slug'                       => 'team-category',
		'with_front'                 => true,
		'hierarchical'               => false,
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
		'rewrite'                    => $rewrite,
	);
	register_taxonomy( 'team-category', array( 'team' ), $args );

}
add_action( 'init', 'custom_taxonomy_team', 0 );


// Register Custom Post Type - Event
function custom_post_type_event() {

	$labels = array(
		'name'                  => _x( 'Events', 'Post Type General Name', 'tta' ),
		'singular_name'         => _x( 'Events', 'Post Type Singular Name', 'tta' ),
		'menu_name'             => __( 'Events', 'tta' ),
		'name_admin_bar'        => __( 'Events', 'tta' ),
		'archives'              => __( 'Item Archives', 'tta' ),
		'attributes'            => __( 'Item Attributes', 'tta' ),
		'parent_item_colon'     => __( 'Parent Item:', 'tta' ),
		'all_items'             => __( 'All Items', 'tta' ),
		'add_new_item'          => __( 'Add New Item', 'tta' ),
		'add_new'               => __( 'Add New', 'tta' ),
		'new_item'              => __( 'New Item', 'tta' ),
		'edit_item'             => __( 'Edit Item', 'tta' ),
		'update_item'           => __( 'Update Item', 'tta' ),
		'view_item'             => __( 'View Item', 'tta' ),
		'view_items'            => __( 'View Items', 'tta' ),
		'search_items'          => __( 'Search Item', 'tta' ),
		'not_found'             => __( 'Not found', 'tta' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'tta' ),
		'featured_image'        => __( 'Featured Image', 'tta' ),
		'set_featured_image'    => __( 'Set featured image', 'tta' ),
		'remove_featured_image' => __( 'Remove featured image', 'tta' ),
		'use_featured_image'    => __( 'Use as featured image', 'tta' ),
		'insert_into_item'      => __( 'Insert into item', 'tta' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'tta' ),
		'items_list'            => __( 'Items list', 'tta' ),
		'items_list_navigation' => __( 'Items list navigation', 'tta' ),
		'filter_items_list'     => __( 'Filter items list', 'tta' ),
	);
	$rewrite = array(
		'slug'                  => 'events',
		'with_front'            => true,
		'pages'                 => true,
		'feeds'                 => true,
	);
	$args = array(
		'label'                 => __( 'Event', 'tta' ),
		'description'           => __( 'Post Type Description', 'tta' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'excerpt', 'revisions' ),
		'taxonomies'            => array('post_tag') ,
		'menu_icon'            => 'dashicons-groups',
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'rewrite'               => $rewrite,
		'capability_type'       => 'page',
	);
	register_post_type( 'event', $args );

}
add_action( 'init', 'custom_post_type_event', 0 );

// Register Custom Taxonomy - team-category
function custom_taxonomy_event() {

	$labels = array(
		'name'                       => _x( 'Categories', 'Taxonomy General Name', 'tta' ),
		'singular_name'              => _x( 'Category', 'Taxonomy Singular Name', 'tta' ),
		'menu_name'                  => __( 'Categories', 'tta' ),
		'all_items'                  => __( 'All Items', 'tta' ),
		'parent_item'                => __( 'Parent Item', 'tta' ),
		'parent_item_colon'          => __( 'Parent Item:', 'tta' ),
		'new_item_name'              => __( 'New Item Name', 'tta' ),
		'add_new_item'               => __( 'Add New Item', 'tta' ),
		'edit_item'                  => __( 'Edit Item', 'tta' ),
		'update_item'                => __( 'Update Item', 'tta' ),
		'view_item'                  => __( 'View Item', 'tta' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'tta' ),
		'add_or_remove_items'        => __( 'Add or remove items', 'tta' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'tta' ),
		'popular_items'              => __( 'Popular Items', 'tta' ),
		'search_items'               => __( 'Search Items', 'tta' ),
		'not_found'                  => __( 'Not Found', 'tta' ),
		'no_terms'                   => __( 'No items', 'tta' ),
		'items_list'                 => __( 'Items list', 'tta' ),
		'items_list_navigation'      => __( 'Items list navigation', 'tta' ),
	);
	$rewrite = array(
		'slug'                       => 'event-category',
		'with_front'                 => true,
		'hierarchical'               => false,
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
		'rewrite'                    => $rewrite,
	);
	register_taxonomy( 'event-category', array( 'event' ), $args );

}
add_action( 'init', 'custom_taxonomy_event', 0 );

// Register Custom Post Type - Soft Skills Training Topics
function custom_post_type_trainingtopics() {

	$labels = array(
		'name'                  => _x( 'Training Topics', 'Post Type General Name', 'tta' ),
		'singular_name'         => _x( 'Training Topics', 'Post Type Singular Name', 'tta' ),
		'menu_name'             => __( 'Training Topics', 'tta' ),
		'name_admin_bar'        => __( 'Training Topics', 'tta' ),
		'archives'              => __( 'Item Archives', 'tta' ),
		'attributes'            => __( 'Item Attributes', 'tta' ),
		'parent_item_colon'     => __( 'Parent Item:', 'tta' ),
		'all_items'             => __( 'All Items', 'tta' ),
		'add_new_item'          => __( 'Add New Item', 'tta' ),
		'add_new'               => __( 'Add New', 'tta' ),
		'new_item'              => __( 'New Item', 'tta' ),
		'edit_item'             => __( 'Edit Item', 'tta' ),
		'update_item'           => __( 'Update Item', 'tta' ),
		'view_item'             => __( 'View Item', 'tta' ),
		'view_items'            => __( 'View Items', 'tta' ),
		'search_items'          => __( 'Search Item', 'tta' ),
		'not_found'             => __( 'Not found', 'tta' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'tta' ),
		'featured_image'        => __( 'Featured Image', 'tta' ),
		'set_featured_image'    => __( 'Set featured image', 'tta' ),
		'remove_featured_image' => __( 'Remove featured image', 'tta' ),
		'use_featured_image'    => __( 'Use as featured image', 'tta' ),
		'insert_into_item'      => __( 'Insert into item', 'tta' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'tta' ),
		'items_list'            => __( 'Items list', 'tta' ),
		'items_list_navigation' => __( 'Items list navigation', 'tta' ),
		'filter_items_list'     => __( 'Filter items list', 'tta' ),
	);
	$rewrite = array(
		'slug'                  => 'trainingtopics',
		'with_front'            => true,
		'pages'                 => true,
		'feeds'                 => true,
	);
	$args = array(
		'label'                 => __( 'Training Topics', 'tta' ),
		'description'           => __( 'Post Type Description', 'tta' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'revisions' ),
		'menu_icon'            => 'dashicons-buddicons-topics',
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'rewrite'               => $rewrite,
		'capability_type'       => 'page',
	);
	register_post_type( 'training-topics', $args );

}
add_action( 'init', 'custom_post_type_trainingtopics', 0 );

// Register Custom Taxonomy - team-category
function custom_taxonomy_trainingtopics() {

	$labels = array(
		'name'                       => _x( 'Categories', 'Taxonomy General Name', 'tta' ),
		'singular_name'              => _x( 'Category', 'Taxonomy Singular Name', 'tta' ),
		'menu_name'                  => __( 'Categories', 'tta' ),
		'all_items'                  => __( 'All Items', 'tta' ),
		'parent_item'                => __( 'Parent Item', 'tta' ),
		'parent_item_colon'          => __( 'Parent Item:', 'tta' ),
		'new_item_name'              => __( 'New Item Name', 'tta' ),
		'add_new_item'               => __( 'Add New Item', 'tta' ),
		'edit_item'                  => __( 'Edit Item', 'tta' ),
		'update_item'                => __( 'Update Item', 'tta' ),
		'view_item'                  => __( 'View Item', 'tta' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'tta' ),
		'add_or_remove_items'        => __( 'Add or remove items', 'tta' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'tta' ),
		'popular_items'              => __( 'Popular Items', 'tta' ),
		'search_items'               => __( 'Search Items', 'tta' ),
		'not_found'                  => __( 'Not Found', 'tta' ),
		'no_terms'                   => __( 'No items', 'tta' ),
		'items_list'                 => __( 'Items list', 'tta' ),
		'items_list_navigation'      => __( 'Items list navigation', 'tta' ),
	);
	$rewrite = array(
		'slug'                       => 'training-category',
		'with_front'                 => true,
		'hierarchical'               => false,
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
		'rewrite'                    => $rewrite,
	);
	register_taxonomy( 'training-category', array( 'training-topics' ), $args );

}
add_action( 'init', 'custom_taxonomy_trainingtopics', 0 );



// Register Custom Post Type -Client Event
function custom_post_type_clientevent() {

	$labels = array(
		'name'                  => _x( 'Client Events ', 'Post Type General Name', 'tta' ),
		'singular_name'         => _x( 'Client Events ', 'Post Type Singular Name', 'tta' ),
		'menu_name'             => __( 'Client Events ', 'tta' ),
		'name_admin_bar'        => __( 'Client Events ', 'tta' ),
		'archives'              => __( 'Item Archives', 'tta' ),
		'attributes'            => __( 'Item Attributes', 'tta' ),
		'parent_item_colon'     => __( 'Parent Item:', 'tta' ),
		'all_items'             => __( 'All Items', 'tta' ),
		'add_new_item'          => __( 'Add New Item', 'tta' ),
		'add_new'               => __( 'Add New', 'tta' ),
		'new_item'              => __( 'New Item', 'tta' ),
		'edit_item'             => __( 'Edit Item', 'tta' ),
		'update_item'           => __( 'Update Item', 'tta' ),
		'view_item'             => __( 'View Item', 'tta' ),
		'view_items'            => __( 'View Items', 'tta' ),
		'search_items'          => __( 'Search Item', 'tta' ),
		'not_found'             => __( 'Not found', 'tta' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'tta' ),
		'featured_image'        => __( 'Featured Image', 'tta' ),
		'set_featured_image'    => __( 'Set featured image', 'tta' ),
		'remove_featured_image' => __( 'Remove featured image', 'tta' ),
		'use_featured_image'    => __( 'Use as featured image', 'tta' ),
		'insert_into_item'      => __( 'Insert into item', 'tta' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'tta' ),
		'items_list'            => __( 'Items list', 'tta' ),
		'items_list_navigation' => __( 'Items list navigation', 'tta' ),
		'filter_items_list'     => __( 'Filter items list', 'tta' ),
	);
	$rewrite = array(
		'slug'                  => 'clientevent',
		'with_front'            => true,
		'pages'                 => true,
		'feeds'                 => true,
	);
	$args = array(
		'label'                 => __( 'Client Events ', 'tta' ),
		'description'           => __( 'Post Type Description', 'tta' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'excerpt', 'revisions' ),
		'taxonomies'            => array('post_tag') ,
		'menu_icon'            => 'dashicons-groups',
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'rewrite'               => $rewrite,
		'capability_type'       => 'page',
	);
	register_post_type( 'client-event', $args );

}
add_action( 'init', 'custom_post_type_clientevent', 0 );