<?php
/**
 * The template for displaying all single posts
 */
get_header(); ?>

<main id="primary" class="site-main bg-navy text-light py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <?php
                while ( have_posts() ) :
                    the_post();
                    ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <header class="entry-header mb-4 text-center">
                            <?php 
                            the_category(' / '); 
                            the_title( '<h1 class="entry-title text-gold display-4 fw-bold mt-3 mb-3">', '</h1>' ); 
                            ?>
                            <div class="entry-meta text-light-50">
                                <span><i class="far fa-calendar-alt me-2"></i><?php echo get_the_date(); ?></span>
                                <span class="mx-2">|</span>
                                <span><i class="far fa-user me-2"></i><?php the_author(); ?></span>
                            </div>
                        </header>
                        
                        <?php if ( has_post_thumbnail() ) : ?>
                            <div class="post-thumbnail mb-5">
                                <?php the_post_thumbnail('full', ['class' => 'img-fluid rounded w-100']); ?>
                            </div>
                        <?php endif; ?>

                        <div class="entry-content fs-5 line-height-lg">
                            <?php
                            the_content();
                            
                            wp_link_pages( array(
                                'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'bridgenova' ),
                                'after'  => '</div>',
                            ) );
                            ?>
                        </div>
                        
                        <footer class="entry-footer mt-5 pt-4 border-top border-secondary">
                            <div class="tags-links mb-4">
                                <?php the_tags('<span class="badge bg-gold text-navy me-2">', '</span><span class="badge bg-gold text-navy me-2">', '</span>'); ?>
                            </div>
                        </footer>
                    </article>
                    
                    <?php
                    the_post_navigation( array(
                        'prev_text' => '<span class="nav-subtitle text-gold">Previous:</span> <span class="nav-title text-light">%title</span>',
                        'next_text' => '<span class="nav-subtitle text-gold">Next:</span> <span class="nav-title text-light">%title</span>',
                    ) );

                    if ( comments_open() || get_comments_number() ) :
                        comments_template();
                    endif;
                endwhile;
                ?>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>
