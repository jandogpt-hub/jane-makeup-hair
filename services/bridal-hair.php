<?php
/**
 * Jane Makeup & Hair — Bridal Hair
 */
define('allowed', true);
$pageTitle       = 'Bridal Hair Stylist Los Angeles | Jane Makeup & Hair';
$pageDescription = 'Professional bridal hair styling delivered to your hotel or venue in Los Angeles. Updos, braids, soft waves — customized for your wedding day. Book Jane today.';
require_once __DIR__ . '/../includes/header.php';
?>

<main style="margin-top:72px;">
    <section class="section">
        <div class="container">
            <h1>Bridal Hair Stylist in Los Angeles</h1>
            <p class="section-sub">From classic updos to soft romantic waves — Jane creates wedding hair that stays all day and photographs beautifully.</p>
            <a href="/contact" class="btn btn-primary">Book Bridal Hair</a>
        </div>
    </section>
    <section class="section">
        <div class="container" style="max-width:800px;">
            <h2>Polished. Architectural. Uniquely Yours.</h2>
            <p>Wedding hair should feel like you — just elevated. Jane collaborates with you on a look that complements your dress neckline, veil, and personal style. She arrives at your location with everything she needs, using professional-grade products to create a style that holds all the way through the last dance.</p>
        </div>
    </section>
    <section class="section">
        <div class="container">
            <h2>Bridal Hair Available In</h2>
            <ul class="areas-list">
                <?php foreach ($areas as $a): ?>
                <li><a href="/area-served/<?php echo $a['slug']; ?>">Bridal Hair in <?php echo $a['name']; ?></a></li>
                <?php endforeach; ?>
            </ul>
        </div>
    </section>
    <section class="section">
        <div class="container">
            <h2>Other Services</h2>
            <ul class="areas-list">
                <?php foreach ($services as $s): ?>
                <?php if ($s['slug'] !== 'bridal-hair'): ?>
                <li><a href="/services/<?php echo $s['slug']; ?>"><?php echo $s['name']; ?></a></li>
                <?php endif; ?>
                <?php endforeach; ?>
            </ul>
        </div>
    </section>
    <section class="section section--dark">
        <div class="container" style="text-align:center;">
            <h2>Book Your Bridal Hair Consultation</h2>
            <a href="/contact" class="btn btn-primary" style="margin-top:var(--space-sm);">Get Started</a>
        </div>
    </section>
</main>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
