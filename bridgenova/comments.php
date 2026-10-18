<?php
/**
 * The template for displaying comments
 */
if ( post_password_required() ) {
    return;
}
?>

<div id="comments" class="comments-area mt-5 pt-5 border-top border-secondary">

    <?php if ( have_comments() ) : ?>
        <h2 class="comments-title text-gold mb-4">
            <?php
            $bridgenova_comment_count = get_comments_number();
            if ( '1' === $bridgenova_comment_count ) {
                printf(
                    /* translators: 1: title. */
                    esc_html__( 'One thought on &ldquo;%1$s&rdquo;', 'bridgenova' ),
                    '<span>' . wp_kses_post( get_the_title() ) . '</span>'
                );
            } else {
                printf( 
                    /* translators: 1: comment count number, 2: title. */
                    esc_html( _nx( '%1$s thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', $bridgenova_comment_count, 'comments title', 'bridgenova' ) ),
                    number_format_i18n( $bridgenova_comment_count ),
                    '<span>' . wp_kses_post( get_the_title() ) . '</span>'
                );
            }
            ?>
        </h2>

        <ol class="comment-list list-unstyled">
            <?php
            wp_list_comments( array(
                'style'       => 'ol',
                'short_ping'  => true,
                'avatar_size' => 60,
                'class'       => 'comment-item bg-dark p-4 rounded mb-4 border border-secondary',
            ) );
            ?>
        </ol>

        <?php
        the_comments_navigation();

        if ( ! comments_open() ) :
            ?>
            <p class="no-comments text-light-50 fst-italic"><?php esc_html_e( 'Comments are closed.', 'bridgenova' ); ?></p>
            <?php
        endif;

    endif; // Check for have_comments().

    $comment_args = array(
        'title_reply_before' => '<h3 id="reply-title" class="comment-reply-title text-gold mb-4">',
        'title_reply_after'  => '</h3>',
        'class_submit'       => 'btn btn-gold mt-3',
        'class_form'         => 'comment-form',
        'comment_field'      => '<div class="comment-form-comment mb-3"><label for="comment" class="form-label text-light">Comment</label><textarea id="comment" name="comment" cols="45" rows="5" class="form-control bg-dark text-light border-secondary" required="required"></textarea></div>',
        'fields'             => array(
            'author' => '<div class="row g-3 mb-3"><div class="col-md-6 comment-form-author"><label for="author" class="form-label text-light">Name</label><input id="author" name="author" type="text" class="form-control bg-dark text-light border-secondary" required="required" /></div>',
            'email'  => '<div class="col-md-6 comment-form-email"><label for="email" class="form-label text-light">Email</label><input id="email" name="email" type="email" class="form-control bg-dark text-light border-secondary" required="required" /></div></div>',
            'url'    => '<div class="comment-form-url mb-3"><label for="url" class="form-label text-light">Website</label><input id="url" name="url" type="url" class="form-control bg-dark text-light border-secondary" /></div>',
        ),
    );

    comment_form($comment_args);
    ?>

</div><!-- #comments -->
