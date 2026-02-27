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

<main style="margin-top:72px;">

    <!-- HERO -->
    <section class="section">
        <div class="container">
            <h1>Mobile Bridal Makeup & Hair Artist in West Hollywood</h1>
            <p class="section-sub">Jane arrives at your venue fully equipped — flawless bridal makeup and hair styling that photographs beautifully and lasts all day and night, without a single touch-up.</p>
            <a href="/contact.php" class="btn btn-primary">Book Your Bridal Trial</a>
        </div>
    </section>

    <!-- INTRO -->
    <section class="section">
        <div class="container" style="max-width:820px;">
            <h2>One Artist. Complete Bridal Artistry — From First Look to Last Dance</h2>
            <p>Your wedding morning shouldn't start with rushing to a salon. Jane brings her full professional setup — lighting rig, chair, airbrush station, and a kit built over 15+ years in film and television — directly to your hotel suite, bridal suite, Airbnb, or venue.</p>
            <p style="margin-top:1rem;">Every bridal look is built around your bone structure, skin undertone, dress neckline, and photographer's style. Whether you want a radiant, dewy no-makeup look or a sculpted, smoky editorial finish, Jane consults, customizes, and delivers — then stays through the first looks to ensure everything is perfect on camera before she leaves.</p>
            <p style="margin-top:1rem;">And your bridal party? Coordinated, timed, and beautiful. Jane handles the full group with precision scheduling so no one is waiting and everyone walks out camera-ready at exactly the right moment.</p>
        </div>
    </section>

    <!-- WHAT'S INCLUDED -->
    <section class="section section--dark">
        <div class="container">
            <h2>What's Included in Every Bridal Package</h2>
            <div class="benefits-grid">
                <div class="benefit">
                    <h3>Bridal Trial Session</h3>
                    <p>Test your complete makeup and hair look weeks before the wedding. Arrive on your day with total confidence — every detail already refined and approved.</p>
                </div>
                <div class="benefit">
                    <h3>Wedding Day Application</h3>
                    <p>Full makeup and hair application at your location. Jane is punctual, calm, and efficient — your timeline stays on track no matter how many people are in your party.</p>
                </div>
                <div class="benefit">
                    <h3>Bridal Party Coordination</h3>
                    <p>Bridesmaid makeup, mother of the bride, flower girls — Jane scales to your entire group with staggered booking and precision timing built into every quote.</p>
                </div>
                <div class="benefit">
                    <h3>Airbrush Option</h3>
                    <p>Airbrush foundation and setting for brides who want a flawless, weightless finish that holds through heat, emotion, and a full night of dancing without transfer.</p>
                </div>
                <div class="benefit">
                    <h3>Hair Styling — Updos & Blowouts</h3>
                    <p>Classic updo, romantic loose waves, braided styles, or sleek blowout — Jane sculpts and pins with the same precision she brings to editorial and film shoots.</p>
                </div>
                <div class="benefit">
                    <h3>On-Location — You Stay Put</h3>
                    <p>Jane travels to West Hollywood, Beverly Hills, Santa Monica, Burbank, and beyond. Travel fee applies outside the primary service radius — ask when booking.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- HOW IT WORKS -->
    <section class="section">
        <div class="container">
            <h2>How It Works</h2>
            <div class="benefits-grid">
                <div class="benefit">
                    <h3>1. Book & Consult</h3>
                    <p>Share your inspiration photos, wedding date, headcount, and venue. Jane responds within 24 hours to confirm availability and discuss your vision.</p>
                </div>
                <div class="benefit">
                    <h3>2. Trial Session</h3>
                    <p>Meet for a dedicated trial — full makeup and hair — so you know exactly how you'll look before your wedding day. Adjustments are made until it's perfect.</p>
                </div>
                <div class="benefit">
                    <h3>3. Wedding Day</h3>
                    <p>Jane arrives on time, fully set up, and ready to work through your party timeline. You open the door and get pampered. That's the whole job.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- REVIEWS -->
    <section class="section section--dark">
        <div class="container">
            <h2>What Brides Say</h2>
            <div class="reviews-grid">
                <blockquote class="review-card">
                    <p>&ldquo;We hired Jane for our wedding. The makeup lasted all day and night — almost 12 hours — and even when we cried, it remained flawless. I can't recommend her enough.&rdquo;</p>
                    <footer>— Joie C. &nbsp; ⭐⭐⭐⭐⭐</footer>
                </blockquote>
                <blockquote class="review-card">
                    <p>&ldquo;She perfectly translated my description — natural but polished — into a chic updo and a great face. I looked like myself, but elevated. Exactly what I wanted.&rdquo;</p>
                    <footer>— Katy H. &nbsp; ⭐⭐⭐⭐⭐</footer>
                </blockquote>
                <blockquote class="review-card">
                    <p>&ldquo;Jane did the makeup and hair for my entire wedding party. Everyone looked stunning and she kept us completely on schedule. Absolute professional.&rdquo;</p>
                    <footer>— Lauren M. &nbsp; ⭐⭐⭐⭐⭐</footer>
                </blockquote>
            </div>
        </div>
    </section>

    <!-- AREAS -->
    <section class="section">
        <div class="container">
            <h2>Mobile Bridal Makeup & Hair Available In</h2>
            <ul class="areas-list">
                <?php foreach ($areas as $a): ?>
                <li><a href="/area-served/<?php echo $a['slug']; ?>.php">Mobile Bridal Makeup & Hair in <?php echo $a['name']; ?></a></li>
                <?php endforeach; ?>
            </ul>
        </div>
    </section>

    <!-- OTHER SERVICES -->
    <section class="section">
        <div class="container">
            <h2>Also Consider</h2>
            <ul class="areas-list">
                <?php foreach ($services as $s): ?>
                <?php if ($s['slug'] !== 'bridal-makeup-hair'): ?>
                <li><a href="/services/<?php echo $s['slug']; ?>.php"><?php echo $s['name']; ?></a></li>
                <?php endif; ?>
                <?php endforeach; ?>
            </ul>
        </div>
    </section>

    <!-- CTA -->
    <section class="section section--dark">
        <div class="container" style="text-align:center;">
            <h2>Ready to See Your Bridal Look?</h2>
            <p style="max-width:540px; margin:0 auto 1.5rem;">Book a trial session and walk into your wedding day knowing exactly how stunning you'll look — no surprises, only confidence.</p>
            <div style="display:flex; gap:1rem; justify-content:center; flex-wrap:wrap; margin-top:var(--space-sm);">
                <a href="/contact.php" class="btn btn-primary">Book Your Bridal Trial</a>
                <a href="tel:<?php echo phoneRaw(); ?>" class="btn btn-outline"><?php echo SITE_PHONE; ?></a>
            </div>
        </div>
    </section>

</main>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
