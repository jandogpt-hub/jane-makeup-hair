<?php
/**
 * Jane Makeup & Hair — Global Header Partial.
 */
if (!defined('allowed')) { header('Location: /'); exit; }

include_once __DIR__ . '/config.php';
?>
<!DOCTYPE html>
<html class="dark scroll-smooth" lang="en">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>

    <!-- SEO Title & Meta -->
    <title><?php echo isset($pageTitle) ? htmlspecialchars($pageTitle) : 'JANE | West Hollywood Editorial Beauty'; ?></title>
    <meta name="description" content="<?php echo isset($pageDescription) ? htmlspecialchars($pageDescription) : 'Elite makeup and hair artistry for the red carpet and beyond. West Hollywood, CA.'; ?>">

    <!-- Cloudflare Turnstile -->
    <script src="https://challenges.cloudflare.com/turnstile/v0/api.js" async defer></script>

    <!-- Tailwind CDN + Plugins -->
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>

    <!-- Tailwind Config -->
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#f45925",
                        "background-light": "#f8f6f5",
                        "background-dark": "#221410",
                        "champagne": "#d4af37",
                        "brand-dark": "#0A0A0A"
                    },
                    fontFamily: {
                        "display": ["Space Grotesk", "sans-serif"]
                    },
                    borderRadius: {
                        "DEFAULT": "0.5rem",
                        "lg": "1rem",
                        "xl": "1.5rem",
                        "full": "9999px"
                    },
                },
            },
        }
    </script>

    <!-- Custom Styles -->
    <style>
        .glass {
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }
        .glass-morphism {
            background: rgba(34, 20, 16, 0.7);
            backdrop-filter: blur(16px);
            -webkit-backdrop-filter: blur(16px);
            border-bottom: 1px solid rgba(255, 255, 255, 0.05);
        }
        .liquid-gradient {
            background: linear-gradient(135deg, #221410 0%, #3d1c14 50%, #f45925 150%);
        }
        body { min-height: max(884px, 100dvh); }
        .no-scrollbar::-webkit-scrollbar { display: none; }
        .no-scrollbar { -ms-overflow-style: none; scrollbar-width: none; }
        .glass-card {
            background: rgba(34, 20, 16, 0.6);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(244, 89, 37, 0.1);
        }
        .text-outline {
            -webkit-text-stroke: 1px rgba(255, 255, 255, 0.3);
            color: transparent;
        }
        .gold-gradient {
            background: linear-gradient(90deg, #d4af37 0%, #f7e7ce 50%, #d4af37 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        .grain-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: 50;
            opacity: 0.03;
            background-image: url(https://lh3.googleusercontent.com/aida-public/AB6AXuDKHziKZgpu6jKZa9PjZPy1YBIuUs88grrLMS-LwDS5OWI2F4cEJHk68Mk-fOduy5MX1K_O3ZBWJP-yD1T1o125O48uSAq_AZlBKlcmGtikfG__VrmIuR1h5OGWzMz82xZuwxo1LNroxBxUiNt4kRuvKhgEhcEXKem7lTMzXogvsg6eI2I8aFrYSLZluqEQXxkOen5vIyeD6bGsfZE7Aybzfvk2yk3zDSYPozKjzHwhYGH2-KJXIrvGIOYzXzeVI1ioiFMyWfBx_Pi4);
        }
        ::-webkit-scrollbar { width: 5px; }
        ::-webkit-scrollbar-track { background: #221410; }
        ::-webkit-scrollbar-thumb { background: #f45925; border-radius: 10px; }
    </style>
</head>
<body class="bg-background-dark font-display text-white selection:bg-primary selection:text-white overflow-x-hidden">
    <div class="grain-overlay"></div>

    <!-- Navigation (Inspired by DT Painter UX Framework) -->
    <nav class="fixed top-0 w-full z-[100] py-3 lg:py-4 transition-all duration-300 mix-blend-difference" id="main-nav">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 flex justify-between items-center h-16">
            
            <!-- Logo -->
            <div class="flex-shrink-0 flex items-center gap-2 relative z-50">
                <a href="/" class="flex items-center gap-2">
                    <img src="https://res.cloudinary.com/dkceuqcix/image/upload/v1772086055/new-jane-mobile-makeup-hair-logo-light_zjszqm.png" alt="Jane Makeup & Hair" class="h-12 md:h-16 w-auto brightness-0 invert object-contain scale-[1.5] origin-left" />
                </a>
            </div>

            <!-- Mobile: Center CTA -->
            <div class="lg:hidden flex-1 flex justify-center">
                 <a href="/contact.php" class="flex items-center bg-primary px-6 py-2 rounded-full shadow-lg hover:bg-white hover:text-primary transition-all duration-500">
                    <span class="text-xs font-bold uppercase tracking-widest text-white hover:text-primary">Book</span>
                 </a>
            </div>

            <!-- Desktop Menu -->
            <div class="hidden lg:flex gap-8 text-sm font-medium tracking-widest uppercase items-center text-white">
                <a class="hover:text-primary transition-colors" href="/">Home</a>
                
                <!-- Services Dropdown (From Config) -->
                <div class="relative group">
                    <button class="flex items-center gap-1 hover:text-primary transition-colors focus:outline-none py-4">
                        Services
                        <svg class="w-4 h-4 text-white/50 group-hover:text-primary transition-colors" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <!-- Dropdown Menu -->
                    <div class="absolute top-full left-0 mt-0 w-64 bg-[#110A08] border border-white/10 rounded-sm shadow-xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 transform origin-top-left z-50">
                        <div class="py-2 flex flex-col">
                            <?php if(!empty($services)): foreach($services as $s): ?>
                            <a href="/services/<?php echo $s['slug']; ?>.php" class="px-5 py-3 hover:bg-white/5 hover:text-primary text-white/90 transition-colors border-b border-white/5 flex items-center justify-between group/item">
                                <?php echo $s['name']; ?>
                                <span class="text-primary opacity-0 group-hover/item:opacity-100 transition-opacity">→</span>
                            </a>
                            <?php endforeach; endif; ?>
                        </div>
                    </div>
                </div>

                <!-- Areas Served Dropdown (From Config) -->
                <div class="relative group">
                    <button class="flex items-center gap-1 hover:text-primary transition-colors focus:outline-none py-4">
                        Available In
                        <svg class="w-4 h-4 text-white/50 group-hover:text-primary transition-colors" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <!-- Dropdown Menu -->
                    <div class="absolute top-full left-0 mt-0 w-56 bg-[#110A08] border border-white/10 rounded-sm shadow-xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 transform origin-top-left z-50 max-h-[60vh] overflow-y-auto">
                        <div class="py-2 flex flex-col">
                            <?php if(!empty($areas)): foreach($areas as $a): ?>
                            <a href="/area-served/<?php echo $a['slug']; ?>.php" class="px-5 py-3 hover:bg-white/5 hover:text-primary text-white/90 transition-colors border-b border-white/5 flex items-center justify-between group/item">
                                <?php echo $a['name']; ?>
                                <span class="text-primary opacity-0 group-hover/item:opacity-100 transition-opacity">→</span>
                            </a>
                            <?php endforeach; endif; ?>
                        </div>
                    </div>
                </div>

                <a class="hover:text-primary transition-colors" href="/gallery.php">Folio</a>
                <a class="hover:text-primary transition-colors" href="/about.php">About</a>
            </div>

            <!-- CTAs (Desktop) -->
            <div class="hidden lg:flex gap-4 items-center">
                <a href="/contact.php" class="bg-primary text-white hover:bg-white hover:text-primary transition-all duration-500 px-6 py-2 rounded-full text-sm font-bold uppercase tracking-tighter shadow-lg">
                    Book Session
                </a>
            </div>
            
            <!-- Mobile Menu Button -->
            <div class="lg:hidden flex items-center z-[70]">
                 <button id="mobile-menu-btn" class="text-white p-2 focus:outline-none relative">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
                 </button>
            </div>
        </div>
        
        <!-- Mobile Menu Overlay -->
        <div id="mobile-menu" class="fixed top-0 left-0 w-full h-screen bg-background-dark/98 backdrop-blur-xl z-[60] hidden flex-col pt-24 px-6 gap-6 overflow-y-auto transition-opacity duration-300 pb-20">
             <a href="/" class="text-2xl font-bold text-white border-b border-white/5 pb-4 uppercase tracking-tighter">Home</a>
             
             <!-- Mobile Services -->
             <div class="flex flex-col gap-4">
                <span class="text-xs font-bold text-primary uppercase tracking-widest">Services</span>
                <?php if(!empty($services)): foreach($services as $s): ?>
                <a href="/services/<?php echo $s['slug']; ?>.php" class="text-lg text-white/70 pl-4 border-l border-white/10 hover:border-primary hover:text-white transition-all"><?php echo $s['name']; ?></a>
                <?php endforeach; endif; ?>
             </div>

             <a href="/gallery.php" class="text-2xl font-bold text-white border-b border-white/5 pb-4 mt-2 uppercase tracking-tighter">Folio</a>
             
             <!-- Mobile Areas -->
             <div class="flex flex-col gap-4 border-b border-white/5 pb-4 mt-2">
                <span class="text-xs font-bold text-primary uppercase tracking-widest">Available In</span>
                <?php if(!empty($areas)): foreach($areas as $a): ?>
                <a href="/area-served/<?php echo $a['slug']; ?>.php" class="text-lg text-white/70 pl-4 border-l border-white/10 hover:border-primary hover:text-white transition-all"><?php echo $a['name']; ?></a>
                <?php endforeach; endif; ?>
             </div>
             
             <a href="/about.php" class="text-2xl font-bold text-white border-b border-white/5 pb-4 uppercase tracking-tighter">About Jane</a>
             
             <!-- Mobile CTA -->
             <div class="mt-8 space-y-4">
                 <a href="/contact.php" class="block w-full text-center py-4 bg-primary hover:bg-white hover:text-primary transition-all duration-500 rounded-full text-white font-bold uppercase tracking-tighter shadow-lg">
                    Book Your Session
                 </a>
             </div>
        </div>
        
        <script>
            // Mobile Menu Logic
            const btn = document.getElementById('mobile-menu-btn');
            const menu = document.getElementById('mobile-menu');
            const nav = document.getElementById('main-nav');
            
            if(btn && menu) {
                btn.addEventListener('click', () => {
                    menu.classList.toggle('hidden');
                    menu.classList.toggle('flex');
                    document.body.style.overflow = menu.classList.contains('flex') ? 'hidden' : '';
                    
                    const isOpen = menu.classList.contains('flex');
                    
                    // Always remove mix-blend-difference when menu is open so logo is visible
                    if (isOpen) {
                        nav.classList.remove('mix-blend-difference');
                    } else if (window.scrollY <= 20) {
                        // Re-add mix-blend-difference if we're back at the top
                        nav.classList.add('mix-blend-difference');
                    }
                    
                    btn.innerHTML = isOpen 
                        ? '<svg class="w-8 h-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>'
                        : '<svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>';
                });
            }

            // Sticky scroll glass-morphism effect
            window.addEventListener('scroll', () => {
                if (window.scrollY > 20) {
                    nav.classList.add('glass-morphism');
                    nav.classList.remove('mix-blend-difference');
                } else {
                    nav.classList.remove('glass-morphism');
                    // Only add mix-blend-difference back if mobile menu isn't open
                    if (!menu.classList.contains('flex')) {
                        nav.classList.add('mix-blend-difference');
                    }
                }
            });
        </script>
    </nav>
