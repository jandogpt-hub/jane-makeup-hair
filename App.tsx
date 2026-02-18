import React, { useEffect } from 'react';
import Lenis from '@studio-freight/lenis';
import { CursorProvider } from './context/CursorContext';
import CustomCursor from './components/CustomCursor';
import Background from './components/Background';
import Navigation from './components/Navigation';
import Hero from './components/Hero';
import WorkGrid from './components/WorkGrid';
import Services from './components/Services';
import Footer from './components/Footer';

const App: React.FC = () => {
  useEffect(() => {
    // Initialize Lenis for smooth scrolling
    const lenis = new Lenis({
      duration: 1.2,
      easing: (t) => Math.min(1, 1.001 - Math.pow(2, -10 * t)),
      direction: 'vertical',
      gestureDirection: 'vertical',
      smooth: true,
      mouseMultiplier: 1,
      smoothTouch: false,
      touchMultiplier: 2,
    });

    function raf(time: number) {
      lenis.raf(time);
      requestAnimationFrame(raf);
    }

    requestAnimationFrame(raf);

    return () => {
      lenis.destroy();
    };
  }, []);

  return (
    <CursorProvider>
      <div className="relative w-full min-h-screen overflow-hidden text-accent font-syne selection:bg-white selection:text-black">
        <CustomCursor />
        <Background />
        <Navigation />
        
        <main className="relative z-10">
          <Hero />
          <WorkGrid />
          <Services />
        </main>
        
        <Footer />
      </div>
    </CursorProvider>
  );
};

export default App;
