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
        'title' => 'Mobile Bridal Makeup',
        'desc'  => 'Jane comes to your venue. Camera-ready bridal glam delivered on location.',
        'image' => 'https://res.cloudinary.com/dkceuqcix/image/upload/w_800,h_1000,c_fill,g_face,q_80,fl_keep_iptc/v1772166783/jane-mobile-makeup-hair-west-hollywood-002_zfmiqy.jpg',
        'alt'   => 'Jane applying professional bridal makeup on location in West Hollywood'
    ],
    [
        'type'  => 'image',
        'title' => 'Hair Styling',
        'desc'  => 'Sculpted waves, sleek finishes, and updos.',
        'image' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuCD030aZGzH22P7pESdF2OTwIZ3xk7WV9zuxeyGgolwQWdlFQK15codwglyJAqGISiC65DCkE8dP7duM230jhioaCkVVKZSjA4HfXFzTteECG0hKZKcaXtUOrhtyFT8xMHWuZDlH8SftdSZ_rpA3p6OpsXDwLwETegablRwAY7PG7Jxp3YdRtsUynJ1AlpFkDZRk-5G9LNzrK4GI9ndypqIvCp8nrLTTpf2Wk4R2EQi2X0Y-1awXZlGFSXQxfAcAOqHhKoTwtWDcl4N',
        'alt'   => 'Professional hair styling session in studio'
    ],
    [
        'type'   => 'feature',
        'title'  => 'VIP Concierge',
        'desc'   => 'On-location services for private events, weddings, and high-profile bookings.',
        'icon'   => 'diamond',
        'button' => 'Inquire Now'
    ]
];

