<?php $blogen_number = get_theme_mod( 'contact_number', __('(123)456 7890', 'blogen') ); ?>
<?php $blogen_email = get_theme_mod( 'email', 'demo@site.com' ); ?>
<?php if($blogen_number) { ?>
    <span><i class="cb-font-phone"></i><?php echo esc_attr($blogen_number);?></span>
<?php } ?>
<?php if($blogen_email) { ?>
    <span><i class="cb-font-mail-alt"></i><?php echo esc_attr($blogen_email);?></span>
<?php } ?>
