<?php
/**
 * The template for displaying archive pages
 */
get_header(); ?>

<main id="primary" class="site-main bg-navy text-light py-5">
    <div class="container">
        <?php if ( have_posts() ) : ?>
            <header class="page-header mb-5 text-center">
                <?php
                the_archive_title( '<h1 class="page-title text-gold display-4 fw-bold">', '</h1>' );
                the_archive_description( '<div class="archive-description lead mt-3">', '</div>' );
                ?>
            </header>

            <div class="row g-4">
                <?php
                while ( have_posts() ) :
                    the_post();
                    ?>
                    <div class="col-md-6 col-lg-4">
                        <div class="card bg-dark border-gold h-100">
                            <?php if ( has_post_thumbnail() ) : ?>
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_post_thumbnail('medium_large', ['class' => 'card-img-top']); ?>
                                </a>
                            <?php endif; ?>
                            <div class="card-body d-flex flex-column">
                                <div class="text-gold small mb-2"><?php echo get_the_date(); ?></div>
                                <?php the_title( '<h2 class="card-title h4"><a href="' . esc_url( get_permalink() ) . '" class="text-light text-decoration-none">', '</a></h2>' ); ?>
                                <div class="card-text mb-4 text-light-50">
                                    <?php the_excerpt(); ?>
                                </div>
                                <div class="mt-auto">
                                    <a href="<?php the_permalink(); ?>" class="btn btn-outline-gold">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                endwhile;
                ?>
            </div>
            
            <div class="mt-5">
                <?php the_posts_pagination( array(
                    'mid_size'  => 2,
                    'prev_text' => __( 'Previous', 'bridgenova' ),
                    'next_text' => __( 'Next', 'bridgenova' ),
                ) ); ?>
            </div>

        <?php else : ?>
            <div class="text-center py-5">
                <h2 class="text-gold">No content found</h2>
                <p>It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.</p>
                <?php get_search_form(); ?>
            </div>
        <?php endif; ?>
    </div>
</main>

<?php get_footer(); ?>
