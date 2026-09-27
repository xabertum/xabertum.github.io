export interface ExperienceRole {
  title: string;
  period: string;
  location?: string;
  description: string;
}

export interface ExperienceEntry {
  company: string;
  totalPeriod: string;
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
