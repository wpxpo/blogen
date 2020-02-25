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
    <?php if( get_theme_mod( 'link_linkedin', '' ) ) { ?>
        <li><a href="<?php echo esc_url(get_theme_mod( 'link_linkedin', '#' ));?>"><i class="cb-font-linkedin"></i></a></li>
    <?php } ?>
</ul>

              