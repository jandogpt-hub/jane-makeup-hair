<?php
/**
 * Jane Makeup & Hair — Special Event Makeup & Hair
 * Pillar page: merges event-makeup + updo-hairstyling into one intent cluster.
 * Targets: "event makeup hair West Hollywood", "gala makeup artist LA",
 *           "prom makeup hair Los Angeles", "birthday glam makeup artist",
 *           "updo hair stylist Los Angeles", "red carpet makeup artist WeHo".
 */
define('allowed', true);
$pageTitle       = 'Special Event Makeup & Hair West Hollywood | Jane Makeup & Hair';
$pageDescription = 'Mobile event makeup and hair styling for galas, red carpet, prom, quinceañeras, birthday glam, and corporate events in West Hollywood & LA. Jane comes to you. Book today.';
require_once __DIR__ . '/../includes/header.php';
?>

<main class="bg-background-dark text-white pt-24 pb-12 font-display">

    <!-- HERO -->
    <section class="relative px-6 py-24 md:py-32 overflow-hidden border-solid border-b border-white/10">
        <div class="absolute inset-0 z-0">
            <img class="w-full h-full object-cover object-top opacity-20 filter grayscale" alt="Special Event Makeup and Hair by Jane in West Hollywood" src="https://res.cloudinary.com/jane-makeup-hair/image/upload/w_2000,h_1333,c_fill,g_face,q_80,fl_keep_iptc/v1772245395/jane-mobile-makeup-hair-west-hollywood-special-event_anxo6m.jpg" />
            <div class="absolute inset-0 bg-gradient-to-t from-background-dark via-background-dark/80 to-transparent"></div>
        </div>
        <div class="container relative z-10 max-w-4xl mx-auto text-center">
            <p class="text-xs font-bold uppercase tracking-[0.45em] text-primary mb-4">West Hollywood's Choice</p>
            <h1 class="text-[9.5vw] md:text-6xl font-black uppercase tracking-tighter mb-6 leading-none">Special Event Makeup & Hair</h1>
            <p class="text-lg md:text-xl text-white/80 max-w-2xl mx-auto mb-10 leading-relaxed">Galas, red carpet, birthday glam, prom, quinceañeras, award ceremonies — Jane delivers camera-ready makeup and hair styling directly to your location, every time.</p>
            <a href="/contact.php" class="inline-flex px-8 py-4 bg-primary text-background-dark font-black text-sm uppercase tracking-widest rounded-full hover:bg-primary-hover transition-colors shadow-lg" style="box-shadow: 0 0 30px rgba(201,168,76,0.35);">Book Your Event Look</a>
        </div>
    </section>

    <!-- INTRO -->
    <section class="px-6 py-24 relative">
        <div class="container max-w-6xl mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 lg:gap-20 items-center">
                <div class="order-2 md:order-1 relative rounded-2xl overflow-hidden border-solid border border-white/10 p-8 md:p-12 text-center flex flex-col items-center justify-center" style="background: rgba(255,255,255,0.02);">
                    <svg class="text-primary w-12 h-12 mb-6 opacity-80" fill="currentColor" viewBox="0 0 32 32" aria-hidden="true"><path d="M9.352 4C4.456 7.456 1 13.12 1 19.36c0 5.088 3.072 8.064 6.624 8.064 3.36 0 5.856-2.688 5.856-5.856 0-3.168-2.208-5.472-5.088-5.472-.576 0-1.344.096-1.536.192.48-3.264 3.552-7.104 6.624-9.024L9.352 4zm16.512 0c-4.8 3.456-8.256 9.12-8.256 15.36 0 5.088 3.072 8.064 6.624 8.064 3.264 0 5.856-2.688 5.856-5.856 0-3.168-2.304-5.472-5.184-5.472-.576 0-1.248.096-1.44.192.48-3.264 3.456-7.104 6.528-9.024L25.864 4z"/></svg>
                    <p class="text-xl italic text-white/90 leading-relaxed mb-6 font-medium">&ldquo;She styled my hair for the Elton John AIDS Foundation after-party and I couldn't have been happier. Such a calm, lovely presence to have around while getting ready.&rdquo;</p>
                    <footer class="text-primary font-bold uppercase tracking-widest text-sm">— Arianna S. &nbsp; <span class="text-yellow-400">★★★★★</span></footer>
                </div>
                <div class="order-1 md:order-2">
                    <h2 class="text-3xl md:text-4xl font-black uppercase tracking-tight mb-6 leading-tight">Red Carpet Ready — <br/>Wherever the Venue Is.</h2>
                    <p class="text-white/70 mb-5 leading-relaxed">Jane's 15+ years in film, television, and editorial work means she understands one thing most event artists don't: how a look has to perform under stage lighting, flash photography, and HD cameras simultaneously. She doesn't just make you look beautiful in a mirror — she makes you photograph beautifully from every angle.</p>
                    <p class="text-white/70 leading-relaxed">She arrives at your hotel, home, or venue fully equipped with professional lighting, her full kit, and a calm, unhurried presence that keeps your getting-ready time feeling luxurious rather than rushed. Whether you want a sleek, polished updo or bold, smoky glam, Jane consults and customizes until the look is exactly right for your event and your face.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- EVENTS WE COVER -->
    <section class="px-6 py-24 relative border-t border-solid border-white/10" style="background: linear-gradient(180deg, rgba(201,168,76,0.03) 0%, transparent 100%);">
        <div class="container max-w-6xl mx-auto">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-5xl font-black uppercase tracking-tighter">Events We Specialize In</h2>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="p-5 sm:p-6 md:p-8 rounded-2xl border-solid border border-white/10" style="background: rgba(255,255,255,0.02);">
                    <h3 class="text-xl font-bold mb-3 text-primary">Galas & Black-Tie Events</h3>
                    <p class="text-white/60 text-sm leading-relaxed">Polished, editorial makeup and hair built for ballroom lighting, press photographers, and a full evening of looking your best.</p>
                </div>
                <div class="p-5 sm:p-6 md:p-8 rounded-2xl border-solid border border-white/10" style="background: rgba(255,255,255,0.02);">
                    <h3 class="text-xl font-bold mb-3 text-primary">Red Carpet & Award Ceremonies</h3>
                    <p class="text-white/60 text-sm leading-relaxed">HD-ready makeup with precise contouring and a hair style that reads from every angle — on a camera lens and in person.</p>
                </div>
                <div class="p-5 sm:p-6 md:p-8 rounded-2xl border-solid border border-white/10" style="background: rgba(255,255,255,0.02);">
                    <h3 class="text-xl font-bold mb-3 text-primary">Prom & Homecoming</h3>
                    <p class="text-white/60 text-sm leading-relaxed">A full glam experience at home before the big night. Jane coordinates timing so you arrive camera-ready without any rushing.</p>
                </div>
                <div class="p-5 sm:p-6 md:p-8 rounded-2xl border-solid border border-white/10" style="background: rgba(255,255,255,0.02);">
                    <h3 class="text-xl font-bold mb-3 text-primary">Quinceañeras & Debutante</h3>
                    <p class="text-white/60 text-sm leading-relaxed">Classic, romantic, and luminous looks for one of the most photographed days of your life — delivered with care and precision.</p>
                </div>
                <div class="p-5 sm:p-6 md:p-8 rounded-2xl border-solid border border-white/10" style="background: rgba(255,255,255,0.02);">
                    <h3 class="text-xl font-bold mb-3 text-primary">Birthday Glam</h3>
                    <p class="text-white/60 text-sm leading-relaxed">Whether it's an intimate dinner or a full celebration, Jane creates a bold, unforgettable look that captures every moment beautifully.</p>
                </div>
                <div class="p-5 sm:p-6 md:p-8 rounded-2xl border-solid border border-white/10" style="background: rgba(255,255,255,0.02);">
                    <h3 class="text-xl font-bold mb-3 text-primary">Corporate & Award Events</h3>
                    <p class="text-white/60 text-sm leading-relaxed">Polished, professional makeup for keynotes, panels, corporate headshots, and award presentations — confident without being overdone.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- HAIR STYLING -->
    <section class="px-6 py-24 relative">
        <div class="container max-w-6xl mx-auto">
            <div class="text-center mb-16 max-w-3xl mx-auto">
                <h2 class="text-3xl md:text-5xl font-black uppercase tracking-tighter mb-4">Hair Styling for Every Event</h2>
                <p class="text-white/70">Beyond makeup, Jane brings full hair finishing to every event booking. Her editorial background means every updo, wave pattern, and blowout is structured to last all night and read beautifully in photos — not just look good in the dressing room mirror.</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="p-5 sm:p-6 md:p-8 rounded-2xl border-solid border border-white/10" style="background: rgba(255,255,255,0.02);">
                    <h3 class="text-xl font-bold mb-3 text-primary">Classic & Braided Updos</h3>
                    <p class="text-white/60 text-sm leading-relaxed">Chignons, French twists, braided updos, and romantic loose pinned styles anchored to last the full event.</p>
                </div>
                <div class="p-5 sm:p-6 md:p-8 rounded-2xl border-solid border border-white/10" style="background: rgba(255,255,255,0.02);">
                    <h3 class="text-xl font-bold mb-3 text-primary">Waves & Curls</h3>
                    <p class="text-white/60 text-sm leading-relaxed">Vintage Hollywood waves, loose beach waves, defined spiral curls — styled with the heat tools and products that hold under venue conditions.</p>
                </div>
                <div class="p-5 sm:p-6 md:p-8 rounded-2xl border-solid border border-white/10" style="background: rgba(255,255,255,0.02);">
                    <h3 class="text-xl font-bold mb-3 text-primary">Sleek Blowouts & Finishes</h3>
                    <p class="text-white/60 text-sm leading-relaxed">Straight and sleek, volumizing, or bouncy curl blowouts — the polished finishing touch for any event look.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- AREAS / OTHER SERVICES -->
    <section class="px-6 py-20 border-solid border-t border-white/10" style="background: rgba(255,255,255,0.01);">
        <div class="container max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-12">
            <div>
                <h2 class="text-2xl font-bold mb-6">Event Makeup & Hair Available In</h2>
                <ul class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                    <?php foreach ($areas as $a): ?>
                    <li><a href="/area-served/<?php echo $a['slug']; ?>.php" class="text-white/60 hover:text-primary transition-colors text-sm">Event Artist in <?php echo $a['name']; ?></a></li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <div>
                <h2 class="text-2xl font-bold mb-6">Also Consider</h2>
                <ul class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                    <?php foreach ($services as $s): ?>
                    <?php if ($s['slug'] !== 'special-event-makeup-hair'): ?>
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
            <h2 class="text-[8.5vw] md:text-5xl font-black uppercase tracking-tighter mb-6">Book Your Event Glam</h2>
            <p class="text-lg text-white/70 mb-10 leading-relaxed">Tell Jane the event, the date, and your vision. She'll handle the rest — makeup, hair, and timing — so you arrive looking exactly the way you imagined.</p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="/contact.php" class="px-8 py-4 bg-primary text-background-dark font-black text-sm uppercase tracking-widest rounded-full hover:bg-primary-hover transition-colors shadow-lg" style="box-shadow: 0 0 30px rgba(201,168,76,0.35);">Book Your Event Look</a>
                <a href="tel:<?php echo phoneRaw(); ?>" class="px-8 py-4 bg-transparent border-solid border border-white/20 text-white font-black text-sm uppercase tracking-widest rounded-full hover:bg-white/5 hover:border-white/40 transition-colors"><?php echo SITE_PHONE; ?></a>
            </div>
        </div>
    </section>

</main>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
