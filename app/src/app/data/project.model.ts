export interface Project {
  slug: string;
  name: string;
  tagline: string;
  description: string;
  highlights: string[];
  stack: string[];
  repoUrl: string;
  demoUrl?: string;
  demoNote?: string;
  accentIcon: string;
}
