<?php
/**
 * Jane Makeup & Hair — Photoshoot & Editorial Makeup
 * Pillar page: merges photoshoot-makeup + blowout-styling into one intent cluster.
 * Targets: "headshot makeup West Hollywood", "editorial makeup artist LA",
 *           "photography makeup artist Los Angeles", "boudoir makeup artist WeHo",
 *           "lookbook makeup hair LA", "portrait makeup artist West Hollywood".
 */
define('allowed', true);
$pageTitle       = 'Photoshoot & Editorial Makeup Artist West Hollywood | Jane Makeup & Hair';
$pageDescription = 'Professional makeup and hair for headshots, portrait sessions, boudoir, lookbooks, and editorial shoots in West Hollywood & Los Angeles. Mobile. Camera-calibrated. Bookable today.';
require_once __DIR__ . '/../includes/header.php';
?>

<main style="margin-top:72px;">

    <!-- HERO -->
    <section class="section">
        <div class="container">
            <h1>Photoshoot & Editorial Makeup Artist in West Hollywood</h1>
            <p class="section-sub">From headshots to high-fashion lookbooks — Jane delivers makeup and hair crafted specifically for how a camera sees it, not just how a mirror does.</p>
            <a href="/contact.php" class="btn btn-primary">Book Your Shoot</a>
        </div>
    </section>

    <!-- INTRO -->
    <section class="section">
        <div class="container" style="max-width:820px;">
            <h2>Makeup That Was Built for the Lens</h2>
            <p>There's a meaningful difference between makeup that looks good in a room and makeup that reads beautifully through a camera lens. Sensors flatten texture, compress color range, and exaggerate certain tones in ways the human eye never notices. Jane's background in television and editorial work means she builds every photoshoot look with that understanding baked in — color-corrected for the lighting setup, textured for the medium, and finished to hold across a full shoot day.</p>
            <p style="margin-top:1rem;">Whether you're doing corporate headshots, brand content, boudoir, a maternity portrait session, or a fully art-directed editorial, Jane arrives at your studio, location, or home fully equipped and ready to collaborate with your photographer from the first frame.</p>
        </div>
    </section>

    <!-- SHOOT TYPES -->
    <section class="section section--dark">
        <div class="container">
            <h2>Shoots We Work On</h2>
            <div class="benefits-grid">
                <div class="benefit">
                    <h3>Headshots & Corporate Portraits</h3>
                    <p>Actor headshots, LinkedIn portraits, executive profiles — clean, polished, and natural. Makeup that says "confident" without looking like makeup on camera.</p>
                </div>
                <div class="benefit">
                    <h3>Boudoir & Glamour</h3>
                    <p>Built for the mood and the lighting of your specific session. Dramatic, soft, retro, or editorial — Jane collaborates with your photographer to match the look to the concept.</p>
                </div>
                <div class="benefit">
                    <h3>Maternity & Family Portraits</h3>
                    <p>Luminous, timeless, and natural — makeup that photographs beautifully and feels comfortable across a multi-hour portrait session outdoors or in-studio.</p>
                </div>
                <div class="benefit">
                    <h3>Lookbooks & Brand Content</h3>
                    <p>E-commerce, brand campaigns, seasonal lookbooks — makeup calibrated for the brand's visual world, consistent across a full day of multiple looks.</p>
                </div>
                <div class="benefit">
                    <h3>Editorial & Fashion</h3>
                    <p>High fashion, avant-garde, or beauty editorial. Jane works from mood boards, references, and direct creative direction to deliver looks that belong in print.</p>
                </div>
                <div class="benefit">
                    <h3>Hair Finishing for Shoots</h3>
                    <p>Blowouts, waves, or styled finishes added to any photoshoot booking. Hair that reads through the lens with the same precision as the makeup.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- PROCESS -->
    <section class="section">
        <div class="container" style="max-width:820px;">
            <h2>How a Photoshoot Booking Works</h2>
            <div class="benefits-grid">
                <div class="benefit">
                    <h3>1. Share the Concept</h3>
                    <p>Send Jane your mood board, photographer name, shoot location, and any references. She prepares the right kit and any specialty products ahead of time.</p>
                </div>
                <div class="benefit">
                    <h3>2. She Arrives Set-Ready</h3>
                    <p>Jane shows up with everything needed — lighting reference, pro kit, and hair tools if included. Setup takes minutes so your shoot time is protected.</p>
                </div>
                <div class="benefit">
                    <h3>3. Collaborate & Adjust</h3>
                    <p>Jane checks the monitor with your photographer between setups and adjusts in real time. What you see on camera is exactly what was intended.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- AREAS -->
    <section class="section section--dark">
        <div class="container">
            <h2>Photoshoot Makeup Available In</h2>
            <ul class="areas-list">
                <?php foreach ($areas as $a): ?>
                <li><a href="/area-served/<?php echo $a['slug']; ?>.php">Photoshoot Makeup in <?php echo $a['name']; ?></a></li>
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
                <?php if ($s['slug'] !== 'photoshoot-editorial-makeup'): ?>
                <li><a href="/services/<?php echo $s['slug']; ?>.php"><?php echo $s['name']; ?></a></li>
                <?php endif; ?>
                <?php endforeach; ?>
            </ul>
        </div>
    </section>

    <!-- CTA -->
    <section class="section section--dark">
        <div class="container" style="text-align:center;">
            <h2>Book Jane for Your Shoot</h2>
            <p style="max-width:540px; margin:0 auto 1.5rem;">Share your shoot date, concept, and location. Jane will confirm availability and discuss the look before your session so you're both aligned from the first frame.</p>
            <div style="display:flex; gap:1rem; justify-content:center; flex-wrap:wrap; margin-top:var(--space-sm);">
                <a href="/contact.php" class="btn btn-primary">Book Your Photoshoot</a>
                <a href="tel:<?php echo phoneRaw(); ?>" class="btn btn-outline"><?php echo SITE_PHONE; ?></a>
            </div>
        </div>
    </section>

</main>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
