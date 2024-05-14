<?php

/**
 * All code related to including gutenberg acf blocks is saved in here so the theme can be dropped into any WordPress site and work.
 */

// List the blocks here. Name of the folder in the acfblocks directory
$blocks = [
	'aboutBlock',
	'accordionBlock',
	'cardsRoundedImage',
	'headerHome',
	'bannerSliderBlock',
	'leftContentWithImageAndGradientBlock',
	'singleProductShowcaseBlock',
	'productCategoryShowCaseBlock',
	'instagramFeedsBlock',
	'headerDefaultBlock',
	'productCategoryShowCaseV2',
	'findMeABikeBlock',
	'woocommerceCatalogBlock',
	'contactFormBlock'
];

/**
 * Register the blocks in the blocks folder
 */
function ebikes_register_blocks($blocks = [])
{
	// skip processing if the ACF plugin is not active.
	if (!function_exists('acf_register_block_type')) {
		return;
	}

	foreach ($blocks as $block) {
		// Load our block config file
		$filePath = get_template_directory() . "/blocks/{$block}/config.php";

		$config = array();
		if (file_exists($filePath)) {
			$config = include_once $filePath;

			$slug_block = acf_slugify($block);

			$defaults = [
				'name' => $slug_block,
				'key'  => $slug_block,
				'title' => $slug_block,
				'icon' => 'admin-comments',
				'category' => 'dbg',
				'description' => '',
				'supports' => array(
					'align' => true,
					'mode' => true,
					'multiple' => true,
					'alignWide' => true

				),
				'location' => [
					[
						[
							'param' => 'block',
							'operator' => '==',
							'value' => "acf/{$slug_block}",
						]
					]
				],
				'render_template' => "blocks/{$block}/template.php",
			];

			//$config overrides defaults of course
			$block_type = array_merge($defaults, $config);

			// Add block
			acf_register_block_type($block_type);

			$config['key'] = $block_type['key'] . '-group';
			$config['name'] = $block_type['name'] . '-group';
			$config['title'] = $block_type['title'] . '-group';
			$config['location'] = $defaults['location'];

			// Add fields
			acf_add_local_field_group($config);
		}
	}
}

/**
 * Add a custom "EBIKES" category to blocks, for all custom-built EBIKES gutenberg acf blocks.
 */
add_filter('block_categories_all', function ($categories) {
	$categories = array_merge(
		$categories,
		array(
			array(
				'slug' => 'dbg',
				'title' => 'DBG',
				'icon'  => null
			),
		)
	);
	return $categories;
});

// Now register blocks
ebikes_register_blocks($blocks);
