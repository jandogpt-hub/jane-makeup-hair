<?php
/**
 * Jane Makeup & Hair — Film, TV & Production Makeup
 * NEW pillar page targeting the West Hollywood entertainment industry vertical.
 * Targets: "on-set makeup artist West Hollywood", "film makeup artist LA",
 *           "TV makeup artist Los Angeles", "commercial makeup artist WeHo",
 *           "music video makeup artist LA", "production makeup artist Los Angeles".
 */
define('allowed', true);
$pageTitle       = 'Film, TV & Production Makeup Artist West Hollywood | Jane Makeup & Hair';
$pageDescription = 'On-set makeup artist for film, television, music videos, and commercial productions in West Hollywood & Los Angeles. 15+ years of professional production experience. Available for daily and long-term bookings.';
require_once __DIR__ . '/../includes/header.php';
?>

<main style="margin-top:72px;">

    <!-- HERO -->
    <section class="section">
        <div class="container">
            <h1>Film, TV & Production Makeup Artist in West Hollywood</h1>
            <p class="section-sub">Jane has spent 15+ years on professional sets across Los Angeles — delivering camera-ready makeup for film, television, music videos, and commercial productions that holds through full shoot days.</p>
            <a href="/contact.php" class="btn btn-primary">Inquire About Production Bookings</a>
        </div>
    </section>

    <!-- INTRO -->
    <section class="section">
        <div class="container" style="max-width:820px;">
            <h2>The Discipline of Set-Ready Makeup</h2>
            <p>Production work demands a different skill set than event or bridal artistry. A look has to survive multiple takes, varying lighting setups, sweat under studio lights, and hold consistency across a full shoot day or multi-day production. Jane's background spans television broadcasts, independent films, music video productions, and commercial shoots — which means she understands continuity, HD camera behavior, and the pace of a working set.</p>
            <p style="margin-top:1rem;">She works efficiently under time pressure, communicates clearly with directors and DPs about how a look will read on camera, and maintains meticulous continuity logs for longer productions. West Hollywood and greater LA productions can book Jane for daily calls or ongoing project engagements.</p>
        </div>
    </section>

    <!-- PRODUCTION TYPES -->
    <section class="section section--dark">
        <div class="container">
            <h2>Production Types We Support</h2>
            <div class="benefits-grid">
                <div class="benefit">
                    <h3>Film & Independent Productions</h3>
                    <p>Studio and independent films across all genres. Jane handles continuity, department coordination, and camera-ready application — from DPs and leads to supporting cast.</p>
                </div>
                <div class="benefit">
                    <h3>Television & Streaming</h3>
                    <p>Scripted drama, comedy series, reality formats, talk shows, and streaming originals. High-volume sets with tight turnaround — Jane stays on pace without sacrificing quality.</p>
                </div>
                <div class="benefit">
                    <h3>Music Videos</h3>
                    <p>Major label and independent productions. Bold, editorial looks built to photograph under creative lighting — or clean, natural looks for performance-focused concepts.</p>
                </div>
                <div class="benefit">
                    <h3>Commercials & Advertising</h3>
                    <p>Brand campaigns, national TV spots, digital advertising shoots, and product photography. Makeup that reads on camera and communicates the brand's visual identity.</p>
                </div>
                <div class="benefit">
                    <h3>Broadcast & News</h3>
                    <p>On-camera talent makeup for news, broadcast, documentaries, and podcast video productions. Natural, polished, and calibrated for HD studio lighting rigs.</p>
                </div>
                <div class="benefit">
                    <h3>On-Location Shoots</h3>
                    <p>Jane is fully mobile with a self-contained kit. She travels to your stage, location, or studio — no fixed address needed, no compromises on setup quality.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- WHY JANE FOR PRODUCTION -->
    <section class="section">
        <div class="container" style="max-width:820px;">
            <h2>Why Productions in West Hollywood Book Jane</h2>
            <p>The entertainment industry in West Hollywood and greater LA is dense with competition — which means productions can be selective. Jane brings a combination of technical skill, professionalism, and on-set experience that keeps her on call lists for repeat productions. She's worked alongside DoPs and directors who trust that the makeup they see in the monitor is the makeup they intended — not an approximation of it.</p>
            <div class="benefits-grid" style="margin-top:var(--space-md);">
                <div class="benefit">
                    <h3>HD & Camera-Calibrated</h3>
                    <p>Every look is built with an understanding of how makeup reads on sensor — color correction for daylight vs. tungsten, specular highlights, and texture management.</p>
                </div>
                <div class="benefit">
                    <h3>Continuity Discipline</h3>
                    <p>Detailed notes and reference photos after every setup change. Productions with long shoot days or multi-day schedules stay consistent from first take to last.</p>
                </div>
                <div class="benefit">
                    <h3>Set Etiquette</h3>
                    <p>Quiet, fast, and out of the way when not needed. Jane respects set hierarchy and works with ADs and UPMs to stay within the production's scheduling requirements.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- AREAS -->
    <section class="section section--dark">
        <div class="container">
            <h2>Production Makeup Available In</h2>
            <ul class="areas-list">
                <?php foreach ($areas as $a): ?>
                <li><a href="/area-served/<?php echo $a['slug']; ?>.php">Film & TV Makeup Artist in <?php echo $a['name']; ?></a></li>
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
                <?php if ($s['slug'] !== 'film-tv-production-makeup'): ?>
                <li><a href="/services/<?php echo $s['slug']; ?>.php"><?php echo $s['name']; ?></a></li>
                <?php endif; ?>
                <?php endforeach; ?>
            </ul>
        </div>
    </section>

    <!-- CTA -->
    <section class="section section--dark">
        <div class="container" style="text-align:center;">
            <h2>Inquire About Your Production</h2>
            <p style="max-width:540px; margin:0 auto 1.5rem;">Send Jane your shoot dates, location, headcount, and production type. She'll confirm availability and provide a production rate quote within 24 hours.</p>
            <div style="display:flex; gap:1rem; justify-content:center; flex-wrap:wrap; margin-top:var(--space-sm);">
                <a href="/contact.php" class="btn btn-primary">Submit a Production Inquiry</a>
                <a href="tel:<?php echo phoneRaw(); ?>" class="btn btn-outline"><?php echo SITE_PHONE; ?></a>
            </div>
        </div>
    </section>

</main>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
