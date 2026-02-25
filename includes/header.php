<?php
/**
 * Jane Makeup & Hair - Global Header / <head> partial.
 * Expects $pageTitle, $pageDescription, and optionally $pageSchema to be
 * defined by the including page before this file is required.
 */
if (!defined('allowed')) { header('Location: /'); exit; }
require_once __DIR__ . '/config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Title & Meta -->
    <title><?php echo isset($pageTitle) ? htmlspecialchars($pageTitle) : SITE_NAME; ?></title>
    <meta name="description" content="<?php echo isset($pageDescription) ? htmlspecialchars($pageDescription) : SITE_TAGLINE; ?>">
    <link rel="canonical" href="<?php echo SITE_URL . $_SERVER['REQUEST_URI']; ?>">

    <!-- Open Graph -->
    <meta property="og:type"        content="website">
    <meta property="og:site_name"   content="<?php echo SITE_NAME; ?>">
    <meta property="og:title"       content="<?php echo isset($pageTitle) ? htmlspecialchars($pageTitle) : SITE_NAME; ?>">
    <meta property="og:description" content="<?php echo isset($pageDescription) ? htmlspecialchars($pageDescription) : SITE_TAGLINE; ?>">
    <meta property="og:url"         content="<?php echo SITE_URL . $_SERVER['REQUEST_URI']; ?>">

    <!-- LocalBusiness Schema (default — pages override $pageSchema for richer markup) -->
    <?php if (isset($pageSchema)): ?>
    <script type="application/ld+json"><?php echo $pageSchema; ?></script>
    <?php else: ?>
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "BeautySalon",
        "name": "<?php echo SITE_NAME; ?>",
        "telephone": "<?php echo SITE_PHONE; ?>",
        "email": "<?php echo SITE_EMAIL; ?>",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "6028 Lindenhurst Ave",
            "addressLocality": "Los Angeles",
            "addressRegion": "CA",
            "postalCode": "90036",
            "addressCountry": "US"
        },
        "geo": {
            "@type": "GeoCoordinates",
            "latitude": "<?php echo BUSINESS_GEO_LAT; ?>",
            "longitude": "<?php echo BUSINESS_GEO_LNG; ?>"
        },
        "url": "<?php echo SITE_URL; ?>",
        "priceRange": "$$",
        "openingHours": "Mo-Su 05:00-23:30",
        "sameAs": [
            "<?php echo SOCIAL_INSTAGRAM; ?>",
            "<?php echo SOCIAL_YELP; ?>",
            "<?php echo SOCIAL_YOUTUBE; ?>"
        ]
    }
    </script>
    <?php endif; ?>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@300;500;700&family=Syne:wght@400;700;800&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>

<!-- ===== SITE HEADER / NAV ===== -->
<header class="site-header" id="top">
    <div class="container header-inner">

        <!-- Logo -->
        <a href="/" class="logo" aria-label="<?php echo SITE_NAME; ?> — Home">
            <span class="logo-name">JANE</span>
            <span class="logo-tag">WeHo Exclusive</span>
        </a>

        <!-- Desktop Navigation -->
        <nav class="main-nav" aria-label="Main navigation">
            <ul>
                <li><a href="/">Home</a></li>

                <!-- Services Dropdown -->
                <li class="has-dropdown">
                    <a href="#" aria-haspopup="true" aria-expanded="false">Services</a>
                    <ul class="dropdown" role="menu">
                        <?php foreach ($services as $s): ?>
                        <li role="menuitem">
                            <a href="/services/<?php echo $s['slug']; ?>">
                                <?php echo $s['name']; ?>
                            </a>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </li>

                <!-- Areas Dropdown -->
                <li class="has-dropdown">
                    <a href="#" aria-haspopup="true" aria-expanded="false">Studio</a>
                    <ul class="dropdown" role="menu">
                        <?php foreach ($areas as $a): ?>
                        <li role="menuitem">
                            <a href="/area-served/<?php echo $a['slug']; ?>">
                                <?php echo $a['name']; ?>
                            </a>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </li>

                <li><a href="/gallery">Folio</a></li>
                <li><a href="/about">Jane</a></li>
            </ul>

            <!-- CTA -->
            <a href="/contact" class="btn btn-primary">Book</a>
        </nav>

        <!-- Mobile Toggle -->
        <button class="mobile-menu-toggle" aria-label="Open menu" aria-expanded="false">
            ☰
        </button>

    </div><!-- /.header-inner -->
</header>
<!-- ===== END HEADER ===== -->
