import { EducationEntry, ExperienceEntry, SkillGroup } from './experience.model';

export const SUMMARY = `Full Stack Developer con más de 6 años de experiencia en proyectos para
grandes organismos públicos y privados (DGT, Generalitat de Catalunya, Correos, INE, Junta de
Andalucía, IAAP). Especializado en desarrollo Front-End con TypeScript/Angular, arquitecturas de
microservicios en Java/Spring Boot y despliegue en AWS. Actualmente ampliando el foco hacia el
desarrollo de software con IA (deep learning, análisis de datos) en proyectos personales.`;

export const EXPERIENCE: ExperienceEntry[] = [
  {
    company: 'Inetum',
    totalPeriod: '3 años 7 meses',
    roles: [
      {
        title: 'Full Stack Developer',
        period: 'julio de 2025 – Presente (1 año 3 meses)',
        description:
          'Operaciones de Full Stack Developer en varias aplicaciones de la DGT (Dirección General de Tráfico).',
      },
      {
        title: 'Full Stack Developer',
        period: 'abril de 2024 – julio de 2025 (1 año 4 meses)',
        description: 'Full Stack Developer para el proyecto SIGMA de la Generalitat de Catalunya.',
      },
      {
        title: 'Full Stack Developer',
        period: 'noviembre de 2023 – marzo de 2024 (5 meses)',
        location: 'Ciudad Real, Castilla-La Mancha, España',
        description: 'Full Stack Developer para diferentes proyectos de Correos.',
      },
      {
        title: 'Full Stack Developer',
        period: 'marzo de 2023 – noviembre de 2023 (9 meses)',
        location: 'Ciudad Real, Castilla-La Mancha, España',
        description:
          "Full Stack Developer para el proyecto Sanciones Web del INE (Instituto Nacional de Estadística).",
      },
    ],
  },
  {
    company: 'Exceltic',
    totalPeriod: '7 meses',
    roles: [
      {
        title: 'Full Stack Developer',
        period: 'enero de 2023 – marzo de 2023 (3 meses)',
        location: 'Remoto',
        description: "Full Stack Developer para el proyecto SILOGPORT de Indra.",
      },
      {
        title: 'Full Stack Developer',
        period: 'septiembre de 2022 – enero de 2023 (5 meses)',
        location: 'Remoto',
        description: "Full Stack Developer para el proyecto SIMPLE de Indra.",
      },
    ],
  },
  {
    company: 'Ibermática',
    totalPeriod: '7 meses',
    roles: [
      {
        title: 'Full Stack Developer',
        period: 'enero de 2022 – julio de 2022 (7 meses)',
        location: 'Remoto',
        description:
          'Proyecto para cliente final con arquitectura de microservicios en Java, frontend en Angular y base de datos no relacional (DynamoDB) en entorno AWS.',
      },
    ],
  },
  {
    company: 'Emergya',
    totalPeriod: '2 años 3 meses',
    roles: [
      {
        title: 'Software Developer',
        period: 'noviembre de 2020 – noviembre de 2021 (1 año 1 mes)',
        location: 'Sevilla y alrededores',
        description:
          'Proyecto para la Consejería de Turismo, Regeneración, Justicia y Administración Local de la Junta de Andalucía. Creación de API con Spring Boot e Hibernate y frontend en Angular v10. Stack: Angular, microservicios, Java, Spring Boot, JUnit, Swagger, Git, Agile.',
      },
      {
        title: 'Software Developer',
        period: 'noviembre de 2019 – noviembre de 2020 (1 año 1 mes)',
        location: 'Sevilla y alrededores, España',
        description:
          'Aplicación GALATEA para el IAAP. Stack: microservicios, Java, Spring Boot, Hibernate, Oracle DB y Jenkins.',
      },
      {
        title: 'Student Intern',
        period: 'septiembre de 2019 – noviembre de 2019 (3 meses)',
        location: 'Sevilla y alrededores, España',
        description: 'Prácticas académicas en Desarrollo de Aplicaciones Web (DAW).',
      },
    ],
  },
  {
    company: 'Asociación de Jóvenes Investigadores en Ciencias de las Religiones (AJICR)',
    totalPeriod: '1 mes',
    roles: [
      {
        title: 'Desarrollo de App Android',
        period: 'febrero de 2019 (1 mes)',
        description:
          'Desarrollo de la aplicación oficial de AJICR (Asociación de Jóvenes Investigadores en Ciencias de las Religiones - UCM) para Android.',
      },
    ],
  },
  {
    company: 'Lionbridge',
    totalPeriod: '3 meses',
    roles: [
      {
        title: 'Internet Ads Assessor',
        period: 'julio de 2016 – septiembre de 2016 (3 meses)',
        description:
          'Evaluación de la adecuación de los anuncios mostrados en función de la consulta de búsqueda.',
      },
    ],
  },
  {
    company: 'Proyecto personal (World Wide Web)',
    totalPeriod: '7 meses',
    roles: [
      {
        title: 'LocalWeather – Desarrollo de aplicación Android',
        period: 'julio de 2015 – enero de 2016 (7 meses)',
        description:
          'Aplicación Android de predicción meteorológica basada en la API The Dark Sky Forecast, con geolocalización de Google y GPS.',
      },
    ],
  },
];

export const EDUCATION: EducationEntry[] = [
  {
    title: 'Master Big Data & Analytics, Ingeniería Informática',
    school: 'datahack school',
    period: 'septiembre de 2021 – abril de 2022',
  },
  {
    title: 'Técnico Superior en Desarrollo de Aplicaciones Web',
    school: 'Jesuïtes El Clot – Escola del Clot',
    period: 'junio de 2017 – septiembre de 2019',
  },
  {
    title: 'Experto Profesional en Desarrollo de Aplicaciones Web Dinámicas (20 ECTS)',
    school: 'UNED – Universidad Nacional de Educación a Distancia',
    period: '2016 – 2017',
  },
  {
    title: 'Certificado en Responsive Web Design',
    school: 'freeCodeCamp',
    period: '2018',
  },
  {
    title: 'Grado en Psicología',
    school: 'UNED – Universidad Nacional de Educación a Distancia',
    period: 'septiembre de 2001 – junio de 2022',
  },
];

export const SKILLS: SkillGroup[] = [
  {
    category: 'Front-End',
    items: ['TypeScript', 'Angular', 'React', 'JavaScript', 'HTML / CSS'],
  },
  {
    category: 'Back-End',
    items: ['Java', 'Spring Boot', 'Node.js', 'Express', 'Hibernate'],
  },
  {
    category: 'Datos & Cloud',
    items: ['AWS', 'Oracle DB', 'DynamoDB', 'SQLite', 'Docker'],
  },
  {
    category: 'IA / Data Science',
    items: ['Python', 'Deep Learning (Keras / PyTorch)', 'Análisis de datos'],
  },
  {
    category: 'Prácticas & herramientas',
    items: ['Microservicios', 'Agile / Scrum', 'Git', 'JUnit', 'Swagger', 'Jenkins'],
  },
];

export const LANGUAGES = ['Español (nativo)', 'Inglés (nivel profesional de trabajo)'];

export const CERTIFICATIONS = [
  'AngularJS avanzado',
  'AngularJS práctico',
  'Consumir APIs externas en Angular',
  'Illustrator para diseño web',
];
