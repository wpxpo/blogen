<?php
defined('ABSPATH') || exit;

if( class_exists( 'WP_Customize_Control' ) && !class_exists( 'blogon_Typography_Control' ) ){
    return null;
}

class blogon_Typography_Control extends WP_Customize_Control {
    
    public $type = 'typography';

    public function enqueue() {
		wp_enqueue_script( 'mainsite-typography-js', BLOGON_URI . 'assets/js/typography.js', array( 'jquery' ), BLOGON_VERSION, true );
	}
    
    public function render_content() { ?>
        <div class="mainsite-customizer-warp">
            <?php if ( isset( $this->label ) && '' !== $this->label ): ?>
				<span class="customize-control-title"><?php echo esc_attr(sanitize_text_field( $this->label )); ?></span>
			<?php endif; ?>
            <div class="mainsite-customizer-typography">
                <input class="mainsite-customizer-typography-input" <?php esc_attr($this->link()); ?> type="text" value="<?php echo esc_attr($this->value()); ?>" />
                <select class="mainsite-field-typography-field"></select>
                <select class="mainsite-field-typography-weight-field"></select>
            </div>
        </div>
        <?php
    }
}
