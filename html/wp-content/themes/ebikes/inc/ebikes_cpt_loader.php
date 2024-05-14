<?php

$types = [
	
];



foreach ($types as $typeKey) {

    $type_schema = include(get_template_directory() . "/src/types/{$typeKey}/config.php");

    // merge defaults.
    $type_data = array_merge([
        'label'                 => __('Post Type', 'text_domain'),
        'description'           => __('Post Type Description', 'text_domain'),
        'supports'              => false,
        'taxonomies'            => [],
        'hierarchical'          => false,
        'public'                => false,
        'show_ui'               => false,
        'show_in_menu'          => false,
        'menu_position'         => null,
        'show_in_admin_bar'     => false,
        'show_in_nav_menus'     => false,
        'can_export'            => false,
        'has_archive'           => false,
        'exclude_from_search'   => false,
        'publicly_queryable'    => false,
        'capability_type'       => 'page',
    ], $type_schema['config']);

    // register type.
    register_post_type($typeKey, $type_data);

    if($type_schema['categories']){
        register_taxonomy('categories', [$typeKey], $type_schema['categories']);
    }
}


/**
 * Post Type: News and Events.
 * Removed from the loop above as the CPT was not setting the category
 */
function cpt_register_news_and_events() {

	$labels = [
		"name" => __( "News and Events", "text_domain" ),
		"singular_name" => __( "News and Events", "text_domain" ),
	];

	$args = [
		"label" => __( "News and Events", "text_domain" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"can_export" => false,
		"rewrite" => [ "slug" => "news-and-events", "with_front" => true ],
		"query_var" => true,
		"menu_icon" => "dashicons-admin-site-alt2",
		"supports" => [ "title", "editor", "thumbnail", "excerpt" ],
		"taxonomies" => [ "category" ],
		"show_in_graphql" => false,
	];

	register_post_type( "news-and-events", $args );
}

add_action( 'init', 'cpt_register_news_and_events' );

// Register Custom Post Type: Owner Stories
function cpt_register_owner_stories() {

    $labels = [
        "name" => __( "Owner Stories", "text_domain" ),
        "singular_name" => __( "Owner Story", "text_domain" ),
    ];

    $args = [
        "label" => __( "Owner Stories", "text_domain" ),
        "labels" => $labels,
        "description" => "",
        "public" => true,
        "publicly_queryable" => true,
        "show_ui" => true,
        "show_in_rest" => true,
        "rest_base" => "",
        "rest_controller_class" => "WP_REST_Posts_Controller",
        "has_archive" => true,
        "show_in_menu" => true,
        "show_in_nav_menus" => true,
        "delete_with_user" => false,
        "exclude_from_search" => false,
        "capability_type" => "post",
        "map_meta_cap" => true,
        "hierarchical" => false,
        "can_export" => false,
        "rewrite" => [ "slug" => "owner-stories", "with_front" => true ],
        "query_var" => true,
        "supports" => [ "title", "editor", "thumbnail", "excerpt" ],
        "taxonomies" => [ "owner_story_category" ], // Custom Taxonomy
        "menu_icon" => "dashicons-businessman",
        "show_in_graphql" => false,
    ];

    register_post_type( "owner_stories", $args );
}

add_action( 'init', 'cpt_register_owner_stories' );

// Register Custom Taxonomy: Owner Story Category
function register_owner_story_category_taxonomy() {

    $labels = [
        "name" => __( "Owner Story Categories", "text_domain" ),
        "singular_name" => __( "Owner Story Category", "text_domain" ),
    ];

    $args = [
        "label" => __( "Owner Story Categories", "text_domain" ),
        "labels" => $labels,
        "public" => true,
        "hierarchical" => true,
        "show_ui" => true,
        "show_in_menu" => true,
        "show_in_nav_menus" => true,
        "query_var" => true,
        "rewrite" => [ 'slug' => 'owner-story-category', 'with_front' => true, ],
        "show_admin_column" => false,
        "show_in_rest" => true,
        "rest_base" => "owner_story_category",
        "rest_controller_class" => "WP_REST_Terms_Controller",
        "show_in_quick_edit" => false,
    ];
    register_taxonomy( "owner_story_category", [ "owner_stories" ], $args );
}
add_action( 'init', 'register_owner_story_category_taxonomy' );
