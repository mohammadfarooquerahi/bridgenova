<?php
/**
 * The template for displaying 404 pages (not found)
 */
get_header(); ?>

<main id="primary" class="site-main bg-navy d-flex align-items-center justify-content-center" style="min-height: 70vh;">
    <div class="container text-center text-light">
        <h1 class="display-1 fw-bold text-gold mb-3" style="font-size: 8rem;">404</h1>
        <h2 class="h1 mb-4">Page Not Found</h2>
        <p class="lead mb-5">The page you are looking for might have been removed, had its name changed, or is temporarily unavailable.</p>
        <a href="<?php echo esc_url(home_url('/')); ?>" class="btn btn-gold btn-lg px-5">Return Home</a>
    </div>
</main>

<?php get_footer(); ?>
