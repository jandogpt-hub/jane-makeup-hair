<?php
/**
 * Jane Makeup & Hair — Area Served: West Hollywood
 */
define('allowed', true);
require_once __DIR__ . '/../includes/config.php';
$city            = 'West Hollywood';
$pageTitle       = "Makeup Artist West Hollywood | Jane Makeup & Hair";
$pageDescription = "Mobile makeup artist and hairstylist serving West Hollywood, CA. Bridal, event, and photoshoot beauty delivered to your location. Book Jane today.";
$pageSchema      = json_encode([
    '@context'    => 'https://schema.org',
    '@type'       => 'BeautySalon',
    'name'        => SITE_NAME,
    'telephone'   => SITE_PHONE,
    'areaServed'  => [['@type' => 'City', 'name' => $city . ', CA']],
    'url'         => SITE_URL . '/area-served/west-hollywood',
    'priceRange'  => '$$',
]);
require_once __DIR__ . '/../includes/header.php';
?>

<main style="margin-top:72px;">
    <section class="section">
        <div class="container">
            <h1>Makeup Artist in West Hollywood</h1>
            <p class="section-sub">Jane provides luxury mobile makeup and hair services throughout West Hollywood — at your hotel, home, or venue.</p>
            <a href="/contact" class="btn btn-primary">Book in West Hollywood</a>
        </div>
    </section>
    <section class="section">
        <div class="container" style="max-width:800px;">
            <h2>West Hollywood’s Mobile Beauty Artist</h2>
            <p>West Hollywood is one of LA’s most vibrant and style-conscious neighborhoods — the heart of design, entertainment, and nightlife on the Sunset Strip. It’s also one of Jane’s primary service areas. Whether you’re preparing for a wedding at the Chateau Marmont, a red carpet event, or a private shoot, Jane arrives fully prepared to create camera-ready beauty without you leaving your location.</p>
            <p style="margin-top:1rem;">Jane has proudly served clients across WeHo for over a decade — brides, actors, professionals, and everyday clients who simply expect the best.</p>
        </div>
    </section>
    <section class="section">
        <div class="container">
            <h2>Services Jane Offers in West Hollywood</h2>
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
                <?php if ($a['slug'] !== 'west-hollywood'): ?>
                <li><a href="/area-served/<?php echo $a['slug']; ?>"><?php echo $a['name']; ?></a></li>
                <?php endif; ?>
                <?php endforeach; ?>
            </ul>
        </div>
    </section>
    <section class="section section--dark">
        <div class="container" style="text-align:center;">
            <h2>Book Your Session in West Hollywood</h2>
            <a href="/contact" class="btn btn-primary" style="margin-top:var(--space-sm);">Book Jane</a>
        </div>
    </section>
</main>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
