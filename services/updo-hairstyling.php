<?php
/**
 * Jane Makeup & Hair — Updo Hairstyling
 */
define('allowed', true);
$pageTitle       = 'Updo Hairstylist Los Angeles | Jane Makeup & Hair';
$pageDescription = 'Professional updo and formal hairstyling delivered to your location in Los Angeles. Wedding updos, formal styles, braided updos. Book Jane today.';
require_once __DIR__ . '/../includes/header.php';
?>

<main style="margin-top:72px;">
    <section class="section">
        <div class="container">
            <h1>Updo Hairstyling in Los Angeles</h1>
            <p class="section-sub">From classic chignons to romantic braided updos — Jane creates structured, long-lasting styles that photograph from every angle.</p>
            <a href="/contact" class="btn btn-primary">Book an Updo</a>
        </div>
    </section>
    <section class="section">
        <div class="container" style="max-width:800px;">
            <h2>Updos That Stay All Night</h2>
            <p>Updo Hairstyles is one of JaneMakeUp’s most-reviewed and most-photographed service categories on Yelp — with clients walking away with styles that guests photograph all evening. Jane custom designs every updo based on your hair texture, dress, and the occasion. She arrives fully equipped at your location and works efficiently so you stay on schedule.</p>
        </div>
    </section>
    <section class="section">
        <div class="container">
            <h2>Updo Hairstyling Available In</h2>
            <ul class="areas-list">
                <?php foreach ($areas as $a): ?>
                <li><a href="/area-served/<?php echo $a['slug']; ?>">Updo Hairstyling in <?php echo $a['name']; ?></a></li>
                <?php endforeach; ?>
            </ul>
        </div>
    </section>
    <section class="section">
        <div class="container">
            <h2>Other Services</h2>
            <ul class="areas-list">
                <?php foreach ($services as $s): ?>
                <?php if ($s['slug'] !== 'updo-hairstyling'): ?>
                <li><a href="/services/<?php echo $s['slug']; ?>"><?php echo $s['name']; ?></a></li>
                <?php endif; ?>
                <?php endforeach; ?>
            </ul>
        </div>
    </section>
    <section class="section section--dark">
        <div class="container" style="text-align:center;">
            <h2>Book Your Updo</h2>
            <a href="/contact" class="btn btn-primary" style="margin-top:var(--space-sm);">Book Jane</a>
        </div>
    </section>
</main>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
