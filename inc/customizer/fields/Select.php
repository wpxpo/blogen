<?php
defined('ABSPATH') || exit;

if( !class_exists( 'WP_Customize_Control' ) ){
	return null;
}

class blogon_Select_Control extends WP_Customize_Control {

	public $type = 'select';
	public $options;
	public $depends;

	public function render_content() {
		?>
		<?php if( $this->depends ){ ?>
			<div class="mainsite-customizer-warp mainsite-select" data-condition="<?php echo esc_attr($this->depends); ?>" data-value="<?php echo esc_attr($this->value()); ?>">
		<?php } else { ?>
			<div class="mainsite-customizer-warp">
		<?php } ?>
			<?php if ( isset( $this->label ) && '' !== $this->label ): ?>
				<span class="customize-control-title"><?php echo esc_attr(sanitize_text_field( $this->label )); ?></span>
			<?php endif; ?>
			<div class="mainsite-customizer-select">
                <select <?php $this->link(); ?>>
                    <?php foreach ($this->options as $key => $val) { ?>
                        <option value="<?php echo esc_attr($key); ?>" <?php selected( $this->value(), $key ); ?>><?php echo esc_attr($val); ?></option>
                    <?php } ?>
                </select>
			</div>
		</div>
	<?php }
}
