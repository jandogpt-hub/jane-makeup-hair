<?php
/**
 * Jane Makeup & Hair — Contact / Booking Inquiry
 */
define('allowed', true);
$pageTitle       = 'Book Jane | Contact Jane Makeup & Hair — Los Angeles';
$pageDescription = 'Book Jane for your wedding, event, photoshoot, or special occasion. Mobile makeup and hair services across West Hollywood, Beverly Hills, Burbank, and greater Los Angeles.';
require_once __DIR__ . '/includes/header.php';
?>

<main class="bg-background-dark text-white pt-24 pb-12 font-display">

    <!-- HERO -->
    <section class="relative px-6 py-24 md:py-32 overflow-hidden border-solid border-b border-white/10">
        <div class="absolute inset-0 z-0">
            <img class="w-full h-full object-cover object-top opacity-20 filter grayscale" alt="Contact Jane Makeup & Hair for booking inquiries" src="https://res.cloudinary.com/jane-makeup-hair/image/upload/w_2000,h_1333,c_fill,g_face,q_80,fl_keep_iptc/v1772246476/jane-mobile-makeup-hair-west-hollywood-010_ehtzdf.jpg" />
            <div class="absolute inset-0 bg-gradient-to-t from-background-dark via-background-dark/80 to-transparent"></div>
        </div>
        <div class="container relative z-10 max-w-4xl mx-auto text-center">
            <p class="text-xs font-bold uppercase tracking-[0.45em] text-primary mb-4">Inquire</p>
            <h1 class="text-4xl md:text-6xl font-black uppercase tracking-tighter mb-6 leading-none">Book Your Session</h1>
            <p class="text-lg md:text-xl text-white/80 max-w-2xl mx-auto leading-relaxed">Tell Jane about your event. All services are mobile — she comes to you.</p>
        </div>
    </section>

    <!-- FORM SECTION -->
    <section class="px-6 py-24 relative">
        <div class="container max-w-3xl mx-auto">
            <div class="p-8 md:p-12 rounded-2xl border-solid border border-white/10 bg-white/5 relative overflow-hidden">
                <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-background-dark via-primary to-background-dark opacity-50"></div>
                
                <p class="text-white/70 mb-8 text-center">Jane responds to all inquiries within 24 hours.</p>

                <form id="booking-form" action="/contact.php" method="POST" class="space-y-6" novalidate>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="flex flex-col gap-2">
                            <label for="name" class="text-xs font-bold uppercase tracking-widest text-white/60">Your Name <span class="text-primary">*</span></label>
                            <input type="text" id="name" name="name" required autocomplete="name" placeholder="Jane Smith" class="w-full px-4 py-3 bg-background-dark border-solid border border-white/20 rounded-lg text-white font-medium focus:outline-none focus:border-primary transition-colors placeholder:text-white/20">
                        </div>
                        <div class="flex flex-col gap-2">
                            <label for="email" class="text-xs font-bold uppercase tracking-widest text-white/60">Email Address <span class="text-primary">*</span></label>
                            <input type="email" id="email" name="email" required autocomplete="email" placeholder="you@example.com" class="w-full px-4 py-3 bg-background-dark border-solid border border-white/20 rounded-lg text-white font-medium focus:outline-none focus:border-primary transition-colors placeholder:text-white/20">
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="flex flex-col gap-2">
                            <label for="phone" class="text-xs font-bold uppercase tracking-widest text-white/60">Phone Number</label>
                            <input type="tel" id="phone" name="phone" autocomplete="tel" placeholder="(323) 555-0100" class="w-full px-4 py-3 bg-background-dark border-solid border border-white/20 rounded-lg text-white font-medium focus:outline-none focus:border-primary transition-colors placeholder:text-white/20">
                        </div>
                        <div class="flex flex-col gap-2">
                            <label for="event_date" class="text-xs font-bold uppercase tracking-widest text-white/60">Event Date</label>
                            <input type="date" id="event_date" name="event_date" class="w-full px-4 py-3 bg-background-dark border-solid border border-white/20 rounded-lg text-white font-medium focus:outline-none focus:border-primary transition-colors">
                        </div>
                    </div>

                    <div class="flex flex-col gap-2">
                        <label for="service" class="text-xs font-bold uppercase tracking-widest text-white/60">Service Needed <span class="text-primary">*</span></label>
                        <select id="service" name="service" required class="w-full px-4 py-3 bg-background-dark border-solid border border-white/20 rounded-lg text-white font-medium focus:outline-none focus:border-primary transition-colors appearance-none cursor-pointer">
                            <option value="">Select a service&hellip;</option>
                            <?php foreach ($services as $s): ?>
                            <option value="<?php echo htmlspecialchars($s['slug']); ?>"><?php echo htmlspecialchars($s['name']); ?></option>
                            <?php endforeach; ?>
                            <option value="other">Other / Not Sure</option>
                        </select>
                    </div>

                    <div class="flex flex-col gap-2">
                        <label for="location" class="text-xs font-bold uppercase tracking-widest text-white/60">Event Location / City <span class="text-primary">*</span></label>
                        <input type="text" id="location" name="location" required placeholder="e.g., Beverly Hills Hotel, West Hollywood" class="w-full px-4 py-3 bg-background-dark border-solid border border-white/20 rounded-lg text-white font-medium focus:outline-none focus:border-primary transition-colors placeholder:text-white/20">
                    </div>

                    <div class="flex flex-col gap-2">
                        <label for="message" class="text-xs font-bold uppercase tracking-widest text-white/60">Tell Jane About Your Event</label>
                        <textarea id="message" name="message" rows="5" placeholder="Describe your event, the look you want, number of people, and any questions you have…" class="w-full px-4 py-3 bg-background-dark border-solid border border-white/20 rounded-lg text-white font-medium focus:outline-none focus:border-primary transition-colors placeholder:text-white/20 resize-y"></textarea>
                    </div>

                    <!-- Honeypot spam trap -->
                    <div class="hidden" aria-hidden="true">
                        <input type="text" name="website" tabindex="-1" autocomplete="off">
                    </div>

                    <div class="pt-4">
                        <button type="submit" class="w-full py-4 bg-primary text-background-dark font-black text-sm uppercase tracking-widest rounded-lg hover:bg-primary-hover transition-colors shadow-lg" style="box-shadow: 0 0 20px rgba(201,168,76,0.2);">Send My Booking Request</button>
                    </div>

                </form>

                <div class="mt-8 pt-6 border-solid border-t border-white/10 text-center">
                    <p class="text-sm font-medium text-white/60">
                        Prefer to call or text? <a href="tel:<?php echo phoneRaw(); ?>" class="text-primary hover:text-white transition-colors ml-1"><?php echo SITE_PHONE; ?></a>
                    </p>
                </div>
            </div>
        </div>
    </section>

</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
