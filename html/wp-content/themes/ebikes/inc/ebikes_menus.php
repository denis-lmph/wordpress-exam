<?php
if (!defined('ABSPATH')) exit;

/**
 * Description: A setup of menus and the boostrap nav walker
 */

// Add theme menus
add_action('init', function () {
	register_nav_menus(
		array(
			// 'header-main' => 'Header Main',
			// 'footer-left' => 'Footer Left',
			// 'footer-center' => 'Footer Center',
			// 'footer-right' => 'Footer Right',
			// 'quick-link' => 'Quick Links',
			// 'quick-link-bottom' => 'Quick Links Bottom',
		)
	);
});

// Register Bootstrap 5 Nav Walker
add_action('after_setup_theme', function () {
	require_once('class-bootstrap-5-navwalker.php');
	add_theme_support( 'post-thumbnails' );
	add_theme_support('align-wide');
});


// Allow classes to be added to menu items
// https://stackoverflow.com/questions/26180688/how-to-add-class-to-link-in-wp-nav-menu
/*
function add_menu_link_class($atts, $item, $args)
{
	if (property_exists($args, 'link_class')) {
		$atts['class'] = $args->link_class;
	}
	return $atts;
}
add_filter('nav_menu_link_attributes', 'add_menu_link_class', 1, 3);

function add_menu_list_item_class($classes, $item, $args)
{
	if (property_exists($args, 'list_item_class')) {
		$classes[] = $args->list_item_class;
	}
	return $classes;
}
add_filter('nav_menu_css_class', 'add_menu_list_item_class', 1, 3);


if( function_exists('acf_add_local_field_group') ):

	acf_add_local_field_group(array(
		'key' => 'group_62410a9b1a5eb',
		'title' => 'menu',
		'fields' => array(
			array(
				'key' => 'field_62410ac916ae8',
				'label' => 'Image',
				'name' => 'menu_image',
				'type' => 'image',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'return_format' => 'url',
				'preview_size' => 'thumbnail',
				'library' => 'all',
				'min_width' => '',
				'min_height' => '',
				'min_size' => '',
				'max_width' => '',
				'max_height' => '',
				'max_size' => '',
				'mime_types' => '',
			),
		),
		'location' => array(
			array(
				array(
					'param' => 'nav_menu_item',
					'operator' => '==',
					'value' => '2',
				),
			),
		),
		'menu_order' => 0,
		'position' => 'normal',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen' => '',
		'active' => true,
		'description' => '',
	));
	
endif;


function wp_get_menu_array($current_menu='Main Menu') {

    $menu_array = wp_get_nav_menu_items($current_menu);
	//print_r($menu_array);
    $menu = array();

    function populate_children($menu_array, $menu_item)
    {
        $children = array();
        if (!empty($menu_array)){
            foreach ($menu_array as $k=>$m) {
                if ($m->menu_item_parent == $menu_item->ID) {
                    $children[$m->ID] = array();
                    $children[$m->ID]['ID'] = $m->ID;
                    $children[$m->ID]['title'] = $m->title;
                    $children[$m->ID]['url'] = $m->url;
					$children[$m->ID]['slug'] = $m->post_name;
                    unset($menu_array[$k]);
                    $children[$m->ID]['children'] = populate_children($menu_array, $m);
					$children[$m->ID]['image'] = get_field('menu_image', $m->ID);
					
                }
            }
        };
        return $children;
    }

    foreach ($menu_array as $m) {
        if (empty($m->menu_item_parent)) {
            $menu[$m->ID] = array();
            $menu[$m->ID]['ID'] = $m->ID;
            $menu[$m->ID]['title'] = $m->title;
            $menu[$m->ID]['url'] = $m->url;
			$menu[$m->ID]['slug'] = $m->post_name;
            $menu[$m->ID]['children'] = populate_children($menu_array, $m);
            
        }
    }

    return $menu;

}

*/