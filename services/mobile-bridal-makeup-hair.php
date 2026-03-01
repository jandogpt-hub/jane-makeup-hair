<?php
/**
 * Jane Makeup & Hair — Mobile Bridal Makeup & Hair
 * Pillar page: merges bridal makeup + bridal hair into one unified intent.
 * Targets: "bridal makeup and hair West Hollywood", "wedding makeup hair LA",
 *           "mobile bridal artist Los Angeles", "bridal trial makeup hair".
 */
define('allowed', true);
$pageTitle       = 'Mobile Bridal Makeup & Hair West Hollywood | Jane Makeup & Hair';
$pageDescription = 'Mobile bridal makeup and hair styling delivered to your venue, hotel, or home in West Hollywood & LA. Airbrush-ready looks that last 12+ hours. Trial sessions available. Book Jane today.';
require_once __DIR__ . '/../includes/header.php';
?>

<main class="bg-background-dark text-white pt-24 pb-12">

    <!-- HERO -->
    <section class="relative px-6 py-24 md:py-32 overflow-hidden border-b border-white/10">
        <div class="absolute inset-0 z-0">
            <img class="w-full h-full object-cover object-top opacity-20 filter grayscale" alt="Bridal updo hairstyle back view by Jane in West Hollywood" src="https://res.cloudinary.com/jane-makeup-hair/image/upload/w_2000,h_1333,c_fill,g_face,q_80,fl_keep_iptc/v1772307264/bridal-updo-hairstyle-8-jane-makeup-hair-west-hollywood_f5jibq.jpg" />
            <div class="absolute inset-0 bg-gradient-to-t from-background-dark via-background-dark/80 to-transparent"></div>
        </div>
        <div class="container relative z-10 max-w-4xl mx-auto text-center">
            <p class="text-xs font-bold uppercase tracking-[0.45em] text-primary mb-4">West Hollywood's Choice</p>
            <h1 class="text-4xl md:text-6xl font-black uppercase tracking-tighter mb-6 leading-none">Mobile Bridal Makeup & Hair</h1>
            <p class="text-lg md:text-xl text-white/80 max-w-2xl mx-auto mb-10 leading-relaxed">Jane arrives at your venue fully equipped — flawless bridal makeup and hair styling that photographs beautifully and lasts all day and night, without a single touch-up.</p>
            <a href="/contact.php" class="inline-flex px-8 py-4 bg-primary text-background-dark font-black text-sm uppercase tracking-widest rounded-full hover:bg-primary-hover transition-colors shadow-lg" style="box-shadow: 0 0 30px rgba(201,168,76,0.35);">Book Your Bridal Trial</a>
        </div>
    </section>

    <!-- INTRO WITH IMAGE -->
    <section class="px-6 py-24 relative">
        <div class="container max-w-6xl mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 lg:gap-20 items-center">
                <div class="order-2 md:order-1 relative rounded-2xl overflow-hidden border border-white/10 p-2" style="background: rgba(255,255,255,0.02);">
                    <img class="w-full h-auto rounded-xl object-cover aspect-[4/5]" src="https://res.cloudinary.com/jane-makeup-hair/image/upload/w_800,h_1000,c_fill,g_face,q_80,fl_keep_iptc/v1772307262/bridal-updo-hairstyle-6-jane-makeup-hair-west-hollywood_vyn77p.jpg" alt="Elegant bridal updo hairstyle side profile by Jane" />
                </div>
                <div class="order-1 md:order-2">
                    <h2 class="text-3xl md:text-4xl font-black uppercase tracking-tight mb-6 leading-tight">One Artist.<br/>Complete Bridal Artistry.</h2>
                    <p class="text-white/70 mb-5 leading-relaxed">Your wedding morning shouldn't start with rushing to a salon. Jane brings her full professional setup — lighting rig, chair, airbrush station, and a kit built over 15+ years in film and television — directly to your hotel suite, bridal suite, Airbnb, or venue.</p>
                    <p class="text-white/70 mb-5 leading-relaxed">Every bridal look is built around your bone structure, skin undertone, dress neckline, and photographer's style. Whether you want a radiant, dewy no-makeup look or a sculpted, smoky editorial finish, Jane consults, customizes, and delivers — then stays through the first looks to ensure everything is perfect on camera before she leaves.</p>
                    <p class="text-white/70 leading-relaxed">And your bridal party? Coordinated, timed, and beautiful. Jane handles the full group with precision scheduling so no one is waiting and everyone walks out camera-ready at exactly the right moment.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- GALLERY SECTION -->
    <section class="px-6 py-24 border-y border-white/10 relative overflow-hidden" style="background: linear-gradient(180deg, rgba(201,168,76,0.03) 0%, transparent 100%);">
        <div class="container max-w-6xl mx-auto text-center mb-16">
            <p class="text-xs font-bold uppercase tracking-[0.45em] text-primary mb-4">Portfolio</p>
            <h2 class="text-4xl md:text-5xl font-black uppercase tracking-tighter">Real Brides &amp; Bridal Parties</h2>
        </div>
        <div class="container max-w-6xl mx-auto">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="group relative rounded-2xl overflow-hidden border border-white/10 aspect-[4/5]">
                    <img src="https://res.cloudinary.com/jane-makeup-hair/image/upload/w_800,h_1000,c_fill,g_face,q_80,fl_keep_iptc/v1772307269/bridesmaids-jane-mobile-makeup-hair-west-hollywood-023_wtith8.jpg" alt="Bridesmaids ready for the wedding with makeup by Jane" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700" />
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                </div>
                <div class="group relative rounded-2xl overflow-hidden border border-white/10 aspect-[4/5]">
                    <img src="https://res.cloudinary.com/jane-makeup-hair/image/upload/w_800,h_1000,c_fill,g_face,q_80,fl_keep_iptc/v1772307267/bridesmaid-makeup-jane-makeup-hair-west-hollywood_lnsfoa.jpg" alt="Bridesmaid flawless makeup application by Jane" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700" />
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                </div>
                <div class="group relative rounded-2xl overflow-hidden border border-white/10 aspect-[4/5] sm:col-span-2 lg:col-span-1">
                    <img src="https://res.cloudinary.com/jane-makeup-hair/image/upload/w_800,h_1000,c_fill,g_face,q_80,fl_keep_iptc/v1772307265/bridesmaid-jane-makeup-hair-west-hollywood_rwiiw3.jpg" alt="Beautiful bridesmaid showing off her hair and makeup by Jane" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700" />
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- WHAT'S INCLUDED -->
    <section class="px-6 py-24 relative">
        <div class="container max-w-6xl mx-auto">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-5xl font-black uppercase tracking-tighter">What's Included in Every Bridal Package</h2>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="p-8 rounded-2xl border border-white/10" style="background: rgba(255,255,255,0.02);">
                    <h3 class="text-xl font-bold mb-3 text-primary">Bridal Trial Session</h3>
                    <p class="text-white/60 text-sm leading-relaxed">Test your complete makeup and hair look weeks before the wedding. Arrive on your day with total confidence — every detail already refined and approved.</p>
                </div>
                <div class="p-8 rounded-2xl border border-white/10" style="background: rgba(255,255,255,0.02);">
                    <h3 class="text-xl font-bold mb-3 text-primary">Wedding Day Application</h3>
                    <p class="text-white/60 text-sm leading-relaxed">Full makeup and hair application at your location. Jane is punctual, calm, and efficient — your timeline stays on track no matter how many people are in your party.</p>
                </div>
                <div class="p-8 rounded-2xl border border-white/10" style="background: rgba(255,255,255,0.02);">
                    <h3 class="text-xl font-bold mb-3 text-primary">Bridal Party Coordination</h3>
                    <p class="text-white/60 text-sm leading-relaxed">Bridesmaid makeup, mother of the bride, flower girls — Jane scales to your entire group with staggered booking and precision timing built into every quote.</p>
                </div>
                <div class="p-8 rounded-2xl border border-white/10" style="background: rgba(255,255,255,0.02);">
                    <h3 class="text-xl font-bold mb-3 text-primary">Airbrush Option</h3>
                    <p class="text-white/60 text-sm leading-relaxed">Airbrush foundation and setting for brides who want a flawless, weightless finish that holds through heat, emotion, and a full night of dancing without transfer.</p>
                </div>
                <div class="p-8 rounded-2xl border border-white/10" style="background: rgba(255,255,255,0.02);">
                    <h3 class="text-xl font-bold mb-3 text-primary">Hair Styling</h3>
                    <p class="text-white/60 text-sm leading-relaxed">Classic updo, romantic loose waves, braided styles, or sleek blowout — Jane sculpts and pins with the same precision she brings to editorial and film shoots.</p>
                </div>
                <div class="p-8 rounded-2xl border border-white/10" style="background: rgba(255,255,255,0.02);">
                    <h3 class="text-xl font-bold mb-3 text-primary">On-Location</h3>
                    <p class="text-white/60 text-sm leading-relaxed">Jane travels to West Hollywood, Beverly Hills, Santa Monica, Burbank, and beyond. Travel fee applies outside the primary service radius — ask when booking.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- AREAS / OTHER SERVICES -->
    <section class="px-6 py-20 border-t border-white/10" style="background: rgba(255,255,255,0.01);">
        <div class="container max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-12">
            <div>
                <h2 class="text-2xl font-bold mb-6">Mobile Bridal Makeup & Hair Available In</h2>
                <ul class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                    <?php foreach ($areas as $a): ?>
                    <li><a href="/area-served/<?php echo $a['slug']; ?>.php" class="text-white/60 hover:text-primary transition-colors text-sm">Mobile Bridal Artist in <?php echo $a['name']; ?></a></li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <div>
                <h2 class="text-2xl font-bold mb-6">Also Consider</h2>
                <ul class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                    <?php foreach ($services as $s): ?>
                    <?php if ($s['slug'] !== 'mobile-bridal-makeup-hair'): ?>
                    <li><a href="/services/<?php echo $s['slug']; ?>.php" class="text-white/60 hover:text-primary transition-colors text-sm"><?php echo $s['name']; ?></a></li>
                    <?php endif; ?>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="px-6 py-32 relative text-center">
        <div class="container max-w-3xl mx-auto relative z-10">
            <h2 class="text-4xl md:text-5xl font-black uppercase tracking-tighter mb-6">Ready to See Your Bridal Look?</h2>
            <p class="text-lg text-white/70 mb-10 leading-relaxed">Book a trial session and walk into your wedding day knowing exactly how stunning you'll look — no surprises, only confidence.</p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="/contact.php" class="px-8 py-4 bg-primary text-background-dark font-black text-sm uppercase tracking-widest rounded-full hover:bg-primary-hover transition-colors shadow-lg" style="box-shadow: 0 0 30px rgba(201,168,76,0.35);">Book Your Bridal Trial</a>
                <a href="tel:<?php echo phoneRaw(); ?>" class="px-8 py-4 bg-transparent border border-white/20 text-white font-black text-sm uppercase tracking-widest rounded-full hover:bg-white/5 hover:border-white/40 transition-colors"><?php echo SITE_PHONE; ?></a>
            </div>
        </div>
    </section>

</main>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
