<div class="mainsite-close-canvas"></div>
<div class="mainsite-offcanvas-wrap"> 
    <div class="mainsite-offcanvas-header">
        <div class="mainsite-offcanvas-logo">
            <?php $offcanvas_logo_img   = get_theme_mod( 'offcanvas_logo_img', BLOGON_URI.'/assets/images/logo.png' ); ?>
            <img class="mainsite-offcanavs-logo" src="<?php echo esc_url( $offcanvas_logo_img ); ?>" alt="<?php esc_attr_e( 'Logo', 'blogon' ); ?>">
        </div>
        <a class="mainsite-trigger" href="#" style="height: 20px; width: 20px; display: inline-block;">
            <i class="cb-font-cancel"></i>
        </a>
    </div><!--/.mainsite-offcanvas-header-->
    <div class="mainsite-offcanvas-sidebar">     
        <div class="mainsite-offcanvas-menu">     
            <nav id="site-navigation" class="main-navigation" aria-label="<?php esc_attr_e( 'Top Menu', 'blogon' ); ?>">
                <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'primary',
                        'menu_class'     => 'primary-menu',
                        'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                    )
                );
                ?>
            </nav><!-- #site-navigation -->
        </div><!--/.mainsite-offcanvas-menu-->
        <?php
        if ( is_active_sidebar( 'offcanavs-1' ) ) { ?>
            <div class="mainsite-offcanvas-widget">  
                <?php dynamic_sidebar( 'offcanavs-1' ); ?>
            </div><!--/.mainsite-offcanvas-widget-->
        <?php } ?>
        <a class="mainsite-trigger-bottom" href="#" style="height: 20px; width: 20px; display: inline-block;">
            <i class="cb-font-cancel"></i>
        </a>
    </div><!--/.mainsite-offcanvas-sidebar-->
</div><!--/.mainsite-offcanvas-wrap-->
