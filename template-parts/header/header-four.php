<header id="masthead" class="site-header mainsite-header-four">
    <div class="main-navigation-wrap site-branding d-none d-lg-block">       
        <div class="container-fluid">    
            <div class="mainsite-flex-wrap mainsite-menu-wrap"> 
                <div class="mainsite-site-branding mainsite-flex-col">
                    <a id="mainsite-header-trigger" class="mainsite-trigger" href="#">
                        <i class="cb-font-menu"></i>
                    </a>
                    <?php get_template_part( 'template-parts/logo' );?>
                    <div class="mainsite-logo-branding">
                        <?php $blogen_slogan = get_theme_mod( 'logo_slogan', __('Self Made Intrepreneurs', 'blogen') );
                        echo esc_html($blogen_slogan);
                        ?>
                    </div><!-- .site-branding -->
                    <?php get_template_part( 'template-parts/main-menu' ); ?>
                </div><!-- .site-branding -->
                <div class="mainsite-flex-col mainsite-header-four-social">   
                    <div class="mainsite-social-icon">
                        <span><?php esc_html_e( 'Follow Us', 'blogen' );?></span>
                        <?php get_template_part( 'template-parts/social-link' ); ?>
                    </div><!--/.mainsite-topbar-info-->  
                    <?php $blogen_enable_search = get_theme_mod( 'enable_search', 1 );?>
                        <?php if($blogen_enable_search) { ?>
                        <?php get_template_part( 'template-parts/header-search' );
                    } ?>
                </div>   
            </div>   
        </div><!-- .container --> 
    </div><!-- .main-navigation-wrap --> 
    <?php get_template_part( 'template-parts/responsive-header' );?>
    <?php $blogen_enable_search = get_theme_mod( 'enable_search', 1 );?>
	<?php if($blogen_enable_search) { ?>
		<div class="mainsite-header-search" style="display: none;">
			<div class="mainsite-header-search-wrap">
				<?php echo get_search_form();?>
			</div><!-- Site search end -->
		</div><!-- Site search end -->
	<?php } ?>
</header><!-- #masthead -->