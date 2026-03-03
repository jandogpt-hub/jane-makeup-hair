<?php define('allowed', true);
require_once __DIR__ . '/../includes/config.php'; $city = 'Burbank';
$pageTitle = 'Makeup Artist Burbank | Jane Makeup & Hair';
$pageDescription = 'Mobile makeup artist and hairstylist serving Burbank, CA. On-location beauty for weddings, TV productions, and events. Book Jane today.';
$pageSchema = json_encode(['@context'=>'https://schema.org','@type'=>'BeautySalon','name'=>SITE_NAME,'telephone'=>SITE_PHONE,'areaServed'=>[['@type'=>'City','name'=>$city.', CA']],'url'=>SITE_URL.'/area-served/burbank','priceRange'=>'$$']);
require_once __DIR__ . '/../includes/header.php'; ?>
<main class="bg-background-dark text-white pt-24 pb-12 font-display">

    <!-- HERO -->
    <section class="relative px-6 py-24 md:py-32 overflow-hidden border-solid border-b border-white/10">
        <div class="absolute inset-0 z-0">
            <img class="w-full h-full min-w-full min-h-full max-w-none object-cover object-top opacity-20 filter grayscale" alt="Jane Makeup & Hair in Burbank" src="https://res.cloudinary.com/jane-makeup-hair/image/upload/w_2000,h_1333,c_fill,g_face,q_80,fl_keep_iptc/v1772246476/jane-mobile-makeup-hair-west-hollywood-010_ehtzdf.jpg" />
            <div class="absolute inset-0 bg-gradient-to-t from-background-dark via-background-dark/80 to-transparent"></div>
        </div>
        <div class="container relative z-10 max-w-4xl mx-auto text-center">
            <p class="text-xs font-bold uppercase tracking-[0.45em] text-primary mb-4">Service Area</p>
            <h1 class="text-[8vw] md:text-6xl font-black uppercase tracking-tighter mb-6 leading-none">Makeup Artist Burbank</h1>
            <p class="text-lg md:text-xl text-white/80 max-w-2xl mx-auto leading-relaxed">Jane provides luxury mobile makeup and hair services throughout Burbank — at your hotel, home, or venue.</p>
        </div>
    </section>

    <!-- CONTENT / BIO -->
    <section class="px-6 py-24 relative">
        <div class="container max-w-4xl mx-auto">
            <div class="relative rounded-2xl border-solid border border-white/10 p-8 md:p-12 mb-16" style="background: rgba(255,255,255,0.02);">
                <h2 class="text-3xl font-black uppercase tracking-tight mb-8">Burbank’s Mobile Beauty Artist</h2>
                <div class="space-y-4">
                    <p class="text-white/70 leading-relaxed text-lg">Burbank is the entertainment capital of the world — home to Warner Bros., Disney, and Universal Studios. Jane’s TV production background makes her a natural fit for Burbank clients who need camera-ready beauty on tight timelines. She’s equally at home doing bridal makeup at a Burbank venue or arriving on set for a production call.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- SERVICES -->
    <section class="px-6 py-20 border-solid border-t border-white/10" style="background: rgba(255,255,255,0.01);">
        <div class="container max-w-6xl mx-auto">
            <h2 class="text-2xl font-bold mb-8 text-center text-primary">Services Jane Offers in <?php echo $city; ?></h2>
            <ul class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                <?php foreach ($services as $s): ?>
                <li>
                    <a href="/services/<?php echo $s['slug']; ?>" class="flex items-center gap-3 p-4 rounded-xl border-solid border border-white/5 bg-white/5 hover:bg-white/10 hover:border-white/20 transition-all font-medium">
                        <span class="text-lg"><?php echo $s['icon']; ?></span>
                        <span class="text-sm"><?php echo $s['name']; ?> in <?php echo $city; ?></span>
                    </a>
                </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </section>

    <!-- NEARBY AREAS -->
    <section class="px-6 py-20 border-solid border-t border-white/10">
        <div class="container max-w-4xl mx-auto text-center">
            <h2 class="text-2xl font-bold mb-8 text-primary">Also Serving Nearby Areas</h2>
            <ul class="flex flex-wrap justify-center gap-3">
                <?php foreach ($areas as $a): ?>
                <?php if ($a['slug'] !== 'burbank'): ?>
                <li>
                    <a href="/area-served/<?php echo $a['slug']; ?>" class="inline-block px-5 py-2 rounded-full border-solid border border-white/10 bg-white/5 hover:bg-primary/10 hover:border-primary hover:text-primary transition-colors text-sm font-medium">
                        <?php echo $a['name']; ?>
                    </a>
                </li>
                <?php endif; ?>
                <?php endforeach; ?>
            </ul>
        </div>
    </section>

    <!-- CTA -->
    <section class="px-6 py-32 relative text-center border-solid border-t border-white/10" style="background: rgba(255,255,255,0.01);">
        <div class="container max-w-3xl mx-auto relative z-10">
            <h2 class="text-[7.5vw] md:text-5xl font-black uppercase tracking-tighter mb-8">Book Your Session in <?php echo $city; ?></h2>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="/contact.php" class="px-8 py-4 bg-primary text-background-dark font-black text-sm uppercase tracking-widest rounded-full hover:bg-primary-hover transition-colors shadow-lg" style="box-shadow: 0 0 30px rgba(201,168,76,0.35);">Book Jane</a>
            </div>
        </div>
    </section>

</main>
<?php require_once __DIR__ . '/../includes/footer.php'; ?>
