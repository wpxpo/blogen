<div class="header-responsive-wrap d-lg-none">
    <div class="container">  
        <div class="mainsite-flex-wrap"> 
            <div class="site-branding mainsite-flex-col">
                <a href="<?php echo esc_url(home_url()); ?>">
                <?php
                    $blogon_logoimg   = get_theme_mod( 'logo_img', BLOGON_URI.'/assets/images/logo.png' );
                    $blogon_logotext  = get_theme_mod( 'logo_text', __('Blogon', 'blogon') );
                    $blogon_logotype  = get_theme_mod( 'logo_type', 'logo_img' );
                    switch ($blogon_logotype) {
                        case 'logo_img':
                        if( !empty($blogon_logoimg) ) { ?>
                            <img class="mainsite-logo" src="<?php echo esc_url( $blogon_logoimg ); ?>" alt="<?php esc_attr_e( 'Logo', 'blogon' ); ?>" title="<?php esc_attr_e( 'Logo', 'blogon' ); ?>">
                        <?php } else { ?>
                            <h1> <?php echo esc_html(get_bloginfo('name'));?> </h1>
                        <?php }
                        break;
                        default:
                        if( $blogon_logotext ) { ?>
                            <h1> <?php echo esc_html( $blogon_logotext ); ?> </h1>
                        <?php } else { ?>
                            <h1><?php echo esc_html(get_bloginfo('name'));?> </h1>
                        <?php }
                        break;
                    } ?>
                </a>
            </div><!-- .site-branding -->
            <div class="mainsite-flex-col mainsite-responsive-menu-option">   
                <a class="mainsite-trigger" href="#">
                    <i class="cb-font-menu"></i>
                </a>
                <?php $blogon_enable_search = get_theme_mod( 'enable_search', 1 );?>
                    <?php if($blogon_enable_search) { ?>
                    <div class="mainsite-search">
                        <i class="cb-font-search"></i>
                    </div>
                <?php } ?>
            </div> 
        </div><!--/.mainsite-flex-wrap--> 
    </div><!--/.container--> 
</div><!--/.header-responsive-wrap-->
   