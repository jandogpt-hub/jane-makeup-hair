<?php define('allowed', true); $city = 'Studio City';
$pageTitle = 'Makeup Artist Studio City | Jane Makeup & Hair';
$pageDescription = 'Mobile makeup artist and hairstylist serving Studio City, CA. Bridal, event, and TV production beauty delivered to your location.';
$pageSchema = json_encode(['@context'=>'https://schema.org','@type'=>'BeautySalon','name'=>SITE_NAME,'telephone'=>SITE_PHONE,'areaServed'=>[['@type'=>'City','name'=>$city.', CA']],'url'=>SITE_URL.'/area-served/studio-city','priceRange'=>'$$']);
require_once __DIR__ . '/../includes/header.php'; ?>
<main style="margin-top:72px;">
    <section class="section"><div class="container"><h1>Makeup Artist in Studio City</h1><p class="section-sub">Mobile beauty services for Studio City productions, weddings, and events.</p><a href="/contact" class="btn btn-primary">Book in Studio City</a></div></section>
    <section class="section"><div class="container" style="max-width:800px;"><h2>Studio City’s Mobile Beauty Artist</h2><p>Studio City sits at the heart of the San Fernando Valley’s entertainment industry — home to CBS, NBC, and countless production facilities. Jane’s TV production background makes her a natural fit for Studio City clients who need a reliable, professional beauty artist on short notice. She also serves Studio City brides, event clients, and everyday clients seeking a premium at-home experience.</p></div></section>
    <section class="section"><div class="container"><h2>Services in Studio City</h2><ul class="areas-list"><?php foreach ($services as $s): ?><li><a href="/services/<?php echo $s['slug']; ?>"><?php echo $s['name']; ?> in <?php echo $city; ?></a></li><?php endforeach; ?></ul></div></section>
    <section class="section"><div class="container"><h2>Also Serving Nearby Areas</h2><ul class="areas-list"><?php foreach ($areas as $a): ?><?php if ($a['slug']!=='studio-city'): ?><li><a href="/area-served/<?php echo $a['slug']; ?>"><?php echo $a['name']; ?></a></li><?php endif; ?><?php endforeach; ?></ul></div></section>
    <section class="section section--dark"><div class="container" style="text-align:center;"><h2>Book Your Session in Studio City</h2><a href="/contact" class="btn btn-primary" style="margin-top:var(--space-sm);">Book Jane</a></div></section>
</main>
<?php require_once __DIR__ . '/../includes/footer.php'; ?>
