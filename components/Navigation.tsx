import React from 'react';
import { useCursor } from '../context/CursorContext';

const Navigation: React.FC = () => {
  const { setVariant } = useCursor();

  const handleEnter = () => setVariant('hover');
  const handleLeave = () => setVariant('default');

  const links = [
    { label: 'Folio', href: '#work' },
    { label: 'Services', href: '#services' },
    { label: 'Studio', href: '#studio' },
    { label: 'Book', href: '#book' },
  ];

  const handleScrollTo = (e: React.MouseEvent<HTMLAnchorElement>, id: string) => {
    e.preventDefault();
    const element = document.querySelector(id);
    if (element) {
      element.scrollIntoView({ behavior: 'smooth' });
    }
  };

  return (
    <nav className="fixed top-10 left-1/2 -translate-x-1/2 z-[1000] flex gap-8 px-10 py-4 bg-glass backdrop-blur-md border border-border rounded-full font-mono text-xs uppercase tracking-[2px]">
      {links.map((link) => (
        <a
          key={link.label}
          href={link.href}
          onClick={(e) => handleScrollTo(e, link.href)}
          onMouseEnter={handleEnter}
          onMouseLeave={handleLeave}
          className="text-accent no-underline transition-opacity duration-300 hover:opacity-50"
        >
          {link.label}
        </a>
      ))}
    </nav>
  );
};

export default Navigation;
