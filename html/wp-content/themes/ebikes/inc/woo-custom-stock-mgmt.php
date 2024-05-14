<?php

/** Custom Stock Management for Frame Size */
// add_action( 'acf/include_fields', function() {
// 	if ( ! function_exists( 'acf_add_local_field_group' ) ) {
// 		return;
// 	}

// 	acf_add_local_field_group( array(
// 	'key' => 'group_64a27adf16381',
// 	'title' => 'Frame size availability',
// 	'fields' => array(
// 		array(
// 			'key' => 'field_64a2c15641be8',
// 			'label' => 'Has Frame Size?',
// 			'name' => 'has_frame_size',
// 			'aria-label' => '',
// 			'type' => 'true_false',
// 			'instructions' => '',
// 			'required' => 0,
// 			'conditional_logic' => 0,
// 			'wrapper' => array(
// 				'width' => '',
// 				'class' => '',
// 				'id' => '',
// 			),
// 			'message' => '',
// 			'default_value' => 0,
// 			'ui' => 0,
// 			'ui_on_text' => '',
// 			'ui_off_text' => '',
// 		),
// 		array(
// 			'key' => 'field_64a27adf6a114',
// 			'label' => 'Small',
// 			'name' => 's_frame',
// 			'aria-label' => '',
// 			'type' => 'select',
// 			'instructions' => '',
// 			'required' => 0,
// 			'conditional_logic' => array(
// 				array(
// 					array(
// 						'field' => 'field_64a2c15641be8',
// 						'operator' => '==',
// 						'value' => '1',
// 					),
// 				),
// 			),
// 			'wrapper' => array(
// 				'width' => '25',
// 				'class' => '',
// 				'id' => '',
// 			),
// 			'choices' => array(
// 				1 => 'In stock',
// 				0 => 'Out of stock',
// 			),
// 			'default_value' => 0,
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
// 			'conditional_logic' => array(
// 				array(
// 					array(
// 						'field' => 'field_64a2c15641be8',
// 						'operator' => '==',
// 						'value' => '1',
// 					),
// 				),
// 			),
// 			'wrapper' => array(
// 				'width' => '25',
// 				'class' => '',
// 				'id' => '',
// 			),
// 			'choices' => array(
// 				1 => 'In stock',
// 				0 => 'Out of stock',
// 			),
// 			'default_value' => 0,
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
// 			'conditional_logic' => array(
// 				array(
// 					array(
// 						'field' => 'field_64a2c15641be8',
// 						'operator' => '==',
// 						'value' => '1',
// 					),
// 				),
// 			),
// 			'wrapper' => array(
// 				'width' => '25',
// 				'class' => '',
// 				'id' => '',
// 			),
// 			'choices' => array(
// 				1 => 'In stock',
// 				0 => 'Out of stock',
// 			),
// 			'default_value' => 0,
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
// 			'conditional_logic' => array(
// 				array(
// 					array(
// 						'field' => 'field_64a2c15641be8',
// 						'operator' => '==',
// 						'value' => '1',
// 					),
// 				),
// 			),
// 			'wrapper' => array(
// 				'width' => '25',
// 				'class' => '',
// 				'id' => '',
// 			),
// 			'choices' => array(
// 				1 => 'In stock',
// 				0 => 'Out of stock',
// 			),
// 			'default_value' => 0,
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


