<?php get_header(); ?>
<div id="primary" class="content-area">
    <main id="main" class="site-main">
        <div class="container">
            <?php
            $single_layout = get_theme_mod( 'single_layout', 'full' );	
            if( $single_layout == 'full' ) {
                $blogon_single_layout = 'mainsite-single-full';
            } elseif ( $single_layout == 'left' ) {
                $blogon_single_layout = 'mainsite-single-left-sidebar';
            } elseif ( $single_layout == 'right' ) {
                $blogon_single_layout = 'mainsite-single-right-sidebar';
            } else {
                $blogon_single_layout = 'mainsite-single-full';
            }
            ?>
            <div class="mainsite-post-single-wrap <?php echo esc_attr($blogon_single_layout); ?>">
                <?php if ( $single_layout == 'left' ) { get_sidebar();} ?>     
                <div class="mainsite-post-single">
                    <?php while ( have_posts() ) :
                        the_post();
                        get_template_part( 'template-parts/content/content', 'single' );
                        $blogon_tag = get_theme_mod( 'enable_single_tag', 1 );
                        $blogon_nav = get_theme_mod( 'enable_single_nav', 1 );
                        $blogon_comment = get_theme_mod( 'enable_single_comment', 1 );
                        if($blogon_tag == 1){
                            blogon_entry_footer();
                        }
                        if($blogon_nav == 1){
                            the_post_navigation(
                                array(
                                    'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next Post', 'blogon' ) . '</span> ' .
                                        '<span class="screen-reader-text">' . __( 'Next post:', 'blogon' ) . '</span> <br/>' .
                                        '<span class="post-title">%title</span>',
                                    'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous Post', 'blogon' ) . '</span> ' .
                                        '<span class="screen-reader-text">' . __( 'Previous post:', 'blogon' ) . '</span> <br/>' .
                                        '<span class="post-title">%title</span>',
                                )
                            );
                        }
                        if ( comments_open() || get_comments_number() ) :
                            if($blogon_comment == 1){
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
