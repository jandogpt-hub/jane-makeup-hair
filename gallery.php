<?php
/**
 * Jane Makeup & Hair — Gallery / Portfolio
 */
define('allowed', true);
$pageTitle       = 'Gallery | Jane Makeup & Hair — Los Angeles Portfolio';
$pageDescription = 'Browse Jane\'s portfolio of bridal makeup, editorial hair, event glam, and more. 230+ photos of real client work across Los Angeles.';
require_once __DIR__ . '/includes/header.php';
?>

<main class="bg-background-dark text-white pt-24 pb-12 font-display">

    <!-- HERO -->
    <section class="relative px-6 py-24 md:py-32 overflow-hidden border-solid border-b border-white/10">
        <div class="absolute inset-0 z-0">
            <img class="w-full h-full object-cover object-top opacity-20 filter grayscale" alt="Jane's portfolio of makeup and hair artistry" src="https://res.cloudinary.com/jane-makeup-hair/image/upload/w_2000,h_1333,c_fill,g_face,q_80,fl_keep_iptc/v1772246476/jane-mobile-makeup-hair-west-hollywood-010_ehtzdf.jpg" />
            <div class="absolute inset-0 bg-gradient-to-t from-background-dark via-background-dark/80 to-transparent"></div>
        </div>
        <div class="container relative z-10 max-w-4xl mx-auto text-center">
            <p class="text-xs font-bold uppercase tracking-[0.45em] text-primary mb-4">Portfolio</p>
            <h1 class="text-[9.5vw] md:text-6xl font-black uppercase tracking-tighter mb-6 leading-none">Our Gallery</h1>
            <p class="text-lg md:text-xl text-white/80 max-w-2xl mx-auto leading-relaxed">Real clients. Real results. Browse Jane's portfolio across weddings, events, photoshoots, and more.</p>
        </div>
    </section>

    <!-- CONTENT -->
    <section class="px-6 py-24 relative">
        <div class="container max-w-6xl mx-auto text-center">
            <div class="inline-block p-12 rounded-2xl border-solid border border-white/10 bg-white/5">
                <p class="text-xl text-white/80 font-medium mb-6">Gallery images coming soon.</p>
                <p class="text-white/60 mb-8">In the meantime, you can view over 230 photos of Jane's recent work on Yelp.</p>
                <a href="<?php echo SOCIAL_YELP; ?>" target="_blank" rel="noopener" class="inline-flex px-8 py-4 bg-transparent border-solid border border-white/20 text-white font-black text-sm uppercase tracking-widest rounded-full hover:bg-white/5 hover:border-white/40 transition-colors">View Portfolio on Yelp</a>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="px-6 py-32 relative text-center border-t border-solid border-white/10" style="background: rgba(255,255,255,0.01);">
        <div class="container max-w-3xl mx-auto relative z-10">
            <h2 class="text-[8.5vw] md:text-5xl font-black uppercase tracking-tighter mb-8">Like What You See?</h2>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="/contact.php" class="px-8 py-4 bg-primary text-background-dark font-black text-sm uppercase tracking-widest rounded-full hover:bg-primary-hover transition-colors shadow-lg" style="box-shadow: 0 0 30px rgba(201,168,76,0.35);">Book Your Session</a>
            </div>
        </div>
    </section>

</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
