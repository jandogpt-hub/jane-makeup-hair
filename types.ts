export interface WorkItem {
  id: string;
  number: string;
  title: string;
  image: string;
  speed: number;
}

export interface ServiceItem {
  name: string;
  price: string;
}

export type CursorVariant = 'default' | 'hover' | 'text';

export interface CursorContextType {
  variant: CursorVariant;
  setVariant: (variant: CursorVariant) => void;
}
