<?php
$category = '';
if ( $category !='' ) {
	$query = array(
		'posts_per_page' => 3,
		'order' => 'DESC',
		'nopaging' => 0,
		'post_status' => 'publish',
		'ignore_sticky_posts' => 1,
	);
}else {
	$query = array(
        'posts_per_page' => 3,
		'order' => 'DESC',
		'nopaging' => 0,
		'post_status' => 'publish',
		'ignore_sticky_posts' => 1,
		'offset'=>1
	);
 }
$args = new WP_Query($query); ?>

<?php

	if ($args->have_posts()) {
	?>
	<div class="mainsite-post-grid">
		<div class="container">
            <div class="mainsite-post-grid-wrap">
                <?php
                while ($args->have_posts()) : $args->the_post();
                if ( has_post_thumbnail() ) {
                    $blogen_src = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ),'blogen-1140-600' );
                    $blogen_image ='style="background: url('.esc_url($blogen_src[0]).') no-repeat;background-size: cover;"'; 
                }else {
                    $blogen_image ='style="background: #333;"';
                }
                $blogen_src2 = wp_get_attachment_image( get_post_thumbnail_id( get_the_ID() ),'blogen-1140-600' );
                ?>
                <div class="mainsite-post-grid-item">
                    <div class="mainsite-post-grid-overlay">
                        <div class="mainsite-grid-overlay-img" <?php echo wp_kses_post($blogen_image);?>></div>
                        <a class="mainsite-grid-link-overlay" href="<?php echo esc_url( get_permalink() ); ?>"><span class="screen-reader-text"><?php the_title(); ?></span></a>
                        <div class="mainsite-grid-no-image">
                                <?php echo esc_url($blogen_src2);?>
                        </div>
                        <div class="mainsite-post-grid-content">
                            <div class="mainsite-post-grid-content-overlay">
                                <span class="mainsite-post-grid-category"><?php echo wp_kses_post(get_the_category_list( esc_html__( 'Category', 'blogen' ), '', get_the_ID() ));?></span>
                                <h4 class="mainsite-post-grid-title">
                                    <a href="<?php echo esc_url( get_permalink() ); ?>"><?php the_title(); ?></a>
                                </h4>
                                <div class="mainsite-post-grid-meta">
                                    <?php if ( get_the_author_meta('first_name') != "" || get_the_author_meta('last_name') != "" ) { ?>
                                        <?php echo esc_html__( 'By', 'blogen' );?><span class="post-grid-author"><a href="<?php echo esc_url(get_author_posts_url( get_the_author_meta( 'ID' ) )); ?>"><?php echo esc_attr(get_the_author_meta('first_name'));?> <?php echo esc_attr(get_the_author_meta('last_name'));?></a></span>
                                    <?php } else { ?>
                                    <?php echo esc_html__( 'By', 'blogen' );?><span class="post-grid-author"><?php the_author_posts_link() ?></span>
                                    <?php }?>
                                    <span class="mainsite-post-grid-date"><time datetime="<?php esc_attr( the_time( 'c' ) ); ?>"><?php echo get_the_date(); ?></time></span>
                                </div>
                            </div> <!--/.mainsite-post-grid-content-overlay-->
                        </div> <!--/.mainsite-post-grid-content-->
                    </div> <!--/.mainsite-post-grid-overlay-->
                </div> <!--/.mainsite-post-grid-item-->
                <?php
                endwhile;
                wp_reset_postdata(); ?>
            </div> <!--/.mainsite-post-grid-wrap-->
		</div> <!--/.container-->
	</div> <!--/.mainsite-post-grid-->
	<?php
	}
