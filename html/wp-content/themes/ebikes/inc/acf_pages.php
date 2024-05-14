<?php

// Register ACF fields for product attribute "Brands"
function register_brand_acf_fields() {
    if (function_exists('acf_add_local_field_group')) {
        acf_add_local_field_group(array(
            'key' => 'group_brand_fields',
            'title' => 'Brand Fields',
            'fields' => array(
                array(
                  'key' => 'field_brand_sub_heading',
                  'label' => 'Brand Sub heading',
                  'name' => 'brand_sub_heading',
                  'type' => 'text',
                ),
                array(
                  'key' => 'field_brand_logo',
                  'label' => 'Brand Logo',
                  'name' => 'brand_logo',
                  'type' => 'image',
                ),
				array(
					'key' => 'field_banner_image',
					'label' => 'Banner Image',
					'name' => 'banner_image',
					'type' => 'image',
				),
				array(
					'key' => 'field_banner_mp4',
					'label' => 'Video File MP4',
					'name' => 'video_file_mp4',
					'aria-label' => '',
					'type' => 'file',
					'instructions' => 'Video background for desktop',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'return_format' => 'array',
					'library' => 'all',
					'min_size' => '',
					'max_size' => '',
					'mime_types' => '',
				),
				array(
					'key' => 'field_banner_webm',
					'label' => 'Video File webm',
					'name' => 'video_file_webm',
					'aria-label' => '',
					'type' => 'file',
					'instructions' => 'Video background for mobile',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'return_format' => 'array',
					'library' => 'all',
					'min_size' => '',
					'max_size' => '',
					'mime_types' => '',
				),
	
            ),
            'location' => array(
                array(
                    array(
                        'param' => 'taxonomy',
                        'operator' => '==',
                        'value' => 'pa_brand', // Replace with the taxonomy slug of "Brands"
                    ),
                ),
            ),
            'menu_order' => 0,
            'position' => 'normal',
            'style' => 'default',
            'label_placement' => 'top',
            'instruction_placement' => 'label',
        ));
    }
  }
  add_action('acf/init', 'register_brand_acf_fields');

  
// Product Additional Information

