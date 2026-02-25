<?php
/**
 * Jane Makeup & Hair — Blowout & Styling
 */
define('allowed', true);
$pageTitle       = 'Mobile Blowout & Hair Styling Los Angeles | Jane Makeup & Hair';
$pageDescription = 'Professional blowout and everyday hair styling delivered to your home or office in Los Angeles. Skip the salon — Jane comes to you.';
require_once __DIR__ . '/../includes/header.php';
?>

<main style="margin-top:72px;">
    <section class="section">
        <div class="container">
            <h1>Mobile Blowout &amp; Hair Styling in Los Angeles</h1>
            <p class="section-sub">A great hair day shouldn't require a salon trip. Jane brings the blowout to you.</p>
            <a href="/contact" class="btn btn-primary">Book a Blowout</a>
        </div>
    </section>
    <section class="section">
        <div class="container" style="max-width:800px;">
            <h2>Your Schedule. Your Location. Your Blowout.</h2>
            <p>Whether you need a polished blowout before an important meeting, a sleek style for date night, or a relaxed everyday look, Jane comes to your home or office and delivers professional results in less time than a salon appointment. No waiting rooms, no travel, no stress.</p>
        </div>
    </section>
    <section class="section">
        <div class="container">
            <h2>Blowout & Styling Available In</h2>
            <ul class="areas-list">
                <?php foreach ($areas as $a): ?>
                <li><a href="/area-served/<?php echo $a['slug']; ?>">Blowout Styling in <?php echo $a['name']; ?></a></li>
                <?php endforeach; ?>
            </ul>
        </div>
    </section>
    <section class="section">
        <div class="container">
            <h2>Other Services</h2>
            <ul class="areas-list">
                <?php foreach ($services as $s): ?>
                <?php if ($s['slug'] !== 'blowout-styling'): ?>
                <li><a href="/services/<?php echo $s['slug']; ?>"><?php echo $s['name']; ?></a></li>
                <?php endif; ?>
                <?php endforeach; ?>
            </ul>
        </div>
    </section>
    <section class="section section--dark">
        <div class="container" style="text-align:center;">
            <h2>Book Your Blowout</h2>
            <a href="/contact" class="btn btn-primary" style="margin-top:var(--space-sm);">Book Jane</a>
        </div>
    </section>
</main>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
