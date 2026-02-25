<?php
/**
 * Jane Makeup & Hair — About Page
 */
define('allowed', true);
$pageTitle       = 'About Jane | Mobile Makeup Artist & Hairstylist — Los Angeles';
$pageDescription = 'Meet Evgeniia (Jane) Golyzhenkova — a licensed hairstylist and professional makeup artist with 15+ years of TV production experience. Serving West Hollywood, Beverly Hills, and greater Los Angeles.';
require_once __DIR__ . '/includes/header.php';
?>

<main style="margin-top:72px;">

    <!-- HERO -->
    <section class="section">
        <div class="container">
            <h1>About Jane</h1>
            <p class="section-sub">Licensed hairstylist. Professional makeup artist. 15+ years in TV productions.</p>
        </div>
    </section>

    <!-- BIO -->
    <section class="section">
        <div class="container" style="max-width:800px;">
            <h2>The Artist Behind the Work</h2>
            <p>Jane — professionally known as Evgeniia Golyzhenkova — has been transforming how people look and feel for over 15 years. Her career began in TV and film production, where she learned one thing that now defines every booking: the camera doesn't lie, and neither does a flawless foundation.</p>
            <p style="margin-top:1rem;">Established in 2006, Jane's practice has grown entirely on referral and repeat clients — brides who come back for anniversaries, actors who call before every shoot, and everyday clients who simply refuse to sit in a salon when Jane can come to them.</p>
            <p style="margin-top:1rem;">She specializes in soft glam and natural looks that feel elevated but never theatrical. The signature result: clients who look like the best version of themselves and can't stop getting compliments.</p>

            <h3 style="margin-top:var(--space-md);">By the Numbers</h3>
            <ul style="margin-top:1rem; display:grid; grid-template-columns:1fr 1fr; gap:1rem;">
                <li><strong>15+</strong> years of TV production experience</li>
                <li><strong>19 years</strong> in business (est. 2006)</li>
                <li><strong>4.9 ⭐</strong> Yelp rating (49 reviews)</li>
                <li><strong>5.0 ⭐</strong> Google rating</li>
                <li><strong>230+</strong> Yelp portfolio photos</li>
                <li><strong>100%</strong> mobile — she comes to you</li>
            </ul>
        </div>
    </section>

    <!-- SERVICES CROSS-LINK -->
    <section class="section">
        <div class="container">
            <h2>Explore Jane's Services</h2>
            <ul class="areas-list">
                <?php foreach ($services as $s): ?>
                <li><a href="/services/<?php echo $s['slug']; ?>"><?php echo $s['icon']; ?> <?php echo $s['name']; ?></a></li>
                <?php endforeach; ?>
            </ul>
        </div>
    </section>

    <!-- CTA -->
    <section class="section section--dark">
        <div class="container" style="text-align:center;">
            <h2>Ready to Book?</h2>
            <p style="margin-bottom:var(--space-md);">Jane responds within 24 hours.</p>
            <a href="/contact" class="btn btn-primary">Book Your Session</a>
        </div>
    </section>

</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
