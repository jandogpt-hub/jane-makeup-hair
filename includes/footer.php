<?php
/**
 * Jane Makeup & Hair — Global Footer Partial.
 * Inspired by DT Painter framework, styled for Jane.
 */
if (!defined('allowed')) { header('Location: /'); exit; }
?>
    <!-- BEGIN: Footer -->
    <footer class="bg-[#0A0A0A] border-t border-white/5 pt-24 pb-12 text-white relative z-10">
        <div class="max-w-7xl mx-auto px-6 grid grid-cols-1 md:grid-cols-4 gap-12 mb-20">
            <div class="space-y-6">
                <!-- Logo/Brand Area -->
                <div class="flex items-center gap-2 mb-8 -ml-2">
                    <img src="https://res.cloudinary.com/jane-makeup-hair/image/upload/v1772086055/new-jane-mobile-makeup-hair-logo-light_zjszqm.png" alt="Jane Makeup & Hair" class="h-16 md:h-20 w-auto brightness-0 invert object-contain scale-[1.5] origin-left" />
                </div>
                <p class="text-white/40 text-sm leading-relaxed max-w-xs">
                    Elite makeup and hair artistry for the red carpet and beyond. Sculpting the West Hollywood identity.
                </p>
                <div class="flex gap-4 pt-4">
                    <a class="text-white/40 hover:text-primary transition-colors font-bold uppercase tracking-widest text-[10px]" href="<?php echo defined('SOCIAL_INSTAGRAM') ? SOCIAL_INSTAGRAM : '#'; ?>">Instagram</a>
                    <a class="text-white/40 hover:text-primary transition-colors font-bold uppercase tracking-widest text-[10px]" href="<?php echo defined('SOCIAL_YOUTUBE') ? SOCIAL_YOUTUBE : '#'; ?>">YouTube</a>
                    <a class="text-white/40 hover:text-primary transition-colors font-bold uppercase tracking-widest text-[10px]" href="<?php echo defined('SOCIAL_YELP') ? SOCIAL_YELP : '#'; ?>">Yelp</a>
                </div>
            </div>
            
            <div>
                <h4 class="text-xs font-bold tracking-widest uppercase mb-8 text-white mt-2">Our Artistry</h4>
                <ul class="space-y-4 text-sm text-white/50 font-medium">
                    <?php if(!empty($services)): foreach($services as $s): ?>
                        <li><a class="hover:text-primary transition-colors" href="/services/<?php echo $s['slug']; ?>.php"><?php echo $s['name']; ?></a></li>
                    <?php endforeach; endif; ?>
                </ul>
            </div>
            
            <div>
                <h4 class="text-xs font-bold tracking-widest uppercase mb-8 text-white mt-2">Available In</h4>
                <ul class="space-y-4 text-sm text-white/50 font-medium">
                    <?php if(!empty($areas)): foreach($areas as $a): ?>
                        <li><a class="hover:text-primary transition-colors" href="/area-served/<?php echo $a['slug']; ?>.php"><?php echo $a['name']; ?></a></li>
                    <?php endforeach; endif; ?>
                </ul>
            </div>
            
            <div>
                <h4 class="text-xs font-bold tracking-widest uppercase mb-8 text-white mt-2">Studio Location</h4>
                <p class="text-sm text-white/50 mb-4 leading-relaxed">Located in the heart of West Hollywood. By appointment only.</p>
                <div class="relative w-full h-48 rounded-xl overflow-hidden border border-white/10 group">
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3305.1566608664098!2d-118.3585138!3d34.0654981!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2b934b4e31f3d%3A0xc5a77a32ae6a1f0e!2sJane%20Makeup%20%26%20Hair!5e0!3m2!1sen!2sus!4v1772249027531!5m2!1sen!2sus" 
                        class="absolute inset-0 w-full h-full grayscale opacity-70 group-hover:grayscale-0 group-hover:opacity-100 transition-all duration-700"
                        style="border:0;" 
                        allowfullscreen="" 
                        loading="lazy" 
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                    <!-- Subtle dark overlay to blend with the footer initially -->
                    <div class="absolute inset-0 bg-background-dark/20 pointer-events-none group-hover:bg-transparent transition-colors duration-700"></div>
                </div>
            </div>
        </div>
        
        <div class="max-w-7xl mx-auto px-6 pt-12 border-t border-white/5 flex flex-col md:flex-row justify-between items-center gap-6">
            <p class="text-[10px] text-white/20 tracking-widest uppercase text-center md:text-left">© <?php echo date('Y'); ?> Jane Makeup & Hair Artistry. All Rights Reserved.</p>
            <div class="flex gap-8">
                <a class="text-[10px] text-white/20 tracking-widest uppercase hover:text-white transition-colors" href="#">Privacy Policy</a>
                <a class="text-[10px] text-white/20 tracking-widest uppercase hover:text-white transition-colors" href="#">Terms of Service</a>
            </div>
        </div>
    </footer>
    <!-- END: Footer -->
    
    <!-- Mobile Bottom Navigation (Legacy fallback if needed, but the DT Painter mobile menu is the primary UX) -->
    <nav class="fixed bottom-0 left-0 right-0 z-40 bg-[#0A0A0A]/95 backdrop-blur-md flex items-center justify-around px-4 py-3 border-t border-white/10 pb-8 sm:pb-3 md:hidden">
        <a class="flex flex-col items-center gap-1 text-primary" href="/">
            <span class="material-symbols-outlined text-2xl">home</span>
            <span class="text-[10px] font-bold uppercase tracking-tighter">Home</span>
        </a>
        <a class="flex flex-col items-center gap-1 text-white/40 hover:text-primary transition-colors" href="/contact.php">
            <span class="material-symbols-outlined text-2xl">auto_awesome</span>
            <span class="text-[10px] font-bold uppercase tracking-tighter">Book</span>
        </a>
        <a class="flex flex-col items-center gap-1 text-white/40 hover:text-primary transition-colors" href="/gallery.php">
            <span class="material-symbols-outlined text-2xl">photo_library</span>
            <span class="text-[10px] font-bold uppercase tracking-tighter">Gallery</span>
        </a>
        <a class="flex flex-col items-center gap-1 text-white/40 hover:text-primary transition-colors" href="/about.php">
            <span class="material-symbols-outlined text-2xl">account_circle</span>
            <span class="text-[10px] font-bold uppercase tracking-tighter">Jane</span>
        </a>
    </nav>
    
</body>
</html>
