import React, { useRef } from 'react';
import { motion, useScroll, useTransform, useInView } from 'framer-motion';
import { WorkItem } from '../types';
import { useCursor } from '../context/CursorContext';

const works: WorkItem[] = [
  { 
    id: '001', 
    number: '001', 
    title: 'EDITORIAL GLASS', 
    image: 'https://images.unsplash.com/photo-1522337360788-8b13dee7a37e?auto=format&fit=crop&q=80&w=800', 
    speed: 0 
  },
  { 
    id: '002', 
    number: '002', 
    title: 'CHROME SCULPT', 
    image: 'https://images.unsplash.com/photo-1596704017254-9b121068fb31?auto=format&fit=crop&q=80&w=800', 
    speed: 40 
  },
  { 
    id: '003', 
    number: '003', 
    title: 'VITREOUS SKIN', 
    image: 'https://images.unsplash.com/photo-1512496011212-721d0b3272dd?auto=format&fit=crop&q=80&w=800', 
    speed: 0 
  },
  { 
    id: '004', 
    number: '004', 
    title: 'FLUID MOTION', 
    image: 'https://images.unsplash.com/photo-1620331311520-246422fd82f9?auto=format&fit=crop&q=80&w=800', 
    speed: 40 
  },
];

const Card: React.FC<{ item: WorkItem }> = ({ item }) => {
  const { setVariant } = useCursor();
  const ref = useRef(null);
  const isInView = useInView(ref, { once: true, margin: "-10%" });
  
  // Parallax setup for the individual card
  const { scrollYProgress } = useScroll({
    target: ref,
    offset: ["start end", "end start"]
  });
  
  const y = useTransform(scrollYProgress, [0, 1], [0, item.speed ? -100 : 0]);

  return (
    <motion.div 
      ref={ref}
      style={{ y, marginTop: item.speed ? '10vh' : '0' }}
      initial={{ opacity: 0, y: 50 }}
      animate={isInView ? { opacity: 1, y: 0 } : {}}
      transition={{ duration: 1, ease: [0.16, 1, 0.3, 1] }}
      className={`col-span-12 md:col-span-6 aspect-[4/5] bg-[#111] relative overflow-hidden border border-border group`}
      onMouseEnter={() => setVariant('hover')}
      onMouseLeave={() => setVariant('default')}
    >
      <img 
        src={item.image} 
        alt={item.title}
        className="w-full h-full object-cover grayscale brightness-75 contrast-125 transition-all duration-[0.8s] group-hover:grayscale-0 group-hover:brightness-100 group-hover:scale-105"
      />
      <div className="absolute inset-0 bg-gradient-to-t from-black/80 to-transparent flex items-end p-10 opacity-0 group-hover:opacity-100 transition-opacity duration-500">
        <div>
          <p className="font-mono text-xs mb-2 text-accent">{item.number}</p>
          <h3 className="font-syne text-2xl font-bold text-accent">{item.title}</h3>
        </div>
      </div>
    </motion.div>
  );
};

const WorkGrid: React.FC = () => {
  return (
    <section id="work" className="px-[10vw] py-[10vh] relative">
      <span className="font-mono text-xs text-[#666] mb-8 block">// SELECTED WORKS 2026</span>
      <div className="grid grid-cols-12 gap-8">
        {works.map((item) => (
          <Card key={item.id} item={item} />
        ))}
      </div>
    </section>
  );
};

export default WorkGrid;
