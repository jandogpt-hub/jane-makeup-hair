<?php
/**
 * Jane Makeup & Hair — Homepage
 */
define('allowed', true);
$pageTitle       = 'Jane Makeup & Hair | Luxury Mobile Makeup Artist Los Angeles';
$pageDescription = 'Red carpet makeup and hair delivered to you in West Hollywood, Beverly Hills, Burbank, and all of Los Angeles. Licensed hairstylist with 15+ years of TV production experience. Book your session today.';
require_once __DIR__ . '/includes/header.php';
?>

<main style="margin-top:72px;">

    <!-- ===== HERO ===== -->
    <section class="hero section">
        <div class="container">
            <p class="hero-eyebrow">Mobile Makeup Artist &amp; Hairstylist &bull; Los Angeles</p>
            <h1>Red Carpet Beauty,<br>Anywhere You Are</h1>
            <p class="hero-sub">Jane comes to your hotel suite, home, or venue — fully equipped with professional lighting, styling chair, and a kit built over 15 years of TV productions. You just sit down.</p>
            <div class="hero-ctas">
                <a href="/contact" class="btn btn-primary">Book Your Session</a>
                <a href="tel:<?php echo phoneRaw(); ?>" class="btn btn-outline"><?php echo SITE_PHONE; ?></a>
            </div>
            <p class="hero-proof">⭐ 5.0 Google &nbsp;&bull;&nbsp; ⭐ 4.9 Yelp (49 reviews) &nbsp;&bull;&nbsp; 15+ Years Experience &nbsp;&bull;&nbsp; Women-Owned</p>
        </div>
    </section>

    <!-- ===== SERVICES GRID ===== -->
    <section class="section">
        <div class="container">
            <h2>Services</h2>
            <p class="section-sub">Every session is mobile. Jane arrives at your location — wherever you need her.</p>
            <div class="services-grid">
                <?php foreach ($services as $s): ?>
                <article class="service-card">
                    <span class="service-icon" aria-hidden="true"><?php echo $s['icon']; ?></span>
                    <h3><?php echo $s['name']; ?></h3>
                    <a href="/services/<?php echo $s['slug']; ?>" class="card-link">Learn More &rarr;</a>
                </article>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- ===== WHY JANE ===== -->
    <section class="section section--dark">
        <div class="container">
            <h2>Why Clients Choose Jane</h2>
            <div class="benefits-grid">
                <div class="benefit">
                    <h3>She Comes to You</h3>
                    <p>No salon trips on your most stressful morning. Jane arrives fully equipped — professional lighting rig, styling chair, complete pro kit — and sets up wherever you are.</p>
                </div>
                <div class="benefit">
                    <h3>15+ Years of TV-Level Craft</h3>
                    <p>Camera-ready results are Jane’s default. Her background in TV and film productions means your look will photograph flawlessly under any lighting or lens.</p>
                </div>
                <div class="benefit">
                    <h3>Looks That Last All Day</h3>
                    <p>Clients verify it repeatedly: makeup that holds through tears, dancing, and a full 12-hour event — without a single touch-up.</p>
                </div>
                <div class="benefit">
                    <h3>Soft Glam, Not Theatrical</h3>
                    <p>Jane specializes in natural looks and soft glam — the best version of you, not a mask. Clients often say &ldquo;I looked like myself, just polished.&rdquo;</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== REVIEWS ===== -->
    <section class="section">
        <div class="container">
            <h2>What Clients Say</h2>
            <div class="reviews-grid">
                <blockquote class="review-card">
                    <p>&ldquo;Jane came to do hair and makeup for me and my flower-girl daughter ahead of a wedding. She perfectly translated my description into a chic updo and great face. I looked like myself, but polished — which is exactly what I wanted.&rdquo;</p>
                    <footer>— Katy H., San Francisco &nbsp; ⭐⭐⭐⭐⭐</footer>
                </blockquote>
                <blockquote class="review-card">
                    <p>&ldquo;We hired Jane for our wedding. The makeup lasted all day and night (almost 12 hours!) and even when we cried, it remained flawless. I can’t recommend her enough.&rdquo;</p>
                    <footer>— Joie C., Seattle &nbsp; ⭐⭐⭐⭐⭐</footer>
                </blockquote>
                <blockquote class="review-card">
                    <p>&ldquo;She styled my hair for the Elton John AIDS Foundation after-party and I couldn’t have been happier. Such a calm, lovely presence to have around while getting ready.&rdquo;</p>
                    <footer>— Arianna S., Las Vegas &nbsp; ⭐⭐⭐⭐⭐</footer>
                </blockquote>
            </div>
        </div>
    </section>

    <!-- ===== AREAS SERVED ===== -->
    <section class="section">
        <div class="container">
            <h2>Areas Jane Serves</h2>
            <p class="section-sub">Jane is 100% mobile and serves clients across greater Los Angeles.</p>
            <ul class="areas-list">
                <?php foreach ($areas as $a): ?>
                <li><a href="/area-served/<?php echo $a['slug']; ?>"><?php echo $a['name']; ?></a></li>
                <?php endforeach; ?>
            </ul>
        </div>
    </section>

    <!-- ===== FINAL CTA ===== -->
    <section class="section section--dark">
        <div class="container" style="text-align:center;">
            <h2>Ready to Look Stunning?</h2>
            <p style="margin-bottom:var(--space-md);">Tell Jane about your event and she’ll get back to you within 24 hours.</p>
            <div style="display:flex; gap:1rem; justify-content:center; flex-wrap:wrap;">
                <a href="/contact" class="btn btn-primary">Book Your Session</a>
                <a href="tel:<?php echo phoneRaw(); ?>" class="btn btn-outline"><?php echo SITE_PHONE; ?></a>
            </div>
        </div>
    </section>

</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
