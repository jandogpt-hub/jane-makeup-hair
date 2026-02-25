<?php
/**
 * Jane Makeup & Hair - Global Footer partial.
 * Auto-builds service and area columns from $services and $areas in config.php.
 */
if (!defined('allowed')) { header('Location: /'); exit; }
?>

<!-- ===== SITE FOOTER ===== -->
<footer class="site-footer">
    <div class="container">
        <div class="footer-grid">

            <!-- Brand Column -->
            <div class="footer-col">
                <span style="font-size: 1.5rem; font-weight: 800; letter-spacing: -0.03em; text-transform: uppercase; color: var(--color-text); margin-bottom: 0.5rem; display:block;">JANE</span>
                <p class="font-mono text-orange" style="font-size: 0.6rem; margin-bottom: 1.5rem;">WeHo Exclusive</p>
                <p style="font-size: 0.95rem; color: var(--color-text-muted); margin-bottom: 1.5rem;">Licensed hairstylist &amp; professional makeup artist serving West Hollywood, Beverly Hills, Burbank, and all of greater Los Angeles. 15+ years of TV production experience — delivered to your door.</p>
                <!-- Social Links -->
                <div style="display: flex; gap: 1rem;">
                    <a href="<?php echo SOCIAL_INSTAGRAM; ?>" target="_blank" rel="noopener" aria-label="Instagram" style="opacity: 0.5; transition: opacity 0.3s;" onmouseover="this.style.opacity=1" onmouseout="this.style.opacity=0.5">IG</a>
                    <a href="<?php echo SOCIAL_YELP; ?>"      target="_blank" rel="noopener" aria-label="Yelp" style="opacity: 0.5; transition: opacity 0.3s;" onmouseover="this.style.opacity=1" onmouseout="this.style.opacity=0.5">YELP</a>
                    <a href="<?php echo SOCIAL_YOUTUBE; ?>"   target="_blank" rel="noopener" aria-label="YouTube" style="opacity: 0.5; transition: opacity 0.3s;" onmouseover="this.style.opacity=1" onmouseout="this.style.opacity=0.5">YT</a>
                    <a href="<?php echo SOCIAL_PINTEREST; ?>" target="_blank" rel="noopener" aria-label="Pinterest" style="opacity: 0.5; transition: opacity 0.3s;" onmouseover="this.style.opacity=1" onmouseout="this.style.opacity=0.5">PIN</a>
                </div>
            </div>

            <!-- Services Column -->
            <div class="footer-col">
                <h3>Services</h3>
                <ul>
                    <?php foreach ($services as $s): ?>
                    <li><a href="/services/<?php echo $s['slug']; ?>"><?php echo $s['name']; ?></a></li>
                    <?php endforeach; ?>
                </ul>
            </div>

            <!-- Areas Column -->
            <div class="footer-col">
                <h3>Areas Served</h3>
                <ul>
                    <?php foreach ($areas as $a): ?>
                    <li><a href="/area-served/<?php echo $a['slug']; ?>"><?php echo $a['name']; ?></a></li>
                    <?php endforeach; ?>
                </ul>
            </div>

            <!-- Contact Column -->
            <div class="footer-col">
                <h3>Contact</h3>
                <ul style="margin-bottom: 1.5rem;">
                    <li><a href="tel:<?php echo phoneRaw(); ?>"><?php echo SITE_PHONE; ?></a></li>
                    <li><a href="mailto:<?php echo SITE_EMAIL; ?>"><?php echo SITE_EMAIL; ?></a></li>
                    <li style="color: var(--color-text-muted); font-size: 0.95rem;"><?php echo BUSINESS_ADDRESS; ?></li>
                </ul>
                <a href="/contact" class="btn btn-outline" style="padding: 0.75rem 1.5rem; font-size: 0.75rem;">Secure Session</a>
            </div>

        </div><!-- /.footer-grid -->

        <div class="footer-bottom">
            <p>&copy; <?php echo currentYear(); ?> <?php echo SITE_NAME; ?>. All Rights Reserved.</p>
            <nav aria-label="Footer legal">
                <a href="/privacy">Privacy Policy</a>
                <a href="/terms">Terms</a>
            </nav>
        </div>
    </div>
</footer>
<!-- ===== END FOOTER ===== -->

<script src="/assets/js/main.js"></script>
</body>
</html>
