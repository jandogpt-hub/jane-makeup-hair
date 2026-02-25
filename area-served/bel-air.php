<?php define('allowed', true);
require_once __DIR__ . '/../includes/config.php'; $city = 'Bel Air';
$pageTitle = 'Makeup Artist Bel Air | Jane Makeup & Hair';
$pageDescription = 'Luxury mobile makeup artist serving Bel Air, CA. High-end beauty for private estates, weddings, and events. Jane comes to you.';
$pageSchema = json_encode(['@context'=>'https://schema.org','@type'=>'BeautySalon','name'=>SITE_NAME,'telephone'=>SITE_PHONE,'areaServed'=>[['@type'=>'City','name'=>$city.', CA']],'url'=>SITE_URL.'/area-served/bel-air','priceRange'=>'$$']);
require_once __DIR__ . '/../includes/header.php'; ?>
<main style="margin-top:72px;">
    <section class="section"><div class="container"><h1>Makeup Artist in Bel Air</h1><p class="section-sub">Discreet, luxury mobile beauty services for Bel Air’s most discerning clientele.</p><a href="/contact" class="btn btn-primary">Book in Bel Air</a></div></section>
    <section class="section"><div class="container" style="max-width:800px;"><h2>Bel Air’s Mobile Beauty Artist</h2><p>Bel Air’s private estates and gated communities call for a beauty artist who understands discretion, precision, and white-glove service. Jane arrives at your property with everything she needs — no fuss, no salon, no compromises. Just flawless results delivered at your door.</p></div></section>
    <section class="section"><div class="container"><h2>Services in Bel Air</h2><ul class="areas-list"><?php foreach ($services as $s): ?><li><a href="/services/<?php echo $s['slug']; ?>"><?php echo $s['name']; ?> in <?php echo $city; ?></a></li><?php endforeach; ?></ul></div></section>
    <section class="section"><div class="container"><h2>Also Serving Nearby Areas</h2><ul class="areas-list"><?php foreach ($areas as $a): ?><?php if ($a['slug']!=='bel-air'): ?><li><a href="/area-served/<?php echo $a['slug']; ?>"><?php echo $a['name']; ?></a></li><?php endif; ?><?php endforeach; ?></ul></div></section>
    <section class="section section--dark"><div class="container" style="text-align:center;"><h2>Book Your Session in Bel Air</h2><a href="/contact" class="btn btn-primary" style="margin-top:var(--space-sm);">Book Jane</a></div></section>
</main>
<?php require_once __DIR__ . '/../includes/footer.php'; ?>
