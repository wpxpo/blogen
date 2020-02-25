<?php

// Call in Theme Function
function blogen_customizer_callback($prams) {
	$new_prams = array(
        array(
            'key'     => 'blogen_options',
            'type'    => 'panel',
            'priority'=> 10,
            'title'   => __( 'Blogen Options', 'blogen' ),
            'options' => array(

                array(
                    'key'    => 'logo_options',
                    'type'   => 'section',
                    'title'  => __( 'Logo', 'blogen' ),
					'options'=> array(
                        array(
                            'key'     => 'logo_type',
                            'type'    => 'select',
                            'title'   => __( 'Select Logo Type', 'blogen' ),
                            'default' => 'logo_img',
                            'options'   => array(
                                'logo_img'   => __('Image Logo', 'blogen'),
                                'logo_text'  => __('Text Logo', 'blogen'),
                            )
                        ),
                        array(
                            'key'     => 'logo_img',
                            'type'    => 'media',
                            'title'   => __( 'Logo', 'blogen' ),
                            'default' => get_parent_theme_file_uri( '/assets/images/logo.png' ),
                        ),
                        array(
                            'key'     => 'offcanvas_logo_img',
                            'type'    => 'media',
                            'title'   => __( 'offcanvas Logo', 'blogen' ),
                            'default' => get_parent_theme_file_uri( '/assets/images/logo.png' ),
                        ),
                        array(
                            'key'     => 'logo_text',
							'type'    => 'text',
                            'title'   => __( 'Logo Text', 'blogen' ),
                            'default' => 'blogen',
                        ),
                        array(
                            'key'     => 'logo_slogan',
							'type'    => 'text',
                            'title'   => __( 'Slogan Text', 'blogen' ),
                            'default' => 'Self Made Intrepreneurs',
                        ),
                        array(
                            'key'     => 'logo_width',
                            'type'    => 'number',
                            'title'   => __( 'Logo Width', 'blogen' ),
                            'default' => 140,
                        ),
                        array(
                            'key'     => 'logo_responsive_width',
                            'type'    => 'number',
                            'title'   => __( 'Logo Responsive Width', 'blogen' ),
                            'default' => 120,
                        ),
                        array(
                            'key'     => 'logo_height',
                            'type'    => 'number',
                            'title'   => __( 'Logo Height', 'blogen' ),
                            'default' => '',
                        ),
					)
                ),

                array(
                    'key'    => 'header_options',
                    'type'   => 'section',
                    'title'  => __( 'Header', 'blogen' ),
					'options'=> array(
                        array(
                            'key'     => 'header_layout',
                            'type'    => 'layout',
                            'title'   => __( 'Header layout', 'blogen' ),
                            'default' => 'one',
                            'options' => array(
                                'one'   => BLOGEN_URI.'/assets/images/header-one.png',
                                'two'   => BLOGEN_URI.'/assets/images/header-two.png',
                                'three' => BLOGEN_URI.'/assets/images/header-three.png',
                                'four'  => BLOGEN_URI.'/assets/images/header-four.png',
                            ),
                            // 'depends' => 'tb_padding_bottom#=#one, tb_padding_top#=#one, email#=#one, contact_number#=#one'
                        ),
                        array(
                            'key'     => 'enable_search',
                            'type'    => 'switch',
                            'title'   => __( 'Disable Search', 'blogen' ),
                            'default' => 0,
                        ),
						array(
                            'key'     => 'subscribe_url',
							'type'    => 'text',
                            'title'   => __( 'Subscribe URL', 'blogen' ),
                            'default' => '#',
						),
						array(
                            'key'     => 'subscribe_text',
							'type'    => 'text',
                            'title'   => __( 'Subscribe Text', 'blogen' ),
                            'default' => __('Subscribe', 'blogen' ),
                        ),

                        array(
                            'key'     => 'topbar_separator',
                            'type'    => 'separator',
                            'title'   => __( 'Topbar Options', 'blogen' ),
                        ),
                        array(
                            'key'     => 'contact_number',
							'type'    => 'text',
                            'title'   => __( 'Contact Number', 'blogen' ),
                            'default' => __('(123)456 7890', 'blogen' ),
                        ),
                        array(
                            'key'     => 'email',
							'type'    => 'text',
                            'title'   => __( 'Email', 'blogen' ),
                            'default' => 'demo@site.com',
                        ),
                        array(
                            'key'     => 'tb_padding_top',
                            'title'   => __( 'Topbar Padding Top', 'blogen' ),
                            'type'    => 'number',
                            'default' => 8,
                        ),
                        array(
                            'key'     => 'tb_padding_bottom',
                            'title'   => __( 'Topbar Padding Bottom', 'blogen' ),
                            'type'    => 'number',
                            'default' => 8,
                        ),
					)
                ),

                // array(
                //     'key'    => 'typography',
                //     'type'   => 'section',
                //     'title'  => __( 'Typography', 'blogen' ),
				// 	'options'=> array(
                //         array(
                //             'key'     => 'body',
                //             'type'    => 'typography',
                //             'title'   => __( 'Body Font', 'blogen' ),
                //             'default' => 'Source Sans Pro#sans-serif#400',
                //         ),
                //         array(
                //             'key'     => 'menu',
                //             'type'    => 'typography',
                //             'title'   => __( 'Menu Font', 'blogen' ),
                //             'default' => 'Libre Baskerville#serif#400',
                //         ),
                //         array(
                //             'key'     => 'submenu',
                //             'type'    => 'typography',
                //             'title'   => __( 'Sub Menu Font', 'blogen' ),
                //             'default' => 'Libre Baskerville#serif#400',
                //         ),
                //         array(
                //             'key'     => 'heading',
                //             'type'    => 'typography',
                //             'title'   => __( 'Heading Font', 'blogen' ),
                //             'default' => 'Libre Baskerville#serif#700',
                //         ),
				// 	)
				// ),

                array(
                    'key'    => 'style_options',
                    'type'   => 'section',
                    'title'  => __( 'Theme Style', 'blogen' ),
					'options'=> array(
                        // array(
                        //     'key'     => 'skin_style',
                        //     'type'    => 'select',
                        //     'title'   => __( 'Select Skin', 'blogen' ),
                        //     'default' => 'white',
                        //     'options'   => array(
                        //         'white'   => __('White', 'blogen'),
                        //         'dark'  => __('Dark', 'blogen'),
                        //     )
                        // ),
                        array(
                            'key'     => 'box_layout',
                            'type'    => 'switch',
                            'title'   => __( 'Body Box Layout', 'blogen' ),
                            'default' => 0,
                            'depends' => 'body_bg_img#=#1'
                        ),
                        array(
                            'key'     => 'body_bg_img',
                            'type'    => 'media',
                            'title'   => __( 'Upload Body Background', 'blogen' ),
                            'default' => '',
                        ),
                        array(
                            'key'     => 'tc_body_color',
                            'type'    => 'color',
                            'title'   => __( 'Body Text Color', 'blogen' ),
                            'default' => '#3f4044',
                        ),
                        array(
                            'key'     => 'tc_body_bg',
                            'type'    => 'color',
                            'title'   => __( 'Body Background Color', 'blogen' ),
                            'default' => '#ffffff',
                        ),

                        //topbar
                        array(
                            'key'     => 'topbar_style_separator',
                            'type'    => 'separator',
                            'title'   => __( 'Topbar Style', 'blogen' ),
                        ),
                        array(
                            'key'     => 'tb_color',
                            'title'   => __( 'Topbar Text Color', 'blogen' ),
                            'type'    => 'color',
                            'default' => '',
                        ),
                        array(
                            'key'     => 'tb_link_hover_color',
                            'title'   => __( 'Topbar Link Hover Color', 'blogen' ),
                            'type'    => 'color',
                            'default' => '#FD4145',
                        ),
                        array(
                            'key'     => 'tb_bg_color',
                            'title'   => __( 'Topbar Background Color', 'blogen' ),
                            'type'    => 'color',
                            'default' => '',
                        ),

                        //Header
                        array(
                            'key'     => 'header_style_separator',
                            'type'    => 'separator',
                            'title'   => __( 'Header Style', 'blogen' ),
                        ),
                        array(
                            'key'     => 'ht_color',
                            'title'   => __( 'Header Text Color', 'blogen' ),
                            'type'    => 'color',
                            'default' => '',
                        ),
                        array(
                            'key'     => 'header_bg_color',
                            'title'   => __( 'Header Background Color', 'blogen' ),
                            'type'    => 'color',
                            'default' => '',
                        ),

                        //Menu
                        array(
                            'key'     => 'menu_style_separator',
                            'type'    => 'separator',
                            'title'   => __( 'Menu Style', 'blogen' ),
                        ),
                        array(
                            'key'     => 'tc_menu_color',
                            'type'    => 'color',
                            'title'   => __( 'Menu Color', 'blogen' ),
                            'default' => '',
                        ),
                        array(
                            'key'     => 'tc_menu_hover_color',
                            'type'    => 'color',
                            'title'   => __( 'Menu Hover Color', 'blogen' ),
                            'default' => '#FD4145',
                        ),
                        array(
                            'key'     => 'tc_submenu_color',
                            'type'    => 'color',
                            'title'   => __( 'Sub Menu Text Color', 'blogen' ),
                            'default' => '#000',
                        ),
                        array(
                            'key'     => 'tc_submenu_hover_color',
                            'type'    => 'color',
                            'title'   => __( 'Sub Menu Hover Color', 'blogen' ),
                            'default' => '#FD4145',
                        ),


                        array(
                            'key'     => 'tc_primary_color',
                            'type'    => 'color',
                            'title'   => __( 'Primary Color', 'blogen' ),
                            'default' => '#FD4145',
                        ),
                        array(
                            'key'     => 'tc_secendary_color',
                            'type'    => 'color',
                            'title'   => __( 'Secendary Color', 'blogen' ),
                            'default' => '#E4282C',
                        ),
                        //button
                        array(
                            'key'     => 'button_style_separator',
                            'type'    => 'separator',
                            'title'   => __( 'Button Style', 'blogen' ),
                        ),
                        array(
                            'key'     => 'tc_btn_color',
                            'type'    => 'color',
                            'title'   => __( 'Button Color', 'blogen' ),
                            'default' => '#ffffff',
                        ),
                        array(
                            'key'     => 'tc_btn_hover_color',
                            'type'    => 'color',
                            'title'   => __( 'Button Hover Color', 'blogen' ),
                            'default' => '#ffffff',
                        ),
                        array(
                            'key'     => 'tc_btn_bgcolor',
                            'type'    => 'color',
                            'title'   => __( 'Button background Color', 'blogen' ),
                            'default' => '#FD4145',
                        ),
                        array(
                            'key'     => 'tc_btn_bg_hover_color',
                            'type'    => 'color',
                            'title'   => __( 'Button Background Hover Color', 'blogen' ),
                            'default' => '#000000',
                        ),

                        //footer top
                        array(
                            'key'     => 'footer_top_style_separator',
                            'type'    => 'separator',
                            'title'   => __( 'Footer Top Style', 'blogen' ),
                        ),
                        array(
                            'key'     => 'ft_color',
                            'title'   => __( 'Text Color', 'blogen' ),
                            'type'    => 'color',
                            'default' => '#000',
                        ),
                        array(
                            'key'     => 'ft_bg_color',
                            'title'   => __( 'Background Color', 'blogen' ),
                            'type'    => 'color',
                            'default' => '#ffffff',
                        ),
                        array(
                            'key'     => 'ft_link_hover_color',
                            'title'   => __( 'Link Hover Color', 'blogen' ),
                            'type'    => 'color',
                            'default' => '#FD4145',
                        ),

                        //footer bottom
                        array(
                            'key'     => 'footer_bottom_style_separator',
                            'type'    => 'separator',
                            'title'   => __( 'Footer Bottom Style', 'blogen' ),
                        ),
                        array(
                            'key'     => 'fb_color',
                            'type'    => 'color',
                            'title'   => __( 'Text Color', 'blogen' ),
                            'default' => '#596172',
                        ),
                        array(
                            'key'     => 'fb_link_hover_color',
                            'title'   => __( 'Link Hover Color', 'blogen' ),
                            'type'    => 'color',
                            'default' => '#FD4145',
                        ),
                        array(
                            'key'     => 'fb_bg_color',
                            'title'   => __( 'Background Color', 'blogen' ),
                            'type'    => 'color',
                            'default' => '#ffffff',
                        ),

					)
                ),

                array(
                    'key'    => 'latest_post_options',
                    'type'   => 'section',
                    'title'  => __( 'Latest Post Grid', 'blogen' ),
					'options'=> array(
                        array(
                            'key'     => 'enable_post_grid',
                            'type'    => 'switch',
                            'title'   => __( 'Disable Post Grid', 'blogen' ),
                            'default' => 1,
                        ),
					)
                ),

                array(    
                    'key'    => 'archive_options',
                    'type'   => 'section',
                    'title'  => __( 'Archive Options', 'blogen' ),
                    'options'=> array(
                        array(
                            'key'     => 'archive_layout',
                            'type'    => 'select',
                            'title'   => __( 'Archive Layout', 'blogen' ),
                            'default' => 'right',
                            'options'   => array(
                                'full'   => __('Full Width', 'blogen'),
                                'right'  => __('Right Sidebar', 'blogen'),
                                'left'  => __('left Sidebar', 'blogen'),
                            )
                        ),
                        array(
                            'key'     => 'blog_post_column',
                            'type'    => 'select',
                            'title'   => __( 'Archive Column', 'blogen' ),
                            'default' => '1',
                            'options'   => array(
                                '1'   => __('1', 'blogen'),
                                '2'  => __('2', 'blogen'),
                                '3'  => __('3', 'blogen'),
                            )
                        ),
                        array(
                            'key'     => 'enable_author',
                            'type'    => 'switch',
                            'title'   => __( 'Disable Author', 'blogen' ),
                            'default' => 1,
                        ),
                        array(
                            'key'     => 'enable_date',
                            'type'    => 'switch',
                            'title'   => __( 'Disable Date', 'blogen' ),
                            'default' => 1,
                        ),
                        array(
                            'key'     => 'enable_excerpt',
                            'type'    => 'switch',
                            'title'   => __( 'Disable Excerpt', 'blogen' ),
                            'default' => 1,
                        ),
                        array(
                            'key'     => 'character_limit',
                            'type'    => 'text',
                            'title'   => __( 'Characher Limit', 'blogen' ),
                            'default' => 100,
                        ),
                        array(
                            'key'     => 'enable_readmore',
                            'type'    => 'switch',
                            'title'   => __( 'Disable Read More', 'blogen' ),
                            'default' => 1,
                        ),
                        array(
                            'key'     => 'readmore_text',
                            'type'    => 'text',
                            'title'   => __( 'Read More Text', 'blogen' ),
                            'default' => __( 'Read More', 'blogen' ),
                        ),
                    )
                ),
            
                array(    
                    'key'    => 'single_options',
                    'type'   => 'section',
                    'title'  => __( 'Single Options', 'blogen' ),
                    'options'=> array(
                        array(
                            'key'     => 'single_layout',
                            'type'    => 'select',
                            'title'   => __( 'Single Layout', 'blogen' ),
                            'default' => 'full',
                            'options'   => array(
                                'full'   => __('Full Width', 'blogen'),
                                'right'  => __('Right Sidebar', 'blogen'),
                                'left'  => __('left Sidebar', 'blogen'),
                            )
                        ),
                        array(
                            'key'     => 'enable_single_author',
                            'type'    => 'switch',
                            'title'   => __( 'Disable Single Author', 'blogen' ),
                            'default' => 1,
                        ),
                        array(
                            'key'     => 'enable_single_date',
                            'type'    => 'switch',
                            'title'   => __( 'Disable Single Date', 'blogen' ),
                            'default' => 1,
                        ),
                        array(
                            'key'     => 'enable_single_view',
                            'type'    => 'switch',
                            'title'   => __( 'Disable Single View', 'blogen' ),
                            'default' => 1,
                        ),
                        array(
                            'key'     => 'enable_single_comment_count',
                            'type'    => 'switch',
                            'title'   => __( 'Disable Single Comment Count', 'blogen' ),
                            'default' => 1,
                        ),
                        array(
                            'key'     => 'enable_single_tag',
                            'type'    => 'switch',
                            'title'   => __( 'Disable Single Tags', 'blogen' ),
                            'default' => 1,
                        ),
                        array(
                            'key'     => 'enable_single_nav',
                            'type'    => 'switch',
                            'title'   => __( 'Disable Single Navigation', 'blogen' ),
                            'default' => 1,
                        ),
                        array(
                            'key'     => 'enable_single_comment',
                            'type'    => 'switch',
                            'title'   => __( 'Disable Single Comment', 'blogen' ),
                            'default' => 1,
                        ),
                    )
                ),

                array(
                    'key'    => 'footer_top',
                    'type'   => 'section',
                    'title'  => __( 'Footer Top', 'blogen' ),
					'options'=> array(
                        array(
                            'key'     => 'ft_column',
                            'title'   => __( 'Footer Column', 'blogen' ),
                            'type'    => 'select',
                            'title'   => __( 'Select Column', 'blogen' ),
                            'default' => '4',
                            'options'   => array(
                                '12'   => __('1', 'blogen'),
                                '6'  => __('2', 'blogen'),
                                '4'  => __('3', 'blogen'),
                                '3'  => __('4', 'blogen'),
                            )
                        ),
                        array(
                            'key'     => 'ft_padding_top',
                            'title'   => __( 'Padding Top', 'blogen' ),
                            'type'    => 'number',
                            'default' => 80,
                        ),
                        array(
                            'key'     => 'ft_padding_bottom',
                            'title'   => __( 'Padding Bottom', 'blogen' ),
                            'type'    => 'number',
                            'default' => 80,
                        ),
					)
				),

                array(
                    'key'    => 'footer_bottom',
                    'type'   => 'section',
                    'title'  => __( 'Footer Bottom', 'blogen' ),
					'options'=> array(
                        array(
                            'key'     => 'footer_layout',
                            'type'    => 'layout',
                            'title'   => __( 'Footer layout', 'blogen' ),
                            'default' => 'ftone',
                            'options' => array(
                                'ftone'   => BLOGEN_URI.'/assets/images/footer-one.png',
                                'fttwo'   => BLOGEN_URI.'/assets/images/footer-two.png',
                            ),
                        ),
                        array(
                            'key'     => 'fb_padding_top',
                            'title'   => __( 'Padding Top', 'blogen' ),
                            'type'    => 'number',
                            'default' => 80,
                        ),
                        array(
                            'key'     => 'fb_padding_bottom',
                            'title'   => __( 'Padding Bottom', 'blogen' ),
                            'type'    => 'number',
                            'default' => 80,
                        ),
                        array(
                            'key'     => 'footer_logo',
                            'type'    => 'media',
                            'title'   => __( 'Footer Logo', 'blogen' ),
                            'default' => get_parent_theme_file_uri( '/assets/images/footer-logo.png' ),
                        ),
                        array(
                            'key'     => 'copyright',
							'type'    => 'textarea',
                            'title'   => __( 'Facebook URL', 'blogen' ),
                            'default' => sprintf( __('Created by %1$sWPXPO%2$s. Powered by %3$sWordPress%4$s Code is Poetry.', 'blogen'), '<strong>', '</strong>', '<strong>', '</strong>' ),
                        ),
                        array(
                            'key'     => 'enable_footer_share',
                            'type'    => 'switch',
                            'title'   => __( 'Disable Social Button', 'blogen' ),
                            'default' => 1,
                        ),
					)
				),

                array(
                    'key'    => 'social_share_options',
                    'type'   => 'section',
                    'title'  => __( 'Social Share', 'blogen' ),
					'options'=> array(
						array(
                            'key'     => 'link_facebook',
							'type'    => 'text',
                            'title'   => __( 'Facebook URL', 'blogen' ),
                            'default' => '#',
                        ),
                        array(
                            'key'     => 'link_instagram',
							'type'    => 'text',
                            'title'   => __( 'Instagram URL', 'blogen' ),
                            'default' => '#',
                        ),
						array(
                            'key'     => 'link_twitter',
							'type'    => 'text',
                            'title'   => __( 'Twitter URL', 'blogen' ),
                            'default' => '#',
                        ),
						array(
                            'key'     => 'link_linkedin',
							'type'    => 'text',
                            'title'   => __( 'Linkedin URL', 'blogen' ),
                            'default' => '',
                        ),
					)
				)
				
            )
        ),
    );
	return array_merge($new_prams, $prams);
}
add_filter('blogen_customizer', 'blogen_customizer_callback'); 