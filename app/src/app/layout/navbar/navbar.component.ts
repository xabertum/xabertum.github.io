import { Component, signal } from '@angular/core';
import { RouterLink, RouterLinkActive } from '@angular/router';
import { ThemeToggleComponent } from '../theme-toggle/theme-toggle.component';

@Component({
  selector: 'app-navbar',
  imports: [RouterLink, RouterLinkActive, ThemeToggleComponent],
  templateUrl: './navbar.component.html',
  styleUrl: './navbar.component.scss'
})
export class NavbarComponent {
  readonly isMenuOpen = signal(false);

  readonly links = [
    { path: '/', label: 'Inicio' },
    { path: '/sobre-mi', label: 'Sobre mí' },
    { path: '/proyectos', label: 'Proyectos' },
    { path: '/contacto', label: 'Contacto' },
  ];

  toggleMenu(): void {
    this.isMenuOpen.update((open) => !open);
  }

  closeMenu(): void {
    this.isMenuOpen.set(false);
  }
}
