<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="mainsite-entry-header">
		<div class="mainsite-post-grid-category"><?php echo wp_kses_post(get_the_category_list());?></div>
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="mainsite-entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="mainsite-entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;
		if ( 'post' === get_post_type() ) :
			?>
			<div class="mainsite-entry-meta">
				<?php
				blogon_posted_meta();
				?>
			</div><!-- .mainsite-entry-meta -->
		<?php endif; ?>
	</header><!-- .mainsite-entry-header -->
	<?php blogon_post_thumbnail(); ?>   

	<div class="entry-content">
        <?php
        blogon_post_entry_content();
		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'blogon' ),
			'after'  => '</div>',
		) );
		?>
	</div><!-- .entry-content -->
</article>
