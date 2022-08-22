<?php

namespace ElementsKit\Modules\Pro_Form_Signature_Field;

if (!\defined('ABSPATH')) exit;

use ElementorPro\Modules\Forms\Classes;
use Elementor\Controls_Manager;
use ElementorPro\Plugin;
use Error;

/**
 * The Main base class for the signature field
 */
class Signature_Field extends \ElementorPro\Modules\Forms\Fields\Field_Base
{
    public function __construct()
    {
        add_action('elementor/element/form/section_form_style/after_section_end', [$this, 'style_controls']);
        parent::__construct();

    }

    public function get_name()
    {
        return esc_html__('Signature', 'elementskit');
    }
    public function get_type()
    {
        return 'signature-field';
    }

    public function update_controls($widget)
    {
        $new_controls = [
            'signature_data_format' => [
                'name' => 'signature_data_format',
                'label' => esc_html__('Signature Format', 'elementskit'),
                'type' => Controls_Manager::SELECT,
                'options' => [
					'image/png'  => esc_html__( 'PNG', 'elementskit' ),
					'image/jpeg' => esc_html__( 'JPEG', 'elementskit' )
				],
                'default' => 'image/png',
                'inner_tab' => 'form_fields_content_tab',
                'tabs_wrapper' => 'form_fields_tabs',
                'condition' => [
                    'field_type' => $this->get_type()
                ]
            ],
            'signature_save_as_file' => [
                'name' => 'signature_save_as_file',
                'label' => esc_html__('Save as file', 'elementskit'),
                'default' => 'yes',
                'type' => Controls_Manager::SWITCHER,
                'inner_tab' => 'form_fields_content_tab',
                'tabs_wrapper' => 'form_fields_tabs',
                'condition' => [
                    'field_type' => $this->get_type()
                ]
            ]
        ];

        $control_data = \Elementor\Plugin::instance()->controls_manager->get_control_from_stack($widget->get_unique_name(), 'form_fields');

        $control_data['fields'] = array_merge($control_data['fields'], $new_controls);
        $widget->update_control('form_fields', $control_data);
    }

    public function style_controls($widget)
    {
        $widget->start_controls_section(
            'elementskit_signature_field_styles', 
            [
                'label' => esc_html__('Signature Field', 'elementskit'), 
                'tab' => Controls_Manager::TAB_STYLE
            ]
        );
        $widget->add_control(
            'elementskit_signature_field_background_color', 
            [
                'label' => esc_html__('Field Background Color', 'elementskit'), 
                'type' => Controls_Manager::COLOR, 
                'default' => '#ffffff', 
            ]
        );
        $widget->add_control(
            'elementskit_signature_field_pen_color', 
            [
                'label' => esc_html__('Pen Color', 'elementskit'), 
                'type' => Controls_Manager::COLOR, 
                'default' => '#000000',
            ]
        ); 
        $widget->end_controls_section();
    }

    public function render($field, $field_index, $form)
    {
        $settings = $form->get_settings_for_display();

        $form->add_render_attribute('input' . $field_index, 'class', 'elementskit-signature-input-field');
        $form->add_render_attribute('wrapper' . $field_index, 'signature-field-id', $field['custom_id']);
        $form->add_render_attribute('wrapper' . $field_index, 'class', 'elementskit-signature-field');

        $form->add_render_attribute('signature_canvas' . $field_index, 'data-background-color', $settings['elementskit_signature_field_background_color']);
        $form->add_render_attribute('signature_canvas' . $field_index, 'data-pen-color', $settings['elementskit_signature_field_pen_color']);

        $form->add_render_attribute('signature_canvas' . $field_index, 'data-format', $field['signature_data_format']);
?>
        <div <?php $form->print_render_attribute_string('wrapper' . $field_index); ?>>
            <div class="elementskit-canvas-wrapper">
                <input type="hidden" <?php $form->print_render_attribute_string('input' . $field_index); ?>>
                <canvas class="elementor-field-textual elementor-field signature-pad" height="200"
                    <?php $form->print_render_attribute_string('signature_canvas' . $field_index); ?> >
                </canvas>
                <button class="elementskit-clear-signature clear"><i class="icon icon-refresh"></i></button>
            </div>
        </div>
<?php
    }

    // Validate Signature Field
    public function validation($field, $record, $ajax)
    {
        if ($field['required'] && is_null($field['raw_value'])) {
            $ajax->add_error($field['id'], esc_html__(sprintf('%s field is required.', ($field['elementskit'] ?? 'elementskit')), 'elementskit'));
        }
    }

    // Sanitize Signature Field
    public function sanitize_field($value, $field)
    {
        if ( base64_encode(base64_decode($value, true)) === $value){
            return $value;
        } 
        return '';
    }

    public function process_field($field, $record, $ajax)
    {
        $raw_value = $field['raw_value'];
        $field_settings = $record->get_form_settings('form_fields');
        $this_field_settings = [];
        foreach($field_settings as $setting){
            if($setting['custom_id']  === $field['id']){
                $this_field_settings = $setting;
            }
        }
        if($this_field_settings['signature_save_as_file'] !== 'yes'){
            return;
        }

        $data = explode(';base64,', $raw_value);
        unset($raw_value);

        if(count($data) != 2){
           return;
        }
        $extension = str_replace('data:', '', $data[0]);
        $encoded_data = $data[1];

        $decoded_data = base64_decode($encoded_data);
        // upload_signature method from elementor parent class.
        $signature_file = $this->upload_signature($extension, $decoded_data, $ajax);
        $record->update_field($field['id'], 'value', $signature_file);
    }


    private function upload_signature($extension, $decoded_data, $ajax){
        $dir_path = wp_upload_dir()['basedir'] . '/elementskit/elementor-from/signatures/';
        wp_mkdir_p($dir_path);

        WP_Filesystem();
        global $wp_filesystem;
        $wp_filesystem->is_dir($dir_path);

        $filename = wp_unique_filename($dir_path,  time() . '.' . $this->get_extension($extension));
        $signature_file = $dir_path . $filename;

        if($wp_filesystem->is_dir($dir_path) && $wp_filesystem->is_writable($dir_path)){  
            // Put the data in the file
            if($wp_filesystem->put_contents($signature_file, $decoded_data)){
                return $signature_file;
            } else {
                $ajax->add_error_message(esc_html__('Signature image could not be saved.', 'elementskit'));
            }
        } else {
            $ajax->add_error_message(esc_html__('Upload directory is not writable.', 'elementskit'));
        }
    }

    protected function get_extension($extension){
        switch($extension){
            case 'image/jpeg':
                return 'jpeg';
                break;

            case 'image/png':
                return 'png';
                break;

            default:
                return 'jpeg';
        }
    }
}