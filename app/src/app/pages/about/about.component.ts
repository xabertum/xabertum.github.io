import { Component } from '@angular/core';
import {
  CERTIFICATIONS,
  EDUCATION,
  EXPERIENCE,
  LANGUAGES,
  SKILLS,
  SUMMARY,
} from '../../data/experience.data';

@Component({
  selector: 'app-about',
  imports: [],
  templateUrl: './about.component.html',
  styleUrl: './about.component.scss'
})
export class AboutComponent {
  readonly summary = SUMMARY;
  readonly experience = EXPERIENCE;
  readonly education = EDUCATION;
  readonly skills = SKILLS;
  readonly languages = LANGUAGES;
  readonly certifications = CERTIFICATIONS;
}
