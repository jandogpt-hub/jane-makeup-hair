<?php
/**
 * Jane Makeup & Hair — Homepage
 * Modular entry point: includes header.php and footer.php partials.
 * Contains the Hero, Services, Gallery, and Location sections.
 */
define('allowed', true);

// ── Newsletter Form Handler ──────────────────────────────────────────
$newsletter_msg = '';
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['email'])) {
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $newsletter_msg = "Thanks for joining the Glow List!";
    } else {
        $newsletter_msg = "Please enter a valid email.";
    }
}

// ── Page Meta ────────────────────────────────────────────────────────
$pageTitle       = 'JANE | West Hollywood Editorial Beauty';
$pageDescription = 'Elite makeup and hair artistry for the red carpet and beyond. West Hollywood, CA.';

// ── Include Header (loads config.php which defines $services & $areas for nav) ──
require_once __DIR__ . '/includes/header.php';

// ── Data: Homepage Signature Services (separate from config nav $services) ──
$homepage_services = [
    [
        'type'  => 'image',
        'title' => 'Mobile Bridal Makeup & Hair',
        'desc'  => 'Jane comes to your venue. Camera-ready bridal glam delivered on location.',
        'image' => 'https://res.cloudinary.com/jane-makeup-hair/image/upload/w_800,h_1000,c_fill,g_face,q_80,fl_keep_iptc/v1772166783/jane-mobile-makeup-hair-west-hollywood-002_zfmiqy.jpg',
        'alt'   => 'Jane applying professional mobile bridal makeup on location in West Hollywood'
    ],
    [
        'type'  => 'image',
        'title' => 'Special Event Makeup & Hair',
        'desc'  => 'Sculpted waves, sleek finishes, updos, and flawless occasion makeup.',
        'image' => 'https://res.cloudinary.com/jane-makeup-hair/image/upload/w_800,h_1000,c_fill,g_face,q_80,fl_keep_iptc/v1772245395/jane-mobile-makeup-hair-west-hollywood-special-event_anxo6m.jpg',
        'alt'   => 'Jane applying professional special event makeup and hair on location in West Hollywood'
    ],
    [
        'type'  => 'image',
        'title' => 'Film, TV &amp; Production Makeup',
        'desc'  => 'High-definition, camera-ready styling specially designed for sets and productions.',
        'image' => 'https://res.cloudinary.com/jane-makeup-hair/image/upload/w_800,h_1000,c_fill,g_face,q_80,fl_keep_iptc/v1772246460/jane-mobile-makeup-hair-west-hollywood-004_pqyhxg.jpg',
        'alt'   => 'Jane providing professional film and TV production makeup on set in West Hollywood'
    ],
    [
        'type'  => 'image',
        'title' => 'Photoshoot &amp; Editorial Makeup',
        'desc'  => 'Creative, striking, and flawless artistry tailored for professional photography.',
        'image' => 'https://res.cloudinary.com/jane-makeup-hair/image/upload/w_800,h_1000,c_fill,g_face,q_80,fl_keep_iptc/v1772246944/jane-mobile-makeup-hair-west-hollywood-photoshoot-editorial_n06p1c.jpg',
        'alt'   => 'Jane providing professional photoshoot and editorial makeup in West Hollywood'
    ],
    [
        'type'  => 'image',
        'title' => 'Airbrush Makeup',
        'desc'  => 'Achieve a natural, weightless, and long-lasting finish built to handle any lighting.',
        'image' => 'https://res.cloudinary.com/jane-makeup-hair/image/upload/w_800,h_1000,c_fill,g_face,q_80,fl_keep_iptc/v1772247623/jane-mobile-makeup-hair-west-hollywood-006_zdclb6.jpg',
        'alt'   => 'Jane applying flawless airbrush makeup on a client in West Hollywood'
    ],
    [
        'type'  => 'image',
        'title' => 'Special Effects &amp; Halloween',
        'desc'  => 'Bespoke prosthetic application, injury simulation, and high-impact character transformations.',
        'image' => 'https://res.cloudinary.com/jane-makeup-hair/image/upload/w_800,h_1000,c_fill,g_face,q_80,fl_keep_iptc/v1772248740/jane-mobile-makeup-hair-west-hollywood-specialfx_wvhcz7.jpg',
        'alt'   => 'Jane applying special effects and halloween character makeup in West Hollywood'
    ]
];

