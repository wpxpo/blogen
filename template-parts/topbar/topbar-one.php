<div class="mainsite-topbar">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-7">
                <?php 
                    if ( has_nav_menu( 'topbar-menu' ) ) :
                        wp_nav_menu(
                            array(
                                'theme_location' => 'topbar-menu',
                                'menu_class'     => 'mainsite-topbar-menu',
                                'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                            )
                        );
                    endif; 
                ?> 
            </div><!--/.col-md-6-->
            <div class="col-sm-12 col-md-5">
                <div class="mainsite-topbar-info">
                    <?php $blogon_number = get_theme_mod( 'contact_number', __('(123)456 7890', 'blogon') ); ?>
                    <?php $blogon_email = get_theme_mod( 'email', 'demo@site.com' ); ?>
                    <?php if($blogon_number) { ?>
                        <span><i class="cb-font-phone"></i><?php echo esc_attr($blogon_number);?></span>
                    <?php } ?>
                    <?php if($blogon_email) { ?>
                    <span><i class="cb-font-mail-alt"></i><?php echo esc_attr($blogon_email);?></span>
                    <?php } ?>
                </div><!--/.mainsite-copyrhigt-->  
            </div><!--/.col-sm-6-->        
        </div><!--/.row-->
    </div><!-- .container -->
</div>