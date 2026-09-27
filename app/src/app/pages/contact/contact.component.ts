import { Component } from '@angular/core';

interface ContactChannel {
  label: string;
  value: string;
  href: string;
  icon: string;
}

@Component({
  selector: 'app-contact',
  imports: [],
  templateUrl: './contact.component.html',
  styleUrl: './contact.component.scss'
})
export class ContactComponent {
  readonly channels: ContactChannel[] = [
    { label: 'Email', value: 'mohatar@gmail.com', href: 'mailto:mohatar@gmail.com', icon: 'mail' },
    { label: 'LinkedIn', value: '/in/xabertum', href: 'https://www.linkedin.com/in/xabertum/', icon: 'linkedin' },
    { label: 'GitHub', value: '@xabertum', href: 'https://github.com/xabertum', icon: 'github' },
    { label: 'Twitter / X', value: '@xabertum', href: 'https://twitter.com/xabertum', icon: 'twitter' },
  ];
}
