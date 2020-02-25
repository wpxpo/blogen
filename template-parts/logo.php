<?php
    $blogon_logoimg   = get_theme_mod( 'logo_img', BLOGON_URI.'/assets/images/logo.png' );
    $blogon_logotext  = get_theme_mod( 'logo_text', __('Blogon', 'blogon') );
    $blogon_logotype  = get_theme_mod( 'logo_type', 'logo_img' );
?>
<a class="mainsite-logo-wrapper mainsite-logo<?php echo esc_attr($blogon_logotype); ?>" href="<?php echo esc_url(home_url()); ?>">
    <?php
    switch ( $blogon_logotype ) {
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


    
       