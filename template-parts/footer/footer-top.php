<?php if( blogen_is_active_footer_sidebar() ): ?>
<div class="mainsite-top-footer">
    <div class="container">
        <div class="footer-widget-wrap">
            <div class="row">
                <?php
                    $blogen_column = get_theme_mod( 'ft_column', 4 );	
                    for( $i = 1; $i <= 4; $i++ ){
                        ?>
                            <?php if ( is_active_sidebar( 'mainsite-footer-sidebar-'.$i ) ) : ?>
                                <div class="col-lg-<?php echo esc_attr($blogen_column);?> col-sm-12 footer-widget-item">
                                <?php dynamic_sidebar( 'mainsite-footer-sidebar-'.$i ); ?>
                                </div>
                            <?php endif; ?>
                        <?php
                    }
                ?>
            </div>
        </div>
    </div>
</div>
<?php endif;?>
