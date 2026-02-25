<?php
/**
 * Jane Makeup & Hair — Thank You / Booking Confirmation
 */
define('allowed', true);
$pageTitle       = 'Thank You — Jane Makeup & Hair';
$pageDescription = 'Your inquiry has been received. Jane will be in touch within 24 hours to confirm your booking.';
require_once __DIR__ . '/includes/header.php';
?>

<main class="container section" style="min-height:60vh; display:flex; flex-direction:column; justify-content:center; align-items:center; text-align:center; gap:1.5rem; margin-top:72px;">
    <h1>You're All Set!</h1>
    <p>Thank you for reaching out. Jane will be in touch within 24 hours to confirm your booking details.</p>
    <p style="color:var(--color-text-muted); font-size:0.9rem;">In the meantime, check out the gallery for inspiration.</p>
    <div style="display:flex; gap:1rem; flex-wrap:wrap; justify-content:center;">
        <a href="/gallery" class="btn btn-primary">View Gallery</a>
        <a href="/" class="btn btn-outline">Back to Home</a>
    </div>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
