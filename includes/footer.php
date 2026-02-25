<?php
/**
 * Jane Makeup & Hair - Global Footer partial.
 * Auto-builds service and area columns from $services and $areas in config.php.
 */
if (!defined('allowed')) { header('Location: /'); exit; }
?>

<!-- ===== SITE FOOTER ===== -->
<footer class="site-footer">
    <div class="footer-inner">

        <!-- Brand Column -->
        <div class="footer-brand">
            <p class="footer-logo"><?php echo SITE_NAME; ?></p>
            <p class="footer-tagline"><?php echo SITE_TAGLINE; ?></p>
            <p>Licensed hairstylist &amp; professional makeup artist serving West Hollywood, Beverly Hills, Burbank, and all of greater Los Angeles. 15+ years of TV production experience — delivered to your door.</p>
            <!-- Social Links -->
            <div class="footer-social">
                <a href="<?php echo SOCIAL_INSTAGRAM; ?>" target="_blank" rel="noopener" aria-label="Instagram">Instagram</a>
                <a href="<?php echo SOCIAL_YELP; ?>"      target="_blank" rel="noopener" aria-label="Yelp">Yelp</a>
                <a href="<?php echo SOCIAL_YOUTUBE; ?>"   target="_blank" rel="noopener" aria-label="YouTube">YouTube</a>
                <a href="<?php echo SOCIAL_PINTEREST; ?>" target="_blank" rel="noopener" aria-label="Pinterest">Pinterest</a>
            </div>
        </div>

        <!-- Services Column -->
        <div class="footer-col">
            <h4>Services</h4>
            <ul>
                <?php foreach ($services as $s): ?>
                <li><a href="/services/<?php echo $s['slug']; ?>"><?php echo $s['name']; ?></a></li>
                <?php endforeach; ?>
            </ul>
        </div>

        <!-- Areas Column -->
        <div class="footer-col">
            <h4>Areas Served</h4>
            <ul>
                <?php foreach ($areas as $a): ?>
                <li><a href="/area-served/<?php echo $a['slug']; ?>"><?php echo $a['name']; ?></a></li>
                <?php endforeach; ?>
            </ul>
        </div>

        <!-- Contact Column -->
        <div class="footer-col">
            <h4>Contact</h4>
            <ul class="footer-contact">
                <li>
                    <a href="tel:<?php echo phoneRaw(); ?>"><?php echo SITE_PHONE; ?></a>
                </li>
                <li>
                    <a href="mailto:<?php echo SITE_EMAIL; ?>"><?php echo SITE_EMAIL; ?></a>
                </li>
                <li><?php echo BUSINESS_ADDRESS; ?></li>
            </ul>
            <a href="/contact" class="btn btn-primary footer-cta">Book Jane</a>
        </div>

    </div><!-- /.footer-inner -->

    <div class="footer-bottom">
        <p>&copy; <?php echo currentYear(); ?> <?php echo SITE_NAME; ?>. All Rights Reserved.</p>
        <nav aria-label="Footer legal">
            <a href="/privacy">Privacy Policy</a>
            <a href="/terms">Terms of Service</a>
        </nav>
    </div>
</footer>
<!-- ===== END FOOTER ===== -->

<script src="/assets/js/main.js"></script>
</body>
</html>
