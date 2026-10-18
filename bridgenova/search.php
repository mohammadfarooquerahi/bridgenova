<?php
/**
 * The template for displaying search results pages
 */
get_header(); ?>

<main id="primary" class="site-main bg-navy text-light py-5">
    <div class="container">
        <?php if ( have_posts() ) : ?>
            <header class="page-header mb-5 text-center">
                <h1 class="page-title text-gold display-5 fw-bold">
                    <?php
                    /* translators: %s: search query. */
                    printf( esc_html__( 'Search Results for: %s', 'bridgenova' ), '<span>' . get_search_query() . '</span>' );
                    ?>
                </h1>
            </header>

            <div class="row g-4">
                <?php
                while ( have_posts() ) :
                    the_post();
                    ?>
                    <div class="col-12">
                        <div class="card bg-dark border-gold flex-md-row">
                            <?php if ( has_post_thumbnail() ) : ?>
                                <div class="col-md-4">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_post_thumbnail('medium', ['class' => 'img-fluid h-100 object-fit-cover rounded-start']); ?>
                                    </a>
                                </div>
                            <?php endif; ?>
                            <div class="card-body p-4 <?php echo has_post_thumbnail() ? 'col-md-8' : 'col-12'; ?>">
                                <?php the_title( '<h2 class="card-title h3"><a href="' . esc_url( get_permalink() ) . '" class="text-gold text-decoration-none">', '</a></h2>' ); ?>
                                <div class="text-light-50 small mb-3">
                                    <?php echo get_post_type() === 'post' ? get_the_date() : ucfirst(get_post_type()); ?>
                                </div>
                                <div class="card-text mb-3">
                                    <?php the_excerpt(); ?>
                                </div>
                                <a href="<?php the_permalink(); ?>" class="btn btn-outline-gold btn-sm">Read More</a>
                            </div>
                        </div>
                    </div>
                    <?php
                endwhile;
                ?>
            </div>
            
            <div class="mt-5">
                <?php the_posts_pagination(); ?>
            </div>

        <?php else : ?>
            <div class="text-center py-5">
                <h2 class="text-gold mb-4">Nothing Found</h2>
                <p class="mb-4">Sorry, but nothing matched your search terms. Please try again with some different keywords.</p>
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <?php get_search_form(); ?>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </div>
</main>

<?php get_footer(); ?>
