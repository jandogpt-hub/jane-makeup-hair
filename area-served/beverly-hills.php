<?php
/**
 * Jane Makeup & Hair — Area Served: Beverly Hills
 */
define('allowed', true);
$city            = 'Beverly Hills';
$pageTitle       = "Makeup Artist Beverly Hills | Jane Makeup & Hair";
$pageDescription = "Luxury mobile makeup artist and hairstylist serving Beverly Hills, CA. Bridal, event, and editorial beauty delivered to your hotel or home. Book Jane today.";
$pageSchema      = json_encode([
    '@context'    => 'https://schema.org',
    '@type'       => 'BeautySalon',
    'name'        => SITE_NAME,
    'telephone'   => SITE_PHONE,
    'areaServed'  => [['@type' => 'City', 'name' => $city . ', CA']],
    'url'         => SITE_URL . '/area-served/beverly-hills',
    'priceRange'  => '$$',
]);
require_once __DIR__ . '/../includes/header.php';
?>

<main style="margin-top:72px;">
    <section class="section">
        <div class="container">
            <h1>Makeup Artist in Beverly Hills</h1>
            <p class="section-sub">Luxury mobile beauty services in Beverly Hills — delivered to The Beverly Hills Hotel, private estates, and wherever you need Jane.</p>
            <a href="/contact" class="btn btn-primary">Book in Beverly Hills</a>
        </div>
    </section>
    <section class="section">
        <div class="container" style="max-width:800px;">
            <h2>Beverly Hills’ Mobile Beauty Artist</h2>
            <p>Beverly Hills demands excellence — and Jane delivers it. Her Yelp profile is anchored in the Beverly Hills area, where she’s built a loyal following of brides, professionals, and entertainment industry clients who expect flawless results without the inconvenience of a salon appointment. Jane comes to you at The Peninsula, The Beverly Wilshire, private homes in the flats, and venues throughout 90210.</p>
        </div>
    </section>
    <section class="section">
        <div class="container">
            <h2>Services Jane Offers in Beverly Hills</h2>
            <ul class="areas-list">
                <?php foreach ($services as $s): ?>
                <li><a href="/services/<?php echo $s['slug']; ?>"><?php echo $s['name']; ?> in <?php echo $city; ?></a></li>
                <?php endforeach; ?>
            </ul>
        </div>
    </section>
    <section class="section">
        <div class="container">
            <h2>Also Serving Nearby Areas</h2>
            <ul class="areas-list">
                <?php foreach ($areas as $a): ?>
                <?php if ($a['slug'] !== 'beverly-hills'): ?>
                <li><a href="/area-served/<?php echo $a['slug']; ?>"><?php echo $a['name']; ?></a></li>
                <?php endif; ?>
                <?php endforeach; ?>
            </ul>
        </div>
    </section>
    <section class="section section--dark">
        <div class="container" style="text-align:center;">
            <h2>Book Your Session in Beverly Hills</h2>
            <a href="/contact" class="btn btn-primary" style="margin-top:var(--space-sm);">Book Jane</a>
        </div>
    </section>
</main>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
