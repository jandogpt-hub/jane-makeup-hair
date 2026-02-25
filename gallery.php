<?php
/**
 * Jane Makeup & Hair — Gallery / Portfolio
 */
define('allowed', true);
$pageTitle       = 'Gallery | Jane Makeup & Hair — Los Angeles Portfolio';
$pageDescription = 'Browse Jane\'s portfolio of bridal makeup, editorial hair, event glam, and more. 230+ photos of real client work across Los Angeles.';
require_once __DIR__ . '/includes/header.php';
?>

<main style="margin-top:72px;">

    <section class="section">
        <div class="container">
            <h1>Gallery</h1>
            <p class="section-sub">Real clients. Real results. Browse Jane's portfolio across weddings, events, photoshoots, and more.</p>

            <!-- Gallery grid — images will be populated once assets are uploaded -->
            <div class="gallery-grid" aria-label="Portfolio gallery">
                <p style="color:var(--color-text-muted); margin-top:var(--space-md);">Gallery images coming soon. Browse our <a href="<?php echo SOCIAL_YELP; ?>" target="_blank" rel="noopener">Yelp profile</a> for 230+ photos of Jane's work.</p>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="section section--dark">
        <div class="container" style="text-align:center;">
            <h2>Like What You See?</h2>
            <a href="/contact" class="btn btn-primary" style="margin-top:var(--space-sm);">Book Your Session</a>
        </div>
    </section>

</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
