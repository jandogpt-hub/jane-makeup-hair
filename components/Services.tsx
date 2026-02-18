import React, { useRef } from 'react';
import { motion, useScroll, useTransform } from 'framer-motion';
import { ServiceItem } from '../types';
import { useCursor } from '../context/CursorContext';

const services: ServiceItem[] = [
  { name: 'Molten Face', price: '$450+' },
  { name: 'Vitreous Styling', price: '$300+' },
  { name: 'Total Distortion', price: '$700+' },
  { name: 'Editorial Campaign', price: 'Quote' },
];

const ServiceRow: React.FC<{ item: ServiceItem }> = ({ item }) => {
  const { setVariant } = useCursor();

  return (
    <div 
      className="flex justify-between items-center py-10 border-b border-border transition-all duration-400 hover:pl-10 hover:bg-white/5"
      onMouseEnter={() => setVariant('hover')}
      onMouseLeave={() => setVariant('default')}
    >
      <h3 className="font-syne text-3xl md:text-5xl uppercase font-normal text-accent">{item.name}</h3>
      <span className="font-mono text-lg md:text-xl opacity-50 text-accent">{item.price}</span>
    </div>
  );
};

const Services: React.FC = () => {
  const containerRef = useRef(null);
  const { scrollYProgress } = useScroll({
    target: containerRef,
    offset: ["start end", "end start"]
  });

  // Create a skew effect based on scroll position/velocity simulation
  const skew = useTransform(scrollYProgress, [0, 0.5, 1], [10, 0, -10]);

  return (
    <section id="services" className="px-[10vw] py-[10vh] relative" ref={containerRef}>
      <motion.h2 
        style={{ skewY: skew }}
        className="font-syne text-[clamp(3rem,8vw,10rem)] font-extrabold uppercase my-[10vh] text-stroke leading-[0.9]"
      >
        VISUAL<br/>ALCHEMY
      </motion.h2>
      
      <div className="mt-[5vh]">
        {services.map((item) => (
          <ServiceRow key={item.name} item={item} />
        ))}
      </div>
    </section>
  );
};

export default Services;
