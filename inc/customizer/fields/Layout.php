<?php
defined('ABSPATH') || exit;

if( !class_exists( 'WP_Customize_Control' ) ){
	return null;
}

class blogen_Layout_Control extends WP_Customize_Control {

	public $type = 'layout';
	public $key;
	public $options;
	public $depends;

	public function render_content() {
		?>
		<?php if( $this->depends ){ ?>
			<div class="mainsite-customizer-warp mainsite-layout" data-condition="<?php echo esc_attr($this->depends); ?>" data-value="<?php echo esc_attr($this->value()); ?>">
		<?php } else { ?>
		<div class="mainsite-customizer-warp">
			<?php } ?>
			<?php if ( isset( $this->label ) && '' !== $this->label ): ?>
				<span class="customize-control-title"><?php echo esc_attr(sanitize_text_field( $this->label )); ?></span>
			<?php endif; ?>
			<div class="mainsite-customizer-layout">
				<?php foreach ($this->options as $key => $val) { ?>
					<div class="mainsite-radio-layout">
						<input  <?php esc_attr($this->link()); ?> name="<?php echo esc_attr($this->key); ?>" type="radio" id="<?php echo esc_attr($key); ?>" value="<?php echo esc_attr($key); ?>" <?php checked( $this->value(), $key ); ?> />	
						<label for="<?php echo esc_attr($key); ?>"><img src="<?php echo esc_url($val); ?>" /></label>
					</div>
				<?php } ?>
			</div>
		</div>
	<?php }
}

