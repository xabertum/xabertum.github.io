import { Component } from '@angular/core';
import {
  CERTIFICATIONS,
  EDUCATION,
  EXPERIENCE,
  LANGUAGES,
  SKILLS,
  SUMMARY,
} from '../../data/experience.data';
import { ExperienceEntry, ExperienceRole } from '../../data/experience.model';
import { formatElapsedSince } from '../../core/duration.util';

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

  /** Appends a live-computed duration to ongoing roles (see ExperienceRole.ongoing). */
  rolePeriod(role: ExperienceRole): string {
    if (role.ongoing && role.startDate) {
      return `${role.period} (${formatElapsedSince(role.startDate)})`;
    }
    return role.period;
  }

  companyPeriod(entry: ExperienceEntry): string {
    if (entry.totalStartDate) {
      return formatElapsedSince(entry.totalStartDate);
    }
    return entry.totalPeriod;
  }
}