// ── Data: Gallery Images ─────────────────────────────────────────────
$gallery_images = [
    "https://lh3.googleusercontent.com/aida-public/AB6AXuAmfVVE-H0flAWmrMj0Z64Z2BxCmtWjfy5YfWb2NlwHa-RGjsS9B6-m1YbL3rF9TXrMkFXjcXTPVKAXdE4e0GOzDoJc85uq4-ALKsrkvoV3Nmw7InFjfBTFiv8WN70RghezCo4rdlUSneqB_VYlJlKbKIFgoVTwrxEhBoKXWZ3QCv-0N0sR2YVzTmJAbezjgISLQFUKwYcBHLzDhy1dzG3Cnc7OdH1Xh-xE1T9vvrNMsO_urtPNnTL--TDNHFI4jv2eF9rJRWuelsf7",
    "https://lh3.googleusercontent.com/aida-public/AB6AXuAzb6lZFyRURcJLnOJgGrVYRv7SL40rQwkGRhfCtsyo2BWtv-OInFcHnvvliCWRme2K1Oxy-LwYpeH6Eyw9-cXl623p0IuVPnOib7wvKPrQDqqSnVpAcA5BRf-wb8ekhm0uKJFaHZuGnH15SmlFS0sP2JALbk3z13RO73OJu2_HFUBu56iYZDZNe1o0_gxt45BcCb2f9rRkQ0oq_N3JQ4QJoOJ22bPaqh-DRE1JTNLOF4LnInRA0NEkMTRgZ9eQQbmoQ7AA_Ma6D0Gq",
    "https://lh3.googleusercontent.com/aida-public/AB6AXuBwlLPtHPR5GhIag5igpzzUt8B4PLej_sU5oAk8o30zoHyduiP_PlqX0eBTIH6TGLcJ94TxT_aVIdARmY9Ed5KA90YdlFnmYyIeKWZP9pJnyHtwK3n235Dzf-Y6HfKa1P_ve7iFLQXoS8IubY_0wbmyTJHl3tcKQi_G0YMOYon8R1XyqURFZUpwpW_ZE5O5ow0llMGM_c8ERovaFyQahPruZLnCbXuU2eR0ywR70wk4XEnOk5vzl6cNgu_BINPcve28llZ9teoVIA6E",
    "https://lh3.googleusercontent.com/aida-public/AB6AXuCL3Xx83vw0yY94XPZ1cABZVkyyrFpLSZw6CcIFIwsXTHbFLYZ1yGrJGC0vaaQThJ1Lbz2Tb1I2L1vZQiNXsYItd6BpP7_iOa9CmeDZCA8i6cHD8MZP5hcX4mYWHLkUF1OxNir1zAIiFD9Vn2FkwyVPHgUqppeGwZ7Zjom0QgN313zNfp0Gm8GRnZl7Rgi0Cfsco7IQ51fiimdRB0PMA3rkEqElVtbL3FQfpZCPSdphjIPt1VrUjLML1YI5Tn4VPsk23Wu5lUhbrpmg"
];
?>

    <!-- ===== HERO SECTION ===== -->
    <section class="relative h-screen w-full flex items-center justify-center overflow-hidden">
        <div class="absolute inset-0 z-0">
            <div class="absolute inset-0 bg-gradient-to-b from-transparent via-background-dark/20 to-background-dark z-10"></div>
            <img class="w-full h-full object-cover object-top scale-110 filter grayscale brightness-75"
                 alt="Jane — West Hollywood mobile makeup and hair artist"
                 src="https://res.cloudinary.com/dkceuqcix/image/upload/w_2400,h_1600,c_fill,g_face,q_80,fl_keep_iptc/v1772164687/janes-makeup-hair-headshot_m3azif.jpg"
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
    </section>

    <!-- ===== GALLERY ===== -->
    <section class="py-20 px-6 overflow-hidden bg-background-dark/50">
        <h2 class="text-center text-xs font-bold text-primary uppercase tracking-[0.3em] mb-12">Seen on the Strip</h2>
        <div class="flex gap-4 overflow-x-auto pb-8 snap-x no-scrollbar">
            <?php foreach ($gallery_images as $index => $img_src): ?>
                <div class="min-w-[280px] aspect-square rounded-lg overflow-hidden snap-center flex-shrink-0">
                    <img class="w-full h-full object-cover" alt="Gallery image <?= $index + 1 ?>" src="<?= $img_src ?>"/>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- ===== LOCATION ===== -->
    <section class="px-6 py-20 bg-background-dark">
        <div class="glass p-8 rounded-xl flex flex-col md:flex-row items-center gap-10">
            <div class="flex-1">
                <h2 class="text-3xl font-bold mb-4 tracking-tight">Visit the Studio</h2>
                <p class="text-white/60 mb-6 leading-relaxed">Located in the heart of West Hollywood, our studio is a sanctuary for beauty and self-expression. Appointments recommended.</p>
                <div class="space-y-4 mb-8">
                    <div class="flex items-center gap-4">
                        <span class="material-symbols-outlined text-primary">location_on</span>
                        <span class="text-sm font-medium">8400 Sunset Blvd, West Hollywood, CA</span>
                    </div>
                    <div class="flex items-center gap-4">
                        <span class="material-symbols-outlined text-primary">schedule</span>
                        <span class="text-sm font-medium">Daily: 9:00 AM — 8:00 PM</span>
                    </div>
                </div>
                <button class="w-full md:w-auto px-8 py-4 bg-white/5 border border-white/10 rounded-xl font-bold text-sm flex items-center justify-center gap-2 hover:bg-white/10 transition-all">
                    Get Directions <span class="material-symbols-outlined text-sm">open_in_new</span>
                </button>
            </div>
            <div class="w-full md:w-1/3 aspect-square rounded-xl overflow-hidden grayscale opacity-80 border border-white/10">
                <img class="w-full h-full object-cover" alt="Map of West Hollywood area" src="https://lh3.googleusercontent.com/aida-public/AB6AXuChn851DvloK6_gfTUU5teWxuPzAqwZ9no1bLD65JGD2iJHzZX1IC3uWxNgzqDElNju5527EFirkZEYPIjxLJQXOgHn9xpyvMJjZ_sc7iNv-QkxT0uUblHr8yxfdvpSxzJgozmgECvwN7BWGaK8x5-ms7r7OUOeJQ051NDceExM1dTPApKria8Cy3C4Wg3jiqaXnaL9srsluWyQ57u2KUammM-n2d-5DvtxQKjXvN4I-AveVa7OcfVy79q8zbSB_JtbKYIg6LUEnLhc"/>
            </div>
        </div>
    </section>

<?php
// ── Include Footer ───────────────────────────────────────────────────
require_once __DIR__ . '/includes/footer.php';
?>
