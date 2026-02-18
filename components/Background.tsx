import React from 'react';

const Background: React.FC = () => {
  return (
    <>
      <div className="fixed top-0 left-0 w-screen h-screen z-[-1] contrast-[1.5] brightness-75 bg-[radial-gradient(circle_at_50%_50%,#1a1a1a_0%,#000_100%)] pointer-events-none">
        {/* Blob 1 */}
        <div 
          className="absolute w-[60vw] h-[60vw] rounded-full blur-[80px] animate-drift-slow top-[10%] left-[10%]"
          style={{ background: 'radial-gradient(circle, rgba(255,255,255,0.05) 0%, transparent 70%)' }}
        />
        {/* Blob 2 */}
        <div 
          className="absolute w-[60vw] h-[60vw] rounded-full blur-[80px] animate-drift-medium top-[60%] left-[50%]"
          style={{ 
            background: 'radial-gradient(circle, rgba(255,255,255,0.05) 0%, transparent 70%)',
            animationDelay: '-5s' 
          }}
        />
        {/* Blob 3 */}
        <div 
          className="absolute w-[60vw] h-[60vw] rounded-full blur-[80px] animate-drift-fast top-[30%] left-[80%]"
          style={{ 
            background: 'radial-gradient(circle, rgba(255,255,255,0.04) 0%, transparent 70%)',
            animationDelay: '-10s' 
          }}
        />
      </div>
      
      {/* SVG Filter for "Gooey" effects if needed via CSS filters later */}
      <svg className="absolute w-0 h-0">
        <defs>
          <filter id="goo">
            <feGaussianBlur in="SourceGraphic" stdDeviation="10" result="blur" />
            <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 18 -7" result="goo" />
            <feComposite in="SourceGraphic" in2="goo" operator="atop" />
          </filter>
        </defs>
      </svg>
    </>
  );
};

export default Background;
