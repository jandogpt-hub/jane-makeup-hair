<?php
/**
 * Jane Makeup & Hair — Special Event Makeup & Hair
 * Pillar page: merges event-makeup + updo-hairstyling into one intent cluster.
 * Targets: "event makeup hair West Hollywood", "gala makeup artist LA",
 *           "prom makeup hair Los Angeles", "birthday glam makeup artist",
 *           "updo hair stylist Los Angeles", "red carpet makeup artist WeHo".
 */
define('allowed', true);
$pageTitle       = 'Special Event Makeup & Hair West Hollywood | Jane Makeup & Hair';
$pageDescription = 'Mobile event makeup and hair styling for galas, red carpet, prom, quinceañeras, birthday glam, and corporate events in West Hollywood & LA. Jane comes to you. Book today.';
require_once __DIR__ . '/../includes/header.php';
?>

<main style="margin-top:72px;">

    <!-- HERO -->
    <section class="section">
        <div class="container">
            <h1>Special Event Makeup & Hair in West Hollywood</h1>
            <p class="section-sub">Galas, red carpet, birthday glam, prom, quinceañeras, award ceremonies — Jane delivers camera-ready makeup and hair styling directly to your location, every time.</p>
            <a href="/contact.php" class="btn btn-primary">Book Your Event Look</a>
        </div>
    </section>

    <!-- INTRO -->
    <section class="section">
        <div class="container" style="max-width:820px;">
            <h2>Red Carpet Ready — Wherever the Venue Is</h2>
            <p>Jane's 15+ years in film, television, and editorial work means she understands one thing most event artists don't: how a look has to perform under stage lighting, flash photography, and HD cameras simultaneously. She doesn't just make you look beautiful in a mirror — she makes you photograph beautifully from every angle.</p>
            <p style="margin-top:1rem;">She arrives at your hotel, home, or venue fully equipped with professional lighting, her full kit, and a calm, unhurried presence that keeps your getting-ready time feeling luxurious rather than rushed. Whether you want a sleek, polished updo or bold, smoky glam, Jane consults and customizes until the look is exactly right for your event and your face.</p>
            <blockquote class="review-card" style="margin-top:var(--space-md);">
                <p>&ldquo;She styled my hair for the Elton John AIDS Foundation after-party and I couldn't have been happier. Such a calm, lovely presence to have around while getting ready.&rdquo;</p>
                <footer>— Arianna S. &nbsp; ⭐⭐⭐⭐⭐</footer>
            </blockquote>
        </div>
    </section>

    <!-- EVENTS WE COVER -->
    <section class="section section--dark">
        <div class="container">
            <h2>Events We Specialize In</h2>
            <div class="benefits-grid">
                <div class="benefit">
                    <h3>Galas & Black-Tie Events</h3>
                    <p>Polished, editorial makeup and hair built for ballroom lighting, press photographers, and a full evening of looking your best.</p>
                </div>
                <div class="benefit">
                    <h3>Red Carpet & Award Ceremonies</h3>
                    <p>HD-ready makeup with precise contouring and a hair style that reads from every angle — on a camera lens and in person.</p>
                </div>
                <div class="benefit">
                    <h3>Prom & Homecoming</h3>
                    <p>A full glam experience at home before the big night. Jane coordinates timing so you arrive camera-ready without any rushing.</p>
                </div>
                <div class="benefit">
                    <h3>Quinceañeras & Debutante Events</h3>
                    <p>Classic, romantic, and luminous looks for one of the most photographed days of your life — delivered with care and precision.</p>
                </div>
                <div class="benefit">
                    <h3>Birthday Glam</h3>
                    <p>Whether it's an intimate dinner or a full celebration, Jane creates a bold, unforgettable look that captures every moment beautifully.</p>
                </div>
                <div class="benefit">
                    <h3>Corporate & Award Events</h3>
                    <p>Polished, professional makeup for keynotes, panels, corporate headshots, and award presentations — confident without being overdone.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- HAIR STYLING -->
    <section class="section">
        <div class="container" style="max-width:820px;">
            <h2>Hair Styling for Every Event</h2>
            <p>Beyond makeup, Jane brings full hair finishing to every event booking. Her editorial background means every updo, wave pattern, and blowout is structured to last all night and read beautifully in photos — not just look good in the dressing room mirror.</p>
            <div class="benefits-grid" style="margin-top:var(--space-md);">
                <div class="benefit">
                    <h3>Classic & Braided Updos</h3>
                    <p>Chignons, French twists, braided updos, and romantic loose pinned styles anchored to last the full event.</p>
                </div>
                <div class="benefit">
                    <h3>Waves & Curls</h3>
                    <p>Vintage Hollywood waves, loose beach waves, defined spiral curls — styled with the heat tools and products that hold under venue conditions.</p>
                </div>
                <div class="benefit">
                    <h3>Sleek Blowouts & Finishes</h3>
                    <p>Straight and sleek, volumizing, or bouncy curl blowouts — the polished finishing touch for any event look.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- AREAS -->
    <section class="section section--dark">
        <div class="container">
            <h2>Event Makeup & Hair Available In</h2>
            <ul class="areas-list">
                <?php foreach ($areas as $a): ?>
                <li><a href="/area-served/<?php echo $a['slug']; ?>.php">Event Makeup & Hair in <?php echo $a['name']; ?></a></li>
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
                <?php if ($s['slug'] !== 'special-event-makeup-hair'): ?>
                <li><a href="/services/<?php echo $s['slug']; ?>.php"><?php echo $s['name']; ?></a></li>
                <?php endif; ?>
                <?php endforeach; ?>
            </ul>
        </div>
    </section>

    <!-- CTA -->
    <section class="section section--dark">
        <div class="container" style="text-align:center;">
            <h2>Book Your Event Glam</h2>
            <p style="max-width:540px; margin:0 auto 1.5rem;">Tell Jane the event, the date, and your vision. She'll handle the rest — makeup, hair, and timing — so you arrive looking exactly the way you imagined.</p>
            <div style="display:flex; gap:1rem; justify-content:center; flex-wrap:wrap; margin-top:var(--space-sm);">
                <a href="/contact.php" class="btn btn-primary">Book Your Event Look</a>
                <a href="tel:<?php echo phoneRaw(); ?>" class="btn btn-outline"><?php echo SITE_PHONE; ?></a>
            </div>
        </div>
    </section>

</main>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
