<?php
/**
 * Jane Makeup & Hair — Contact / Booking Inquiry
 */
define('allowed', true);
$pageTitle       = 'Book Jane | Contact Jane Makeup & Hair — Los Angeles';
$pageDescription = 'Book Jane for your wedding, event, photoshoot, or special occasion. Mobile makeup and hair services across West Hollywood, Beverly Hills, Burbank, and greater Los Angeles.';
require_once __DIR__ . '/includes/header.php';
?>

<main style="margin-top:72px;">

    <section class="section">
        <div class="container" style="max-width:760px;">

            <h1>Book Your Session with Jane</h1>
            <p style="margin-bottom:var(--space-md); color:var(--color-text-muted);">Tell Jane about your event and she will respond within 24 hours. All services are mobile — Jane comes to you.</p>

            <form
                id="booking-form"
                action="/process-contact"
                method="POST"
                novalidate>

                <div class="form-row">
                    <div class="form-group">
                        <label for="name">Your Name <span aria-hidden="true">*</span></label>
                        <input type="text"  id="name"  name="name"  required autocomplete="name" placeholder="Jane Smith">
                    </div>
                    <div class="form-group">
                        <label for="email">Email Address <span aria-hidden="true">*</span></label>
                        <input type="email" id="email" name="email" required autocomplete="email" placeholder="you@example.com">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label for="phone">Phone Number</label>
                        <input type="tel"   id="phone" name="phone" autocomplete="tel" placeholder="(323) 555-0100">
                    </div>
                    <div class="form-group">
                        <label for="event_date">Event Date</label>
                        <input type="date"  id="event_date" name="event_date">
                    </div>
                </div>

                <div class="form-group">
                    <label for="service">Service Needed <span aria-hidden="true">*</span></label>
                    <select id="service" name="service" required>
                        <option value="">Select a service&hellip;</option>
                        <?php foreach ($services as $s): ?>
                        <option value="<?php echo htmlspecialchars($s['slug']); ?>"><?php echo htmlspecialchars($s['name']); ?></option>
                        <?php endforeach; ?>
                        <option value="other">Other / Not Sure</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="location">Event Location / City <span aria-hidden="true">*</span></label>
                    <input type="text" id="location" name="location" required placeholder="e.g., Beverly Hills Hotel, West Hollywood">
                </div>

                <div class="form-group">
                    <label for="message">Tell Jane About Your Event</label>
                    <textarea id="message" name="message" rows="5" placeholder="Describe your event, the look you want, number of people, and any questions you have…"></textarea>
                </div>

                <!-- Honeypot spam trap -->
                <div style="display:none;" aria-hidden="true">
                    <input type="text" name="website" tabindex="-1" autocomplete="off">
                </div>

                <button type="submit" class="btn btn-primary" style="width:100%; margin-top:var(--space-sm);">Send My Booking Request</button>

            </form>

            <p style="text-align:center; margin-top:var(--space-md); color:var(--color-text-muted); font-size:0.875rem;">
                Prefer to call? <a href="tel:<?php echo phoneRaw(); ?>" style="color:var(--color-accent);"><?php echo SITE_PHONE; ?></a>
            </p>

        </div>
    </section>

</main>

<style>
.form-row    { display:grid; grid-template-columns:1fr 1fr; gap:var(--space-sm); }
.form-group  { display:flex; flex-direction:column; gap:0.4rem; margin-bottom:var(--space-sm); }
label        { font-size:0.85rem; font-weight:500; letter-spacing:0.04em; text-transform:uppercase; color:var(--color-text-muted); }
input, select, textarea {
    padding:0.75rem 1rem;
    border:1px solid var(--color-border);
    border-radius:var(--border-radius);
    font-family:var(--font-body);
    font-size:1rem;
    color:var(--color-text);
    background:var(--color-white);
    transition:border-color var(--transition);
    width:100%;
}
input:focus, select:focus, textarea:focus {
    outline:none;
    border-color:var(--color-accent);
}
@media(max-width:600px) { .form-row { grid-template-columns:1fr; } }
</style>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