add_action( 'acf/include_fields', function() {
	if ( ! function_exists( 'acf_add_local_field_group' ) ) {
		return;
	}

	acf_add_local_field_group( array(
	'key' => 'group_64a27adf16381',
	'title' => 'Frame size availability',
	'fields' => array(
		array(
			'key' => 'field_64a2c15641be8',
			'label' => 'Has Frame Size?',
			'name' => 'has_frame_size',
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
			'key' => 'field_64a27adf6a114',
			'label' => 'Small',
			'name' => 's_frame',
			'aria-label' => '',
			'type' => 'number',
			'instructions' => 'Stock Quantity',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_64a2c15641be8',
						'operator' => '==',
						'value' => '1',
					),
				),
			),
			'wrapper' => array(
				'width' => '25',
				'class' => '',
				'id' => '',
			),
			'default_value' => 0,
			'min' => '',
			'max' => '',
			'placeholder' => '',
			'step' => '',
			'prepend' => '',
			'append' => '',
		),
		array(
			'key' => 'field_64a27c56d4633',
			'label' => 'Medium',
			'name' => 'm_frame',
			'aria-label' => '',
			'type' => 'number',
			'instructions' => 'Stock Quantity',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_64a2c15641be8',
						'operator' => '==',
						'value' => '1',
					),
				),
			),
			'wrapper' => array(
				'width' => '25',
				'class' => '',
				'id' => '',
			),
			'default_value' => 0,
			'min' => '',
			'max' => '',
			'placeholder' => '',
			'step' => '',
			'prepend' => '',
			'append' => '',
		),
		array(
			'key' => 'field_64a27c71d4635',
			'label' => 'Large',
			'name' => 'l_frame',
			'aria-label' => '',
			'type' => 'number',
			'instructions' => 'Stock Quantity',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_64a2c15641be8',
						'operator' => '==',
						'value' => '1',
					),
				),
			),
			'wrapper' => array(
				'width' => '25',
				'class' => '',
				'id' => '',
			),
			'default_value' => 0,
			'min' => '',
			'max' => '',
			'placeholder' => '',
			'step' => '',
			'prepend' => '',
			'append' => '',
		),
		array(
			'key' => 'field_64a27c83d4636',
			'label' => 'Extra Large',
			'name' => 'xl_frame',
			'aria-label' => '',
			'type' => 'number',
			'instructions' => 'Stock Quantity',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_64a2c15641be8',
						'operator' => '==',
						'value' => '1',
					),
				),
			),
			'wrapper' => array(
				'width' => '25',
				'class' => '',
				'id' => '',
			),
			'default_value' => 0,
			'min' => '',
			'max' => '',
			'placeholder' => '',
			'step' => '',
			'prepend' => '',
			'append' => '',
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


// Display frame sizes as buttons (single selection)
function display_frame_sizes_as_button() {
    global $product;
   
    // Check if the product has sizes
   
    if( get_field('has_frame_size', $product->get_id())){ 
        if (get_field('s_frame', $product->get_id()) || get_field('m_frame', $product->get_id()) || get_field('l_frame', $product->get_id()) || get_field('xl_frame', $product->get_id())) {
            echo '<div class="frame-sizes">';
            echo '<h4>' . __('select frame size', 'your-text-domain') . '<span id="frame-size-val"></span></h4>';

            // Retrieve and display the product sizes as buttons
            $s_frame = get_field_object('s_frame', $product->get_id());
            $m_frame = get_field_object('m_frame', $product->get_id());
            $l_frame = get_field_object('l_frame', $product->get_id());
            $xl_frame = get_field_object('xl_frame', $product->get_id());
        // var_dump(get_field_object('s_frame', $product->get_id()));
            echo '<div class="frame-sizes-button">';
            echo '<button type="button" class="frame-size-button frame-size-small' . ($s_frame['value'] > 0 ? '' : ' disabled').'"  data-size="' . $s_frame['label'] . '" '. ($s_frame['value'] > 0 ? '' : ' disabled') .'>S</button>';
            echo '<button type="button" class="frame-size-button frame-size-medium' .($m_frame['value'] > 0 ? '' : ' disabled').'"  data-size="' . $m_frame['label'] . '" '. ($m_frame['value'] > 0 ? '' : ' disabled') .'>M</button>';
            echo '<button type="button" class="frame-size-button frame-size-large'. ($l_frame['value'] > 0 ? '' : ' disabled').'"   data-size="' . $l_frame['label'] . '" '. ($l_frame['value'] > 0 ? '' : ' disabled') .'>L</button>';
            echo '<button type="button" class="frame-size-button frame-size-extra-large' . ($xl_frame['value'] > 0 ? '' : ' disabled').'"  data-size="' . $xl_frame['label'] . '" '. ($xl_frame['value'] > 0 ? '' : ' disabled') .'>XL</button>';
            echo '</div>';
            echo '<input type="hidden" name="frame_size" id="frame_size" value="">'; // Hidden input field to store the selected size
            echo '</div>';
        }
    }
}

// Add display frame sizes and how to choose size block
function display_frame_size_how_to_choose_size() {
    //global $product;
    if (!is_singular('product')) {
        return;
    }
    $size_guide = get_field('size_guide');

    echo display_frame_sizes_as_button();
    // Display the custom field value
    if (!empty($size_guide)) {
        echo '<p><a class="size-guide--link" href="' . $size_guide['url'] . '" target="_blank">How to choose size?</a></p>';
    }
}
add_action('woocommerce_before_add_to_cart_button', 'display_frame_size_how_to_choose_size');

/** add custom validation for frame size */

