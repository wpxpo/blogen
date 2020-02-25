<?php
defined( 'ABSPATH' ) || exit;

if (!class_exists('blogen_Customizer')) {
	class blogen_Customizer{
		public function __construct(){
			$this->includes();
			add_action( 'customize_controls_enqueue_scripts', array( $this, 'customizer_controls_scripts' ) );
		}
	
		public function includes(){
			require_once BLOGEN_DIR . '/inc/customizer/Base.php';
		}
		
		public function customizer_controls_scripts() {
			wp_enqueue_style( 'mainsite-customizer-css', BLOGEN_URI . '/inc/customizer/assets/css/customizer.css', array(), BLOGEN_VERSION, false );
			wp_enqueue_script( 'mainsite-customizer-js', BLOGEN_URI . '/inc/customizer/assets/js/customizer.js', array('jquery'), BLOGEN_VERSION, false );
	
			wp_localize_script( 'mainsite-customizer-js', 'blogen_kit', array(
				'ajax_url' 		 => admin_url('admin-ajax.php'),
				'import_success' => esc_html__('Success! Your theme data successfully imported. Page will be reloaded within 2 sec.', 'blogen'),
				'import_error'   => esc_html__('Error! Your theme data importing failed.', 'blogen'),
				'file_error' 	 => esc_html__('Error! Please upload a file.', 'blogen')
			));
		}
	}
	new blogen_Customizer();
}
