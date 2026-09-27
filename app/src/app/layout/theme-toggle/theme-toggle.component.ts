import { Component, inject } from '@angular/core';
import { ThemeService } from '../../core/theme.service';

@Component({
  selector: 'app-theme-toggle',
  imports: [],
  templateUrl: './theme-toggle.component.html',
  styleUrl: './theme-toggle.component.scss'
})
export class ThemeToggleComponent {
  protected readonly themeService = inject(ThemeService);
}
