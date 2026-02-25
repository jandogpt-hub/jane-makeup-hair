<?php define('allowed', true); $city = 'Burbank';
$pageTitle = 'Makeup Artist Burbank | Jane Makeup & Hair';
$pageDescription = 'Mobile makeup artist and hairstylist serving Burbank, CA. On-location beauty for weddings, TV productions, and events. Book Jane today.';
$pageSchema = json_encode(['@context'=>'https://schema.org','@type'=>'BeautySalon','name'=>SITE_NAME,'telephone'=>SITE_PHONE,'areaServed'=>[['@type'=>'City','name'=>$city.', CA']],'url'=>SITE_URL.'/area-served/burbank','priceRange'=>'$$']);
require_once __DIR__ . '/../includes/header.php'; ?>
<main style="margin-top:72px;">
    <section class="section"><div class="container"><h1>Makeup Artist in Burbank</h1><p class="section-sub">Jane serves actors, production crews, brides, and private clients throughout Burbank — coming directly to studios, soundstages, hotels, and homes.</p><a href="/contact" class="btn btn-primary">Book in Burbank</a></div></section>
    <section class="section"><div class="container" style="max-width:800px;"><h2>Burbank’s Mobile Beauty Artist</h2><p>Burbank is the entertainment capital of the world — home to Warner Bros., Disney, and Universal Studios. Jane’s TV production background makes her a natural fit for Burbank clients who need camera-ready beauty on tight timelines. She’s equally at home doing bridal makeup at a Burbank venue or arriving on set for a production call.</p></div></section>
    <section class="section"><div class="container"><h2>Services Jane Offers in Burbank</h2><ul class="areas-list"><?php foreach ($services as $s): ?><li><a href="/services/<?php echo $s['slug']; ?>"><?php echo $s['name']; ?> in <?php echo $city; ?></a></li><?php endforeach; ?></ul></div></section>
    <section class="section"><div class="container"><h2>Also Serving Nearby Areas</h2><ul class="areas-list"><?php foreach ($areas as $a): ?><?php if ($a['slug']!=='burbank'): ?><li><a href="/area-served/<?php echo $a['slug']; ?>"><?php echo $a['name']; ?></a></li><?php endif; ?><?php endforeach; ?></ul></div></section>
    <section class="section section--dark"><div class="container" style="text-align:center;"><h2>Book Your Session in Burbank</h2><a href="/contact" class="btn btn-primary" style="margin-top:var(--space-sm);">Book Jane</a></div></section>
</main>
<?php require_once __DIR__ . '/../includes/footer.php'; ?>
