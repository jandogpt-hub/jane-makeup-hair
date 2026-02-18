import React from 'react';
import { motion } from 'framer-motion';

const images = [
  // Column 1 - Dark/Moody
  [
    "https://images.unsplash.com/photo-1500917293891-ef795e70e1f6?auto=format&fit=crop&q=80&w=800",
    "https://images.unsplash.com/photo-1616683693504-3ea7e9ad6fec?auto=format&fit=crop&q=80&w=800",
    "https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&q=80&w=800",
    "https://images.unsplash.com/photo-1531746020798-e6953c6e8e04?auto=format&fit=crop&q=80&w=800",
  ],
  // Column 2 - High Fashion/Texture
  [
    "https://images.unsplash.com/photo-1620331311520-246422fd82f9?auto=format&fit=crop&q=80&w=800",
    "https://images.unsplash.com/photo-1596704017254-9b121068fb31?auto=format&fit=crop&q=80&w=800",
    "https://images.unsplash.com/photo-1483985988355-763728e1935b?auto=format&fit=crop&q=80&w=800",
    "https://images.unsplash.com/photo-1503342217505-b0a15ec3261c?auto=format&fit=crop&q=80&w=800",
  ],
  // Column 3 - Editorial/Skin
  [
    "https://images.unsplash.com/photo-1512496011212-721d0b3272dd?auto=format&fit=crop&q=80&w=800",
    "https://images.unsplash.com/photo-1605763240004-7e93b172d754?auto=format&fit=crop&q=80&w=800",
    "https://images.unsplash.com/photo-1522337360788-8b13dee7a37e?auto=format&fit=crop&q=80&w=800",
    "https://images.unsplash.com/photo-1519699047748-40baea26f85f?auto=format&fit=crop&q=80&w=800",
  ]
];

const MarqueeColumn = ({ images, duration, reverse = false }: { images: string[], duration: number, reverse?: boolean }) => {
  return (
    <div className="flex-1 h-[150vh] -mt-[25vh] overflow-hidden relative opacity-40 mix-blend-overlay grayscale hover:grayscale-0 transition-all duration-700">
      <motion.div
        className="flex flex-col gap-0"
        initial={{ y: reverse ? "-50%" : "0%" }}
        animate={{ y: reverse ? "0%" : "-50%" }}
        transition={{ duration: duration, repeat: Infinity, ease: "linear" }}
      >
        {/* Double the array to create seamless loop */}
        {[...images, ...images, ...images].map((src, i) => (
          <div key={i} className="w-full aspect-[3/4] relative">
            <img src={src} alt="Editorial" className="w-full h-full object-cover opacity-80" />
            <div className="absolute inset-0 bg-black/10"></div>
          </div>
        ))}
      </motion.div>
    </div>
  );
};

const Hero: React.FC = () => {
  return (
    <section className="h-screen w-full relative overflow-hidden flex flex-col justify-center items-center">
      
      {/* Dynamic Background */}
      <div className="absolute inset-0 z-0 flex gap-4 md:gap-8 px-4 md:px-0 pointer-events-none transform scale-110">
        <MarqueeColumn images={images[0]} duration={45} />
        <MarqueeColumn images={images[1]} duration={35} reverse />
        <MarqueeColumn images={images[2]} duration={50} />
      </div>

      {/* Heavy Gradient Overlay for Text Readability */}
      <div className="absolute inset-0 z-1 bg-gradient-to-b from-bg/90 via-bg/40 to-bg/90"></div>
      <div className="absolute inset-0 z-1 bg-radial-gradient from-transparent to-bg/80"></div>

      {/* Content */}
      <div className="relative z-10 flex flex-col items-center justify-center px-4">
        
        {/* Exclusive Badge */}
        <motion.div 
          initial={{ opacity: 0, y: 20 }}
          animate={{ opacity: 1, y: 0 }}
          transition={{ delay: 0.2, duration: 0.8 }}
          className="mb-6 px-4 py-1.5 rounded-full border border-orange-500/50 bg-orange-900/10 backdrop-blur-sm"
        >
          <span className="font-mono text-[0.6rem] md:text-xs text-orange-400 tracking-[0.2em] uppercase font-bold">
            West Hollywood Exclusive
          </span>
        </motion.div>

        {/* Main Title */}
        <motion.h1 
          initial={{ opacity: 0, scale: 0.9, filter: 'blur(10px)' }}
          animate={{ opacity: 1, scale: 1, filter: 'blur(0px)' }}
          transition={{ duration: 1.2, ease: [0.16, 1, 0.3, 1] }}
          className="hero-title text-[clamp(4rem,15vw,13rem)] font-extrabold uppercase tracking-tight text-center leading-[0.85] bg-gradient-to-br from-white via-[#f0f0f0] to-[#999] bg-clip-text text-transparent drop-shadow-[0_0_40px_rgba(255,255,255,0.15)] font-syne mix-blend-screen"
        >
          JANE<br />WEHO
        </motion.h1>

        {/* Sub Headline */}
        <motion.div
            initial={{ opacity: 0, y: 20 }}
            animate={{ opacity: 1, y: 0 }}
            transition={{ delay: 0.6, duration: 0.8 }}
            className="text-center mt-8 md:mt-12"
        >
            <h2 className="text-2xl md:text-4xl font-syne font-bold text-white mb-2">
                The <span className="text-orange-500">Noir</span> VIP Experience.
            </h2>
            <p className="font-mono text-xs md:text-sm tracking-[0.2em] uppercase text-accent/60 max-w-md mx-auto">
                Elite makeup and hair artistry for the red carpet and beyond.
            </p>
        </motion.div>

        {/* Action Button */}
        <motion.div
            initial={{ opacity: 0, y: 20 }}
            animate={{ opacity: 1, y: 0 }}
            transition={{ delay: 0.8, duration: 0.8 }}
            className="mt-12"
        >
             <a 
                href="#book"
                className="group relative inline-flex items-center gap-3 px-8 py-4 bg-[#ff4d00] rounded-full overflow-hidden transition-transform hover:scale-105"
             >
                <span className="relative z-10 font-mono text-sm font-bold uppercase tracking-wider text-white">Secure Your Session</span>
                <span className="relative z-10 text-white group-hover:translate-x-1 transition-transform">→</span>
                <div className="absolute inset-0 bg-white/20 translate-y-full group-hover:translate-y-0 transition-transform duration-300"></div>
             </a>
        </motion.div>

      </div>

      <motion.div 
        initial={{ opacity: 0 }}
        animate={{ opacity: 0.5 }}
        transition={{ delay: 1.5, duration: 1 }}
        className="absolute bottom-10 right-10 hidden md:block font-mono text-[0.6rem] [writing-mode:vertical-rl] uppercase tracking-[0.3em] border-r border-border pr-2.5 text-accent"
      >
        34.0923° N, 118.3693° W
      </motion.div>
    </section>
  );
};

export default Hero;