function validate_product_options_before_add_to_cart( $passed, $product_id, $quantity, $variation_id = '', $variations = array() ) {

    $has_frame_size = get_field( 'has_frame_size', $product_id );
    $has_terms =  has_term( 'e-bikes', 'product_cat', $product_id ); 
    // Check if the product belongs to the "ebikes" category
    if ($has_frame_size) {
        // Add your custom field validation logic here
        $frame_size = isset( $_POST['frame_size'] ) ? sanitize_text_field( $_POST['frame_size'] ) : '';
        
        // Perform validation
        if ( empty( $frame_size ) ) {
            $passed = false;
            wc_add_notice( 'Please select your color and frame size before adding this product to your cart.', 'error' );
        }
    }
    
    return $passed;
}

add_filter( 'woocommerce_add_to_cart_validation', 'validate_product_options_before_add_to_cart', 10, 5 );


//Add frame size to cart item data
function add_selected_size_to_cart_item_data($cart_item_data, $product_id, $variation_id, $quantity) {
    //var_dump($_POST['frame_size']);
    if (isset($_POST['frame_size'])) {
        $selected_size = sanitize_text_field($_POST['frame_size']);
        $cart_item_data['frame_size'] = $selected_size;
    }
    return $cart_item_data;
}
add_filter('woocommerce_add_cart_item_data', 'add_selected_size_to_cart_item_data', 10, 4);


// Display frame size in cart item
function display_selected_size_in_cart($item_name, $cart_item, $cart_item_key) {
    if (isset($cart_item['frame_size'])) {
        $selected_size = $cart_item['frame_size'];
        $item_name .= '<br><strong>Frame Size:</strong> ' . $selected_size;
    }
    return $item_name;
}
add_filter('woocommerce_cart_item_name', 'display_selected_size_in_cart', 10, 3);


// Add selected product size to order item meta
function add_frame_size_to_order_item_meta($item_id, $values, $cart_item_key) {
    $frame_size = isset($values['frame_size']) ? $values['frame_size'] : '';

    if (!empty($frame_size)) {
        wc_add_order_item_meta($item_id, 'Frame Size', $frame_size);
    }
}
add_action('woocommerce_add_order_item_meta', 'add_frame_size_to_order_item_meta', 10, 3);


function handle_quantity_updates( $order_id, $old_status, $new_status ) {
    $order = wc_get_order( $order_id );
    $items = $order->get_items();

    foreach ( $items as $item ) {
        $product_id = $item->get_product_id();
        $quantity   = $item->get_quantity();
        $frame_size = $item->get_meta('Frame Size');

        // Update the stock quantity based on the size
        $field_name = '';
        if ( $frame_size === 'Small' ) {
            $field_name = 's_frame';
        } elseif ( $frame_size === 'Medium' ) {
            $field_name = 'm_frame';
        } elseif ( $frame_size === 'Large' ) {
            $field_name = 'l_frame';
        } elseif ( $frame_size === 'Extra Large' ) {
            $field_name = 'xl_frame';
        } else {
            // Handle unknown size or no size specified
            continue;
        }

        // Get the current stock quantity based on the size
        $current_stock = get_field( $field_name, $product_id );

        // Determine the event and update the stock quantity accordingly
        $updated_stock = $current_stock;
        if ( $new_status === 'completed' && ( $old_status === 'on-hold' || $old_status === 'pending' ) ) {
            // Subtract stock quantity for completed orders
            $updated_stock -= $quantity;
        } elseif ( $new_status === 'cancelled' ) {
            // Return stock quantity for cancelled orders
            $updated_stock += $quantity;
        } elseif ( $new_status === 'on-hold' && $old_status !== 'completed' ) {
            // Subtract stock quantity for on-hold orders
            $updated_stock -= $quantity;
        } elseif ( $new_status === 'refunded' ) {
            // Return stock quantity for refunded orders
            $updated_stock += $quantity;
        }
        // Add more conditions for additional order statuses if needed

        // Update the ACF field with the new stock quantity based on the size
        update_field( $field_name, $updated_stock, $product_id );
    }
}

add_action( 'woocommerce_order_status_changed', 'handle_quantity_updates', 10, 3 );


// // Display product size in order email
function display_frame_size_in_order_email($item, $cart_item_key, $values, $order) {
    $frame_size = isset($values['frame_size']) ? $values['frame_size'] : '';

    if (!empty($frame_size)) {
        echo '<p><strong>Frame Size:</strong> ' . $frame_size . '</p>';
    }
}
add_action('woocommerce_email_order_details', 'display_frame_size_in_order_email', 10, 4);


/** End Stock Management for Frame Size */