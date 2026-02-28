<?php
/**
 * Jane Makeup & Hair - Configuration File
 * Central data hub: update values here and they propagate site-wide.
 */

if (!defined('allowed')) define('allowed', true);

// Load secrets (Turnstile keys, etc.) — never committed to git
if (file_exists(__DIR__ . '/secrets.php')) {
    include_once __DIR__ . '/secrets.php';
}

// Defaults for local dev / fresh clones
if (!defined('TURNSTILE_SITE_KEY'))   define('TURNSTILE_SITE_KEY', '');
if (!defined('TURNSTILE_SECRET_KEY')) define('TURNSTILE_SECRET_KEY', '');
if (!defined('FORM_RECIPIENT'))       define('FORM_RECIPIENT', 'makeupjaneusa@gmail.com');

// =============================================
// BUSINESS IDENTITY
// =============================================
define('SITE_NAME',    'Jane Makeup & Hair');
define('SITE_TAGLINE', 'Red Carpet Beauty, Anywhere You Are');
define('SITE_PHONE',   '(323) 593-1246');
define('SITE_EMAIL',   'makeupjaneusa@gmail.com');
define('SITE_URL',     'https://janemakeuphair.com');

// Business Info for LocalBusiness Schema
define('BUSINESS_ADDRESS', '6028 Lindenhurst Ave, Los Angeles, CA 90036');
define('BUSINESS_HOURS',   'Mo-Su 05:00-23:30'); // reflects Yelp hours
define('BUSINESS_GEO_LAT', '34.0654981');
define('BUSINESS_GEO_LNG', '-118.3585138');

// =============================================
// SOCIAL MEDIA
// =============================================
define('SOCIAL_INSTAGRAM', 'https://www.instagram.com/makeupjane_com/');
define('SOCIAL_YOUTUBE',   'https://www.youtube.com/@janemakeuphair');
define('SOCIAL_PINTEREST', 'https://www.pinterest.com/janemakeupandhair/');
define('SOCIAL_LINKEDIN',  'https://www.linkedin.com/in/evgeniia-golyzhenkova-494948260');
define('SOCIAL_TWITTER',   'https://x.com/makeuphairjane');
define('SOCIAL_YELP',      'https://www.yelp.com/biz/janemakeup-beverly-hills-4');

// =============================================
// SERVICES LIST
// Used to auto-build nav dropdowns, footer links, and cross-linking sections.
// =============================================
$services = [
    ['name' => 'Mobile Bridal Makeup & Hair',       'slug' => 'mobile-bridal-makeup-hair',       'icon' => '💍'],
    ['name' => 'Special Event Makeup & Hair',       'slug' => 'special-event-makeup-hair',     'icon' => '🎭'],
    ['name' => 'Film, TV & Production Makeup',      'slug' => 'film-tv-production-makeup',     'icon' => '🎬'],
    ['name' => 'Photoshoot & Editorial Makeup',     'slug' => 'photoshoot-editorial-makeup',   'icon' => '📸'],
    ['name' => 'Airbrush Makeup',                   'slug' => 'airbrush-makeup',               'icon' => '🎨'],
];

// =============================================
// SERVICE AREAS LIST
// Used to auto-build nav dropdowns, footer links, and cross-linking sections.
// =============================================
$areas = [
    ['name' => 'West Hollywood', 'slug' => 'west-hollywood'],
    ['name' => 'Beverly Hills',  'slug' => 'beverly-hills'],
    ['name' => 'Burbank',        'slug' => 'burbank'],
    ['name' => 'Bel Air',        'slug' => 'bel-air'],
    ['name' => 'Santa Monica',   'slug' => 'santa-monica'],
    ['name' => 'Culver City',    'slug' => 'culver-city'],
    ['name' => 'Los Angeles',    'slug' => 'los-angeles'],
    ['name' => 'Studio City',    'slug' => 'studio-city'],
];

// =============================================
// HELPERS
// =============================================

/**
 * Returns a root-relative asset path.
 *
 * @param string $path Relative path within /assets/
 * @return string
 */
function asset($path) {
    return '/assets/' . ltrim($path, '/');
}

/**
 * Returns the current 4-digit year.
 *
 * @return string
 */
function currentYear() {
    return date('Y');
}

/**
 * Strips all non-numeric characters from the phone number for tel: links.
 *
 * @return string
 */
function phoneRaw() {
    return preg_replace('/[^0-9]/', '', SITE_PHONE);
}
