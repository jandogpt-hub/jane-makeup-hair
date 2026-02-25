<?php define('allowed', true);
require_once __DIR__ . '/../includes/config.php'; $city = 'Los Angeles';
$pageTitle = 'Mobile Makeup Artist Los Angeles | Jane Makeup & Hair';
$pageDescription = 'Luxury mobile makeup artist and hairstylist serving all of Los Angeles, CA. Bridal, event, editorial, and everyday beauty — delivered to your location. 5.0 Google rating. Book Jane today.';
$pageSchema = json_encode(['@context'=>'https://schema.org','@type'=>'BeautySalon','name'=>SITE_NAME,'telephone'=>SITE_PHONE,'areaServed'=>[['@type'=>'City','name'=>$city.', CA']],'url'=>SITE_URL.'/area-served/los-angeles','priceRange'=>'$$']);
require_once __DIR__ . '/../includes/header.php'; ?>
<main style="margin-top:72px;">
    <section class="section"><div class="container"><h1>Mobile Makeup Artist in Los Angeles</h1><p class="section-sub">Jane Makeup & Hair serves all of Los Angeles — from the Westside to the Valley, delivering luxury beauty at your location.</p><a href="/contact" class="btn btn-primary">Book in Los Angeles</a></div></section>
    <section class="section"><div class="container" style="max-width:800px;"><h2>Los Angeles’ Mobile Beauty Artist</h2><p>Los Angeles is the city of image — and Jane has spent 15+ years mastering the craft of looking flawless in it. Serving every corner of the city from her base in the Miracle Mile area, Jane covers weddings, film and TV productions, editorial shoots, red carpet events, and private clients from Malibu to Pasadena and everywhere in between. She comes to you so you can focus on your day.</p></div></section>
    <section class="section"><div class="container"><h2>Services Jane Offers Across Los Angeles</h2><ul class="areas-list"><?php foreach ($services as $s): ?><li><a href="/services/<?php echo $s['slug']; ?>"><?php echo $s['name']; ?> in Los Angeles</a></li><?php endforeach; ?></ul></div></section>
    <section class="section"><div class="container"><h2>Specific Areas Jane Serves</h2><ul class="areas-list"><?php foreach ($areas as $a): ?><?php if ($a['slug']!=='los-angeles'): ?><li><a href="/area-served/<?php echo $a['slug']; ?>"><?php echo $a['name']; ?></a></li><?php endif; ?><?php endforeach; ?></ul></div></section>
    <section class="section section--dark"><div class="container" style="text-align:center;"><h2>Book Your Session in Los Angeles</h2><a href="/contact" class="btn btn-primary" style="margin-top:var(--space-sm);">Book Jane</a></div></section>
</main>
<?php require_once __DIR__ . '/../includes/footer.php'; ?>
