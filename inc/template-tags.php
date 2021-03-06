<?php

if ( ! function_exists( 'blogen_posted_meta' ) ) :
	function blogen_posted_meta() {
        $blogen_author = get_theme_mod( 'enable_author', 1 );	
        $blogen_date = get_theme_mod( 'enable_date', 1 );

        $blogen_single_author = get_theme_mod( 'enable_single_author', 1 );	
        $blogen_single_date = get_theme_mod( 'enable_single_date', 1 );	
        $blogen_single_comment_count = get_theme_mod( 'enable_single_comment_count', 1 );	
        $blogen_single_view = get_theme_mod( 'enable_single_view', 1 );	
        
        $blogen_time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
        if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
            $blogen_time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';
        }
        $blogen_time_string = sprintf( $blogen_time_string,
            esc_attr( get_the_date( DATE_W3C ) ),
            esc_html( get_the_date() ),
            esc_attr( get_the_modified_date( DATE_W3C ) ),
            esc_html( get_the_modified_date() )
        );
    
        if( (!is_singular() && $blogen_author==1) || (is_singular() && $blogen_single_author == 1 ) ) {
            echo '<span class="mainsite-meta-img"><a href="'.esc_url(get_author_posts_url( get_the_author_meta( 'ID' ) )).'"><img src="'.esc_url(get_avatar_url( get_the_author_meta('email') )).'" alt="'.esc_html__( 'image', 'blogen' ).'"></a></span>';
            echo '<span class="mainsite-meta-author">'.esc_html__( "By", "blogen" ).'<a href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a></span>';
        }
        if ( is_singular() ) :
            if( ( $blogen_single_date == 1) ) {
                echo '<span class="mainsite-meta-date">' . wp_kses_post($blogen_time_string) . '</span>';
            }
            if ( ! post_password_required() && ( comments_open() || get_comments_number() ) ) :
            if( $blogen_single_comment_count == 1 ) { ?>
                <span class="mainsite-meta-comment">
                    <i class="cb-font-commenting-o"></i><?php comments_popup_link( '<span class="leave-reply">' . esc_html__( '0', 'blogen' ) . '</span>', esc_html__( 'Post a comment', 'blogen' ), esc_html__( '%', 'blogen' ) ); ?>
                </span>
            <?php }
            endif;
            else :
            if( $blogen_date == 1 ) {
                echo '<span class="mainsite-meta-date"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . wp_kses_post($blogen_time_string) . '</a></span>';
            }
        endif;
    }
endif;

if ( ! function_exists( 'blogen_entry_footer' ) ) :
	function blogen_entry_footer() {
		if ( 'post' === get_post_type() ) {
			$tags_list = get_the_tag_list( '' );
			if ( $tags_list ) {
				printf( '<div class="mainsite-tags-links">'. $tags_list. '</div>' ); // WPCS: XSS OK.
			}
		}
	}
endif;

if ( ! function_exists( 'blogen_post_thumbnail' ) ) :
	function blogen_post_thumbnail() {
		if ( post_password_required() || is_attachment() || ! has_post_thumbnail() ) {
			return;
		}
		if ( is_singular() ) :
			?>
			<div class="mainsite-post-thumbnail">
				<?php the_post_thumbnail(); ?>
			</div><!-- .post-thumbnail -->
        <?php else : ?>
        <div class="mainsite-post-thumbnail">
            <a href="<?php the_permalink(); ?>" aria-hidden="true" tabindex="-1">
                <?php
                the_post_thumbnail( 'blogen-1140-600', array(
                    'alt' => the_title_attribute( array(
                        'echo' => false,
                    ) ),
                ) );
                ?>
            </a>
        </div>
		<?php
		endif; // End is_singular().
	}
endif;

if ( ! function_exists( 'blogen_post_entry_content' ) ) :
	function blogen_post_entry_content() {
        if ( get_theme_mod( 'enable_excerpt', 1 ) ) { 
            if ( get_theme_mod( 'character_limit', 280 ) ) {
                $blogen_limit = get_theme_mod( 'character_limit', 280 );
                echo wp_kses_post(blogen_excerpt_max_charlength($blogen_limit));
            } else {
                the_content();
            }
            if ( get_theme_mod( 'enable_readmore', 1 ) ) { 
                if ( get_theme_mod( 'readmore_text', __('Read More', 'blogen') ) ) {
                    $blogen_continue = get_theme_mod( 'readmore_text', __('Read More', 'blogen') );
                    echo '<p class="mainsite-btn-post"><a class="mainsite-btn-common mainsite-btn-primary" href="'.esc_url(get_permalink()).'">'. esc_html($blogen_continue) .'</a></p>';
                } 
            } 
        }
	}
endif;
