<?php
defined('ABSPATH') || exit;

if (!class_exists('blogon_Metabox')) {
    class blogon_Metabox{

        public function __construct(){
            add_action('add_meta_boxes',    array($this, 'blogon_metabox_init'));
            add_action('save_post',         array($this, 'blogon_metabox_settings_save_callback'), 10, 2);
            add_filter('blogon_metabox',    array($this, 'blogon_metabox_callback')); 
        }

        public function blogon_metabox_init() {
            add_meta_box('mainsite-single-metabox', esc_html__( 'Blogon Settings', 'blogon' ), array($this, 'blogon_settings_metabox_callback'), 'page', 'side', 'default');
        }

        public function blogon_settings_metabox_callback( $post ) {
            
            wp_nonce_field( basename( __FILE__ ), 'blogon_nonce' ); 
            
            $prams = apply_filters( 'blogon_metabox', array() );
            if (is_array($prams) && !empty($prams)) {
                foreach ($prams as $settings) {
                    $val = '';
                    if (isset($settings['key'])) {
                        $value = get_post_meta( $post->ID, $settings['key'], true );
                        $val = $value ? $value : $settings['default'];
                    }
                    switch ($settings['type']) {
                        
                        case 'checkbox': ?>
                            <div>
                                <label for="<?php echo esc_attr($settings['key']); ?>">
                                    <input type="checkbox" id="<?php echo esc_attr($settings['key']); ?>" name="<?php echo esc_attr($settings['key']); ?>" <?php checked( $val, 'on' ); ?>><?php echo esc_attr($settings['label']); ?>
                                </label>
                            </div>
                            <?php break;
        
                        case 'select': ?>
                            <div>
                                <p><?php echo esc_attr($settings['label']); ?></p>
                                <select name="<?php echo esc_attr($settings['key']); ?>" id="<?php echo esc_attr($settings['key']); ?>">
                                    <?php foreach ($settings['options'] as $key => $field) { ?>
                                        <option value="<?php echo esc_attr($key); ?>" <?php selected( $key, $val ); ?>><?php echo esc_attr($field); ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <?php break;
                        
                        case 'separator': ?>
                            <div>
                                <strong><?php echo esc_attr($settings['label']); ?></strong>
                            </div>
                            <?php break;
                        
                        default:
                            # code...
                            break;
                    }
                }
            } ?><?php 
        }


        public function blogon_metabox_settings_save_callback( $post_id, $post ) {
            if ( !isset( $_POST['blogon_nonce'] ) || !wp_verify_nonce( $_POST['blogon_nonce'], basename( __FILE__ ) ) ){
                return $post_id;
            }
            $post_type = get_post_type_object( $post->post_type );
            if ( !current_user_can( $post_type->cap->edit_post, $post_id ) ){
                return $post_id;
            }
            $prams = apply_filters( 'blogon_metabox', array() );
            if (is_array($prams) && !empty($prams)) {
                foreach ($prams as $settings) {
                    if (isset($settings['key'])) {
                        $new_meta_value = isset($_POST[$settings['key']]) ? sanitize_text_field($_POST[$settings['key']]) : '';
                        $meta_value = get_post_meta( $post_id, $settings['key'], true );
                        if ( $new_meta_value && '' == $meta_value ) {
                            add_post_meta( $post_id, $settings['key'], $new_meta_value, true );
                        } elseif ( $new_meta_value && $new_meta_value != $meta_value ) {
                            update_post_meta( $post_id, $settings['key'], $new_meta_value );
                        } elseif ( '' == $new_meta_value && $meta_value ) {
                            delete_post_meta( $post_id, $settings['key'], $meta_value );
                        }
                    }
                }
            }
        }


        // Settings Of Single Page
        public function blogon_metabox_callback($arr) {
            $new_arr = array(
                array(
                    'type' => 'separator',
                    'label' => esc_html__('Disable Sections', 'blogon'),
                ),
                array(
                    'key' => 'disable_page_title',
                    'type' => 'checkbox',
                    'label' => esc_html__('Disable Page Title', 'blogon'),
                    'default' => 0
                ),
                // array(
                //     'key' => 'blogon_select_1',
                //     'type' => 'select',
                //     'label' => esc_html__('Select 1', 'blogon'),
                //     'options' => array(
                //         'value1' => 'Label Value 1',
                //         'value2' => 'Label Value 2',
                //         'value3' => 'Label Value 3',
                //     ),
                //     'default' => 'value2'
                // )
            );
            return array_merge($new_arr, $arr);
        }


    }
    new blogon_Metabox();
}
















