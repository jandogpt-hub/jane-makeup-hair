<?php
/**
 * Jane Makeup & Hair — Photoshoot & Editorial Makeup
 * Pillar page: merges photoshoot-makeup + blowout-styling into one intent cluster.
 * Targets: "headshot makeup West Hollywood", "editorial makeup artist LA",
 *           "photography makeup artist Los Angeles", "boudoir makeup artist WeHo",
 *           "lookbook makeup hair LA", "portrait makeup artist West Hollywood".
 */
define('allowed', true);
$pageTitle       = 'Photoshoot & Editorial Makeup Artist West Hollywood | Jane Makeup & Hair';
$pageDescription = 'Professional makeup and hair for headshots, portrait sessions, boudoir, lookbooks, and editorial shoots in West Hollywood & Los Angeles. Mobile. Camera-calibrated. Bookable today.';
require_once __DIR__ . '/../includes/header.php';
?>

<main class="bg-background-dark text-white pt-24 pb-12 font-display">

    <!-- HERO -->
    <section class="relative px-6 py-24 md:py-32 overflow-hidden border-solid border-b border-white/10">
        <div class="absolute inset-0 z-0">
            <img class="w-full h-full object-cover object-top opacity-20 filter grayscale" alt="Jane applying professional photoshoot and editorial makeup in West Hollywood" src="https://res.cloudinary.com/jane-makeup-hair/image/upload/w_2000,h_1333,c_fill,g_face,q_80,fl_keep_iptc/v1772246944/jane-mobile-makeup-hair-west-hollywood-photoshoot-editorial_n06p1c.jpg" />
            <div class="absolute inset-0 bg-gradient-to-t from-background-dark via-background-dark/80 to-transparent"></div>
        </div>
        <div class="container relative z-10 max-w-4xl mx-auto text-center">
            <p class="text-xs font-bold uppercase tracking-[0.45em] text-primary mb-4">West Hollywood's Choice</p>
            <h1 class="text-[9.5vw] md:text-6xl font-black uppercase tracking-tighter mb-6 leading-none">Photoshoot & Editorial Makeup</h1>
            <p class="text-lg md:text-xl text-white/80 max-w-2xl mx-auto mb-10 leading-relaxed">From headshots to high-fashion lookbooks — Jane delivers makeup and hair crafted specifically for how a camera sees it, not just how a mirror does.</p>
            <a href="/contact.php" class="inline-flex px-8 py-4 bg-primary text-background-dark font-black text-sm uppercase tracking-widest rounded-full hover:bg-primary-hover transition-colors shadow-lg" style="box-shadow: 0 0 30px rgba(201,168,76,0.35);">Book Your Shoot</a>
        </div>
    </section>

    <!-- INTRO -->
    <section class="px-6 py-24 relative">
        <div class="container max-w-6xl mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 lg:gap-20 items-center">
                <div class="order-2 md:order-1 relative rounded-2xl overflow-hidden border-solid border border-white/10 p-8 md:p-12" style="background: rgba(255,255,255,0.02);">
                    <h3 class="text-2xl font-bold mb-4 text-primary">Built for the Lens</h3>
                    <p class="text-white/80 leading-relaxed font-medium mb-4">There's a meaningful difference between makeup that looks good in a room and makeup that reads beautifully through a camera lens.</p>
                    <p class="text-white/70 leading-relaxed">Sensors flatten texture, compress color range, and exaggerate certain tones in ways the human eye never notices. Jane's background in television and editorial work means she builds every photoshoot look with that understanding baked in — color-corrected for the lighting setup, textured for the medium, and finished to hold across a full shoot day.</p>
                </div>
                <div class="order-1 md:order-2">
                    <h2 class="text-3xl md:text-4xl font-black uppercase tracking-tight mb-6 leading-tight">Camera-Calibrated Artistry.</h2>
                    <p class="text-white/70 mb-5 leading-relaxed">Whether you're doing corporate headshots, brand content, boudoir, a maternity portrait session, or a fully art-directed editorial, Jane arrives at your studio, location, or home fully equipped.</p>
                    <p class="text-white/70 leading-relaxed">She doesn't just apply makeup and leave; she collaborates with your photographer from the first frame to ensure lighting, angles, and styling are precisely aligned with your vision.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- SHOOT TYPES -->
    <section class="px-6 py-24 relative border-t border-solid border-white/10" style="background: linear-gradient(180deg, rgba(201,168,76,0.03) 0%, transparent 100%);">
        <div class="container max-w-6xl mx-auto">
            <div class="text-center mb-16">
                <p class="text-xs font-bold uppercase tracking-[0.45em] text-primary mb-4">Versatility</p>
                <h2 class="text-3xl md:text-5xl font-black uppercase tracking-tighter">Shoots We Work On</h2>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="p-8 rounded-2xl border-solid border border-white/10" style="background: rgba(255,255,255,0.02);">
                    <h3 class="text-xl font-bold mb-3 text-primary">Headshots & Corporate</h3>
                    <p class="text-white/60 text-sm leading-relaxed">Actor headshots, LinkedIn portraits, executive profiles — clean, polished, and natural. Makeup that says "confident" without looking like makeup on camera.</p>
                </div>
                <div class="p-8 rounded-2xl border-solid border border-white/10" style="background: rgba(255,255,255,0.02);">
                    <h3 class="text-xl font-bold mb-3 text-primary">Boudoir & Glamour</h3>
                    <p class="text-white/60 text-sm leading-relaxed">Built for the mood and the lighting of your specific session. Dramatic, soft, retro, or editorial — Jane collaborates with your photographer to match the look to the concept.</p>
                </div>
                <div class="p-8 rounded-2xl border-solid border border-white/10" style="background: rgba(255,255,255,0.02);">
                    <h3 class="text-xl font-bold mb-3 text-primary">Maternity & Family</h3>
                    <p class="text-white/60 text-sm leading-relaxed">Luminous, timeless, and natural — makeup that photographs beautifully and feels comfortable across a multi-hour portrait session outdoors or in-studio.</p>
                </div>
                <div class="p-8 rounded-2xl border-solid border border-white/10" style="background: rgba(255,255,255,0.02);">
                    <h3 class="text-xl font-bold mb-3 text-primary">Lookbooks & Brand Content</h3>
                    <p class="text-white/60 text-sm leading-relaxed">E-commerce, brand campaigns, seasonal lookbooks — makeup calibrated for the brand's visual world, consistent across a full day of multiple looks.</p>
                </div>
                <div class="p-8 rounded-2xl border-solid border border-white/10" style="background: rgba(255,255,255,0.02);">
                    <h3 class="text-xl font-bold mb-3 text-primary">Editorial & Fashion</h3>
                    <p class="text-white/60 text-sm leading-relaxed">High fashion, avant-garde, or beauty editorial. Jane works from mood boards, references, and direct creative direction to deliver looks that belong in print.</p>
                </div>
                <div class="p-8 rounded-2xl border-solid border border-white/10" style="background: rgba(255,255,255,0.02);">
                    <h3 class="text-xl font-bold mb-3 text-primary">Hair Finishing for Shoots</h3>
                    <p class="text-white/60 text-sm leading-relaxed">Blowouts, waves, or styled finishes added to any photoshoot booking. Hair that reads through the lens with the same precision as the makeup.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- PROCESS -->
    <section class="px-6 py-24 relative">
        <div class="container max-w-6xl mx-auto">
            <div class="text-center mb-16 max-w-3xl mx-auto">
                <h2 class="text-3xl md:text-5xl font-black uppercase tracking-tighter mb-4">How a Photoshoot Booking Works</h2>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="p-8 rounded-2xl border-solid border border-white/10 relative overflow-hidden group" style="background: rgba(255,255,255,0.02);">
                    <span class="absolute -right-4 -top-8 text-[120px] font-black text-white/[0.03] group-hover:text-primary/10 transition-colors">1</span>
                    <h3 class="text-xl font-bold mb-3 text-primary relative z-10">Share the Concept</h3>
                    <p class="text-white/60 text-sm leading-relaxed relative z-10">Send Jane your mood board, photographer name, shoot location, and any references. She prepares the right kit and any specialty products ahead of time.</p>
                </div>
                <div class="p-8 rounded-2xl border-solid border border-white/10 relative overflow-hidden group" style="background: rgba(255,255,255,0.02);">
                    <span class="absolute -right-4 -top-8 text-[120px] font-black text-white/[0.03] group-hover:text-primary/10 transition-colors">2</span>
                    <h3 class="text-xl font-bold mb-3 text-primary relative z-10">She Arrives Set-Ready</h3>
                    <p class="text-white/60 text-sm leading-relaxed relative z-10">Jane shows up with everything needed — lighting reference, pro kit, and hair tools if included. Setup takes minutes so your shoot time is protected.</p>
                </div>
                <div class="p-8 rounded-2xl border-solid border border-white/10 relative overflow-hidden group" style="background: rgba(255,255,255,0.02);">
                    <span class="absolute -right-4 -top-8 text-[120px] font-black text-white/[0.03] group-hover:text-primary/10 transition-colors">3</span>
                    <h3 class="text-xl font-bold mb-3 text-primary relative z-10">Collaborate & Adjust</h3>
                    <p class="text-white/60 text-sm leading-relaxed relative z-10">Jane checks the monitor with your photographer between setups and adjusts in real time. What you see on camera is exactly what was intended.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- AREAS / OTHER SERVICES -->
    <section class="px-6 py-20 border-solid border-t border-white/10" style="background: rgba(255,255,255,0.01);">
        <div class="container max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-12">
            <div>
                <h2 class="text-2xl font-bold mb-6">Photoshoot Makeup Available In</h2>
                <ul class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                    <?php foreach ($areas as $a): ?>
                    <li><a href="/area-served/<?php echo $a['slug']; ?>.php" class="text-white/60 hover:text-primary transition-colors text-sm">Photoshoots in <?php echo $a['name']; ?></a></li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <div>
                <h2 class="text-2xl font-bold mb-6">Also Consider</h2>
                <ul class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                    <?php foreach ($services as $s): ?>
                    <?php if ($s['slug'] !== 'photoshoot-editorial-makeup'): ?>
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
            <h2 class="text-[8.5vw] md:text-5xl font-black uppercase tracking-tighter mb-6">Book Jane for Your Shoot</h2>
            <p class="text-lg text-white/70 mb-10 leading-relaxed">Share your shoot date, concept, and location. Jane will confirm availability and discuss the look before your session so you're both aligned from the first frame.</p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="/contact.php" class="px-8 py-4 bg-primary text-background-dark font-black text-sm uppercase tracking-widest rounded-full hover:bg-primary-hover transition-colors shadow-lg" style="box-shadow: 0 0 30px rgba(201,168,76,0.35);">Book Your Photoshoot</a>
                <a href="tel:<?php echo phoneRaw(); ?>" class="px-8 py-4 bg-transparent border-solid border border-white/20 text-white font-black text-sm uppercase tracking-widest rounded-full hover:bg-white/5 hover:border-white/40 transition-colors"><?php echo SITE_PHONE; ?></a>
            </div>
        </div>
    </section>

</main>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
