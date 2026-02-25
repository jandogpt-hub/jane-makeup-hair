<?php
/**
 * Jane Makeup & Hair — Photoshoot Makeup
 */
define('allowed', true);
$pageTitle       = 'Photoshoot Makeup Artist Los Angeles | Jane Makeup & Hair';
$pageDescription = 'Editorial and commercial photoshoot makeup and hair in Los Angeles. Airbrush and by-hand application tailored for your lighting setup and camera style. Mobile service — Jane comes to set.';
require_once __DIR__ . '/../includes/header.php';
?>

<main style="margin-top:72px;">
    <section class="section">
        <div class="container">
            <h1>Photoshoot Makeup Artist in Los Angeles</h1>
            <p class="section-sub">Editorial, commercial, and portrait shoot makeup — Jane comes on location and builds a look designed for your camera and lighting setup.</p>
            <a href="/contact" class="btn btn-primary">Book for Your Shoot</a>
        </div>
    </section>
    <section class="section">
        <div class="container" style="max-width:800px;">
            <h2>The Camera Doesn't Lie — Neither Does Jane's Work</h2>
            <p>Generic looks don’t translate on camera. Jane’s background in TV productions and film sets means she knows exactly how makeup reads under different lighting rigs, lens focal lengths, and color grading. She applies airbrush or by-hand foundation depending on the shoot’s needs, and she adjusts the look in real time as the session progresses.</p>
        </div>
    </section>
    <section class="section">
        <div class="container">
            <h2>Photoshoot Makeup Available In</h2>
            <ul class="areas-list">
                <?php foreach ($areas as $a): ?>
                <li><a href="/area-served/<?php echo $a['slug']; ?>">Photoshoot Makeup in <?php echo $a['name']; ?></a></li>
                <?php endforeach; ?>
            </ul>
        </div>
    </section>
    <section class="section">
        <div class="container">
            <h2>Other Services</h2>
            <ul class="areas-list">
                <?php foreach ($services as $s): ?>
                <?php if ($s['slug'] !== 'photoshoot-makeup'): ?>
                <li><a href="/services/<?php echo $s['slug']; ?>"><?php echo $s['name']; ?></a></li>
                <?php endif; ?>
                <?php endforeach; ?>
            </ul>
        </div>
    </section>
    <section class="section section--dark">
        <div class="container" style="text-align:center;">
            <h2>Book Jane for Your Next Shoot</h2>
            <a href="/contact" class="btn btn-primary" style="margin-top:var(--space-sm);">Book Now</a>
        </div>
    </section>
</main>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