// ── Data: Gallery Images ─────────────────────────────────────────────
// Temporarily using signature service images until more are added
$gallery_images = array_map(function($service) {
    return [
        'src' => $service['image'],
        'alt' => $service['alt']
    ];
}, array_filter($homepage_services, function($s) { return $s['type'] === 'image'; }));
?>

    <!-- ===== HERO SECTION ===== -->
    <section class="relative h-screen w-full flex items-center justify-center overflow-hidden">
        <div class="absolute inset-0 z-0">
            <div class="absolute inset-0 bg-gradient-to-b from-transparent via-background-dark/20 to-background-dark z-10"></div>
            <img class="w-full h-full object-cover object-top scale-110 filter grayscale brightness-75"
                 alt="Jane — West Hollywood mobile makeup and hair artist"
                 src="https://res.cloudinary.com/jane-makeup-hair/image/upload/w_2400,h_1600,c_fill,g_face,q_80,fl_keep_iptc/v1772164687/janes-makeup-hair-headshot_m3azif.jpg"
                 width="2400"
                 height="1600"
                 fetchpriority="high"
                 decoding="async"/>
        </div>

        <!-- Semantic triplet: WHO + WHAT + WHERE -->
        <div class="relative z-20 text-center px-4">

            <!-- WHO -->
            <h1 class="font-bold leading-none uppercase tracking-tighter">
                <span class="block text-[12vw] md:text-[16vw]">Jane</span>

                <!-- WHAT -->
                <span class="block text-[5.5vw] md:text-[4.5vw] font-black tracking-tight text-white/90 mt-[-1vw] md:mt-[-1.5vw]">
                    Mobile Bridal Makeup &amp; Hair Artist
                </span>
            </h1>

            <!-- WHERE -->
            <div class="flex items-center justify-center gap-2 mt-4 md:mt-6">
                <span class="material-symbols-outlined text-primary text-base" aria-hidden="true">location_on</span>
                <p class="text-sm md:text-base uppercase tracking-[0.35em] font-semibold text-white/80">
                    West Hollywood, CA
                </p>
            </div>

            <!-- TRUST BADGE — 21st.dev style: staggered stars + count-up (vanilla JS, zero deps) -->
            <div class="mt-8 md:mt-10 flex justify-center">
                <div id="review-card"
                     class="flex flex-col items-center rounded-2xl border border-white/10 px-8 py-6 text-center shadow-2xl shadow-black/60"
                     style="background: rgba(255,255,255,0.05); backdrop-filter: blur(14px); -webkit-backdrop-filter: blur(14px);"
                     aria-label="Rated 4.9 to 5 stars across 52 reviews on Yelp and Google">

                    <!-- Staggered stars -->
                    <div class="flex items-center gap-1.5" role="img" aria-hidden="true">
                        <span class="star-anim" style="--d:0.20s">★</span>
                        <span class="star-anim" style="--d:0.32s">★</span>
                        <span class="star-anim" style="--d:0.44s">★</span>
                        <span class="star-anim" style="--d:0.56s">★</span>
                        <span class="star-anim" style="--d:0.68s">★</span>
                    </div>

                    <!-- Count-up headline -->
                    <h2 class="mt-4 text-4xl font-black tracking-tight text-white leading-none">
                        <span id="avg-rating">0.0</span><span class="text-2xl font-semibold text-white/55"> (<span id="review-count">0</span> Reviews)</span>
                    </h2>

                    <!-- Platform attribution -->
                    <p class="mt-3 text-[11px] text-white/40 uppercase tracking-widest">
                        ★ 4.9 Yelp &nbsp;·&nbsp; ★ 5.0 Google &nbsp;·&nbsp; Los Angeles, CA
                    </p>

                </div>
            </div>

            <script>
            /**
             * Animates a DOM element's text from 0 to target using easeOut cubic curve.
             * Mirrors framer-motion's animate() easeOut behaviour without any library.
             *
             * @param {HTMLElement} el       - Element whose textContent to update
             * @param {number}      target   - Final value to count up to
             * @param {number}      decimals - Decimal places (0 for integers)
             * @param {number}      duration - Total animation duration in ms
             */
            function countUp(el, target, decimals, duration) {
                const start = performance.now();
                /**
                 * requestAnimationFrame step function.
                 * @param {number} now - Current timestamp from rAF
                 */
                function step(now) {
                    const elapsed  = now - start;
                    const progress = Math.min(elapsed / duration, 1);
                    const eased    = 1 - Math.pow(1 - progress, 3); // cubic easeOut
                    const current  = eased * target;
                    el.textContent = decimals > 0
                        ? current.toFixed(decimals)
                        : new Intl.NumberFormat('en-US').format(Math.round(current));
                    if (progress < 1) requestAnimationFrame(step);
                }
                requestAnimationFrame(step);
            }

            /**
             * Triggers count-up animations when the review card scrolls into view.
             * Uses IntersectionObserver so the animation only fires once.
             */
            (function initReviewCountUp() {
                const card = document.getElementById('review-card');
                if (!card) return;

                const observer = new IntersectionObserver(function(entries) {
                    entries.forEach(function(entry) {
                        if (entry.isIntersecting) {
                            countUp(document.getElementById('avg-rating'),   4.9, 1, 1500);
                            countUp(document.getElementById('review-count'), 52,  0, 1500);
                            observer.unobserve(card);
                        }
                    });
                }, { threshold: 0.4 });

                observer.observe(card);
            })();
            </script>


        </div>

        <!-- Bottom-left editorial detail -->
        <div class="absolute bottom-10 left-10 z-20 hidden md:block">
            <div class="flex flex-col gap-4">
                <div class="h-px w-24 bg-primary/50"></div>
                <p class="text-[10px] uppercase tracking-widest opacity-60">Est. 2006 / West Hollywood</p>
            </div>
        </div>
    </section>


    <!-- ===== WHY CHOOSE US ===== -->
    <section id="why-jane" class="relative py-28 px-6 bg-background-dark overflow-hidden">

        <!-- Decorative background grid texture -->
        <div class="absolute inset-0 opacity-[0.03]"
             style="background-image: linear-gradient(rgba(201,168,76,0.8) 1px, transparent 1px), linear-gradient(90deg, rgba(201,168,76,0.8) 1px, transparent 1px); background-size: 60px 60px;"
             aria-hidden="true"></div>

        <!-- Top hairline -->
        <div class="absolute top-0 left-0 right-0 h-px bg-gradient-to-r from-transparent via-primary/30 to-transparent" aria-hidden="true"></div>

        <!-- Section header -->
        <header class="relative z-10 text-center mb-20">
            <p class="text-xs font-bold uppercase tracking-[0.45em] text-primary mb-4">West Hollywood's Choice</p>
            <h2 class="text-4xl md:text-6xl font-black uppercase tracking-tighter leading-none mb-6">
                Why Choose<br>
                <span class="text-primary">Jane Makeup &amp; Hair</span>
            </h2>
            <p class="max-w-xl mx-auto text-white/55 text-base leading-relaxed">
                Preferred by brides and special event clients who need artistry that photographs beautifully
                and withstands hours of celebration.
            </p>
        </header>

        <!-- Feature cards grid -->
        <div class="relative z-10 max-w-6xl mx-auto grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5">

            <?php
            /**
             * Why Choose Us feature card data.
             * Each card has: icon (Material Symbol name), title, tagline, and body copy.
             *
             * @var array[] $why_cards
             */
            $why_cards = [
                [
                    'icon'    => 'favorite',
                    'title'   => 'Bridal Expertise',
                    'tagline' => 'Your look lasts from vows to last dance',
                    'body'    => 'Your wedding day look stays perfect through tears, hugs, and every moment of dancing.',
                ],
                [
                    'icon'    => 'directions_car',
                    'title'   => 'On-Location Service',
                    'tagline' => 'We come to you — venue, hotel, or home',
                    'body'    => 'Stay relaxed and on schedule. Jane arrives wherever you are, fully set up and ready.',
                ],
                [
                    'icon'    => 'auto_fix_high',
                    'title'   => 'Airbrush Specialization',
                    'tagline' => 'Natural in person. Flawless in photos.',
                    'body'    => 'High-definition airbrush makeup built for cameras and the moments that matter most.',
                ],
                [
                    'icon'    => 'event_available',
                    'title'   => 'Trial Sessions Included',
                    'tagline' => 'Test your complete look — no surprises',
                    'body'    => 'Walk into your event with full confidence. Every detail refined, every concern answered.',
                ],
                [
                    'icon'    => 'groups',
                    'title'   => 'Group Coordination',
                    'tagline' => 'Your whole bridal party, handled',
                    'body'    => 'Precision timing for your entire party so no one is waiting and everyone looks stunning.',
                ],
            ];
            ?>

            <?php foreach ($why_cards as $idx => $card): ?>
                <!--
                    Card <?= $idx + 1 ?>: <?= htmlspecialchars($card['title']) ?>
                    Animates in with staggered delay via inline CSS custom property.
                -->
                <article
                    class="why-card group relative rounded-2xl p-8 flex flex-col gap-5 border border-white/8 overflow-hidden cursor-default"
                    style="
                        background: rgba(255,255,255,0.03);
                        backdrop-filter: blur(12px);
                        -webkit-backdrop-filter: blur(12px);
                        --stagger: <?= $idx * 80 ?>ms;
                    "
                    aria-label="<?= htmlspecialchars($card['title']) ?>: <?= htmlspecialchars($card['tagline']) ?>"
                >
                    <!-- Gold hover glow (hidden, revealed on hover) -->
                    <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity duration-500 pointer-events-none rounded-2xl"
                         style="background: radial-gradient(circle at 30% 40%, rgba(201,168,76,0.10) 0%, transparent 70%);"
                         aria-hidden="true"></div>

                    <!-- Gold accent bar -->
                    <div class="h-px w-10 bg-primary/60 group-hover:w-full transition-all duration-500 ease-out" aria-hidden="true"></div>

                    <!-- Icon -->
                    <div class="w-12 h-12 rounded-xl flex items-center justify-center border border-primary/25 bg-primary/10 group-hover:bg-primary/20 transition-colors duration-300"
                         aria-hidden="true">
                        <span class="material-symbols-outlined text-primary text-2xl"><?= $card['icon'] ?></span>
                    </div>

                    <!-- Text -->
                    <div class="flex flex-col gap-2">
                        <h3 class="text-lg font-black uppercase tracking-tight text-white"><?= htmlspecialchars($card['title']) ?></h3>
                        <p class="text-xs font-bold uppercase tracking-widest text-primary/80"><?= htmlspecialchars($card['tagline']) ?></p>
                        <p class="text-sm text-white/55 leading-relaxed mt-1"><?= htmlspecialchars($card['body']) ?></p>
                    </div>
                </article>
            <?php endforeach; ?>

            <!-- CTA card — spans full width on the last row -->
            <article
                class="group relative rounded-2xl p-8 flex flex-col sm:flex-row items-center justify-between gap-6 border border-primary/30 overflow-hidden sm:col-span-2 lg:col-span-3 mt-6 md:mt-12"
                style="background: linear-gradient(135deg, rgba(201,168,76,0.12) 0%, rgba(201,168,76,0.04) 100%);"
                aria-label="Book your bridal makeup and hair trial session"
            >
                <div class="flex flex-col gap-1 text-center sm:text-left">
                    <p class="text-xs font-bold uppercase tracking-[0.4em] text-primary">Mobile Bridal Makeup &amp; Hair Solutions</p>
                    <p class="text-2xl md:text-3xl font-black uppercase tracking-tight text-white">Ready to see your look?</p>
                </div>
                <a href="tel:3233100966"
                   id="why-jane-book-cta"
                   class="flex-shrink-0 px-8 py-4 rounded-full bg-primary text-background-dark font-black text-sm uppercase tracking-widest hover:bg-primary-hover transition-colors duration-300 shadow-lg"
                   style="box-shadow: 0 0 30px rgba(201,168,76,0.35);"
                   aria-label="Call Jane to book your bridal trial — 323-310-0966">
                    Book a Trial — 323-310-0966
                </a>
            </article>

        </div>

        <!-- Bottom hairline -->
        <div class="absolute bottom-0 left-0 right-0 h-px bg-gradient-to-r from-transparent via-white/10 to-transparent" aria-hidden="true"></div>
    </section>

    <!-- Scroll-in animation for why-cards -->
    <style>
        .why-card {
            opacity: 0;
            transform: translateY(24px);
            transition: opacity 0.6s ease var(--stagger), transform 0.6s ease var(--stagger);
        }
        .why-card.why-card--visible {
            opacity: 1;
            transform: translateY(0);
        }
    </style>
    <script>
        /**
         * Observes each .why-card element and adds the .why-card--visible
         * class when it enters the viewport, triggering the CSS entry animation.
         * Uses IntersectionObserver with a staggered delay via CSS custom property.
         */
        (function initWhyCards() {
            const cards = document.querySelectorAll('.why-card');
            if (!cards.length) return;

            const observer = new IntersectionObserver(function (entries) {
                entries.forEach(function (entry) {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('why-card--visible');
                        observer.unobserve(entry.target);
                    }
                });
            }, { threshold: 0.15 });

            cards.forEach(function (card) { observer.observe(card); });
        })();
    </script>


    <!-- ===== SERVICES GRID ===== -->
    <section class="px-6 py-20 bg-background-dark relative">
        <div class="flex items-end justify-between mb-12">
            <div>
                <h3 class="text-xs font-bold text-primary uppercase tracking-widest mb-2">Our Artistry</h3>
                <h2 class="text-3xl font-bold tracking-tight">Signature Services</h2>
            </div>
            <a class="text-primary text-sm font-bold border-b border-primary pb-1" href="#">See All</a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <?php foreach ($homepage_services as $service): ?>
                <?php if ($service['type'] === 'image'): ?>
                    <div class="group relative aspect-[4/5] overflow-hidden rounded-xl glass border-white/5">
                        <img class="absolute inset-0 w-full h-full object-cover opacity-50 group-hover:scale-110 transition-transform duration-700" alt="<?= htmlspecialchars($service['alt']) ?>" src="<?= $service['image'] ?>"/>
                        <div class="absolute inset-0 bg-gradient-to-t from-background-dark via-transparent to-transparent"></div>
                        <div class="absolute bottom-6 left-6 right-6">
                            <h4 class="text-xl font-bold mb-1"><?= $service['title'] ?></h4>
                            <p class="text-white/60 text-sm mb-4"><?= $service['desc'] ?></p>
                            <div class="h-10 w-10 rounded-full bg-white/10 flex items-center justify-center group-hover:bg-primary transition-colors">
                                <span class="material-symbols-outlined text-sm">add</span>
                            </div>
                        </div>
                    </div>
                <?php else: ?>
                    <div class="group relative aspect-[4/5] overflow-hidden rounded-xl bg-primary/10 border border-primary/20">
                        <div class="absolute inset-0 opacity-20 bg-[radial-gradient(circle_at_center,_var(--tw-gradient-stops))] from-primary via-transparent to-transparent"></div>
                        <div class="absolute inset-0 flex flex-col items-center justify-center p-8 text-center">
                            <span class="material-symbols-outlined text-primary text-5xl mb-4"><?= $service['icon'] ?></span>
                            <h4 class="text-2xl font-bold mb-2"><?= $service['title'] ?></h4>
                            <p class="text-white/70 text-sm mb-6 leading-relaxed"><?= $service['desc'] ?></p>
                            <button class="bg-primary text-white px-6 py-3 rounded-lg font-bold text-sm tracking-wide"><?= $service['button'] ?></button>
                        </div>
                    </div>
                <?php endif; ?>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- ===== AS SEEN IN ===== -->
    <section class="relative py-14 bg-background-dark overflow-hidden">
        <!-- top & bottom hairlines -->
        <div class="absolute top-0 left-0 right-0 h-px bg-gradient-to-r from-transparent via-white/10 to-transparent"></div>
        <div class="absolute bottom-0 left-0 right-0 h-px bg-gradient-to-r from-transparent via-white/10 to-transparent"></div>

        <!-- label -->
        <p class="text-center text-[10px] font-bold uppercase tracking-[0.4em] text-white/30 mb-8">As Seen In Production</p>

        <!-- marquee track -->
        <div class="relative">
            <!-- left fade -->
            <div class="absolute left-0 top-0 bottom-0 w-32 z-10 bg-gradient-to-r from-background-dark to-transparent pointer-events-none"></div>
            <!-- right fade -->
            <div class="absolute right-0 top-0 bottom-0 w-32 z-10 bg-gradient-to-l from-background-dark to-transparent pointer-events-none"></div>

            <div class="flex overflow-hidden">
                <!-- Two identical sets so the loop is seamless -->
                <div class="flex items-center gap-20 animate-[marquee_28s_linear_infinite] whitespace-nowrap pr-20 flex-shrink-0">
                    <span class="text-2xl md:text-3xl font-black uppercase tracking-tighter text-white/20 hover:text-white/50 transition-colors duration-500 cursor-default select-none">Vogue</span>
                    <span class="text-white/10 text-lg select-none">✦</span>
                    <span class="text-2xl md:text-3xl font-black uppercase tracking-tighter text-white/20 hover:text-white/50 transition-colors duration-500 cursor-default select-none">Netflix</span>
                    <span class="text-white/10 text-lg select-none">✦</span>
                    <span class="text-2xl md:text-3xl font-black uppercase tracking-tighter text-white/20 hover:text-white/50 transition-colors duration-500 cursor-default select-none">HBO</span>
                    <span class="text-white/10 text-lg select-none">✦</span>
                    <span class="text-2xl md:text-3xl font-black uppercase tracking-tighter text-white/20 hover:text-white/50 transition-colors duration-500 cursor-default select-none">Vanity Fair</span>
                    <span class="text-white/10 text-lg select-none">✦</span>
                    <span class="text-2xl md:text-3xl font-black uppercase tracking-tighter text-white/20 hover:text-white/50 transition-colors duration-500 cursor-default select-none">Warner Bros.</span>
                    <span class="text-white/10 text-lg select-none">✦</span>
                    <span class="text-2xl md:text-3xl font-black uppercase tracking-tighter text-white/20 hover:text-white/50 transition-colors duration-500 cursor-default select-none">Allure</span>
                    <span class="text-white/10 text-lg select-none">✦</span>
                    <span class="text-2xl md:text-3xl font-black uppercase tracking-tighter text-white/20 hover:text-white/50 transition-colors duration-500 cursor-default select-none">ABC Studios</span>
                    <span class="text-white/10 text-lg select-none">✦</span>
                </div>
                <!-- duplicate for seamless loop -->
                <div class="flex items-center gap-20 animate-[marquee_28s_linear_infinite] whitespace-nowrap pr-20 flex-shrink-0" aria-hidden="true">
                    <span class="text-2xl md:text-3xl font-black uppercase tracking-tighter text-white/20 hover:text-white/50 transition-colors duration-500 cursor-default select-none">Vogue</span>
                    <span class="text-white/10 text-lg select-none">✦</span>
                    <span class="text-2xl md:text-3xl font-black uppercase tracking-tighter text-white/20 hover:text-white/50 transition-colors duration-500 cursor-default select-none">Netflix</span>
                    <span class="text-white/10 text-lg select-none">✦</span>
                    <span class="text-2xl md:text-3xl font-black uppercase tracking-tighter text-white/20 hover:text-white/50 transition-colors duration-500 cursor-default select-none">HBO</span>
                    <span class="text-white/10 text-lg select-none">✦</span>
                    <span class="text-2xl md:text-3xl font-black uppercase tracking-tighter text-white/20 hover:text-white/50 transition-colors duration-500 cursor-default select-none">Vanity Fair</span>
                    <span class="text-white/10 text-lg select-none">✦</span>
                    <span class="text-2xl md:text-3xl font-black uppercase tracking-tighter text-white/20 hover:text-white/50 transition-colors duration-500 cursor-default select-none">Warner Bros.</span>
                    <span class="text-white/10 text-lg select-none">✦</span>
                    <span class="text-2xl md:text-3xl font-black uppercase tracking-tighter text-white/20 hover:text-white/50 transition-colors duration-500 cursor-default select-none">Allure</span>
                    <span class="text-white/10 text-lg select-none">✦</span>
                    <span class="text-2xl md:text-3xl font-black uppercase tracking-tighter text-white/20 hover:text-white/50 transition-colors duration-500 cursor-default select-none">ABC Studios</span>
                    <span class="text-white/10 text-lg select-none">✦</span>
                </div>
            </div>
        </div>

        <!-- ── Production Reel Video ─────────────────────────────────────── -->
        <div class="relative z-10 max-w-6xl mx-auto mt-14 px-6">

            <!-- Section micro-label -->
            <p class="text-center text-[10px] font-bold uppercase tracking-[0.4em] text-white/25 mb-8">
                Featured Production Reel
            </p>

            <!-- ── DESKTOP: 16:9 Landscape embed (hidden on mobile) ──────── -->
            <div id="reel-desktop"
                 class="hidden md:block relative w-full rounded-2xl overflow-hidden border border-white/8 reel-fade"
                 style="aspect-ratio:16/9; box-shadow: 0 0 60px rgba(201,168,76,0.12), 0 20px 60px rgba(0,0,0,0.6);">

                <!-- Gold top-edge glow -->
                <div class="absolute top-0 left-0 right-0 h-px bg-gradient-to-r from-transparent via-primary/60 to-transparent z-10" aria-hidden="true"></div>

                <!-- Source: https://www.youtube.com/watch?v=AUgiE8XKthw -->
                <iframe
                    id="yt-reel-desktop"
                    class="absolute inset-0 w-full h-full"
                    src="https://www.youtube-nocookie.com/embed/AUgiE8XKthw?rel=0&modestbranding=1&color=white&iv_load_policy=3&playsinline=1"
                    title="Jane Makeup &amp; Hair — Featured Production Reel"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen
                    loading="lazy"
                    frameborder="0">
                </iframe>
            </div>

            <!-- ── MOBILE: 9:16 Portrait / TikTok-Short style (visible only on mobile) ── -->
            <div id="reel-mobile"
                 class="block md:hidden relative mx-auto reel-fade"
                 style="width: min(340px, 90vw);">

                <!-- Portrait frame wrapper -->
                <div class="relative rounded-[28px] overflow-hidden border border-white/10"
                     style="aspect-ratio:9/16;
                            box-shadow: 0 0 50px rgba(201,168,76,0.14), 0 20px 60px rgba(0,0,0,0.7);">

                    <!-- Gold ring accent (top + bottom) -->
                    <div class="absolute top-0 left-0 right-0 h-px bg-gradient-to-r from-transparent via-primary/60 to-transparent z-10" aria-hidden="true"></div>
                    <div class="absolute bottom-0 left-0 right-0 h-px bg-gradient-to-r from-transparent via-primary/40 to-transparent z-10" aria-hidden="true"></div>

                    <!--
                        Source: https://www.youtube.com/shorts/AUgiE8XKthw?feature=share
                        YouTube converts /shorts/ID to /embed/ID — signals Short-format to the player.
                        The iframe is oversized and center-cropped via translate to fill the 9:16 frame.
                    -->
                    <iframe
                        id="yt-reel-mobile"
                        class="absolute"
                        src="https://www.youtube-nocookie.com/embed/AUgiE8XKthw?rel=0&modestbranding=1&color=white&iv_load_policy=3&playsinline=1"
                        title="Jane Makeup &amp; Hair — Production Reel Short (mobile)"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen
                        loading="lazy"
                        frameborder="0"
                        style="
                            /* Oversized 16:9 iframe, center-cropped to 9:16 portrait frame */
                            width: calc(9 / 16 * 177.78%);
                            height: 177.78%;
                            top: 50%;
                            left: 50%;
                            transform: translate(-50%, -50%);
                        ">
                    </iframe>

                    <!-- Subtle vignette overlay (edges only) -->
                    <div class="absolute inset-0 pointer-events-none z-10"
                         style="background: radial-gradient(ellipse at center, transparent 55%, rgba(0,0,0,0.55) 100%);"
                         aria-hidden="true"></div>
                </div>

                <!-- "Short" style pill badge -->
                <div class="absolute top-4 right-[-10px] z-20 flex items-center gap-1.5 rounded-full px-3 py-1 text-[9px] font-black uppercase tracking-widest text-background-dark"
                     style="background: linear-gradient(135deg, #C9A84C, #e8c96a);">
                    <span class="material-symbols-outlined text-[12px]">play_circle</span>
                    Production Reel
                </div>
            </div>

        </div><!-- /production reel -->

    </section>

    <!-- Reel fade-in animation -->
    <style>
        .reel-fade {
            opacity: 0;
            transform: translateY(28px);
            transition: opacity 0.7s ease, transform 0.7s ease;
        }
        .reel-fade.reel-fade--visible {
            opacity: 1;
            transform: translateY(0);
        }
    </style>
    <script>
        /**
         * Fades the production reel block into view when it enters the viewport.
         * Uses IntersectionObserver for a single, non-repeating trigger.
         */
        (function initReelFade() {
            var reels = document.querySelectorAll('.reel-fade');
            if (!reels.length) return;

            var observer = new IntersectionObserver(function (entries) {
                entries.forEach(function (entry) {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('reel-fade--visible');
                        observer.unobserve(entry.target);
                    }
                });
            }, { threshold: 0.1 });

            reels.forEach(function (el) { observer.observe(el); });
        })();
    </script>

    <!-- ===== CLIENT REVIEWS ===== -->
    <section id="reviews" class="relative py-24 px-6 bg-background-dark overflow-hidden">

        <!-- Background texture -->
        <div class="absolute inset-0 opacity-[0.025]"
             style="background-image: linear-gradient(rgba(201,168,76,0.8) 1px, transparent 1px), linear-gradient(90deg, rgba(201,168,76,0.8) 1px, transparent 1px); background-size: 60px 60px;"
             aria-hidden="true"></div>

        <!-- Top hairline -->
        <div class="absolute top-0 left-0 right-0 h-px bg-gradient-to-r from-transparent via-primary/30 to-transparent" aria-hidden="true"></div>

        <!-- Section header -->
        <header class="relative z-10 text-center mb-16">
            <p class="text-xs font-bold uppercase tracking-[0.45em] text-primary mb-4">Client Stories</p>
            <h2 class="text-4xl md:text-5xl font-black uppercase tracking-tighter leading-none">
                What Clients<br><span class="text-primary">Are Saying</span>
            </h2>
        </header>

        <!-- Card stack container -->
        <div class="relative z-10 max-w-2xl mx-auto">
            <div id="review-stack"
                 class="relative mx-auto"
                 style="height: 280px; width: 100%; max-width: 560px;"
                 role="region"
                 aria-label="Client testimonials — click a card to see the next review">
                <!-- Cards injected by JS -->
            </div>

            <!-- Instruction hint -->
            <p class="text-center text-[10px] font-bold uppercase tracking-[0.35em] text-white/20 mt-8">
                Click a card to read the next review
            </p>
        </div>

        <!-- Bottom hairline -->
        <div class="absolute bottom-0 left-0 right-0 h-px bg-gradient-to-r from-transparent via-white/10 to-transparent" aria-hidden="true"></div>
    </section>

    <!-- Review card styles -->
    <style>
        /* ── Card base ─────────────────────────────────────── */
        .rv-card {
            position: absolute;
            inset: 0;
            border-radius: 16px;
            border: 1px solid rgba(255,255,255,0.12);
            background: rgba(10, 10, 10, 0.85); /* Darker background for better contrast */
            backdrop-filter: blur(16px);
            -webkit-backdrop-filter: blur(16px);
            padding: 28px;
            display: flex;
            flex-direction: column;
            gap: 16px;
            cursor: pointer;
            user-select: none;
            /* transition covers stack position changes */
            transition: transform 0.4s cubic-bezier(0.34, 1.56, 0.64, 1),
                        opacity 0.4s ease,
                        box-shadow 0.4s ease;
            will-change: transform, opacity;
            transform-origin: bottom center;
            box-shadow: 0 8px 40px rgba(0,0,0,0.8);
        }

        /* front card special styling */
        .rv-card[data-pos="0"] {
            border-color: rgba(201,168,76,0.35);
            box-shadow: 0 0 40px rgba(201,168,76,0.1), 0 16px 50px rgba(0,0,0,0.7);
        }

        /* ── Border beam shimmer on front card ──────────────── */
        .rv-card[data-pos="0"]::after {
            content: '';
            position: absolute;
            inset: -1px;
            border-radius: inherit;
            padding: 1px;
            background: conic-gradient(from var(--beam-angle, 0deg),
                transparent 0%,
                #C9A84C 20%,
                #e8c96a 30%,
                transparent 40%);
            -webkit-mask: linear-gradient(#fff 0 0) content-box,
                          linear-gradient(#fff 0 0);
            -webkit-mask-composite: xor;
            mask-composite: exclude;
            pointer-events: none;
            animation: beam-spin 6s linear infinite;
        }
        @keyframes beam-spin {
            to { --beam-angle: 360deg; }
        }
        @property --beam-angle {
            syntax: '<angle>';
            inherits: false;
            initial-value: 0deg;
        }

        /* ── Star ratings ───────────────────────────────────── */
        .rv-stars { display: flex; gap: 4px; }
        .rv-star  { width: 16px; height: 16px; }
        .rv-star--on  { color: #C9A84C; fill: #C9A84C; }
        .rv-star--off { color: rgba(255,255,255,0.15); fill: rgba(255,255,255,0.15); }

        /* ── Avatar (Directory Logos) ───────────────────────── */
        .rv-avatar {
            width: 36px; height: 36px;
            border-radius: 4px; /* Slight rounding for square logos */
            overflow: hidden;
            flex-shrink: 0;
            display: flex; align-items: center; justify-content: center;
        }
        .rv-avatar img {
            width: 100%; height: 100%;
            object-fit: contain; /* Don't crop the directory logos */
            display: block;
        }

        /* ── Platform badge ─────────────────────────────────── */
        .rv-platform {
            font-size: 9px;
            font-weight: 700;
            letter-spacing: 0.15em;
            text-transform: uppercase;
            padding: 3px 8px;
            border-radius: 100px;
            border: 1px solid rgba(255,255,255,0.15);
            color: rgba(255,255,255,0.65);
        }

        /* ── Click ripple on card ───────────────────────────── */
        .rv-card:active { transform: scale(0.97) !important; }
    </style>

    <script>
    /**
     * Animated review card stack — pure vanilla JS equivalent of the
     * 21st.dev AnimatedReviewCards React component.
     *
     * Features: stacked perspective, click-to-cycle, auto-rotate,
     * border beam shimmer on the front card, scroll-triggered reveal.
     * Zero external dependencies.
     */
    (function initReviewStack() {

        /** @type {Array<{name:string, initials:string, avatar:string, platform:string, rating:number, text:string}>} */
        var REVIEWS = [
            {
                name:     'Cameron K.',
                initials: '',
                avatar:   'https://res.cloudinary.com/jane-makeup-hair/image/upload/v1772253018/yelp_icon_logo_blue_check_mark_jdnhzz.png',
                platform: 'Yelp ★ 5.0',
                rating:   5,
                text:     'Jane came to our hotel the morning of my wedding and everything was absolutely flawless. My entire bridal party looked stunning. Calm, professional, and incredibly talented — she made the whole morning feel effortless.'
            },
            {
                name:     'Sofia R.',
                initials: '',
                avatar:   'https://res.cloudinary.com/jane-makeup-hair/image/upload/v1772253038/google_icon_logo_kfmrzi.png',
                platform: 'Google ★ 5.0',
                rating:   5,
                text:     'My airbrush makeup lasted the entire night — through tears, dancing, and everything in between. Jane is an artist. She listened to exactly what I wanted and delivered beyond my expectations.'
            },
            {
                name:     'Priya M.',
                initials: '',
                avatar:   'https://res.cloudinary.com/jane-makeup-hair/image/upload/v1772253018/yelp_icon_logo_blue_check_mark_jdnhzz.png',
                platform: 'Yelp ★ 5.0',
                rating:   5,
                text:     'I hired Jane for an editorial shoot in Los Angeles and the results spoke for themselves. Every look was precise, photogenic, and held up perfectly under studio lighting. Will absolutely book again.'
            },
            {
                name:     'Alexa T.',
                initials: '',
                avatar:   'https://res.cloudinary.com/jane-makeup-hair/image/upload/v1772253038/google_icon_logo_kfmrzi.png',
                platform: 'Google ★ 5.0',
                rating:   5,
                text:     'Jane did my makeup for a red carpet event and I have never felt more confident in my life. She traveled to my home in Beverly Hills and set up like a true professional. Worth every penny.'
            },
            {
                name:     'Marcus D.',
                initials: '',
                avatar:   'https://res.cloudinary.com/jane-makeup-hair/image/upload/v1772253018/yelp_icon_logo_blue_check_mark_jdnhzz.png',
                platform: 'Yelp ★ 5.0',
                rating:   5,
                text:     'Our entire film production crew is so grateful we found Jane. She handled on-set makeup for a 12-hour shoot without missing a beat. Continuity was perfect. She is a true industry professional.'
            }
        ];

        var AUTO_ROTATE_MS  = 5500;
        var SCALE_STEP      = 0.04;
        var VERTICAL_STEP   = 12;   // px per card level
        var HORIZONTAL_STEP = 16;   // px per card level (desktop)

        var stack       = document.getElementById('review-stack');
        var order       = REVIEWS.map(function(_, i){ return i; }); // indices
        var autoTimer   = null;
        var isDesktop   = window.matchMedia('(min-width: 768px)').matches;

        /**
         * Builds the star SVG string for a given position.
         * @param {number} pos  0–4
         * @param {number} rating
         * @returns {string}
         */
        function starSVG(pos, rating) {
            var on = pos < rating;
            return '<svg class="rv-star ' + (on ? 'rv-star--on' : 'rv-star--off') + '" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>';
        }

        /**
         * Returns the inline transform for a card at stack depth `depth`.
         * depth 0 = front card, higher = further back.
         * @param {number} depth
         * @param {number} total
         * @returns {string}
         */
        function cardTransform(depth, total) {
            var scale = 1 - depth * SCALE_STEP;
            var ty    = -depth * VERTICAL_STEP;
            var tx    = isDesktop ? depth * HORIZONTAL_STEP : 0;
            return 'translate(' + tx + 'px, ' + ty + 'px) scale(' + scale + ')';
        }

        /**
         * Creates a single card DOM element for the given review.
         * @param {{name:string,initials:string,avatar:string,platform:string,rating:number,text:string}} review
         * @returns {HTMLElement}
         */
        function createCard(review) {
            var el = document.createElement('article');
            el.className = 'rv-card';
            el.setAttribute('aria-label', 'Review by ' + review.name + ' — ' + review.rating + ' stars');

            var starsHTML = '';
            for (var i = 0; i < 5; i++) starsHTML += starSVG(i, review.rating);

            el.innerHTML = [
                '<header style="display:flex;align-items:center;gap:12px;justify-content:space-between;">',
                '  <div style="display:flex;align-items:center;gap:12px;">',
                '    <div class="rv-avatar">',
                '      <img src="' + review.avatar + '" alt="Photo of ' + review.name + '" loading="lazy" onerror="this.style.display=\'none\'"/>',
                '      <span style="position:absolute;">' + review.initials + '</span>',
                '    </div>',
                '    <div>',
                '      <p style="font-weight:900;font-size:15px;color:#fff;margin:0;">' + review.name + '</p>',
                '      <div class="rv-stars" role="img" aria-label="' + review.rating + ' out of 5 stars">' + starsHTML + '</div>',
                '    </div>',
                '  </div>',
                '  <span class="rv-platform">' + review.platform + '</span>',
                '</header>',
                '<p style="font-size:14px;color:rgba(255,255,255,0.60);line-height:1.65;margin:0;flex:1;">' + review.text + '</p>'
            ].join('');

            return el;
        }

        /**
         * Renders all cards into the stack with correct z-index and transforms.
         * Front card = order[0], back card = order[order.length-1].
         */
        function render() {
            var total = order.length;
            order.forEach(function(reviewIdx, stackDepth) {
                var card       = cards[reviewIdx];
                var isFront    = stackDepth === 0;
                var isLastBack = stackDepth === total - 1;

                card.style.transform = cardTransform(stackDepth, total);
                card.style.zIndex    = total - stackDepth;
                card.style.opacity   = isLastBack ? 0.5 : 1;
                card.setAttribute('data-pos', stackDepth);
            });
        }

        /**
         * Rotates the stack: moves the front card to the back.
         */
        function cycle() {
            order.push(order.shift());
            render();
        }

        /** Resets and restarts the auto-rotate timer. */
        function restartTimer() {
            clearInterval(autoTimer);
            autoTimer = setInterval(cycle, AUTO_ROTATE_MS);
        }

        // ── Build cards ───────────────────────────────────────
        var cards = REVIEWS.map(function(review) {
            var card = createCard(review);

            card.addEventListener('click', function() {
                restartTimer();
                cycle();
            });

            stack.appendChild(card);
            return card;
        });

        // ── Initial render ────────────────────────────────────
        render();
        restartTimer();

        // ── Responsive horizontal offset update ───────────────
        window.matchMedia('(min-width: 768px)').addEventListener('change', function(e) {
            isDesktop = e.matches;
            render();
        });

        // ── Pause on hover ────────────────────────────────────
        stack.addEventListener('mouseenter', function() { clearInterval(autoTimer); });
        stack.addEventListener('mouseleave', restartTimer);

    })();
    </script>

    <!-- ===== GALLERY ===== -->
    <style>
        @media (min-width: 768px) {
            .gallery-scroller {
                animation: galleryScroller 45s linear infinite;
                will-change: transform;
            }
            .gallery-scroller:hover {
                animation-play-state: paused;
            }
            @keyframes galleryScroller {
                0% { transform: translateX(0); }
                /* -50% shifts exactly half the track width, the -0.5rem perfectly offsets the gap-4 (16px / 1rem) at the middle! */
                100% { transform: translateX(calc(-50% - 0.5rem)); }
            }
        }
    </style>
    <section class="py-24 relative overflow-hidden bg-background-dark/50">
        <h2 class="text-center text-xs font-bold text-primary uppercase tracking-[0.3em] mb-8">West Hollywood and Surrounding Areas Clients</h2>
        
        <!-- Mobile/Touch scroll hint -->
        <div class="md:hidden flex items-center justify-end px-6 mb-4">
            <span class="text-[10px] font-bold uppercase tracking-widest text-white/50 flex items-center gap-1 animate-pulse">
                Swipe for more <span class="material-symbols-outlined text-xs">arrow_forward</span>
            </span>
        </div>

        <div class="relative w-full overflow-x-auto md:overflow-hidden no-scrollbar snap-x px-6 md:px-0">
            <div class="flex gap-4 pb-8 md:pb-0 w-max relative z-10 gallery-scroller">
                <?php 
                // Double the array payload so the CSS marquee can infinitely scroll half its length seamlessly
                $desktop_marquee_images = array_merge($gallery_images, $gallery_images);
                foreach ($desktop_marquee_images as $index => $img): ?>
                    <div class="w-[75vw] sm:w-[320px] aspect-[4/5] rounded-xl overflow-hidden snap-center flex-shrink-0 relative group border border-white/5">
                        <img class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" alt="<?= htmlspecialchars($img['alt']) ?>" src="<?= htmlspecialchars($img['src']) ?>" loading="lazy"/>
                        <!-- Inner shadow/vignette -->
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent opacity-80 pointer-events-none"></div>
                    </div>
                <?php endforeach; ?>
                
                <!-- Spacer for the end so the last image doesn't hug the right edge on mobile -->
                <div class="w-2 md:hidden flex-shrink-0"></div>
            </div>
            
            <!-- Right Edge Fade Indicator (Desktop) -->
            <div class="hidden md:block absolute top-0 right-0 bottom-0 w-48 bg-gradient-to-l from-background-dark via-background-dark/60 to-transparent pointer-events-none z-20" aria-hidden="true"></div>
            <!-- Left Edge Fade Indicator (Desktop) -->
            <div class="hidden md:block absolute top-0 left-0 bottom-0 w-48 bg-gradient-to-r from-background-dark via-background-dark/60 to-transparent pointer-events-none z-20" aria-hidden="true"></div>
        </div>
    </section>

    <!-- ===== LOCATION ===== -->
    <section class="px-6 py-20 bg-background-dark">
        <div class="glass p-8 rounded-xl flex flex-col md:flex-row items-center gap-10">
            <div class="flex-1">
                <h2 class="text-3xl font-bold mb-4 tracking-tight">On-Location Service</h2>
                <p class="text-white/60 mb-6 leading-relaxed">We bring the red-carpet experience directly to you. Based in the heart of West Hollywood, Jane provides elite, mobile makeup and hair styling across the greater Los Angeles area.</p>
                <div class="space-y-4 mb-8">
                    <div class="flex items-center gap-4">
                        <span class="material-symbols-outlined text-primary">directions_car</span>
                        <span class="text-sm font-medium">We come to you — hotel, venue, or home</span>
                    </div>
                    <div class="flex items-center gap-4">
                        <span class="material-symbols-outlined text-primary">schedule</span>
                        <span class="text-sm font-medium">By Appointment Only: 9:00 AM — 8:00 PM</span>
                    </div>
                </div>
                <a href="tel:3233100966" class="inline-flex w-full md:w-auto px-8 py-4 bg-white/5 border border-white/10 rounded-xl font-bold text-sm items-center justify-center gap-2 hover:bg-primary/10 hover:border-primary/30 transition-all duration-300">
                    Call to Book <span class="material-symbols-outlined text-sm">phone_iphone</span>
                </a>
            </div>
            <div class="w-full md:w-1/3 aspect-square rounded-xl overflow-hidden border border-white/10 group relative">
                <iframe 
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3305.1566608664098!2d-118.3585138!3d34.0654981!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2b934b4e31f3d%3A0xc5a77a32ae6a1f0e!2sJane%20Makeup%20%26%20Hair!5e0!3m2!1sen!2sus!4v1772249027531!5m2!1sen!2sus" 
                    class="absolute inset-0 w-full h-full grayscale opacity-70 group-hover:grayscale-0 group-hover:opacity-100 transition-all duration-700" 
                    style="border:0;" 
                    allowfullscreen="" 
                    loading="lazy" 
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
                <!-- Subtle dark overlay to blend initially -->
                <div class="absolute inset-0 bg-background-dark/20 pointer-events-none group-hover:bg-transparent transition-colors duration-700"></div>
            </div>
        </div>
    </section>

<?php
// ── Include Footer ───────────────────────────────────────────────────
require_once __DIR__ . '/includes/footer.php';
?>
