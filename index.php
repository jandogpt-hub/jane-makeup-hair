<?php
/**
 * Jane Makeup & Hair — Homepage
 */
define('allowed', true);
$pageTitle       = 'Jane Makeup & Hair | Luxury Mobile Makeup Artist Los Angeles';
$pageDescription = 'Red carpet makeup and hair delivered to you in West Hollywood, Beverly Hills, Burbank, and all of Los Angeles. Licensed hairstylist with 15+ years of TV production experience. Book your session today.';
require_once __DIR__ . '/includes/header.php';
?>

<main>

    <!-- ===== HERO ===== -->
    <section class="hero-section">
        <!-- Dynamic Background (Simplified CSS Marquee) -->
        <div class="hero-background"></div>
        <div style="position:absolute; inset:0; opacity:0.3; background-image:url('https://images.unsplash.com/photo-1500917293891-ef795e70e1f6?auto=format&fit=crop&q=80&w=1920'); background-size:cover; background-position:center; filter:grayscale(100%); mix-blend-mode:overlay; z-index:-1;"></div>
        
        <div class="container hero-content" style="z-index: 10;">
            <div class="hero-badge">
                <span class="font-mono font-bold tracking-widest uppercase">West Hollywood Exclusive</span>
            </div>
            
            <h1 class="hero-title">JANE<br>WEHO</h1>
            
            <div style="margin-top: 2rem;">
                <h2 style="font-size: 2rem; color: #fff; margin-bottom: 0.5rem;">
                    The <span class="text-orange">Noir</span> VIP Experience.
                </h2>
                <p class="font-mono text-muted" style="max-width: 400px; margin: 0 auto; line-height: 1.6;">
                    Elite makeup and hair artistry for the red carpet and beyond.
                </p>
            </div>
            
            <div style="margin-top: 3rem;">
                <a href="/contact" class="btn btn-primary">Secure Your Session &rarr;</a>
            </div>
        </div>
        
        <div style="position: absolute; bottom: 2rem; right: 2rem; writing-mode: vertical-rl; text-transform: uppercase; letter-spacing: 0.3em; font-family: var(--font-mono); font-size: 0.6rem; color: var(--color-text-muted); border-right: 1px solid var(--color-glass-border); padding-right: 10px;">
            34.0923&deg; N, 118.3693&deg; W
        </div>
    </section>

    <!-- ===== SERVICES GRID ===== -->
    <section class="section section--glass">
        <div class="container">
            <h2 style="text-align: center; margin-bottom: 1rem;">Services</h2>
            <p class="font-mono text-muted" style="text-align: center; margin-bottom: 3rem;">Jane arrives wherever you need her.</p>
            <ul class="services-grid">
                <?php foreach ($services as $s): ?>
                <li class="service-card">
                    <span style="font-size: 2rem; display: block; margin-bottom: 1rem;"><?php echo $s['icon']; ?></span>
                    <h3><?php echo $s['name']; ?></h3>
                    <a href="/services/<?php echo $s['slug']; ?>">Learn More &rarr;</a>
                </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </section>

    <!-- ===== LOGOS / PROOF ===== -->
    <section class="section" style="text-align: center;">
        <div class="container">
            <h3 class="font-mono text-muted" style="margin-bottom: 3rem;">As Seen In Production</h3>
            <div style="display: flex; flex-wrap: wrap; justify-content: center; gap: 4rem; opacity: 0.5; filter: grayscale(100%);">
                <span style="font-family: var(--font-syne); font-weight: 800; font-size: 1.5rem;">VOGUE</span>
                <span style="font-family: var(--font-syne); font-weight: 800; font-size: 1.5rem;">NETFLIX</span>
                <span style="font-family: var(--font-syne); font-weight: 800; font-size: 1.5rem;">HBO</span>
                <span style="font-family: var(--font-syne); font-weight: 800; font-size: 1.5rem;">Vanity Fair</span>
            </div>
        </div>
    </section>

    <!-- ===== WHY JANE ===== -->
    <section class="section">
        <div class="container">
            <h2>Why Clients Choose Jane</h2>
            <ul class="benefits-grid">
                <li class="benefit">
                    <h3>She Comes to You</h3>
                    <p>No salon trips on your most stressful morning. Jane arrives fully equipped — professional lighting rig, styling chair, complete pro kit — and sets up wherever you are.</p>
                </li>
                <li class="benefit">
                    <h3>15+ Years of TV-Level Craft</h3>
                    <p>Camera-ready results are Jane’s default. Her background in TV and film productions means your look will photograph flawlessly under any lighting or lens.</p>
                </li>
                <li class="benefit">
                    <h3>Looks That Last All Day</h3>
                    <p>Clients verify it repeatedly: makeup that holds through tears, dancing, and a full 12-hour event — without a single touch-up.</p>
                </li>
                <li class="benefit">
                    <h3>Soft Glam, Not Theatrical</h3>
                    <p>Jane specializes in natural looks and soft glam — the best version of you, not a mask. Clients often say &ldquo;I looked like myself, just polished.&rdquo;</p>
                </li>
            </ul>
        </div>
    </section>

    <!-- ===== REVIEWS ===== -->
    <section class="section section--glass">
        <div class="container">
            <h2 style="text-align: center;">What Clients Say</h2>
            <ul class="reviews-grid">
                <li class="review-card">
                    <p>&ldquo;Jane came to do hair and makeup for me and my flower-girl daughter ahead of a wedding. She perfectly translated my description into a chic updo and great face. I looked like myself, but polished — which is exactly what I wanted.&rdquo;</p>
                    <footer>— Katy H., San Francisco &nbsp; ⭐⭐⭐⭐⭐</footer>
                </li>
                <li class="review-card">
                    <p>&ldquo;We hired Jane for our wedding. The makeup lasted all day and night (almost 12 hours!) and even when we cried, it remained flawless. I can’t recommend her enough.&rdquo;</p>
                    <footer>— Joie C., Seattle &nbsp; ⭐⭐⭐⭐⭐</footer>
                </li>
                <li class="review-card">
                    <p>&ldquo;She styled my hair for the Elton John AIDS Foundation after-party and I couldn’t have been happier. Such a calm, lovely presence to have around while getting ready.&rdquo;</p>
                    <footer>— Arianna S., Las Vegas &nbsp; ⭐⭐⭐⭐⭐</footer>
                </li>
            </ul>
        </div>
    </section>

    <!-- ===== AREAS SERVED ===== -->
    <section class="section">
        <div class="container">
            <h2>Areas Jane Serves</h2>
            <p class="font-mono text-muted" style="margin-bottom: 2rem;">Jane is 100% mobile across greater Los Angeles.</p>
            <ul class="areas-list">
                <?php foreach ($areas as $a): ?>
                <li><a href="/area-served/<?php echo $a['slug']; ?>"><?php echo $a['name']; ?></a></li>
                <?php endforeach; ?>
            </ul>
        </div>
    </section>

    <!-- ===== FINAL CTA ===== -->
    <section class="section" style="border-top: 1px solid var(--color-glass-border);">
        <div class="container" style="text-align:center;">
            <h2 style="font-size: clamp(3rem, 8vw, 6rem); line-height: 1;">Ready to Look<br><span class="text-orange">Stunning?</span></h2>
            <p style="margin: 2rem auto; max-width: 500px;">Tell Jane about your event and she’ll get back to you within 24 hours.</p>
            <div style="display:flex; gap:1.5rem; justify-content:center; flex-wrap:wrap; margin-top: 3rem;">
                <a href="/contact" class="btn btn-primary">Book Your Session &rarr;</a>
                <a href="tel:<?php echo phoneRaw(); ?>" class="btn btn-outline"><?php echo SITE_PHONE; ?></a>
            </div>
        </div>
    </section>

</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
