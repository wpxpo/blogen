<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>    
    <header class="mainsite-entry-header mainsite-entry-header-single">
        <div class="mainsite-post-grid-category"><?php echo wp_kses_post(get_the_category_list( '', get_the_ID()));?></div>
		<?php the_title( '<h1 class="mainsite-entry-title">', '</h1>' );?>
        <div class="mainsite-entry-meta">
            <?php blogen_posted_meta();?>
        </div><!-- .mainsite-entry-meta -->
	</header><!-- .mainsite-entry-header -->
    <?php blogen_post_thumbnail(); ?>    
	<div class="entry-content">
        <?php
        the_content();
		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'blogen' ),
			'after'  => '</div>',
		) );
		?>
	</div><!-- .entry-content -->
</article>
