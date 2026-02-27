<?php
/**
 * Jane Makeup & Hair — Airbrush Makeup
 * Standalone pillar page — unique technique-based search intent.
 * Targets: "airbrush makeup artist West Hollywood", "airbrush bridal makeup LA",
 *           "airbrush foundation application Los Angeles", "HD airbrush makeup WeHo".
 */
define('allowed', true);
$pageTitle       = 'Airbrush Makeup Artist West Hollywood | Jane Makeup & Hair';
$pageDescription = 'Professional airbrush makeup application in West Hollywood & Los Angeles. Weightless, HD-ready finish for brides, events, and photoshoots. Flawless foundation that lasts all day. Mobile — Jane comes to you.';
require_once __DIR__ . '/../includes/header.php';
?>

<main style="margin-top:72px;">

    <!-- HERO -->
    <section class="section">
        <div class="container">
            <h1>Airbrush Makeup Artist in West Hollywood</h1>
            <p class="section-sub">Ultra-thin airbrush application for a weightless, flawless foundation that looks natural in person and HD-perfect in photos — lasting all day without transfer, creasing, or touch-ups.</p>
            <a href="/contact.php" class="btn btn-primary">Book Airbrush Makeup</a>
        </div>
    </section>

    <!-- INTRO -->
    <section class="section">
        <div class="container" style="max-width:820px;">
            <h2>Why Airbrush? What It Does That Traditional Makeup Can't</h2>
            <p>Airbrush makeup is applied using a compressor and micro-nozzle that atomizes foundation into a ultra-fine mist — depositing a layer far thinner than any brush or sponge can achieve. The result is a second-skin finish that doesn't sit on top of the face, cakey or heavy, but becomes part of it. Pores, texture, and redness are evened out without masking the skin's natural dimension.</p>
            <p style="margin-top:1rem;">It's a particular advantage in two situations: weddings and photography. For brides, the longevity is unmatched — airbrush foundation holds through heat, humidity, perspiration, and emotion without breaking down. For photography and video, it eliminates surface texture that cameras pick up and amplifies under lighting, producing flawless, natural-looking skin that doesn't require heavy retouching.</p>
        </div>
    </section>

    <!-- WHO IT'S FOR -->
    <section class="section section--dark">
        <div class="container">
            <h2>Who Airbrush Makeup Is Best For</h2>
            <div class="benefits-grid">
                <div class="benefit">
                    <h3>Brides</h3>
                    <p>All-day hold through ceremony, portraits, and reception. No cracking, no transfer on veils or clothing. The definitive bridal foundation application method.</p>
                </div>
                <div class="benefit">
                    <h3>Photography Subjects</h3>
                    <p>Headshots, portraits, editorial, and product — airbrush eliminates the texture and unevenness that cameras amplify, producing naturally flawless skin in every frame.</p>
                </div>
                <div class="benefit">
                    <h3>Events in Warm Climates</h3>
                    <p>Outdoor weddings, summer galas, venue events with dance floors — airbrush holds longer than traditional foundation in heat and high-activity settings.</p>
                </div>
                <div class="benefit">
                    <h3>Sensitive Skin</h3>
                    <p>The application method avoids direct tool contact with the skin, making it ideal for reactive or sensitized complexions that don't respond well to heavy brush pressure.</p>
                </div>
                <div class="benefit">
                    <h3>Film & Video</h3>
                    <p>Continuity makeup for productions requiring a consistent, camera-stable foundation across a multi-hour or multi-day shoot day.</p>
                </div>
                <div class="benefit">
                    <h3>Skin Tone Customization</h3>
                    <p>Jane custom-blends airbrush shades to your exact undertone and depth — no pulling from a pre-set color range, no guessing at a match.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- WHAT JANE USES -->
    <section class="section">
        <div class="container" style="max-width:820px;">
            <h2>Professional-Grade Application</h2>
            <p>Jane uses professional-grade airbrush systems and high-pigment, water-activated, and silicone-based formulas calibrated to your skin type and the intended finish — matte for photography, luminous for brides and events. She layers build-able coverage starting sheer and adding depth only where needed, so the result always looks like great skin rather than coverage.</p>
            <blockquote class="review-card" style="margin-top:var(--space-md);">
                <p>&ldquo;I was honestly nervous about airbrush because I have oily skin, but Jane matched my shade perfectly and it lasted through our entire reception without a single touch-up. My photographer could not stop complimenting my skin in the photos.&rdquo;</p>
                <footer>— Sarah K. &nbsp; ⭐⭐⭐⭐⭐</footer>
            </blockquote>
        </div>
    </section>

    <!-- AREAS -->
    <section class="section section--dark">
        <div class="container">
            <h2>Airbrush Makeup Available In</h2>
            <ul class="areas-list">
                <?php foreach ($areas as $a): ?>
                <li><a href="/area-served/<?php echo $a['slug']; ?>.php">Airbrush Makeup in <?php echo $a['name']; ?></a></li>
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
                <?php if ($s['slug'] !== 'airbrush-makeup'): ?>
                <li><a href="/services/<?php echo $s['slug']; ?>.php"><?php echo $s['name']; ?></a></li>
                <?php endif; ?>
                <?php endforeach; ?>
            </ul>
        </div>
    </section>

    <!-- CTA -->
    <section class="section section--dark">
        <div class="container" style="text-align:center;">
            <h2>Book Airbrush Makeup with Jane</h2>
            <p style="max-width:540px; margin:0 auto 1.5rem;">Let Jane know your event or shoot date, skin type, and desired finish. She'll come to your location with everything needed for a flawless airbrush application.</p>
            <div style="display:flex; gap:1rem; justify-content:center; flex-wrap:wrap; margin-top:var(--space-sm);">
                <a href="/contact.php" class="btn btn-primary">Book Airbrush Makeup</a>
                <a href="tel:<?php echo phoneRaw(); ?>" class="btn btn-outline"><?php echo SITE_PHONE; ?></a>
            </div>
        </div>
    </section>

</main>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
