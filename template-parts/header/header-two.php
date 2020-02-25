<div class="mainsite-topbar mainsite-header-two-topbar">
    <div class="container">
        <div class="mainsite-flex-wrap">
            <?php  if ( has_nav_menu( 'topbar-menu' ) ) : ?>
                <div class="mainsite-flex-col mainsite-topbar-menu">
                    <?php get_template_part( 'template-parts/topbar-menu' ); ?>
                </div><!--/.mainsite-flex-col-->
            <?php endif; ?> 
            <div class="mainsite-flex-col">
                <div class="mainsite-social-icon">
                    <span><?php esc_html_e( 'Follow Us', 'blogen' );?></span>
                    <?php get_template_part( 'template-parts/social-link' ); ?>
                </div><!--/.mainsite-topbar-info-->  
            </div><!--/.mainsite-flex-col-->        
        </div><!--/.row-->
    </div><!-- .container -->
</div>
<header id="masthead" class="site-header mainsite-header-two">
    <div class="mainsite-header-wrap d-none d-lg-block">
        <div class="container">
            <div class="mainsite-flex-wrap header-two-logo">
                <div class="mainsite-site-branding mainsite-flex-col">
                    <?php get_template_part( 'template-parts/logo' );?>
                </div><!-- .site-branding -->
            </div><!-- .mainsite-flex-wrap -->
        </div><!-- .container -->
    </div><!--/.mainsite-header-wrap-->
    
    <div class="main-navigation-wrap site-branding d-none d-lg-block">       
        <div class="container">    
            <div class="mainsite-flex-wrap mainsite-menu-wrap"> 
                <div class="mainsite-flex-col">   
                    <a id="mainsite-header-trigger" class="mainsite-trigger" href="#">
                        <i class="cb-font-menu"></i>
                    </a>
                </div>   
                <div class="mainsite-flex-col">  
                    <?php get_template_part( 'template-parts/main-menu' ); ?>
                </div> 
                <div class="mainsite-flex-col">   
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