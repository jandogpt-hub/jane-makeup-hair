import React, { useEffect } from 'react';
import { motion, useMotionValue, useSpring } from 'framer-motion';
import { useCursor } from '../context/CursorContext';

const CustomCursor: React.FC = () => {
  const { variant } = useCursor();
  
  const cursorX = useMotionValue(-100);
  const cursorY = useMotionValue(-100);
  
  const springConfig = { damping: 25, stiffness: 150, mass: 0.5 };
  const followerX = useSpring(cursorX, springConfig);
  const followerY = useSpring(cursorY, springConfig);

  useEffect(() => {
    const moveCursor = (e: MouseEvent) => {
      cursorX.set(e.clientX);
      cursorY.set(e.clientY);
    };

    window.addEventListener('mousemove', moveCursor);
    return () => window.removeEventListener('mousemove', moveCursor);
  }, [cursorX, cursorY]);

  // Dot variant
  const dotVariants = {
    default: { scale: 1, x: -10, y: -10 },
    hover: { scale: 0, x: -10, y: -10 },
    text: { scale: 2, x: -10, y: -10, mixBlendMode: 'difference' as const },
  };

  // Follower variant (Ring)
  const followerVariants = {
    default: { 
      scale: 1, 
      opacity: 1,
      x: -30, 
      y: -30,
      borderColor: 'rgba(255, 255, 255, 0.3)',
      backgroundColor: 'transparent'
    },
    hover: { 
      scale: 1.5, 
      opacity: 1,
      x: -30, 
      y: -30,
      borderColor: 'rgba(255, 255, 255, 1)',
      backgroundColor: 'rgba(255, 255, 255, 0.1)'
    },
    text: { 
      scale: 0.5,
      opacity: 0.5,
      x: -30,
      y: -30,
      borderColor: 'rgba(255, 255, 255, 0)',
      backgroundColor: 'transparent'
    }
  };

  return (
    <>
      {/* Main Dot */}
      <motion.div
        className="fixed top-0 left-0 w-5 h-5 bg-white rounded-full pointer-events-none z-[9999] mix-blend-difference"
        style={{
          translateX: cursorX,
          translateY: cursorY,
        }}
        variants={dotVariants}
        animate={variant}
        transition={{ type: "tween", ease: "backOut", duration: 0.2 }}
      />
      
      {/* Laggy Follower */}
      <motion.div
        className="fixed top-0 left-0 w-[60px] h-[60px] border rounded-full pointer-events-none z-[9998] backdrop-blur-[2px]"
        style={{
          translateX: followerX,
          translateY: followerY,
        }}
        variants={followerVariants}
        animate={variant}
      />
    </>
  );
};

export default CustomCursor;
