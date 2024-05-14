<?php

  
function insert_required_placeholder($field_content, $field) {
    // Specify the form ID for which you want to apply the modification
    $form_id = 3;
  
    if ($field->formId === $form_id && $field->isRequired) {
        $placeholder = $field->placeholder ? $field->placeholder : '';
        $field_content = str_replace('placeholder=', 'placeholder="'.$placeholder.' *"', $field_content);
    }
    return $field_content;
  }
  add_filter('gform_field_content', 'insert_required_placeholder', 10, 2);
  
  
// Add custom css in the gf submit button
  function add_custom_class_submit_button($button, $form){
      return str_replace('gform_button', 'gform_button button--white button--hover-gradient', $button);
  }
  add_filter('gform_submit_button_3', 'add_custom_class_submit_button', 10, 2);