add_action( 'acf/include_fields', function() {
	if ( ! function_exists( 'acf_add_local_field_group' ) ) {
		return;
	}

	acf_add_local_field_group( array(
		'key' => 'group_6490d93a5bb03',
		'title' => 'Product Additional Information',
		'fields' => array(
			array(
				'key' => 'field_6490dcb148ede',
				'label' => 'Has Component?',
				'name' => 'has_component',
				'aria-label' => '',
				'type' => 'true_false',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'message' => '',
				'default_value' => 0,
				'ui' => 0,
				'ui_on_text' => '',
				'ui_off_text' => '',
			),
			array(
				'key' => 'field_6490d93adccd0',
				'label' => 'Repeat Component',
				'name' => 'repeat_component',
				'aria-label' => '',
				'type' => 'repeater',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => array(
					array(
						array(
							'field' => 'field_6490dcb148ede',
							'operator' => '==',
							'value' => '1',
						),
					),
				),
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
						'key' => 'field_6490d963dccd1',
						'label' => 'Component Name',
						'name' => 'component_name',
						'aria-label' => '',
						'type' => 'text',
						'instructions' => '',
						'required' => 1,
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
						'parent_repeater' => 'field_6490d93adccd0',
					),
					array(
						'key' => 'field_6490d971dccd2',
						'label' => 'Description',
						'name' => 'description',
						'aria-label' => '',
						'type' => 'textarea',
						'instructions' => '',
						'required' => 1,
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
						'parent_repeater' => 'field_6490d93adccd0',
					),
					array(
						'key' => 'field_6490d97ddccd3',
						'label' => 'Component Image',
						'name' => 'component_image',
						'aria-label' => '',
						'type' => 'image',
						'instructions' => '',
						'required' => 1,
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
						'preview_size' => 'medium',
						'parent_repeater' => 'field_6490d93adccd0',
					),
				),
			),
			array(
				'key' => 'field_6490df5afb76a',
				'label' => 'Specification',
				'name' => 'specification',
				'aria-label' => '',
				'type' => 'wysiwyg',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'tabs' => 'all',
				'toolbar' => 'full',
				'media_upload' => 1,
				'delay' => 0,
			),
		),
		'location' => array(
			array(
				array(
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'product',
				),
			),
		),
		'menu_order' => 4,
		'position' => 'normal',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen' => '',
		'active' => true,
		'description' => '',
		'show_in_rest' => 0,
	) );

	acf_add_local_field_group( array(
		'key' => 'group_649e3e0f615bc',
		'title' => 'For Size Guide',
		'fields' => array(
			array(
				'key' => 'field_649e3e0fbf3e1',
				'label' => 'Size Guide',
				'name' => 'size_guide',
				'aria-label' => '',
				'type' => 'file',
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
				'min_size' => '',
				'max_size' => '',
				'mime_types' => '',
			),
		),
		'location' => array(
			array(
				array(
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'product',
				),
			),
		),
		'menu_order' => 0,
		'position' => 'side',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen' => '',
		'active' => true,
		'description' => '',
		'show_in_rest' => 0,
	) );
	
	acf_add_local_field_group( array(
		'key' => 'group_649a75b536995',
		'title' => 'Display as Banner',
		'fields' => array(
			array(
				'key' => 'field_649a75b8d0e3f',
				'label' => 'Display as banner',
				'name' => 'display_as_banner',
				'aria-label' => '',
				'type' => 'true_false',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'message' => '',
				'default_value' => 0,
				'ui' => 0,
				'ui_on_text' => '',
				'ui_off_text' => '',
			),
		),
		'location' => array(
			array(
				array(
					'param' => 'attachment',
					'operator' => '==',
					'value' => 'image',
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
		'show_in_rest' => 0,
	) );

	
} );


/// Product Category Banner
add_action( 'acf/include_fields', function() {
	if ( ! function_exists( 'acf_add_local_field_group' ) ) {
		return;
	}

	acf_add_local_field_group( array(
	'key' => 'group_64a5e61f21b50',
	'title' => 'Product Category Banner',
	'fields' => array(
		array(
			'key' => 'field_64a5e61f80a7b',
			'label' => 'Sub heading',
			'name' => 'sub_heading',
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
			'key' => 'field_64a5e65480a7c',
			'label' => 'Logo',
			'name' => 'logo',
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
			'preview_size' => 'medium',
		),
		array(
			'key' => 'field_64a5e66f80a7d',
			'label' => 'Banner Image',
			'name' => 'banner_image',
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
			'preview_size' => 'medium',
		),
		array(
			'key' => 'field_64a5e66f80a7f',
			'label' => 'Video File MP4',
			'name' => 'video_file_mp4',
			'aria-label' => '',
			'type' => 'file',
			'instructions' => 'Video background for desktop',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'return_format' => 'array',
			'library' => 'all',
			'min_size' => '',
			'max_size' => '',
			'mime_types' => '',
		),
		array(
			'key' => 'field_64a5e66f80a7g',
			'label' => 'Video File webm',
			'name' => 'video_file_webm',
			'aria-label' => '',
			'type' => 'file',
			'instructions' => 'Video background for mobile',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'return_format' => 'array',
			'library' => 'all',
			'min_size' => '',
			'max_size' => '',
			'mime_types' => '',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'taxonomy',
				'operator' => '==',
				'value' => 'product_cat',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'seamless',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => true,
	'description' => '',
	'show_in_rest' => 0,
) );
} );





// add_action( 'acf/include_fields', function() {
// 	if ( ! function_exists( 'acf_add_local_field_group' ) ) {
// 		return;
// 	}

// 	acf_add_local_field_group( array(
// 	'key' => 'group_64a27adf16381',
// 	'title' => 'Frame size availability',
// 	'fields' => array(
// 		array(
// 			'key' => 'field_64a27adf6a114',
// 			'label' => 'Small',
// 			'name' => 's_frame',
// 			'aria-label' => '',
// 			'type' => 'select',
// 			'instructions' => '',
// 			'required' => 0,
// 			'conditional_logic' => 0,
// 			'wrapper' => array(
// 				'width' => '25',
// 				'class' => '',
// 				'id' => '',
// 			),
// 			'choices' => array(
// 				1 => 'In stock',
// 				0 => 'Out of stock',
// 			),
// 			'default_value' => false,
// 			'return_format' => 'value',
// 			'multiple' => 0,
// 			'allow_null' => 0,
// 			'ui' => 0,
// 			'ajax' => 0,
// 			'placeholder' => '',
// 		),
// 		array(
// 			'key' => 'field_64a27c56d4633',
// 			'label' => 'Medium',
// 			'name' => 'm_frame',
// 			'aria-label' => '',
// 			'type' => 'select',
// 			'instructions' => '',
// 			'required' => 0,
// 			'conditional_logic' => 0,
// 			'wrapper' => array(
// 				'width' => '25',
// 				'class' => '',
// 				'id' => '',
// 			),
// 			'choices' => array(
// 				1 => 'In stock',
// 				0 => 'Out of stock',
// 			),
// 			'default_value' => false,
// 			'return_format' => 'value',
// 			'multiple' => 0,
// 			'allow_null' => 0,
// 			'ui' => 0,
// 			'ajax' => 0,
// 			'placeholder' => '',
// 		),
// 		array(
// 			'key' => 'field_64a27c71d4635',
// 			'label' => 'Large',
// 			'name' => 'l_frame',
// 			'aria-label' => '',
// 			'type' => 'select',
// 			'instructions' => '',
// 			'required' => 0,
// 			'conditional_logic' => 0,
// 			'wrapper' => array(
// 				'width' => '25',
// 				'class' => '',
// 				'id' => '',
// 			),
// 			'choices' => array(
// 				1 => 'In stock',
// 				0 => 'Out of stock',
// 			),
// 			'default_value' => false,
// 			'return_format' => 'value',
// 			'multiple' => 0,
// 			'allow_null' => 0,
// 			'ui' => 0,
// 			'ajax' => 0,
// 			'placeholder' => '',
// 		),
// 		array(
// 			'key' => 'field_64a27c83d4636',
// 			'label' => 'Extra Large',
// 			'name' => 'xl_frame',
// 			'aria-label' => '',
// 			'type' => 'select',
// 			'instructions' => '',
// 			'required' => 0,
// 			'conditional_logic' => 0,
// 			'wrapper' => array(
// 				'width' => '25',
// 				'class' => '',
// 				'id' => '',
// 			),
// 			'choices' => array(
// 				1 => 'In stock',
// 				0 => 'Out of stock',
// 			),
// 			'default_value' => false,
// 			'return_format' => 'value',
// 			'multiple' => 0,
// 			'allow_null' => 0,
// 			'ui' => 0,
// 			'ajax' => 0,
// 			'placeholder' => '',
// 		),
// 	),
// 	'location' => array(
// 		array(
// 			array(
// 				'param' => 'post_type',
// 				'operator' => '==',
// 				'value' => 'product',
// 			),
// 		),
// 	),
// 	'menu_order' => 0,
// 	'position' => 'normal',
// 	'style' => 'default',
// 	'label_placement' => 'top',
// 	'instruction_placement' => 'label',
// 	'hide_on_screen' => '',
// 	'active' => true,
// 	'description' => '',
// 	'show_in_rest' => 0,
// ) );
// } );

