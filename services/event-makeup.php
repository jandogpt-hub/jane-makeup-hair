<?php
/**
 * Jane Makeup & Hair — Event Makeup
 */
define('allowed', true);
$pageTitle       = 'Event Makeup Artist Los Angeles | Jane Makeup & Hair';
$pageDescription = 'Mobile event makeup for galas, red carpet, TV appearances, and special occasions across Los Angeles. Jane comes to you with professional lighting and a full pro kit.';
require_once __DIR__ . '/../includes/header.php';
?>

<main style="margin-top:72px;">
    <section class="section">
        <div class="container">
            <h1>Event Makeup Artist in Los Angeles</h1>
            <p class="section-sub">Red carpet, galas, TV appearances, milestone birthdays — Jane delivers camera-ready beauty directly to you.</p>
            <a href="/contact" class="btn btn-primary">Book Event Makeup</a>
        </div>
    </section>
    <section class="section">
        <div class="container" style="max-width:800px;">
            <h2>Red Carpet Ready — Wherever the Event Is</h2>
            <p>Jane’s 15+ years in TV and film productions means she understands how makeup reads under stage lighting, flash photography, and HD cameras. She builds a look that works in person and translates beautifully in every photo. She arrives at your hotel, venue, or home with her full professional kit — you just sit back and get pampered.</p>
            <blockquote class="review-card" style="margin-top:var(--space-md);">
                <p>&ldquo;She styled my hair for the Elton John AIDS Foundation after-party and I couldn’t have been happier. Such a calm, lovely presence to have around while getting ready.&rdquo;</p>
                <footer>— Arianna S. &nbsp; ⭐⭐⭐⭐⭐</footer>
            </blockquote>
        </div>
    </section>
    <section class="section">
        <div class="container">
            <h2>Event Makeup Available In</h2>
            <ul class="areas-list">
                <?php foreach ($areas as $a): ?>
                <li><a href="/area-served/<?php echo $a['slug']; ?>">Event Makeup in <?php echo $a['name']; ?></a></li>
                <?php endforeach; ?>
            </ul>
        </div>
    </section>
    <section class="section">
        <div class="container">
            <h2>Other Services</h2>
            <ul class="areas-list">
                <?php foreach ($services as $s): ?>
                <?php if ($s['slug'] !== 'event-makeup'): ?>
                <li><a href="/services/<?php echo $s['slug']; ?>"><?php echo $s['name']; ?></a></li>
                <?php endif; ?>
                <?php endforeach; ?>
            </ul>
        </div>
    </section>
    <section class="section section--dark">
        <div class="container" style="text-align:center;">
            <h2>Book Your Event Makeup</h2>
            <a href="/contact" class="btn btn-primary" style="margin-top:var(--space-sm);">Book Jane</a>
        </div>
    </section>
</main>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
