<?php
defined('ABSPATH') || exit;

if( class_exists( 'WP_Customize_Control' ) && !class_exists( 'blogon_Social_Control' ) ){
    return null;
}

class blogon_Social_Control extends WP_Customize_Control {
    
    public $type = 'social';

    public function enqueue() {
		wp_enqueue_script( 'mainsite-social-js', BLOGON_URI . '/inc/customizer/assets/js/social.js', array( 'jquery' ), BLOGON_VERSION, true );
	}
    
    public function render_content() {
        $social = ['facebook','twitter','dribbble','pinterest','github','instagram','tumblr','flickr'];
        ?>
        <div class="mainsite-customizer-warp">
            <?php if ( isset( $this->label ) && '' !== $this->label ): ?>
				<span class="customize-control-title"><?php echo esc_attr(sanitize_text_field( $this->label )); ?></span>
			<?php endif; ?>
            <div class="mainsite-customizer-social">
                <input class="mainsite-customizer-social" <?php esc_attr($this->link()); ?> type="text" value="<?php echo esc_attr($this->value()); ?>" />

                <div class="mainsite-repeatable-field">
                    <select class="mainsite-field-social-class">
                        <?php
                        foreach ($social as $val) {
                            echo '<option'.($val==$this->value()?' selected':'').'>'.esc_attr($val).'</option>';
                        }
                        ?>
                    </select>
                    <input class="mainsite-field-social-url" value=""/>
                </div>

                <button class="mainsite-field-social-add"><?php esc_attr_e('+ Add New','blogon'); ?></button>
            </div>
        </div>
        <?php
    }
}
