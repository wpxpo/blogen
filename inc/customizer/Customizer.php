<?php
defined( 'ABSPATH' ) || exit;

if (!class_exists('blogon_Customizer')) {
	class blogon_Customizer{
		public function __construct(){
			$this->includes();
			add_action( 'customize_controls_enqueue_scripts', array( $this, 'customizer_controls_scripts' ) );
		}
	
		public function includes(){
			require_once BLOGON_DIR . '/inc/customizer/Base.php';
		}
		
		public function customizer_controls_scripts() {
			wp_enqueue_style( 'mainsite-customizer-css', BLOGON_URI . '/inc/customizer/assets/css/customizer.css', array(), BLOGON_VERSION, false );
			wp_enqueue_script( 'mainsite-customizer-js', BLOGON_URI . '/inc/customizer/assets/js/customizer.js', array('jquery'), BLOGON_VERSION, false );
	
			wp_localize_script( 'mainsite-customizer-js', 'blogon_kit', array(
				'ajax_url' 		 => admin_url('admin-ajax.php'),
				'import_success' => esc_html__('Success! Your theme data successfully imported. Page will be reloaded within 2 sec.', 'blogon'),
				'import_error'   => esc_html__('Error! Your theme data importing failed.', 'blogon'),
				'file_error' 	 => esc_html__('Error! Please upload a file.', 'blogon')
			));
		}
	}
	new blogon_Customizer();
}
