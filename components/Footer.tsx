import React from 'react';
import { useCursor } from '../context/CursorContext';

const Footer: React.FC = () => {
  const { setVariant } = useCursor();

  return (
    <footer className="px-[10vw] py-[10vh] border-t border-border flex flex-col md:flex-row justify-between items-end gap-10">
      <div className="font-syne text-6xl md:text-7xl font-extrabold text-accent">
        JANE.
      </div>
      
      <div className="text-right">
        <p className="font-mono text-sm mb-8 opacity-50 text-accent">WEST HOLLYWOOD CA 90069</p>
        <a 
          href="#book"
          onMouseEnter={() => setVariant('hover')}
          onMouseLeave={() => setVariant('default')}
          className="inline-block bg-white text-black px-12 py-5 rounded-full font-mono font-bold uppercase no-underline transition-all duration-300 hover:-translate-y-1 hover:shadow-[0_10px_40px_rgba(255,255,255,0.2)]"
        >
          Enter the Void
        </a>
      </div>
    </footer>
  );
};

export default Footer;
