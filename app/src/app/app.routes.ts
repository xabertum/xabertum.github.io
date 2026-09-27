import { Routes } from '@angular/router';

export const routes: Routes = [
  {
    path: '',
    loadComponent: () => import('./pages/home/home.component').then((m) => m.HomeComponent),
    title: 'Javier Delgado · Full Stack Developer',
  },
  {
    path: 'sobre-mi',
    loadComponent: () => import('./pages/about/about.component').then((m) => m.AboutComponent),
    title: 'Sobre mí · Javier Delgado',
  },
  {
    path: 'proyectos',
    loadComponent: () =>
      import('./pages/projects/projects-list/projects-list.component').then((m) => m.ProjectsListComponent),
    title: 'Proyectos · Javier Delgado',
  },
  {
    path: 'proyectos/:slug',
    loadComponent: () =>
      import('./pages/projects/project-detail/project-detail.component').then((m) => m.ProjectDetailComponent),
  },
  {
    path: 'contacto',
    loadComponent: () => import('./pages/contact/contact.component').then((m) => m.ContactComponent),
    title: 'Contacto · Javier Delgado',
  },
  {
    path: '**',
    loadComponent: () => import('./pages/not-found/not-found.component').then((m) => m.NotFoundComponent),
    title: 'Página no encontrada · Javier Delgado',
  },
];
