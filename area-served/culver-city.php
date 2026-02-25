<?php define('allowed', true);
require_once __DIR__ . '/../includes/config.php'; $city = 'Culver City';
$pageTitle = 'Makeup Artist Culver City | Jane Makeup & Hair';
$pageDescription = 'Mobile makeup artist and hairstylist serving Culver City, CA. Bridal, event, and production beauty delivered to your location.';
$pageSchema = json_encode(['@context'=>'https://schema.org','@type'=>'BeautySalon','name'=>SITE_NAME,'telephone'=>SITE_PHONE,'areaServed'=>[['@type'=>'City','name'=>$city.', CA']],'url'=>SITE_URL.'/area-served/culver-city','priceRange'=>'$$']);
require_once __DIR__ . '/../includes/header.php'; ?>
<main style="margin-top:72px;">
    <section class="section"><div class="container"><h1>Makeup Artist in Culver City</h1><p class="section-sub">Mobile beauty services for Culver City weddings, productions, and events.</p><a href="/contact" class="btn btn-primary">Book in Culver City</a></div></section>
    <section class="section"><div class="container" style="max-width:800px;"><h2>Culver City’s Mobile Beauty Artist</h2><p>Culver City has transformed into one of LA’s most creative hubs — home to Amazon Studios, Apple TV+, and a thriving arts scene. Jane serves Culver City’s creative professionals, brides, and event clients with the same camera-ready artistry that’s earned her a 4.9 Yelp rating across 49 reviews.</p></div></section>
    <section class="section"><div class="container"><h2>Services in Culver City</h2><ul class="areas-list"><?php foreach ($services as $s): ?><li><a href="/services/<?php echo $s['slug']; ?>"><?php echo $s['name']; ?> in <?php echo $city; ?></a></li><?php endforeach; ?></ul></div></section>
    <section class="section"><div class="container"><h2>Also Serving Nearby Areas</h2><ul class="areas-list"><?php foreach ($areas as $a): ?><?php if ($a['slug']!=='culver-city'): ?><li><a href="/area-served/<?php echo $a['slug']; ?>"><?php echo $a['name']; ?></a></li><?php endif; ?><?php endforeach; ?></ul></div></section>
    <section class="section section--dark"><div class="container" style="text-align:center;"><h2>Book Your Session in Culver City</h2><a href="/contact" class="btn btn-primary" style="margin-top:var(--space-sm);">Book Jane</a></div></section>
</main>
<?php require_once __DIR__ . '/../includes/footer.php'; ?>
