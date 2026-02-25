<?php define('allowed', true); $city = 'Santa Monica';
$pageTitle = 'Makeup Artist Santa Monica | Jane Makeup & Hair';
$pageDescription = 'Mobile makeup artist serving Santa Monica, CA. Bridal, event, and photoshoot beauty delivered to your beachside hotel or home. Book Jane.';
$pageSchema = json_encode(['@context'=>'https://schema.org','@type'=>'BeautySalon','name'=>SITE_NAME,'telephone'=>SITE_PHONE,'areaServed'=>[['@type'=>'City','name'=>$city.', CA']],'url'=>SITE_URL.'/area-served/santa-monica','priceRange'=>'$$']);
require_once __DIR__ . '/../includes/header.php'; ?>
<main style="margin-top:72px;">
    <section class="section"><div class="container"><h1>Makeup Artist in Santa Monica</h1><p class="section-sub">Mobile beauty services for Santa Monica weddings, events, and photoshoots — delivered to your beachside location.</p><a href="/contact" class="btn btn-primary">Book in Santa Monica</a></div></section>
    <section class="section"><div class="container" style="max-width:800px;"><h2>Santa Monica’s Mobile Beauty Artist</h2><p>From oceanfront weddings on the Santa Monica pier to editorial shoots in its iconic streets, Jane brings luxury mobile beauty to one of LA’s most beloved coastal destinations. She arrives fully equipped and on time — so your morning flows as smoothly as the beachside breeze.</p></div></section>
    <section class="section"><div class="container"><h2>Services in Santa Monica</h2><ul class="areas-list"><?php foreach ($services as $s): ?><li><a href="/services/<?php echo $s['slug']; ?>"><?php echo $s['name']; ?> in <?php echo $city; ?></a></li><?php endforeach; ?></ul></div></section>
    <section class="section"><div class="container"><h2>Also Serving Nearby Areas</h2><ul class="areas-list"><?php foreach ($areas as $a): ?><?php if ($a['slug']!=='santa-monica'): ?><li><a href="/area-served/<?php echo $a['slug']; ?>"><?php echo $a['name']; ?></a></li><?php endif; ?><?php endforeach; ?></ul></div></section>
    <section class="section section--dark"><div class="container" style="text-align:center;"><h2>Book Your Session in Santa Monica</h2><a href="/contact" class="btn btn-primary" style="margin-top:var(--space-sm);">Book Jane</a></div></section>
</main>
<?php require_once __DIR__ . '/../includes/footer.php'; ?>
