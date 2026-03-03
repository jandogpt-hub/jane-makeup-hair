<?php
/**
 * Jane Makeup & Hair — Thank You / Booking Confirmation
 */
define('allowed', true);
$pageTitle       = 'Thank You — Jane Makeup & Hair';
$pageDescription = 'Your inquiry has been received. Jane will be in touch within 24 hours to confirm your booking.';
require_once __DIR__ . '/includes/header.php';
?>

<main class="bg-background-dark text-white pt-32 pb-24 font-display min-h-[80vh] flex items-center justify-center border-t border-solid border-white/10" style="background: rgba(255,255,255,0.01);">
    <div class="container px-6 text-center max-w-2xl mx-auto">
        <h1 class="text-[8.5vw] md:text-5xl font-black uppercase tracking-tighter mb-4 text-primary">You're All Set!</h1>
        <p class="text-white/80 text-lg mb-4">Thank you for reaching out. Jane will be in touch within 24 hours to confirm your booking details.</p>
        <p class="text-white/50 text-base mb-8">In the meantime, check out the gallery for inspiration.</p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="/gallery.php" class="px-8 py-4 bg-primary text-background-dark font-black text-sm uppercase tracking-widest rounded-full hover:bg-primary-hover transition-colors shadow-lg" style="box-shadow: 0 0 30px rgba(201,168,76,0.35);">View Gallery</a>
            <a href="/" class="px-8 py-4 bg-transparent border-solid border border-white/20 text-white font-black text-sm uppercase tracking-widest rounded-full hover:bg-white/5 hover:border-white/40 transition-colors">Back to Home</a>
        </div>
    </div>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
