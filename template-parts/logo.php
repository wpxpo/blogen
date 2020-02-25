<?php
    $blogen_logoimg   = get_theme_mod( 'logo_img', BLOGEN_URI.'/assets/images/logo.png' );
    $blogen_logotext  = get_theme_mod( 'logo_text', __('Blogen', 'blogen') );
    $blogen_logotype  = get_theme_mod( 'logo_type', 'logo_img' );
?>
<a class="mainsite-logo-wrapper mainsite-logo<?php echo esc_attr($blogen_logotype); ?>" href="<?php echo esc_url(home_url()); ?>">
    <?php
    switch ( $blogen_logotype ) {
        case 'logo_img':
        if( !empty($blogen_logoimg) ) { ?>
            <img class="mainsite-logo" src="<?php echo esc_url( $blogen_logoimg ); ?>" alt="<?php esc_attr_e( 'Logo', 'blogen' ); ?>" title="<?php esc_attr_e( 'Logo', 'blogen' ); ?>">
        <?php } else { ?>
            <h1> <?php echo esc_html(get_bloginfo('name'));?> </h1>
        <?php }
        break;
        default:
        if( $blogen_logotext ) { ?>
            <h1> <?php echo esc_html( $blogen_logotext ); ?> </h1>
        <?php } else { ?>
            <h1><?php echo esc_html(get_bloginfo('name'));?> </h1>
        <?php }
        break;
    } ?>
</a>


    
       