<?php

return [
	'key' => 'group_638990f45a675',
	'title' => 'Default Heading Block',
	'fields' => array(
		array(
			'key' => 'field_6389911944f04',
			'label' => 'Settings',
			'name' => '',
			'type' => 'tab',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'placement' => 'top',
			'endpoint' => 0,
		),
		array(
			'key' => 'field_6389912e44f05',
			'label' => 'Text Alignment',
			'name' => 'default-heading-block_text-alignment',
			'type' => 'select',
			'instructions' => 'Use the options here to set the text alignment for the block. Center alignment is the default.',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'choices' => array(
				'center' => 'Centre',
				'left' => 'Left',
				'right: Right' => 'right: Right',
			),
			'default_value' => 'center',
			'allow_null' => 0,
			'multiple' => 0,
			'ui' => 1,
			'ajax' => 0,
			'return_format' => 'value',
			'placeholder' => '',
		),
		array(
			'key' => 'field_638991df44f06',
			'label' => 'Extra Spacing',
			'name' => 'default-heading-block_extra-spacing',
			'type' => 'true_false',
			'instructions' => 'Enable this option to add extra spacing between the heading and the paragraph below. See an example on the Contact Us page.',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'message' => '',
			'default_value' => 0,
			'ui' => 1,
			'ui_on_text' => '',
			'ui_off_text' => '',
		),
		array(
			'key' => 'field_638d43294e7ec',
			'label' => 'Body Text Max Width',
			'name' => 'default-heading-block_body-text-max-width',
			'type' => 'select',
			'instructions' => 'Use these options to select the maximum width of the body text paragraph. Selecting the extra width option will help to reduce the number of lines of text fills for this paragraph so there is more uniformity across different pages.',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'choices' => array(
				'default' => 'Default',
				'extra-width' => 'Extra Width',
			),
			'default_value' => 'default',
			'allow_null' => 0,
			'multiple' => 0,
			'ui' => 1,
			'ajax' => 0,
			'return_format' => 'value',
			'placeholder' => '',
		),
		array(
			'key' => 'field_639811cb0ec0d',
			'label' => 'Background Colour',
			'name' => 'default-heading-block_background-colour',
			'type' => 'select',
			'instructions' => 'Use the options below to select the background colour for this block.',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'choices' => array(
				'#ffffff' => 'white',
				'#d9d9d9' => 'light grey',
				'#f8f3f8' => 'light pink',
				'#430c49' => 'dark purple',
				'#fcfafc' => 'light beige',
			),
			'default_value' => '#ffffff',
			'allow_null' => 0,
			'multiple' => 0,
			'ui' => 0,
			'return_format' => 'value',
			'ajax' => 0,
			'placeholder' => '',
		),
		array(
			'key' => 'field_6389925644f07',
			'label' => 'Text Content',
			'name' => '',
			'type' => 'tab',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'placement' => 'top',
			'endpoint' => 0,
		),
		array(
			'key' => 'field_6389926144f08',
			'label' => 'Subheading',
			'name' => 'default-heading-block_subheading',
			'type' => 'text',
			'instructions' => 'Add the subheading here.',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array(
			'key' => 'field_6389928144f09',
			'label' => 'Heading',
			'name' => 'default-heading-block_heading',
			'type' => 'text',
			'instructions' => 'Add the heading here.',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array(
			'key' => 'field_6389929544f0a',
			'label' => 'Body Text',
			'name' => 'default-heading-block_body-text',
			'type' => 'textarea',
			'instructions' => 'Add the text for the paragraph below the heading here.',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'maxlength' => '',
			'rows' => 3,
			'new_lines' => '',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'post',
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
];