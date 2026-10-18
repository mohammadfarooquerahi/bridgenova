<?php
/**
 * The template for displaying all single pages
 */
get_header(); ?>

<main id="primary" class="site-main bg-navy text-light py-5">
    <div class="container">
        <?php
        while ( have_posts() ) :
            the_post();
            ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <header class="entry-header mb-4">
                    <?php the_title( '<h1 class="entry-title text-gold display-5 fw-bold">', '</h1>' ); ?>
                </header>
                
                <?php if ( has_post_thumbnail() ) : ?>
                    <div class="post-thumbnail mb-4">
                        <?php the_post_thumbnail('full', ['class' => 'img-fluid rounded']); ?>
                    </div>
                <?php endif; ?>

                <div class="entry-content">
                    <?php
                    the_content();
                    
                    wp_link_pages( array(
                        'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'bridgenova' ),
                        'after'  => '</div>',
                    ) );
                    ?>
                </div>
            </article>
            <?php
            if ( comments_open() || get_comments_number() ) :
                comments_template();
            endif;
        endwhile;
        ?>
    </div>
</main>

<?php get_footer(); ?>
