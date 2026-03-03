<?php
/**
 * Jane Makeup & Hair — Area Served: West Hollywood
 */
define('allowed', true);
require_once __DIR__ . '/../includes/config.php';
$city            = 'West Hollywood';
$pageTitle       = "Visiting West Hollywood, CA: Things To Do & Local Guide | Jane Makeup & Hair";
$pageDescription = "Explore top attractions in West Hollywood, CA, from the Sunset Strip to the Pacific Design Center, and discover premium mobile makeup and hair services by Jane.";
$pageSchema      = json_encode([
    '@context'    => 'https://schema.org',
    '@type'       => 'BeautySalon',
    'name'        => SITE_NAME,
    'telephone'   => SITE_PHONE,
    'areaServed'  => [['@type' => 'City', 'name' => $city . ', CA']],
    'url'         => SITE_URL . '/area-served/west-hollywood',
    'priceRange'  => '$$',
]);
require_once __DIR__ . '/../includes/header.php';
?>

<main class="bg-background-dark text-white pt-24 pb-12 font-display">

    <!-- HERO -->
    <section class="relative px-6 py-24 md:py-32 overflow-hidden border-solid border-b border-white/10">
        <div class="absolute inset-0 z-0">
            <img class="w-full h-full object-cover object-center opacity-20 filter grayscale" alt="West Hollywood, CA - Jane Makeup & Hair" src="https://res.cloudinary.com/jane-makeup-hair/image/upload/w_2000,c_scale,q_80,fl_keep_iptc/v1772435225/AHVAweqkoFFX11GiN4aZJMLEC4mVWQxnY_Rr18blC2HGy12G3ITW9_BBWWClSkpcJLr-gdEg__gjlFNwxSi6sdh90TU7HZjk0DLlwEbtV_xXUjVPcL0p6H5PFtuz1bMM9wNvNPvQdwlg_w503_agxfr8.jpg" />
            <div class="absolute inset-0 bg-gradient-to-t from-background-dark via-background-dark/80 to-transparent"></div>
        </div>
        <div class="container relative z-10 max-w-4xl mx-auto text-center">
            <p class="text-xs font-bold uppercase tracking-[0.45em] text-primary mb-4">City Guide</p>
            <h1 class="text-[9.5vw] md:text-6xl font-black uppercase tracking-tighter mb-6 leading-none">What To Do While Visiting <?php echo $city; ?>?</h1>
            <p class="text-lg md:text-xl text-white/80 max-w-2xl mx-auto leading-relaxed">Known as one of LA’s most vibrant and style-conscious neighborhoods, West Hollywood is the heart of design, entertainment, and nightlife on the Sunset Strip.</p>
        </div>
    </section>

    <!-- HUB CONTENT -->
    <section class="px-6 py-24 relative">
        <div class="container max-w-5xl mx-auto">
            
            <div class="mb-20">
                <h2 class="text-3xl font-black uppercase tracking-tight mb-10 text-primary border-b border-white/10 pb-4">Top Attractions for Visitors</h2>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
                    <div class="p-5 sm:p-6 md:p-8 rounded-2xl border-solid border border-white/10 bg-white/5 hover:bg-white/10 transition-colors flex flex-col h-full">
                        <img src="/assets/images/area-served/west-hollywood/sunset-strip.jpg" alt="The Sunset Strip in West Hollywood" class="w-full h-48 object-cover rounded-xl mb-6 filter grayscale opacity-80" />
                        <h3 class="text-xl font-bold mb-3 text-white">The Sunset Strip</h3>
                        <p class="text-white/70 leading-relaxed flex-grow">Experience a legendary 1.5-mile stretch of Sunset Boulevard wrapped in iconic billboards, rock clubs like The Roxy and Viper Room, and elevated dining. It remains the glittering epicenter of West Hollywood's entertainment legacy.</p>
                    </div>
                    
                    <div class="p-5 sm:p-6 md:p-8 rounded-2xl border-solid border border-white/10 bg-white/5 hover:bg-white/10 transition-colors flex flex-col h-full">
                        <img src="/assets/images/area-served/west-hollywood/pacific-design-center.jpg" alt="Pacific Design Center in West Hollywood" class="w-full h-48 object-cover rounded-xl mb-6 filter grayscale opacity-80" />
                        <h3 class="text-xl font-bold mb-3 text-white">Pacific Design Center (PDC)</h3>
                        <p class="text-white/70 leading-relaxed flex-grow">Dubbed the "Blue Whale" for its striking massive blue glass exterior, the PDC is a multi-use facility for the design community featuring over 100 showrooms of high-end furniture, fabrics, and architectural products.</p>
                    </div>
                    
                    <div class="p-5 sm:p-6 md:p-8 rounded-2xl border-solid border border-white/10 bg-white/5 hover:bg-white/10 transition-colors">
                        <h3 class="text-xl font-bold mb-3 text-white">Santa Monica Boulevard (Route 66)</h3>
                        <p class="text-white/70 leading-relaxed">This bustling thoroughfare serves as the cultural hub of WeHo. Known for its LGBTQ+ history, it offers highly active nightlife, eclectic boutiques, and some of the best people-watching spots in greater Los Angeles.</p>
                    </div>

                    <div class="p-5 sm:p-6 md:p-8 rounded-2xl border-solid border border-white/10 bg-white/5 hover:bg-white/10 transition-colors">
                        <h3 class="text-xl font-bold mb-3 text-white">Chateau Marmont</h3>
                        <p class="text-white/70 leading-relaxed">Perched just above the Sunset Strip, this castle-like boutique hotel has hosted Hollywood elite since the 1920s. Stop by the famously secluded patio restaurant for a cocktail and a taste of old Hollywood glamour.</p>
                    </div>
                </div>
            </div>

            <div class="mb-20">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-start text-left">
                    <div>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d105650.04505041921!2d-118.4414631628108!3d34.08985651543325!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2bebfe09ba3a9%3A0x6e26210db20757db!2sWest%20Hollywood%2C%20CA!5e1!3m2!1sen!2sus!4v1740924151700!5m2!1sen!2sus" class="w-full h-[400px] border-solid border border-white/10 rounded-2xl filter grayscale opacity-70" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div>
                        <h2 class="text-3xl font-black uppercase tracking-tight mb-4 text-white">Major Neighborhoods</h2>
                        <p class="text-white/70 leading-relaxed text-sm mb-6">West Hollywood packs incredible diversity into its 1.9 square miles. From the quiet residential borders of Beverly Hills to the high-end shopping strips and energetic nightlife, the city offers extremely diverse options.</p>
                        
                        <ul class="grid grid-cols-1 md:grid-cols-2 gap-x-8">
                            <li class="py-3 border-solid border-b border-white/10 text-white/80 text-sm flex items-center gap-3">
                                <span class="text-primary text-[10px]">●</span> Norma Triangle
                            </li>
                            <li class="py-3 border-solid border-b border-white/10 text-white/80 text-sm flex items-center gap-3">
                                <span class="text-primary text-[10px]">●</span> West Hollywood West
                            </li>
                            <li class="py-3 border-solid border-b border-white/10 text-white/80 text-sm flex items-center gap-3">
                                <span class="text-primary text-[10px]">●</span> Center City
                            </li>
                            <li class="py-3 border-solid border-b border-white/10 text-white/80 text-sm flex items-center gap-3">
                                <span class="text-primary text-[10px]">●</span> West Hollywood North
                            </li>
                            <li class="py-3 border-solid border-b border-white/10 text-white/80 text-sm flex items-center gap-3">
                                <span class="text-primary text-[10px]">●</span> West Hollywood East
                            </li>
                            <li class="py-3 border-solid border-b border-white/10 text-white/80 text-sm flex items-center gap-3">
                                <span class="text-primary text-[10px]">●</span> Sunset Strip
                            </li>
                            <li class="py-3 border-solid border-b border-white/10 text-white/80 text-sm flex items-center gap-3">
                                <span class="text-primary text-[10px]">●</span> Melrose District
                            </li>
                            <li class="py-3 border-solid border-b border-white/10 text-white/80 text-sm flex items-center gap-3">
                                <span class="text-primary text-[10px]">●</span> Design District
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div>
                <h2 class="text-3xl font-black uppercase tracking-tight mb-8 text-primary border-b border-white/10 pb-4">Serving Our <?php echo $city; ?> Community</h2>
                <div class="p-8 md:p-12 rounded-2xl border-solid border border-primary/20" style="background: rgba(201,168,76,0.03);">
                    <p class="text-white/80 leading-relaxed text-lg mb-6">Jane Makeup & Hair is proud to offer luxury mobile beauty services right to your door in West Hollywood. Whether you’re preparing for a wedding at The London West Hollywood, need <a href="/services/special-event-makeup-hair.php" class="text-primary hover:underline">Special Event Makeup & Hair</a> for a red carpet premiere on the Sunset Strip, or require flawless <a href="/services/photoshoot-editorial-makeup.php" class="text-primary hover:underline">Photoshoot & Editorial Makeup</a> at a local studio, Jane arrives fully equipped.</p>
                    
                    <p class="text-white/80 leading-relaxed text-lg mb-8">Ready for a camera-ready transformation without the hassle of LA traffic? Enjoy premium <a href="/services/mobile-bridal-makeup-hair.php" class="text-primary hover:underline">Bridal Makeup & Hair</a> and <a href="/services/airbrush-makeup.php" class="text-primary hover:underline">Airbrush Makeup</a> applications in the comfort of your own suite or home.</p>

                    <h4 class="text-xl font-bold text-white mb-4">Services</h4>
                    <ul class="grid grid-cols-1 md:grid-cols-2 gap-3 mb-8">
                        <?php foreach ($services as $s): ?>
                        <li>
                            <a href="/services/<?php echo $s['slug']; ?>" class="text-white/70 hover:text-primary transition-colors flex items-center gap-2">
                                <span class="text-primary text-xs">◆</span> <?php echo $s['name']; ?>
                            </a>
                        </li>
                        <?php endforeach; ?>
                    </ul>

                    <a href="/contact.php" class="inline-block px-8 py-4 bg-primary text-background-dark font-black text-sm uppercase tracking-widest rounded-full hover:bg-primary-hover transition-colors shadow-lg">Contact Jane For Availability &rarr;</a>
                </div>
            </div>

        </div>
    </section>

    <!-- NEARBY AREAS -->
    <section class="px-6 py-20 border-solid border-t border-white/10">
        <div class="container max-w-4xl mx-auto text-center">
            <h2 class="text-2xl font-bold mb-8 text-white">Also Explore Nearby Areas</h2>
            <ul class="flex flex-wrap justify-center gap-3">
                <?php foreach ($areas as $a): ?>
                <?php if ($a['slug'] !== 'west-hollywood'): ?>
                <li>
                    <a href="/area-served/<?php echo $a['slug']; ?>" class="inline-block px-5 py-2 rounded-full border-solid border border-white/10 bg-white/5 hover:bg-primary/10 hover:border-primary hover:text-primary transition-colors text-sm font-medium">
                        <?php echo $a['name']; ?>
                    </a>
                </li>
                <?php endif; ?>
                <?php endforeach; ?>
            </ul>
        </div>
    </section>

</main>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
