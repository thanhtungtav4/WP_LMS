<?php
namespace ElementsKit\Modules\Conditional_Fields_For_Elementor_Pro_Form;

class Pre_Populate_Conditions_Data{

    private $field_conditions = [];

    public function __construct() {
        add_action('elementor-pro/forms/pre_render', [$this, 'elementskit_conditional_field_for_pro_form_pre_render'], 10, 2);
	}

    public function elementskit_conditional_field_for_pro_form_pre_render($form_data, $form){
        if(!empty($form_data['form_fields']) && is_array($form_data['form_fields'])){
            array_walk($form_data['form_fields'], function($field, $key){
                if(
                    $field['form_fields_elementskit_condition_enabled'] === 'yes' && 
                    !empty($field['form_fields_elementskit_condition_expressions'])
                ){
                    // Condition is enabled
                    array_push($this->field_conditions, [
                        'id' => $field['custom_id'], 
                        'condition' => $this->join_lines_with_and( $field['form_fields_elementskit_condition_expressions'] ), 
                        'action' => $field['form_fields_elementskit_condition_action']
                    ]);
                }
            });
        }
        if (!empty($this->field_conditions)) {
            $form->add_render_attribute('wrapper', 'elementskit-field-conditions', wp_json_encode($this->field_conditions));
            $condition_enabled_field_ids = wp_list_pluck($form_data['form_fields'], 'custom_id');
            $form->add_render_attribute('wrapper', 'elementskit-field-ids', wp_json_encode($condition_enabled_field_ids));
        }
    }

    public function split_new_line($string) {
        return explode("\n", preg_replace('/[\r\n]+/',"\n", trim($string)));  
    }

    public function join_lines_with_and($expr) {
        $condition_lines = array_values(array_filter(array_map('trim', $this->split_new_line($expr)), 'strlen'));
        return '(' . join(')&&(', $condition_lines) . ')';
    }

}