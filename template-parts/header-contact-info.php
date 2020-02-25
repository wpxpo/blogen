<?php $blogon_number = get_theme_mod( 'contact_number', __('(123)456 7890', 'blogon') ); ?>
<?php $blogon_email = get_theme_mod( 'email', 'demo@site.com' ); ?>
<?php if($blogon_number) { ?>
    <span><i class="cb-font-phone"></i><?php echo esc_attr($blogon_number);?></span>
<?php } ?>
<?php if($blogon_email) { ?>
    <span><i class="cb-font-mail-alt"></i><?php echo esc_attr($blogon_email);?></span>
<?php } ?>
