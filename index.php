<?php get_header();?>
<?php 
$blogen_post_grid = get_theme_mod( 'enable_post_grid', 1 );
if($blogen_post_grid == 1) {
    get_template_part( 'template-parts/latest/latest', 'post' );
}
?>
<div id="primary" class="content-area">
    <main id="main" class="site-main">
        <div class="container">
            <?php 
            $blogen_column = get_theme_mod( 'blog_post_column', 1 );		
            $blogen_archive = get_theme_mod( 'archive_layout', 'right' );		
            if( $blogen_archive == 'full' ) {
                $blogen_archive_layout = 'mainsite-full-width';
            } elseif ( $blogen_archive == 'left' ) {
                $blogen_archive_layout = 'mainsite-left-sidebar';
            } elseif ( $blogen_archive == 'right' ) {
                $blogen_archive_layout = 'mainsite-right-sidebar';
            } else {
                $blogen_archive_layout = 'mainsite-right-sidebar';
            } 
            ?>
            <?php 
            if ( have_posts() ) : ?>
                <div class="mainsite-layout-wrap <?php echo esc_attr($blogen_archive_layout);?>">
                    <?php if ( $blogen_archive == 'left' ) { get_sidebar();}?>    
                    <div class="mainsite-layout-inside">
                        <?php if ( is_home() && ! is_front_page() ) :
                            ?>
                            <header>
                                <h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
                            </header>
                            <?php
                        endif;?>
                        <div class="mainsite-post-column mainsite-post-column<?php echo esc_attr($blogen_column);?>">
                            <?php
                            while ( have_posts() ) :
                                the_post();
                                get_template_part( 'template-parts/content/content', get_post_type() );
                            endwhile;?>
                        </div>
                        <?php 
                        the_posts_pagination( array(
                            'next_text' => '<span>'.esc_html__( 'Next', 'blogen' ) .'</span><span class="screen-reader-text">' . esc_html__( 'Next page', 'blogen' ) . '</span>',
                            'prev_text' => '<span>'.esc_html__( 'Previous', 'blogen' ) .'</span><span class="screen-reader-text">' . esc_html__( 'Previous page', 'blogen' ) . '</span>',
                            'before_page_number' => '<span class="meta-nav screen-reader-text">' . esc_html__( 'Page', 'blogen' ) . ' </span>',
                        ));
                        ?>
                    </div><!--/.mainsite-layout-inside-->
                    <?php if ( $blogen_archive == 'right' ) { get_sidebar();}?> 
                </div><!--/.mainsite-layout-wrap-->
            <?php else :
                get_template_part( 'template-parts/content/content', 'none' );
            endif;
            ?>
        </div><!-- .container -->
    </main><!-- #main -->
</div><!-- #primary -->
<?php get_footer();
