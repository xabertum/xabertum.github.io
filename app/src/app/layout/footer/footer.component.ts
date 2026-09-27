import { Component } from '@angular/core';

@Component({
  selector: 'app-footer',
  imports: [],
  templateUrl: './footer.component.html',
  styleUrl: './footer.component.scss'
})
export class FooterComponent {
  readonly year = new Date().getFullYear();

  readonly socials = [
    { label: 'GitHub', href: 'https://github.com/xabertum', icon: 'github' },
    { label: 'LinkedIn', href: 'https://www.linkedin.com/in/xabertum/', icon: 'linkedin' },
    { label: 'Twitter / X', href: 'https://twitter.com/xabertum', icon: 'twitter' },
    { label: 'Email', href: 'mailto:mohatar@gmail.com', icon: 'mail' },
  ];
}
