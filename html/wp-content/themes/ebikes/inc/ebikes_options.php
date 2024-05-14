<?php
if (!defined('ABSPATH')) exit;

/**
 * Description: A collection of common site options used on every custom theme build
 */

/**
 * Register the standard WordPress theme options custom uses
 */
function sbm_register_theme_options()
{
	if (!function_exists('acf_add_options_page')) {
		return;
	}

	$theme_options = [
		'page_title'    => 'sbm Theme Options',
		'menu_title'    => 'Options',
		'menu_slug' => 'sbm_theme_options',
		'icon_url' => 'dashicons-forms',
		'capability'    => 'edit_posts',
		'autoload' => true,
	];

	acf_add_options_page($theme_options);

	// Build our contact options

	$header_options = [
		'page_title'  => 'Header Options',
		'menu_title'  => 'Header',
		'menu_slug' => 'sbm_theme_options_header',
		'icon_url' => 'dashicons-forms',
		'parent_slug' => 'sbm_theme_options',
	];

	$footer_options = [
		'page_title'  => 'Footer Options',
		'menu_title'  => 'Footer',
		'menu_slug' => 'sbm_theme_options_footer_section',
		'icon_url' => 'dashicons-forms',
		'parent_slug' => 'sbm_theme_options',
	];

	$contact_options = [
		'page_title'  => 'Contact Options',
		'menu_title'  => 'Contacts',
		'menu_slug' => 'sbm_theme_options_contact',
		'icon_url' => 'dashicons-forms',
		'parent_slug' => 'sbm_theme_options',
	];

	// Build our embed options
	$embed_options = [
		'page_title'  => 'Global Embeds',
		'menu_title'  => 'Embeds',
		'menu_slug' => 'sbm_theme_options_embed',
		'icon_url' => 'dashicons-forms',
		'parent_slug' => 'sbm_theme_options',
	];

	// Build our embed options
	$global_blocks_options = [
		'page_title'  => 'Global Blocks',
		'menu_title'  => 'Global Blocks',
		'menu_slug' => 'sbm_theme_options_global_blocks',
		'icon_url' => 'dashicons-forms',
		'parent_slug' => 'sbm_theme_options',
	];
	
	$header_options = acf_add_options_sub_page($header_options);
	$footer_options = acf_add_options_sub_page($footer_options);
	$contact_options = acf_add_options_sub_page($contact_options);
	$embed_options = acf_add_options_sub_page($embed_options);
	$global_blocks_options = acf_add_options_sub_page($global_blocks_options);


	// Build our contact options fields
	$header_options_field_group = [

		'title' => 'Header Area',
		'fields' => [
			[
				'key' => 'sbm_theme_options_header_logo',
				'name' => 'sbm_theme_options_header_logo',
				'label' => 'Upload Header Logo',
				'type' => 'image',
				'return_format' => 'url',
				'preview_size' => 'medium',
			],
			[
				'key' => 'field_638d41c1d2919',
				'label' => 'Header Logo Link',
				'name' => 'sbm_theme_options_header_locations_link',
				'type' => 'link',
				'return_format' => 'url',
			],
			[
				'key' => 'sbm_theme_options_header_contact_link',
				'name' => 'sbm_theme_options_header_contact_link',
				'label' => 'Contact Link',
				'type' => 'link',
				'return_format' => 'url',
			],


		],
		'location' => [
			[
				[
					'param' => 'options_page',
					'operator' => '==',
					'value' => 'sbm_theme_options_header',
				]
			]
		]
	];

	$footer_options_field_group = [

		'title' => 'Footer Sections',
		'fields' => [

			//Footer quick links 1
			[
				'key' => 'sbm_theme_options_footer_block_1',
				'name' => 'sbm_theme_options_footer_block_1',
				'label' => 'Footer Column One',
				'type' => 'tab',
				'new_lines' => '',
			],
			[
				'key' => 'sbm_theme_options_footer1_image1',
				'name' => 'sbm_theme_options_footer1_image1',
				'label' => 'Footer Upload Logo',
				'type' => 'image',
				'return_format' => 'url',
				'preview_size' => 'medium'
			],
			[
				'key' => 'sbm_theme_options_footer_gravity_forms_id',
				'name' => 'sbm_theme_options_footer_gravity_forms_id',
				'label' => 'Gravity Forms ID',
				'type' => 'text',
			],

			//Footer quick links 2
			[
				'key' => 'sbm_theme_options_footer_block_2',
				'name' => 'sbm_theme_options_footer_block_2',
				'label' => 'Footer Column Two',
				'type' => 'tab',
				'new_lines' => '',
			],
			[
				'key' => 'sbm_theme_options_footer_quick_links',
				'name' => 'sbm_theme_options_footer_quick_links',
				'label' => 'Quick Link',
				'type' => 'repeater',
				'sub_fields' => [
					[
						'key' => 'sbm_theme_options_footer_quick_link_item',
						'name' => 'sbm_theme_options_footer_quick_link_item',
						'label' => 'Add Link',
						'type' => 'link',
					],
				],
			],

			//Footer quick links 3
			[
				'key' => 'sbm_theme_options_footer_block_3',
				'name' => 'sbm_theme_options_footer_block_3',
				'label' => 'Footer Column Three',
				'type' => 'tab',
				'new_lines' => '',
			],

			[
				'key' => 'sbm_theme_options_footer_contact_phone',
				'name' => 'sbm_theme_options_footer_contact_phone',
				'label' => 'Phone Number',
				'type' => 'text',
			],
			[
				'key' => 'sbm_theme_options_footer_contact_email',
				'name' => 'sbm_theme_options_footer_contact_email',
				'label' => 'Email',
				'type' => 'text',
			],

			[
				'key' => 'sbm_theme_options_footer_contact_address',
				'name' => 'sbm_theme_options_footer_contact_address',
				'label' => 'Address',
				'type' => 'textarea',
			],

			[
				'key' => 'sbm_theme_options_footer_contact_facebook',
				'name' => 'sbm_theme_options_footer_contact_facebook',
				'label' => 'Facebook',
				'type' => 'link',
			],
			[
				'key' => 'sbm_theme_options_footer_contact_linkedin',
				'name' => 'sbm_theme_options_footer_contact_linkedin',
				'label' => 'Linkedin',
				'type' => 'link',
			],
			[
				'key' => 'sbm_theme_options_footer_contact_instagram',
				'name' => 'sbm_theme_options_footer_contact_instagram',
				'label' => 'Instagram',
				'type' => 'link',
			],

			//Lower Footer section
			[
				'key' => 'sbm_theme_options_lower_footer_section',
				'name' => 'sbm_theme_options_lower_footer_section',
				'label' => 'T & Cs / Privacy',
				'type' => 'tab',
				'new_lines' => '',
			],
			[
				'key' => 'sbm_theme_options_footer_tc',
				'name' => 'sbm_theme_options_footer_tc',
				'label' => 'Terms & Conditions',
				'type' => 'wysiwyg',
			],
			[
				'key' => 'sbm_theme_options_privacy',
				'name' => 'sbm_theme_options_privacy',
				'label' => 'Privacy Link',
				'type' => 'wysiwyg',
			],
			[
				'key' => 'sbm_theme_options_footer1_copyright',
				'name' => 'sbm_theme_options_footer1_copyright',
				'label' => 'Add Copyright Text',
				'type' => 'wysiwyg',
			],

		],
		'location' => [
			[
				[
					'param' => 'options_page',
					'operator' => '==',
					'value' => 'sbm_theme_options_footer_section',
				]
			]
		]
	];


	$contact_options_field_group = [

		'title' => 'Global Contact Details',
		'fields' => [
			[
				'key' => 'sbm_theme_options_contact_physical_tab',
				'name' => 'sbm_theme_options_contact_physical_tab',
				'label' => 'Location and Phone',
				'type' => 'tab',
				'new_lines' => '',
			],
			[
				'key' => 'sbm_theme_options_contact_phone',
				'name' => 'sbm_theme_options_contact_phone',
				'label' => 'Phone Number',
				'type' => 'text',
			],
			[
				'key' => 'sbm_theme_options_contact_email',
				'name' => 'sbm_theme_options_contact_email',
				'label' => 'Email',
				'type' => 'text',
			],
			[
				'key' => 'sbm_theme_options_contact_address',
				'name' => 'sbm_theme_options_contact_address',
				'label' => 'Addresss',
				'type' => 'textarea',
			],
			[
				'key' => 'sbm_theme_options_contact_map_url',
				'name' => 'sbm_theme_options_contact_map_url',
				'label' => 'Map Url',
				'instructions' => 'Provide a link to Google maps location',
				'type' => 'url',
			],
			[
				'key' => 'sbm_theme_options_contact_map_embed',
				'name' => 'sbm_theme_options_contact_map_embed',
				'label' => 'Map Embed',
				'type' => 'textarea',
			],

		],
		'location' => [
			[
				[
					'param' => 'options_page',
					'operator' => '==',
					'value' => 'sbm_theme_options_contact',
				]
			]
		]
	];

	// Build our embed options fields
	$embed_options_field_group = [
		'title' => 'Sitewide Settings',
		'fields' => [
			[
				'key' => 'sbm_theme_options_embed_tracking_tab',
				'name' => 'sbm_theme_options_embed_tracking_tab',
				'label' => 'Tracking',
				'type' => 'tab',
				'new_lines' => '',
			],
			[
				'key' => 'sbm_theme_options_embed_head_html',
				'name' => 'sbm_theme_options_embed_head_html',
				'label' => 'Head',
				'instructions' => 'Inject HTML into the head section of all pages',
				'type' => 'textarea',
				'new_lines' => '',
			],
			[
				'key' => 'sbm_theme_options_embed_body_html',
				'name' => 'sbm_theme_options_embed_body_html',
				'label' => 'Body',
				'instructions' => 'Inject HTML into the body section of all pages',
				'type' => 'textarea',
				'new_lines' => '',
			],
			[
				'key' => 'sbm_theme_options_embed_footer_html',
				'name' => 'sbm_theme_options_embed_footer_html',
				'label' => 'Footer',
				'instructions' => 'Inject HTML into the footer section of all pages',
				'type' => 'textarea',
				'new_lines' => '',
			],
			[
				'key' => 'sbm_theme_options_embed_style_tab',
				'name' => 'sbm_theme_options_embed_style_tab',
				'label' => 'Styles',
				'type' => 'tab',
				'new_lines' => '',
			],
			[
				'key' => 'sbm_theme_options_embed_head_style',
				'name' => 'sbm_theme_options_embed_head_style',
				'label' => 'Footer',
				'instructions' => 'Add style code into the header',
				'type' => 'textarea',
				'new_lines' => '',
			],
			[
				'key' => 'sbm_theme_options_embed_superheader_tab',
				'name' => 'sbm_theme_options_embed_superheader_tab',
				'label' => 'Super Header',
				'type' => 'tab',
				'new_lines' => '',
			],
			[
				'key' => 'sbm_theme_options_embed_superheader_content',
				'name' => 'sbm_theme_options_embed_superheader_content',
				'label' => 'Super Header',
				'instructions' => 'Add a message to the very top of all pages',
				'type' => 'wysiwyg',
			],
			[
				'key' => 'sbm_theme_options_embed_superheader_content_show',
				'name' => 'sbm_theme_options_embed_superheader_content_show',
				'label' => 'Show Super Header',
				'instructions' => '',
				'type' => 'true_false',
			],
			//website departure message
			[
				'key' => 'sbm_theme_options_embed_departure_tab',
				'name' => 'sbm_theme_options_embed_departure_tab',
				'label' => 'Leaving site message',
				'type' => 'tab',
				'new_lines' => '',
			],
			[
				'key' => 'sbm_theme_options_embed_departure_text',
				'name' => 'sbm_theme_options_embed_departure_text',
				'label' => 'Site Departure',
				'instructions' => 'Add a message on site departure',
				'type' => 'text',
			],
		],
		'location' => [
			[
				[
					'param' => 'options_page',
					'operator' => '==',
					'value' => 'sbm_theme_options_embed',
				]
			]
		]
	];

	// For Global Blocks

	$global_blocks_options_field_group = [
		'title' => 'Global Blocks Settings',
		'fields' => [
			array(
				'key' => 'field_aabb332c5e300',
				'name' => 'pcsb_option_tab',
				'label' => 'Product Category Showcase Block',
				'type' => 'tab',
				'new_lines' => '',
			),

			array(
				'key' => 'field_aabb332c5e355',
				'label' => 'Heading',
				'name' => 'pcsb_option_heading',
				'aria-label' => '',
				'type' => 'text',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'maxlength' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
			),
			array(
				'key' => 'field_aabb332c5e35d',
				'label' => 'Product Category Columns',
				'name' => 'pcsb_option_product_category_columns',
				'aria-label' => '',
				'type' => 'repeater',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'layout' => 'table',
				'pagination' => 0,
				'min' => 0,
				'max' => 0,
				'collapsed' => '',
				'button_label' => 'Add Row',
				'rows_per_page' => 20,
				'sub_fields' => array(
					array(
						'key' => 'field_aabb332c60236',
						'label' => 'Product Category image',
						'name' => 'product_category_image',
						'aria-label' => '',
						'type' => 'image',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'return_format' => 'array',
						'library' => 'all',
						'min_width' => '',
						'min_height' => '',
						'min_size' => '',
						'max_width' => '',
						'max_height' => '',
						'max_size' => '',
						'mime_types' => '',
						'preview_size' => 'small',
						'parent_repeater' => 'field_aabb332c5e35d',
					),
					array(
						'key' => 'field_aabb332c60246',
						'label' => 'Product Category Title',
						'name' => 'product_category_title',
						'aria-label' => '',
						'type' => 'text',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'default_value' => '',
						'maxlength' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'parent_repeater' => 'field_aabb332c5e35d',
					),
					array(
						'key' => 'field_aabb332c6024e',
						'label' => 'Product Category Link',
						'name' => 'product_category_link',
						'aria-label' => '',
						'type' => 'link',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'default_value' => '',
						'maxlength' => '',
						'rows' => '',
						'placeholder' => '',
						'new_lines' => '',
						'parent_repeater' => 'field_aabb332c5e35d',
					),
				),
			),
			array(
				'key' => 'field_aabb332c6023e',
				'label' => 'Shop Link',
				'name' => 'pcsb_option_shop_link',
				'aria-label' => '',
				'type' => 'link',
				'instructions' => 'Add the text and URL. for the first button here',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'maxlength' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'parent_repeater' => 'field_aabb332c5e35d',
			),

			array(
				'key' => 'field_aacc332c5e300',
				'name' => 'gpcb_option_tab',
				'label' => 'Product Category Page Banner',
				'type' => 'tab',
				'new_lines' => '',
			),
			array(
				'key' => 'field_aacc332c5e301',
				'label' => 'Heading',
				'name' => 'gpcb_option_heading',
				'type' => 'text',
			  ),
			array(
				'key' => 'field_aacc332c5e302',
				'label' => 'Sub heading',
				'name' => 'gpcb_option_sub_heading',
				'type' => 'text',
			  ),
			  array(
				'key' => 'field_aacc332c5e303',
				'label' => 'Description',
				'name' => 'gpcb_option_description',
				'type' => 'textarea',
			  ),
			  array(
				'key' => 'field_aacc332c5e305',
				'label' => 'Logo',
				'name' => 'gpcb_option_logo',
				'type' => 'image',
			  ),
			  array(
				  'key' => 'field_aacc332c5e306',
				  'label' => 'Banner Image',
				  'name' => 'gpcb_option_banner_image',
				  'type' => 'image',
			  ),
			  array(
				'key' => 'field_aacc332c5e307',
				'label' => 'Video File MP4',
				'name' => 'gpcb_option_banner_mp4',
				'type' => 'file',
				'instructions' => 'Video background for desktop',
			  ),
			  array(
				'key' => 'field_aacc332c5e308',
				'label' => 'Video File WEBM',
				'name' => 'gpcb_option_banner_webm',
				'type' => 'file',
				'instructions' => 'Video background for mobile',
			  ),
		],
		'location' => [
			[
				[
					'param' => 'options_page',
					'operator' => '==',
					'value' => 'sbm_theme_options_global_blocks',
				]
			]
		]
	];

	acf_add_local_field_group($footer_options_field_group);
	acf_add_local_field_group($embed_options_field_group);
	acf_add_local_field_group($contact_options_field_group);
	acf_add_local_field_group($header_options_field_group);
	acf_add_local_field_group($global_blocks_options_field_group);
}

/**
 * Apply the standard WordPress theme options
 */
function sbm_theme_options_header()
{
	if (get_field('sbm_theme_options_embed_head_html', 'option')) {
		the_field('sbm_theme_options_embed_head_html', 'option');
	}
	if (get_field('sbm_theme_options_embed_head_style', 'option')) {
		echo '<style>';
		the_field('sbm_theme_options_embed_head_style', 'option');
		echo '</style>';
	}
}

function sbm_theme_options_body()
{
	if (get_field('sbm_theme_options_embed_body_html', 'option')) {
		the_field('sbm_theme_options_embed_body_html', 'option');
	}
}

function sbm_theme_options_footer()
{
	if (get_field('sbm_theme_options_embed_footer_html', 'option')) {
		the_field('sbm_theme_options_embed_footer_html', 'option');
	}
}



add_action('acf/init', 'sbm_register_theme_options');
add_action('wp_head', 'sbm_theme_options_header', 90);
add_action('wp_body_open', 'sbm_theme_options_body', 90);
add_action('wp_footer', 'sbm_theme_options_footer', 90);