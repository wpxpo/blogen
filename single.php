<?php get_header(); ?>
<div id="primary" class="content-area">
    <main id="main" class="site-main">
        <div class="container">
            <?php
            $single_layout = get_theme_mod( 'single_layout', 'full' );	
            if( $single_layout == 'full' ) {
                $blogen_single_layout = 'mainsite-single-full';
            } elseif ( $single_layout == 'left' ) {
                $blogen_single_layout = 'mainsite-single-left-sidebar';
            } elseif ( $single_layout == 'right' ) {
                $blogen_single_layout = 'mainsite-single-right-sidebar';
            } else {
                $blogen_single_layout = 'mainsite-single-full';
            }
            ?>
            <div class="mainsite-post-single-wrap <?php echo esc_attr($blogen_single_layout); ?>">
                <?php if ( $single_layout == 'left' ) { get_sidebar();} ?>     
                <div class="mainsite-post-single">
                    <?php while ( have_posts() ) :
                        the_post();
                        get_template_part( 'template-parts/content/content', 'single' );
                        $blogen_tag = get_theme_mod( 'enable_single_tag', 1 );
                        $blogen_nav = get_theme_mod( 'enable_single_nav', 1 );
                        $blogen_comment = get_theme_mod( 'enable_single_comment', 1 );
                        if($blogen_tag == 1){
                            blogen_entry_footer();
                        }
                        if($blogen_nav == 1){
                            the_post_navigation(
                                array(
                                    'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next Post', 'blogen' ) . '</span> ' .
                                        '<span class="screen-reader-text">' . __( 'Next post:', 'blogen' ) . '</span> <br/>' .
                                        '<span class="post-title">%title</span>',
                                    'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous Post', 'blogen' ) . '</span> ' .
                                        '<span class="screen-reader-text">' . __( 'Previous post:', 'blogen' ) . '</span> <br/>' .
                                        '<span class="post-title">%title</span>',
                                )
                            );
                        }
                        if ( comments_open() || get_comments_number() ) :
                            if($blogen_comment == 1){
                                comments_template();
                            }
                        endif;
                    endwhile; // End of the loop.
                    ?>
                </div><!--/.mainsite-post-single -->
                <?php if ( $single_layout == 'right' ) { get_sidebar();}?> 
            </div><!--/.mainsite-post-single-wrap -->
        </div><!--/.container -->
    </main><!-- #main -->
</div><!-- #primary -->
<?php get_footer();
