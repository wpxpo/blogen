<?php get_header();?>
<?php 
$blogon_post_grid = get_theme_mod( 'enable_post_grid', 1 );
if($blogon_post_grid == 1) {
    get_template_part( 'template-parts/latest/latest', 'post' );
}
?>
<div id="primary" class="content-area">
    <main id="main" class="site-main">
        <div class="container">
            <?php 
            $blogon_column = get_theme_mod( 'blog_post_column', 1 );		
            $blogon_archive = get_theme_mod( 'archive_layout', 'right' );		
            if( $blogon_archive == 'full' ) {
                $blogon_archive_layout = 'mainsite-full-width';
            } elseif ( $blogon_archive == 'left' ) {
                $blogon_archive_layout = 'mainsite-left-sidebar';
            } elseif ( $blogon_archive == 'right' ) {
                $blogon_archive_layout = 'mainsite-right-sidebar';
            } else {
                $blogon_archive_layout = 'mainsite-right-sidebar';
            } 
            ?>
            <?php 
            if ( have_posts() ) : ?>
                <div class="mainsite-layout-wrap <?php echo esc_attr($blogon_archive_layout);?>">
                    <?php if ( $blogon_archive == 'left' ) { get_sidebar();}?>    
                    <div class="mainsite-layout-inside">
                        <?php if ( is_home() && ! is_front_page() ) :
                            ?>
                            <header>
                                <h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
                            </header>
                            <?php
                        endif;?>
                        <div class="mainsite-post-column mainsite-post-column<?php echo esc_attr($blogon_column);?>">
                            <?php
                            while ( have_posts() ) :
                                the_post();
                                get_template_part( 'template-parts/content/content', get_post_type() );
                            endwhile;?>
                        </div>
                        <?php 
                        the_posts_pagination( array(
                            'next_text' => '<span>'.esc_html__( 'Next', 'blogon' ) .'</span><span class="screen-reader-text">' . esc_html__( 'Next page', 'blogon' ) . '</span>',
                            'prev_text' => '<span>'.esc_html__( 'Previous', 'blogon' ) .'</span><span class="screen-reader-text">' . esc_html__( 'Previous page', 'blogon' ) . '</span>',
                            'before_page_number' => '<span class="meta-nav screen-reader-text">' . esc_html__( 'Page', 'blogon' ) . ' </span>',
                        ));
                        ?>
                    </div><!--/.mainsite-layout-inside-->
                    <?php if ( $blogon_archive == 'right' ) { get_sidebar();}?> 
                </div><!--/.mainsite-layout-wrap-->
            <?php else :
                get_template_part( 'template-parts/content/content', 'none' );
            endif;
            ?>
        </div><!-- .container -->
    </main><!-- #main -->
</div><!-- #primary -->
<?php get_footer();
