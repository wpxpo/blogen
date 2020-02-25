<?php

class blogen_Admin_Settings {
    public function __construct() {
        if ( is_admin() ) {
		    add_action('admin_enqueue_scripts', array( $this, 'admin_scripts' ) );
		    add_action('admin_menu', array( $this, 'theme_info' ));
        }
    }
	/**
	 * Enqueue scripts for admin page
	 */
	function admin_scripts( $hook ) {
		if ( $hook === 'widgets.php' || $hook === 'appearance_page_ft_site'  ) {
			wp_enqueue_style( 'mainsite-admin-css', get_template_directory_uri() . '/assets/css/admin-settings.css' );
		}
	}

	function theme_info() {
		$menu_title = "<span class='mainsite-menu-item'>".esc_html__('Blogen Options', 'blogen')."</span>";
		add_theme_page( esc_html__( 'Blogen Dashboard', 'blogen' ), $menu_title, 'edit_theme_options', 'ft_blogen', array( $this, 'theme_info_page' ));
	}

	function theme_info_page() {
		$theme_data = wp_get_theme('blogen');
		?>
        <div class="mainsite-theme-dashboard-wrap">
            <div class="mainsite-theme-dashboard-container">
                <div class="mainsite-theme-overview">
                    <div class="mainsite-dashboard-container">
                        <div class="mainsite-theme-overview-version">
                            <img src="<?php echo esc_url(get_template_directory_uri().'/assets/images/logo.png');?>" alt="<?php esc_attr_e('Site Logo', 'blogen'); ?>"/>
                            <span><?php echo esc_attr($theme_data->Version);?></span>
                        </div>
                        <div class="mainsite-theme-overview-slogan">
                        <?php esc_html_e( 'Fast & Fully Customizable Gutenberg WordPress theme.', 'blogen'); ?>
                        </div>
                    </div>
                </div>
                <div class="mainsite-theme-content-wrap">
                    <div class="mainsite-dashboard-container ">
                        <div class="mainsite-dashboard-intro infoBox">
                            <?php esc_html_e( 'Blogen is beautifully designed clean WordPress blog theme. Easy to setup and has a nice set of features that make your site stand out. It is suitable for personal, fashion, food, travel, business, professional, portfolio, photography and any kind of blogging sites. Blogen is super fast, fully customizable and ready for your next store. It working great with the Elementor, Oxygen, Beaver Builder, Visual Composer, SiteOrigin, Divi etc. This theme is WooCommerce and Gutenberg blocks ready theme. Regular update and maintain by a group of people. You can build anykind of website using this theme.', 'blogen' ); ?>
                                <div class="mainsite-dashboard-btn"><a href="<?php echo esc_url(admin_url('customize.php')); ?>#accordion-section-sub_header_banner" class="button button-primary"><?php esc_html_e('Start Customizing', 'blogen'); ?></a></div>
                        </div><!--/.mainsite-theme-dashboard-card-->
                        <div class="mainsite-dashboard-intro mainsite-dashboard-gap infoBox">
                            <h3 class="mainsite-dashboard-title"><?php esc_html_e( 'Ultimate Post Blocks', 'blogen' ); ?></h3>
                            <?php esc_html_e('Ultimate Post Blocks is a Gutenberg post block plugins for creating beautiful Gutenberg post grid blocks, post listing blocks, post slider blocks and post carousel blocks within a few seconds.', 'blogen'); ?>
                            <div class="mainsite-dashboard-btn"><a href="https://wordpress.org/plugins/ultimate-post/" target="_blank" class="button button-primary"><?php esc_html_e('Free Download', 'blogen'); ?></a></div>
                        </div>
                    </div><!--/.mainsite-theme-dashboard-card-->
                </div><!--/.mainsite-theme-dashboard-row-->    
            </div><!--/.mainsite-theme-dashboard-row-->    
        </div> <!--/.mainsite-theme-dashboard-wrap-->
		<?php
	}
}

new blogen_Admin_Settings();



