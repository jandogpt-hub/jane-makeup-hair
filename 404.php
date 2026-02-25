<?php
/**
 * Jane Makeup & Hair — 404 Not Found
 */
define('allowed', true);
$pageTitle       = '404 — Page Not Found | Jane Makeup & Hair';
$pageDescription = 'This page could not be found. Explore Jane Makeup & Hair\'s services and book your mobile beauty session in Los Angeles.';
require_once __DIR__ . '/includes/header.php';
?>

<main class="container section" style="min-height:60vh; display:flex; flex-direction:column; justify-content:center; align-items:center; text-align:center; gap:1.5rem; margin-top:72px;">
    <h1>Page Not Found</h1>
    <p>The page you're looking for has moved or doesn't exist.</p>
    <div style="display:flex; gap:1rem; flex-wrap:wrap; justify-content:center;">
        <a href="/" class="btn btn-primary">Go Home</a>
        <a href="/contact" class="btn btn-outline">Book Jane</a>
    </div>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
