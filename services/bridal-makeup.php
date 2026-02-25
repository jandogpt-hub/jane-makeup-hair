<?php
/**
 * Jane Makeup & Hair — Bridal Makeup
 */
define('allowed', true);
$pageTitle       = 'Bridal Makeup Artist Los Angeles | Jane Makeup & Hair';
$pageDescription = 'Professional bridal makeup delivered to your hotel, home, or venue in Los Angeles. Soft glam and natural looks that last 12+ hours. Licensed artist with 15+ years of experience. Book today.';
require_once __DIR__ . '/../includes/header.php';
?>

<main style="margin-top:72px;">

    <!-- HERO -->
    <section class="section">
        <div class="container">
            <h1>Bridal Makeup Artist in Los Angeles</h1>
            <p class="section-sub">Jane arrives at your location fully equipped — soft glam and natural looks that photograph flawlessly and last all day.</p>
            <a href="/contact" class="btn btn-primary">Book Your Bridal Session</a>
        </div>
    </section>

    <!-- INTRO -->
    <section class="section">
        <div class="container" style="max-width:800px;">
            <h2>The Look That Lasts Through Every Tear and Every Dance</h2>
            <p>On your wedding morning, you shouldn’t be rushing to a salon, sitting next to strangers, and hoping the artist “gets” your vision. Jane comes to your hotel suite, Airbnb, venue, or home — fully set up with professional lighting, her own chair, and a pro kit built over 15+ years of TV and film work.</p>
            <p style="margin-top:1rem;">Every bridal look is customized to your bone structure, skin tone, dress neckline, and photography style. The result: natural, camera-ready makeup that client after client confirms lasts 12+ hours — through emotion, dancing, and a full night without a single touch-up.</p>
        </div>
    </section>

    <!-- HOW IT WORKS -->
    <section class="section section--dark">
        <div class="container">
            <h2>How It Works</h2>
            <div class="benefits-grid">
                <div class="benefit">
                    <h3>1. Book &amp; Consult</h3>
                    <p>Share your inspiration photos, event date, and location. Jane responds within 24 hours to discuss your vision and confirm availability.</p>
                </div>
                <div class="benefit">
                    <h3>2. Jane Arrives</h3>
                    <p>Jane shows up at your location fully equipped — lighting rig, chair, pro kit. You open the door and sit down. That’s it.</p>
                </div>
                <div class="benefit">
                    <h3>3. Look Stunning</h3>
                    <p>Walk out feeling like the most beautiful version of yourself — with a look that photographs beautifully and lasts all day and night.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- REVIEWS -->
    <section class="section">
        <div class="container">
            <h2>What Brides Say</h2>
            <div class="reviews-grid">
                <blockquote class="review-card">
                    <p>&ldquo;We hired Jane for our wedding. The makeup lasted all day and night (almost 12 hours!) and even when we cried, it remained flawless. I can’t recommend her enough.&rdquo;</p>
                    <footer>— Joie C. &nbsp; ⭐⭐⭐⭐⭐</footer>
                </blockquote>
                <blockquote class="review-card">
                    <p>&ldquo;She perfectly translated my description (natural but polished) into a chic updo and great face. I looked like myself, but polished — which is exactly what I wanted.&rdquo;</p>
                    <footer>— Katy H. &nbsp; ⭐⭐⭐⭐⭐</footer>
                </blockquote>
            </div>
        </div>
    </section>

    <!-- OTHER SERVICES -->
    <section class="section">
        <div class="container">
            <h2>Also Consider</h2>
            <ul class="areas-list">
                <?php foreach ($services as $s): ?>
                <?php if ($s['slug'] !== 'bridal-makeup'): ?>
                <li><a href="/services/<?php echo $s['slug']; ?>"><?php echo $s['name']; ?></a></li>
                <?php endif; ?>
                <?php endforeach; ?>
            </ul>
        </div>
    </section>

    <!-- AREAS -->
    <section class="section">
        <div class="container">
            <h2>Bridal Makeup Available In</h2>
            <ul class="areas-list">
                <?php foreach ($areas as $a): ?>
                <li><a href="/area-served/<?php echo $a['slug']; ?>">Bridal Makeup in <?php echo $a['name']; ?></a></li>
                <?php endforeach; ?>
            </ul>
        </div>
    </section>

    <!-- CTA -->
    <section class="section section--dark">
        <div class="container" style="text-align:center;">
            <h2>Ready to Look Stunning on Your Wedding Day?</h2>
            <div style="display:flex; gap:1rem; justify-content:center; flex-wrap:wrap; margin-top:var(--space-sm);">
                <a href="/contact" class="btn btn-primary">Book Your Bridal Session</a>
                <a href="tel:<?php echo phoneRaw(); ?>" class="btn btn-outline"><?php echo SITE_PHONE; ?></a>
            </div>
        </div>
    </section>

</main>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
