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
        'title' => 'Makeup Artistry',
        'desc'  => 'From red carpet glam to natural radiance.',
        'image' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuDvnLwKJR7rLyhDG32C6506etHyf8WMoAej3gJq1AwfeJcK4DwcO2sPmipgWS6o5lhJ3FI3gGlnY4h9VigwJjs6Tb80JaKwtQByanVD1u7N_rUxMs43H9FLh6y7Z4fLZKonQRT15HshQDBwvLx3yjQqM5iS1QA8X4WoZhSFnIpOeOTjbAgYqUZCAMZknsUpE2fLGAfj1jFfgo0DLQ8ST0U5XdEGw0G5lICWaXNg9rp4NdskAiWpLqUmX_oUa_qS0lc9WQYp2tFIPRu6',
        'alt'   => 'Close up of editorial makeup artistry'
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
            <img class="w-full h-full object-cover scale-110 filter grayscale brightness-75" alt="Avant-garde editorial portrait with high fashion makeup" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAJ6eneh4LnBKd7I9Rs4hPaBvOL0u_ZV7Q8aD9ET-8Gw07yZP8nQAjxXTQFcFwVC6GZ7NzKI3zO3_fuL_7sl4yF-aIxE8aOFdU8wtl5VcYo7QsvBTp38MQJL_mbkMgBqPrhFzVgQALAlA5N-kpqfCs3t-Qp9uhIgOYF-mOMxYDapIjH_hQhdP4vQRYWQDSDKB62YFLBrPOrn2ZX3LDJQ_QRTdBbq50OtVYgJn602AfRNFEYxfnogzonmnhCRcN8AFJx7cmk7r1naYF6"/>
        </div>
        <div class="relative z-20 text-center px-4">
            <h1 class="text-[12vw] md:text-[18vw] font-bold leading-none uppercase tracking-tighter mb-[-2vw]">
                <span class="block">Jane</span>
                <span class="text-outline block mt-[-4vw]">Studio</span>
            </h1>
            <p class="text-sm md:text-xl uppercase tracking-[0.5em] font-light mt-8 md:mt-0 opacity-80">
                Sculpting the West Hollywood Identity
            </p>
        </div>
        <div class="absolute bottom-10 left-10 z-20 hidden md:block">
            <div class="flex flex-col gap-4">
                <div class="h-px w-24 bg-primary/50"></div>
                <p class="text-[10px] uppercase tracking-widest opacity-60">Est. 2026 / LA</p>
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
