export interface ExperienceRole {
  title: string;
  period: string;
  /**
   * ISO date ('YYYY-MM-DD') marking the start of an ongoing role. When set
   * together with `ongoing: true`, the UI appends a live-computed duration
   * (based on today's date) next to `period` instead of a hardcoded one.
   */
  startDate?: string;
  ongoing?: boolean;
  location?: string;
  description: string;
}

export interface ExperienceEntry {
  company: string;
  totalPeriod: string;
  /** ISO start date for a company tenure that is still ongoing. */
  totalStartDate?: string;
  roles: ExperienceRole[];
}

export interface EducationEntry {
  title: string;
  school: string;
  period: string;
}

export interface SkillGroup {
  category: string;
  items: string[];
}
