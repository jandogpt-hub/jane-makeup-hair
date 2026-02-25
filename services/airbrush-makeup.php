<?php
/**
 * Jane Makeup & Hair — Airbrush Makeup
 */
define('allowed', true);
$pageTitle       = 'Airbrush Makeup Artist Los Angeles | Jane Makeup & Hair';
$pageDescription = 'Professional airbrush makeup application for weddings, photoshoots, and special events in Los Angeles. Flawless, long-lasting, camera-ready finish. Mobile service — Jane comes to you.';
require_once __DIR__ . '/../includes/header.php';
?>

<main style="margin-top:72px;">
    <section class="section">
        <div class="container">
            <h1>Airbrush Makeup Artist in Los Angeles</h1>
            <p class="section-sub">Ultra-fine, buildable coverage that photographs flawlessly and lasts all day. Jane brings the airbrush kit to you.</p>
            <a href="/contact" class="btn btn-primary">Book Airbrush Makeup</a>
        </div>
    </section>
    <section class="section">
        <div class="container" style="max-width:800px;">
            <h2>The Finish That Lives Up to the Lens</h2>
            <p>Airbrush makeup uses a fine mist of pigment to build a seamless, natural-looking coverage that traditional application can’t replicate. It’s lightweight, long-wearing, and specifically designed to photograph beautifully under flash and studio lighting. It’s a favourite choice for brides, actors, and anyone who needs to look flawless in photos all day long.</p>
        </div>
    </section>
    <section class="section">
        <div class="container">
            <h2>Airbrush Makeup Available In</h2>
            <ul class="areas-list">
                <?php foreach ($areas as $a): ?>
                <li><a href="/area-served/<?php echo $a['slug']; ?>">Airbrush Makeup in <?php echo $a['name']; ?></a></li>
                <?php endforeach; ?>
            </ul>
        </div>
    </section>
    <section class="section">
        <div class="container">
            <h2>Other Services</h2>
            <ul class="areas-list">
                <?php foreach ($services as $s): ?>
                <?php if ($s['slug'] !== 'airbrush-makeup'): ?>
                <li><a href="/services/<?php echo $s['slug']; ?>"><?php echo $s['name']; ?></a></li>
                <?php endif; ?>
                <?php endforeach; ?>
            </ul>
        </div>
    </section>
    <section class="section section--dark">
        <div class="container" style="text-align:center;">
            <h2>Book Airbrush Makeup</h2>
            <a href="/contact" class="btn btn-primary" style="margin-top:var(--space-sm);">Book Jane</a>
        </div>
    </section>
</main>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
