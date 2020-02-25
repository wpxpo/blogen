<?php
defined('ABSPATH') || exit;

if( !class_exists( 'WP_Customize_Control' ) ){
	return null;
}

class blogon_Separator_Control extends WP_Customize_Control {
	
	public $type = 'separator';
	
	public function render_content(){
	?>
		<div class="mainsite-customizer-warp">
			<?php if( isset($this->label) && '' !== $this->label ): ?>
				<span class="customize-control-title"><?php echo esc_attr(sanitize_text_field($this->label)); ?></span>
			<?php endif; ?>
			<div class="mainsite-customizer-separator">
				<hr/>
			</div>
		</div>
	<?php
	}
}
