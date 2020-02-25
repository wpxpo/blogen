<?php

// Call in Theme Function
function blogon_customizer_callback($prams) {
	$new_prams = array(
        array(
            'key'     => 'blogon_options',
            'type'    => 'panel',
            'priority'=> 10,
            'title'   => __( 'Blogon Options', 'blogon' ),
            'options' => array(

                array(
                    'key'    => 'logo_options',
                    'type'   => 'section',
                    'title'  => __( 'Logo', 'blogon' ),
					'options'=> array(
                        array(
                            'key'     => 'logo_type',
                            'type'    => 'select',
                            'title'   => __( 'Select Logo Type', 'blogon' ),
                            'default' => 'logo_img',
                            'options'   => array(
                                'logo_img'   => __('Image Logo', 'blogon'),
                                'logo_text'  => __('Text Logo', 'blogon'),
                            )
                        ),
                        array(
                            'key'     => 'logo_img',
                            'type'    => 'media',
                            'title'   => __( 'Logo', 'blogon' ),
                            'default' => get_parent_theme_file_uri( '/assets/images/logo.png' ),
                        ),
                        array(
                            'key'     => 'offcanvas_logo_img',
                            'type'    => 'media',
                            'title'   => __( 'offcanvas Logo', 'blogon' ),
                            'default' => get_parent_theme_file_uri( '/assets/images/logo.png' ),
                        ),
                        array(
                            'key'     => 'logo_text',
							'type'    => 'text',
                            'title'   => __( 'Logo Text', 'blogon' ),
                            'default' => 'blogon',
                        ),
                        array(
                            'key'     => 'logo_slogan',
							'type'    => 'text',
                            'title'   => __( 'Slogan Text', 'blogon' ),
                            'default' => 'Self Made Intrepreneurs',
                        ),
                        array(
                            'key'     => 'logo_width',
                            'type'    => 'number',
                            'title'   => __( 'Logo Width', 'blogon' ),
                            'default' => 140,
                        ),
                        array(
                            'key'     => 'logo_responsive_width',
                            'type'    => 'number',
                            'title'   => __( 'Logo Responsive Width', 'blogon' ),
                            'default' => 120,
                        ),
                        array(
                            'key'     => 'logo_height',
                            'type'    => 'number',
                            'title'   => __( 'Logo Height', 'blogon' ),
                            'default' => '',
                        ),
					)
                ),

                array(
                    'key'    => 'header_options',
                    'type'   => 'section',
                    'title'  => __( 'Header', 'blogon' ),
					'options'=> array(
                        array(
                            'key'     => 'header_layout',
                            'type'    => 'layout',
                            'title'   => __( 'Header layout', 'blogon' ),
                            'default' => 'one',
                            'options' => array(
                                'one'   => BLOGON_URI.'/assets/images/header-one.png',
                                'two'   => BLOGON_URI.'/assets/images/header-two.png',
                                'three' => BLOGON_URI.'/assets/images/header-three.png',
                                'four'  => BLOGON_URI.'/assets/images/header-four.png',
                            ),
                            // 'depends' => 'tb_padding_bottom#=#one, tb_padding_top#=#one, email#=#one, contact_number#=#one'
                        ),
                        array(
                            'key'     => 'enable_search',
                            'type'    => 'switch',
                            'title'   => __( 'Disable Search', 'blogon' ),
                            'default' => 0,
                        ),
						array(
                            'key'     => 'subscribe_url',
							'type'    => 'text',
                            'title'   => __( 'Subscribe URL', 'blogon' ),
                            'default' => '#',
						),
						array(
                            'key'     => 'subscribe_text',
							'type'    => 'text',
                            'title'   => __( 'Subscribe Text', 'blogon' ),
                            'default' => __('Subscribe', 'blogon' ),
                        ),

                        array(
                            'key'     => 'topbar_separator',
                            'type'    => 'separator',
                            'title'   => __( 'Topbar Options', 'blogon' ),
                        ),
                        array(
                            'key'     => 'contact_number',
							'type'    => 'text',
                            'title'   => __( 'Contact Number', 'blogon' ),
                            'default' => __('(123)456 7890', 'blogon' ),
                        ),
                        array(
                            'key'     => 'email',
							'type'    => 'text',
                            'title'   => __( 'Email', 'blogon' ),
                            'default' => 'demo@site.com',
                        ),
                        array(
                            'key'     => 'tb_padding_top',
                            'title'   => __( 'Topbar Padding Top', 'blogon' ),
                            'type'    => 'number',
                            'default' => 8,
                        ),
                        array(
                            'key'     => 'tb_padding_bottom',
                            'title'   => __( 'Topbar Padding Bottom', 'blogon' ),
                            'type'    => 'number',
                            'default' => 8,
                        ),
					)
                ),

                // array(
                //     'key'    => 'typography',
                //     'type'   => 'section',
                //     'title'  => __( 'Typography', 'blogon' ),
				// 	'options'=> array(
                //         array(
                //             'key'     => 'body',
                //             'type'    => 'typography',
                //             'title'   => __( 'Body Font', 'blogon' ),
                //             'default' => 'Source Sans Pro#sans-serif#400',
                //         ),
                //         array(
                //             'key'     => 'menu',
                //             'type'    => 'typography',
                //             'title'   => __( 'Menu Font', 'blogon' ),
                //             'default' => 'Libre Baskerville#serif#400',
                //         ),
                //         array(
                //             'key'     => 'submenu',
                //             'type'    => 'typography',
                //             'title'   => __( 'Sub Menu Font', 'blogon' ),
                //             'default' => 'Libre Baskerville#serif#400',
                //         ),
                //         array(
                //             'key'     => 'heading',
                //             'type'    => 'typography',
                //             'title'   => __( 'Heading Font', 'blogon' ),
                //             'default' => 'Libre Baskerville#serif#700',
                //         ),
				// 	)
				// ),

                array(
                    'key'    => 'style_options',
                    'type'   => 'section',
                    'title'  => __( 'Theme Style', 'blogon' ),
					'options'=> array(
                        // array(
                        //     'key'     => 'skin_style',
                        //     'type'    => 'select',
                        //     'title'   => __( 'Select Skin', 'blogon' ),
                        //     'default' => 'white',
                        //     'options'   => array(
                        //         'white'   => __('White', 'blogon'),
                        //         'dark'  => __('Dark', 'blogon'),
                        //     )
                        // ),
                        array(
                            'key'     => 'box_layout',
                            'type'    => 'switch',
                            'title'   => __( 'Body Box Layout', 'blogon' ),
                            'default' => 0,
                            'depends' => 'body_bg_img#=#1'
                        ),
                        array(
                            'key'     => 'body_bg_img',
                            'type'    => 'media',
                            'title'   => __( 'Upload Body Background', 'blogon' ),
                            'default' => '',
                        ),
                        array(
                            'key'     => 'tc_body_color',
                            'type'    => 'color',
                            'title'   => __( 'Body Text Color', 'blogon' ),
                            'default' => '#3f4044',
                        ),
                        array(
                            'key'     => 'tc_body_bg',
                            'type'    => 'color',
                            'title'   => __( 'Body Background Color', 'blogon' ),
                            'default' => '#ffffff',
                        ),

                        //topbar
                        array(
                            'key'     => 'topbar_style_separator',
                            'type'    => 'separator',
                            'title'   => __( 'Topbar Style', 'blogon' ),
                        ),
                        array(
                            'key'     => 'tb_color',
                            'title'   => __( 'Topbar Text Color', 'blogon' ),
                            'type'    => 'color',
                            'default' => '',
                        ),
                        array(
                            'key'     => 'tb_link_hover_color',
                            'title'   => __( 'Topbar Link Hover Color', 'blogon' ),
                            'type'    => 'color',
                            'default' => '#FD4145',
                        ),
                        array(
                            'key'     => 'tb_bg_color',
                            'title'   => __( 'Topbar Background Color', 'blogon' ),
                            'type'    => 'color',
                            'default' => '',
                        ),

                        //Header
                        array(
                            'key'     => 'header_style_separator',
                            'type'    => 'separator',
                            'title'   => __( 'Header Style', 'blogon' ),
                        ),
                        array(
                            'key'     => 'ht_color',
                            'title'   => __( 'Header Text Color', 'blogon' ),
                            'type'    => 'color',
                            'default' => '',
                        ),
                        array(
                            'key'     => 'header_bg_color',
                            'title'   => __( 'Header Background Color', 'blogon' ),
                            'type'    => 'color',
                            'default' => '',
                        ),

                        //Menu
                        array(
                            'key'     => 'menu_style_separator',
                            'type'    => 'separator',
                            'title'   => __( 'Menu Style', 'blogon' ),
                        ),
                        array(
                            'key'     => 'tc_menu_color',
                            'type'    => 'color',
                            'title'   => __( 'Menu Color', 'blogon' ),
                            'default' => '',
                        ),
                        array(
                            'key'     => 'tc_menu_hover_color',
                            'type'    => 'color',
                            'title'   => __( 'Menu Hover Color', 'blogon' ),
                            'default' => '#FD4145',
                        ),
                        array(
                            'key'     => 'tc_submenu_color',
                            'type'    => 'color',
                            'title'   => __( 'Sub Menu Text Color', 'blogon' ),
                            'default' => '#000',
                        ),
                        array(
                            'key'     => 'tc_submenu_hover_color',
                            'type'    => 'color',
                            'title'   => __( 'Sub Menu Hover Color', 'blogon' ),
                            'default' => '#FD4145',
                        ),


                        array(
                            'key'     => 'tc_primary_color',
                            'type'    => 'color',
                            'title'   => __( 'Primary Color', 'blogon' ),
                            'default' => '#FD4145',
                        ),
                        array(
                            'key'     => 'tc_secendary_color',
                            'type'    => 'color',
                            'title'   => __( 'Secendary Color', 'blogon' ),
                            'default' => '#E4282C',
                        ),
                        //button
                        array(
                            'key'     => 'button_style_separator',
                            'type'    => 'separator',
                            'title'   => __( 'Button Style', 'blogon' ),
                        ),
                        array(
                            'key'     => 'tc_btn_color',
                            'type'    => 'color',
                            'title'   => __( 'Button Color', 'blogon' ),
                            'default' => '#ffffff',
                        ),
                        array(
                            'key'     => 'tc_btn_hover_color',
                            'type'    => 'color',
                            'title'   => __( 'Button Hover Color', 'blogon' ),
                            'default' => '#ffffff',
                        ),
                        array(
                            'key'     => 'tc_btn_bgcolor',
                            'type'    => 'color',
                            'title'   => __( 'Button background Color', 'blogon' ),
                            'default' => '#FD4145',
                        ),
                        array(
                            'key'     => 'tc_btn_bg_hover_color',
                            'type'    => 'color',
                            'title'   => __( 'Button Background Hover Color', 'blogon' ),
                            'default' => '#000000',
                        ),

                        //footer top
                        array(
                            'key'     => 'footer_top_style_separator',
                            'type'    => 'separator',
                            'title'   => __( 'Footer Top Style', 'blogon' ),
                        ),
                        array(
                            'key'     => 'ft_color',
                            'title'   => __( 'Text Color', 'blogon' ),
                            'type'    => 'color',
                            'default' => '#000',
                        ),
                        array(
                            'key'     => 'ft_bg_color',
                            'title'   => __( 'Background Color', 'blogon' ),
                            'type'    => 'color',
                            'default' => '#ffffff',
                        ),
                        array(
                            'key'     => 'ft_link_hover_color',
                            'title'   => __( 'Link Hover Color', 'blogon' ),
                            'type'    => 'color',
                            'default' => '#FD4145',
                        ),

                        //footer bottom
                        array(
                            'key'     => 'footer_bottom_style_separator',
                            'type'    => 'separator',
                            'title'   => __( 'Footer Bottom Style', 'blogon' ),
                        ),
                        array(
                            'key'     => 'fb_color',
                            'type'    => 'color',
                            'title'   => __( 'Text Color', 'blogon' ),
                            'default' => '#596172',
                        ),
                        array(
                            'key'     => 'fb_link_hover_color',
                            'title'   => __( 'Link Hover Color', 'blogon' ),
                            'type'    => 'color',
                            'default' => '#FD4145',
                        ),
                        array(
                            'key'     => 'fb_bg_color',
                            'title'   => __( 'Background Color', 'blogon' ),
                            'type'    => 'color',
                            'default' => '#ffffff',
                        ),

					)
                ),

                array(
                    'key'    => 'latest_post_options',
                    'type'   => 'section',
                    'title'  => __( 'Latest Post Grid', 'blogon' ),
					'options'=> array(
                        array(
                            'key'     => 'enable_post_grid',
                            'type'    => 'switch',
                            'title'   => __( 'Disable Post Grid', 'blogon' ),
                            'default' => 1,
                        ),
					)
                ),

                array(    
                    'key'    => 'archive_options',
                    'type'   => 'section',
                    'title'  => __( 'Archive Options', 'blogon' ),
                    'options'=> array(
                        array(
                            'key'     => 'archive_layout',
                            'type'    => 'select',
                            'title'   => __( 'Archive Layout', 'blogon' ),
                            'default' => 'right',
                            'options'   => array(
                                'full'   => __('Full Width', 'blogon'),
                                'right'  => __('Right Sidebar', 'blogon'),
                                'left'  => __('left Sidebar', 'blogon'),
                            )
                        ),
                        array(
                            'key'     => 'blog_post_column',
                            'type'    => 'select',
                            'title'   => __( 'Archive Column', 'blogon' ),
                            'default' => '1',
                            'options'   => array(
                                '1'   => __('1', 'blogon'),
                                '2'  => __('2', 'blogon'),
                                '3'  => __('3', 'blogon'),
                            )
                        ),
                        array(
                            'key'     => 'enable_author',
                            'type'    => 'switch',
                            'title'   => __( 'Disable Author', 'blogon' ),
                            'default' => 1,
                        ),
                        array(
                            'key'     => 'enable_date',
                            'type'    => 'switch',
                            'title'   => __( 'Disable Date', 'blogon' ),
                            'default' => 1,
                        ),
                        array(
                            'key'     => 'enable_excerpt',
                            'type'    => 'switch',
                            'title'   => __( 'Disable Excerpt', 'blogon' ),
                            'default' => 1,
                        ),
                        array(
                            'key'     => 'character_limit',
                            'type'    => 'text',
                            'title'   => __( 'Characher Limit', 'blogon' ),
                            'default' => 100,
                        ),
                        array(
                            'key'     => 'enable_readmore',
                            'type'    => 'switch',
                            'title'   => __( 'Disable Read More', 'blogon' ),
                            'default' => 1,
                        ),
                        array(
                            'key'     => 'readmore_text',
                            'type'    => 'text',
                            'title'   => __( 'Read More Text', 'blogon' ),
                            'default' => __( 'Read More', 'blogon' ),
                        ),
                    )
                ),
            
                array(    
                    'key'    => 'single_options',
                    'type'   => 'section',
                    'title'  => __( 'Single Options', 'blogon' ),
                    'options'=> array(
                        array(
                            'key'     => 'single_layout',
                            'type'    => 'select',
                            'title'   => __( 'Single Layout', 'blogon' ),
                            'default' => 'full',
                            'options'   => array(
                                'full'   => __('Full Width', 'blogon'),
                                'right'  => __('Right Sidebar', 'blogon'),
                                'left'  => __('left Sidebar', 'blogon'),
                            )
                        ),
                        array(
                            'key'     => 'enable_single_author',
                            'type'    => 'switch',
                            'title'   => __( 'Disable Single Author', 'blogon' ),
                            'default' => 1,
                        ),
                        array(
                            'key'     => 'enable_single_date',
                            'type'    => 'switch',
                            'title'   => __( 'Disable Single Date', 'blogon' ),
                            'default' => 1,
                        ),
                        array(
                            'key'     => 'enable_single_view',
                            'type'    => 'switch',
                            'title'   => __( 'Disable Single View', 'blogon' ),
                            'default' => 1,
                        ),
                        array(
                            'key'     => 'enable_single_comment_count',
                            'type'    => 'switch',
                            'title'   => __( 'Disable Single Comment Count', 'blogon' ),
                            'default' => 1,
                        ),
                        array(
                            'key'     => 'enable_single_tag',
                            'type'    => 'switch',
                            'title'   => __( 'Disable Single Tags', 'blogon' ),
                            'default' => 1,
                        ),
                        array(
                            'key'     => 'enable_single_nav',
                            'type'    => 'switch',
                            'title'   => __( 'Disable Single Navigation', 'blogon' ),
                            'default' => 1,
                        ),
                        array(
                            'key'     => 'enable_single_comment',
                            'type'    => 'switch',
                            'title'   => __( 'Disable Single Comment', 'blogon' ),
                            'default' => 1,
                        ),
                    )
                ),

                array(
                    'key'    => 'footer_top',
                    'type'   => 'section',
                    'title'  => __( 'Footer Top', 'blogon' ),
					'options'=> array(
                        array(
                            'key'     => 'ft_column',
                            'title'   => __( 'Footer Column', 'blogon' ),
                            'type'    => 'select',
                            'title'   => __( 'Select Column', 'blogon' ),
                            'default' => '4',
                            'options'   => array(
                                '12'   => __('1', 'blogon'),
                                '6'  => __('2', 'blogon'),
                                '4'  => __('3', 'blogon'),
                                '3'  => __('4', 'blogon'),
                            )
                        ),
                        array(
                            'key'     => 'ft_padding_top',
                            'title'   => __( 'Padding Top', 'blogon' ),
                            'type'    => 'number',
                            'default' => 80,
                        ),
                        array(
                            'key'     => 'ft_padding_bottom',
                            'title'   => __( 'Padding Bottom', 'blogon' ),
                            'type'    => 'number',
                            'default' => 80,
                        ),
					)
				),

                array(
                    'key'    => 'footer_bottom',
                    'type'   => 'section',
                    'title'  => __( 'Footer Bottom', 'blogon' ),
					'options'=> array(
                        array(
                            'key'     => 'footer_layout',
                            'type'    => 'layout',
                            'title'   => __( 'Footer layout', 'blogon' ),
                            'default' => 'ftone',
                            'options' => array(
                                'ftone'   => BLOGON_URI.'/assets/images/footer-one.png',
                                'fttwo'   => BLOGON_URI.'/assets/images/footer-two.png',
                            ),
                        ),
                        array(
                            'key'     => 'fb_padding_top',
                            'title'   => __( 'Padding Top', 'blogon' ),
                            'type'    => 'number',
                            'default' => 80,
                        ),
                        array(
                            'key'     => 'fb_padding_bottom',
                            'title'   => __( 'Padding Bottom', 'blogon' ),
                            'type'    => 'number',
                            'default' => 80,
                        ),
                        array(
                            'key'     => 'footer_logo',
                            'type'    => 'media',
                            'title'   => __( 'Footer Logo', 'blogon' ),
                            'default' => get_parent_theme_file_uri( '/assets/images/footer-logo.png' ),
                        ),
                        array(
                            'key'     => 'copyright',
							'type'    => 'textarea',
                            'title'   => __( 'Facebook URL', 'blogon' ),
                            'default' => sprintf( __('Created by %1$sWPXPO%2$s. Powered by %3$sWordPress%4$s Code is Poetry.', 'blogon'), '<strong>', '</strong>', '<strong>', '</strong>' ),
                        ),
                        array(
                            'key'     => 'enable_footer_share',
                            'type'    => 'switch',
                            'title'   => __( 'Disable Social Button', 'blogon' ),
                            'default' => 1,
                        ),
					)
				),

                array(
                    'key'    => 'social_share_options',
                    'type'   => 'section',
                    'title'  => __( 'Social Share', 'blogon' ),
					'options'=> array(
						array(
                            'key'     => 'link_facebook',
							'type'    => 'text',
                            'title'   => __( 'Facebook URL', 'blogon' ),
                            'default' => '#',
                        ),
                        array(
                            'key'     => 'link_instagram',
							'type'    => 'text',
                            'title'   => __( 'Instagram URL', 'blogon' ),
                            'default' => '#',
                        ),
						array(
                            'key'     => 'link_twitter',
							'type'    => 'text',
                            'title'   => __( 'Twitter URL', 'blogon' ),
                            'default' => '#',
                        ),
						array(
                            'key'     => 'link_linkedin',
							'type'    => 'text',
                            'title'   => __( 'Linkedin URL', 'blogon' ),
                            'default' => '',
                        ),
					)
				)
				
            )
        ),
    );
	return array_merge($new_prams, $prams);
}
add_filter('blogon_customizer', 'blogon_customizer_callback'); 