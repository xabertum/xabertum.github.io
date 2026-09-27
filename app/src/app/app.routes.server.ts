import { RenderMode, ServerRoute } from '@angular/ssr';
import { PROJECTS } from './data/projects.data';

export const serverRoutes: ServerRoute[] = [
  {
    path: 'proyectos/:slug',
    renderMode: RenderMode.Prerender,
    getPrerenderParams: async () => PROJECTS.map((project) => ({ slug: project.slug })),
  },
  {
    path: '**',
    renderMode: RenderMode.Prerender,
  },
];
