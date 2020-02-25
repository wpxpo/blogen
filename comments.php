<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Blogen
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area">

	<?php
	if ( have_comments() ) :
		?>
		<h2 class="comments-title">
			<?php
			$blogen_comment_count = get_comments_number();
			if ( '1' === $blogen_comment_count ) {
				printf(
					esc_html__( 'One thought on &ldquo;%1$s&rdquo;', 'blogen' ),
					'<span>' . esc_url(get_the_title()) . '</span>'
				);
			} else {
				printf(
					esc_html( _nx( '%1$s thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', $blogen_comment_count, 'comments title', 'blogen' ) ),
					number_format_i18n( $blogen_comment_count ),
					'<span>' . esc_url(get_the_title()) . '</span>'
				);
			}
			?>
		</h2><!-- .comments-title -->
		<?php the_comments_navigation(); ?>
		<ol class="comment-list">
			<?php
			wp_list_comments( array(
                'avatar_size' => 100,
                'style'       => 'ol',
                'short_ping'  => true,
                'callback'		=> 'blogen_comments',
                'reply_text'  => esc_html__( 'Reply', 'blogen' ),
			) );
			?>
		</ol><!-- .comment-list -->
		<?php the_comments_navigation();
		if ( ! comments_open() ) :
			?>
			<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'blogen' ); ?></p>
			<?php
		endif;
	endif; // Check for have_comments().
	comment_form();
	?>

</div><!-- #comments -->
