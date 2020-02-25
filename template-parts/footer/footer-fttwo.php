<footer class="mainsite-footer mainsite-footer-two">
    <div class="container">
        <div class="mainsite-footer-info">
            <div class="row">
            <div class="col-md-12 text-center">
                <div class="mainsite-copyrhigt">
                    <?php $blogen_footer_logo = get_theme_mod( 'footer_logo', BLOGEN_URI.'/assets/images/footer-logo.png' );?>
                    <?php $blogen_footer_share = get_theme_mod( 'enable_footer_share', 1 );?>
                    <div class="mainsite-copyrhigt-img">    
                        <img src="<?php echo esc_url($blogen_footer_logo);?>" alt="<?php esc_attr_e('Footer Logo','blogen') ?>"> 
                    </div>
                    <?php if($blogen_footer_share == 0) { ?>
                        <div class="mainsite-social-icon mainsite-footer-social-icon">
                            <ul>
                                <?php if( get_theme_mod( 'link_facebook', '#' ) ) { ?>
                                    <li><a href="<?php echo esc_url(get_theme_mod( 'link_facebook', '#' ));?>"><i class="cb-font-facebook"></i></a></li>
                                <?php } ?>
                                <?php if( get_theme_mod( 'link_instagram', '#' ) ) { ?>
                                    <li><a href="<?php echo esc_url(get_theme_mod( 'link_instagram', '#' ));?>"><i class="cb-font-instagram"></i></a></li>
                                <?php } ?>
                                <?php if( get_theme_mod( 'link_twitter', '#' ) ) { ?>
                                    <li><a href="<?php echo esc_url(get_theme_mod( 'link_twitter', '#' ));?>"><i class="cb-font-twitter"></i></a></li>
                                <?php } ?>
                                <?php if( get_theme_mod( 'link_linkedin', '#' ) ) { ?>
                                    <li><a href="<?php echo esc_url(get_theme_mod( 'link_linkedin', '#' ));?>"><i class="cb-font-linkedin"></i></a></li>
                                <?php } ?>
                                </ul>
                            </div><!--/.mainsite-social-icon--> 
                        </div><!--/.mainsite-copyrhigt-->  
                    <?php } ?>
                    <?php 
                    if ( has_nav_menu( 'footer-menu' ) ) :
                        wp_nav_menu(
                            array(
                                'theme_location' => 'footer-menu',
                                'menu_class'     => 'mainsite-footer-menu',
                                'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                            )
                        );
                    endif; 
                    ?>
                </div><!--/.col-sm-5-->         
            </div><!--/.row-->
        </div><!-- .mainsite-footer-info -->
    </div><!-- .container -->
    <div class="mainsite-copyrhigt-text">
        <?php $blogen_copyright = get_theme_mod( 'copyright', sprintf( __('Created by %1$sWPXPO%2$s. Powered by %3$sWordPress%4$s Code is Poetry.', 'blogen'), '<strong>', '</strong>', '<strong>', '</strong>' ) );?>
        <?php echo wp_kses_post($blogen_copyright);?>
    </div>
</footer>