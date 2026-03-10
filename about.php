<?php
/**
 * Jane Makeup & Hair — About Page
 */
define('allowed', true);
$pageTitle       = 'About Jane | Mobile Makeup Artist & Hairstylist — Los Angeles';
$pageDescription = 'Meet Evgeniia (Jane) Golyzhenkova — a licensed hairstylist and professional makeup artist with 15+ years of TV production experience. Serving West Hollywood, Beverly Hills, and greater Los Angeles.';
require_once __DIR__ . '/includes/header.php';
?>

<main class="bg-background-dark text-white pt-24 pb-12 font-display">

    <!-- HERO -->
    <section class="relative px-6 py-24 md:py-32 overflow-hidden border-solid border-b border-white/10">
        <div class="absolute inset-0 z-0">
            <img class="w-full h-full min-w-full min-h-full max-w-none object-cover object-top opacity-20 filter grayscale" alt="Jane, professional mobile makeup artist and hairstylist based in Los Angeles" src="https://res.cloudinary.com/jane-makeup-hair/image/upload/w_2000,h_1333,c_fill,g_face,q_80,fl_keep_iptc/v1772504430/jane-makeup-hair-west-hollywood-about-us_wp0eip.jpg" />
            <div class="absolute inset-0 bg-gradient-to-t from-background-dark via-background-dark/80 to-transparent"></div>
        </div>
        <div class="container relative z-10 max-w-4xl mx-auto text-center">
            <p class="text-xs font-bold uppercase tracking-[0.45em] text-primary mb-4">Behind The Artistry</p>
            <h1 class="text-[8vw] md:text-6xl font-black uppercase tracking-tighter mb-6 leading-none">About Jane</h1>
            <p class="text-lg md:text-xl text-white/80 max-w-2xl mx-auto leading-relaxed">Licensed hairstylist. Professional makeup artist. 15+ years in TV productions.</p>
        </div>
    </section>

    <!-- BIO -->
    <section class="px-6 py-24 relative">
        <div class="container max-w-4xl mx-auto">
            <div class="relative rounded-2xl border-solid border border-white/10 p-8 md:p-12 mb-16" style="background: rgba(255,255,255,0.02);">
                <h2 class="text-3xl md:text-4xl font-black uppercase tracking-tight mb-8">The Artist Behind the Work</h2>
                
                <div class="space-y-6 text-white/70 leading-relaxed">
                    <p class="text-white/90 font-medium text-lg">Jane — professionally known as Evgeniia Golyzhenkova — has been transforming how people look and feel for over 15 years.</p>
                    <p>Her career began in TV and film production, where she learned one thing that now defines every booking: the camera doesn't lie, and neither does a flawless foundation.</p>
                    <p>Established in 2006, Jane's practice has grown entirely on referral and repeat clients — brides who come back for anniversaries, actors who call before every shoot, and everyday clients who simply refuse to sit in a salon when Jane can come to them.</p>
                    <p>She specializes in soft glam and natural looks that feel elevated but never theatrical. The signature result: clients who look like the best version of themselves and can't stop getting compliments.</p>
                </div>
            </div>

            <h3 class="text-2xl font-bold mb-8 text-center text-primary">By the Numbers</h3>
            <div class="grid grid-cols-2 md:grid-cols-3 gap-6 text-center">
                <div class="p-6 rounded-2xl border-solid border border-white/5 bg-white/5">
                    <div class="text-3xl font-black text-white mb-2">15+</div>
                    <div class="text-sm font-bold uppercase tracking-widest text-primary">Years Experience</div>
                    <div class="text-xs text-white/60 mt-1">TV & Film Production</div>
                </div>
                <div class="p-6 rounded-2xl border-solid border border-white/5 bg-white/5">
                    <div class="text-3xl font-black text-white mb-2">2006</div>
                    <div class="text-sm font-bold uppercase tracking-widest text-primary">Established</div>
                    <div class="text-xs text-white/60 mt-1">19 Years in Business</div>
                </div>
                <div class="p-6 rounded-2xl border-solid border border-white/5 bg-white/5">
                    <div class="text-3xl font-black text-white mb-2">4.9</div>
                    <div class="text-sm font-bold uppercase tracking-widest text-primary">Yelp Rating</div>
                    <div class="text-xs text-white/60 mt-1">49 Verified Reviews</div>
                </div>
                <div class="p-6 rounded-2xl border-solid border border-white/5 bg-white/5">
                    <div class="text-3xl font-black text-white mb-2">5.0</div>
                    <div class="text-sm font-bold uppercase tracking-widest text-primary">Google Rating</div>
                    <div class="text-xs text-white/60 mt-1">Exceptional Service</div>
                </div>
                <div class="p-6 rounded-2xl border-solid border border-white/5 bg-white/5">
                    <div class="text-3xl font-black text-white mb-2">230+</div>
                    <div class="text-sm font-bold uppercase tracking-widest text-primary">Portfolio Photos</div>
                    <div class="text-xs text-white/60 mt-1">Real Client Results</div>
                </div>
                <div class="p-6 rounded-2xl border-solid border border-white/5 bg-white/5">
                    <div class="text-3xl font-black text-white mb-2">100%</div>
                    <div class="text-sm font-bold uppercase tracking-widest text-primary">Mobile Service</div>
                    <div class="text-xs text-white/60 mt-1">She Comes To You</div>
                </div>
            </div>
        </div>
    </section>

    <!-- SERVICES CROSS-LINK -->
    <section class="px-6 py-20 border-solid border-t border-white/10" style="background: rgba(255,255,255,0.01);">
        <div class="container max-w-6xl mx-auto">
            <h2 class="text-2xl font-bold mb-8 text-center text-primary">Explore Jane's Services</h2>
            <ul class="list-none p-0 m-0 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                <?php foreach ($services as $s): ?>
                <li>
                    <a href="/services/<?php echo $s['slug']; ?>" class="flex items-center gap-3 p-4 rounded-xl border-solid border border-white/5 bg-white/5 hover:bg-white/10 hover:border-white/20 transition-all font-medium">
                        <span class="material-symbols-outlined text-primary text-xl"><?php echo $s['icon']; ?></span>
                        <span class="text-sm"><?php echo $s['name']; ?></span>
                    </a>
                </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </section>

    <!-- CTA -->
    <section class="px-6 py-32 relative text-center">
        <div class="container max-w-3xl mx-auto relative z-10">
            <h2 class="text-[7.5vw] md:text-5xl font-black uppercase tracking-tighter mb-6">Ready to Book?</h2>
            <p class="text-lg text-white/70 mb-10 leading-relaxed">Jane responds to all inquiries within 24 hours.</p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="/contact.php" class="px-8 py-4 bg-primary text-background-dark font-black text-sm uppercase tracking-widest rounded-full hover:bg-primary-hover transition-colors shadow-lg" style="box-shadow: 0 0 30px rgba(201,168,76,0.35);">Book Your Session</a>
            </div>
        </div>
    </section>

</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
