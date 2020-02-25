<?php $blogen_enable_search = get_theme_mod( 'enable_search', 1 ); ?>
<header id="masthead" class="site-header mainsite-header-three">
    <div class="mainsite-header-wrap d-none d-lg-block">
        <div class="container">
            <div class="mainsite-flex-wrap">
                <div class="mainsite-social-icon mainsite-flex-col">
                    <?php get_template_part( 'template-parts/social-link' );?>
                </div>
                <div class="mainsite-site-branding mainsite-flex-col">
                    <?php get_template_part( 'template-parts/logo' );?>
                </div><!-- .site-branding -->
                <div class="mainsite-social-icon mainsite-flex-col">
                    <?php if($blogen_enable_search) { ?>
                        <?php get_template_part( 'template-parts/header-search' ); ?>
                    <?php } ?>
                </div>
            </div><!-- .mainsite-flex-wrap -->
        </div><!-- .container -->
    </div><!--/.mainsite-header-wrap-->
    <div class="main-navigation-wrap site-branding d-none d-lg-block">       
        <div class="container">    
            <div class="mainsite-flex-wrap mainsite-menu-wrap header-three-menu"> 
                <div class="mainsite-flex-col">  
                    <?php get_template_part( 'template-parts/main-menu' ); ?>
                </div> 
            </div>   
        </div><!-- .container --> 
    </div><!-- .main-navigation-wrap --> 
    <?php get_template_part( 'template-parts/responsive-header' );?>
	<?php if($blogen_enable_search) { ?>
		<div class="mainsite-header-search" style="display: none;">
			<div class="mainsite-header-search-wrap">
				<?php echo get_search_form();?>
			</div><!-- Site search end -->
		</div><!-- Site search end -->
	<?php } ?>
</header><!-- #masthead -->        