<?php
/**
 * Jane Makeup & Hair — 404 Not Found
 */
define('allowed', true);
$pageTitle       = '404 — Page Not Found | Jane Makeup & Hair';
$pageDescription = 'This page could not be found. Explore Jane Makeup & Hair\'s services and book your mobile beauty session in Los Angeles.';
require_once __DIR__ . '/includes/header.php';
?>

<main class="bg-background-dark text-white pt-32 pb-24 font-display min-h-[80vh] flex items-center justify-center border-t border-solid border-white/10" style="background: rgba(255,255,255,0.01);">
    <div class="container px-6 text-center max-w-2xl mx-auto">
        <h1 class="text-[7.5vw] md:text-5xl font-black uppercase tracking-tighter mb-4">Page Not Found</h1>
        <p class="text-white/70 text-lg mb-8">The page you're looking for has moved or doesn't exist.</p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="/" class="px-8 py-4 bg-primary text-background-dark font-black text-sm uppercase tracking-widest rounded-full hover:bg-primary-hover transition-colors shadow-lg" style="box-shadow: 0 0 30px rgba(201,168,76,0.35);">Go Home</a>
            <a href="/contact.php" class="px-8 py-4 bg-transparent border-solid border border-white/20 text-white font-black text-sm uppercase tracking-widest rounded-full hover:bg-white/5 hover:border-white/40 transition-colors">Book Jane</a>
        </div>
    </div>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
