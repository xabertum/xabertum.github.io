import { Project } from './project.model';

export const PROJECTS: Project[] = [
  {
    slug: 'eth-analyzer-web',
    name: 'ETH Analyzer Web',
    tagline: 'Seguimiento de precio e inversión propia en Ethereum, en tiempo real.',
    description: `Aplicación web para monitorizar el precio de Ethereum y la evolución de mis
      propias inversiones en ETH. Consulta precios en tiempo real a través de la API pública de
      CoinGecko (con caché en el backend) y calcula el rendimiento de cada operación registrada.
      Se despliega con Docker Compose en dos contenedores (frontend y backend) con un volumen
      persistente para no perder datos entre reinicios, y también existe como app Android
      autónoma empaquetada con Capacitor, sin necesidad de servidor.`,
    highlights: [
      'Backend en Node 22 + Express + TypeScript con SQLite (better-sqlite3) para persistencia.',
      'Frontend en React + Vite + TypeScript, con gráficos interactivos vía Recharts.',
      'Precios de mercado desde la API pública de CoinGecko (ETH/EUR), cacheados en el backend.',
      'Despliegue reproducible con Docker Compose y volumen persistente para datos y alertas.',
      'Versión Android autónoma (sin servidor) empaquetada con Capacitor.',
    ],
    stack: ['Node.js', 'Express', 'TypeScript', 'SQLite', 'React', 'Vite', 'Recharts', 'Docker', 'Capacitor'],
    repoUrl: 'https://github.com/xabertum/ETHAnalyzerWeb',
    accentIcon: 'eth',
  },
  {
    slug: 'music-mood-analyzer',
    name: 'Analizador de Emoción Musical',
    tagline: 'Deep learning (CNN + BiLSTM + Attention) para clasificar la emoción de una canción.',
    description: `Modelo de deep learning que clasifica canciones en Alegre, Neutra o Triste a
      partir de sus características acústicas, entrenado sobre el dataset DEAM (1802 canciones
      anotadas en valencia/activación). Incluye el notebook completo de entrenamiento —extracción
      de características de audio con openSMILE (ComParE_2016), balanceo de clases y una
      arquitectura CNN + BiLSTM con Attention— junto con una web app local en FastAPI donde subir
      un archivo de audio y ver la predicción con un gráfico de probabilidades por clase. Todo el
      análisis ocurre en local: el audio nunca se envía a un servicio externo.`,
    highlights: [
      'Arquitectura CNN (Conv1D) + BiLSTM con capa de Attention, implementada en Keras 3 (backend PyTorch).',
      'Extracción de características acústicas con openSMILE (descriptores ComParE_2016) sobre el dataset DEAM.',
      'Balanceo de clases y soft labels derivadas de centroides de valencia/activación.',
      'Web app local en FastAPI + HTML/JS: subes un audio y obtienes la emoción predominante con su desglose de probabilidades.',
      'Procesamiento 100% local: el audio no se envía a ningún servicio externo.',
    ],
    stack: ['Python', 'Keras', 'PyTorch', 'openSMILE', 'FastAPI', 'HTML/JS', 'Jupyter'],
    repoUrl: 'https://github.com/xabertum/MusicMoodAnalyzer',
    accentIcon: 'music',
  },
  {
    slug: 'pangea-music-dashboard',
    name: 'Pangea Music Dashboard',
    tagline: 'Dashboard interactivo para explorar una colección musical con filtros y gráficos.',
    description: `Dashboard interactivo construido con Angular 19 (componentes standalone y
      signals) para explorar la colección de música de Pangea a partir de un CSV enriquecido,
      parseado directamente en el navegador con PapaParse. Incluye KPIs recalculados en tiempo
      real según los filtros activos, gráficos con Chart.js (vía ng2-charts) y una tabla paginada
      y ordenable con el detalle de los álbumes filtrados. Se empaqueta con un Dockerfile
      multi-stage (build con Node + servido con Nginx) para una imagen ligera de despliegue.`,
    highlights: [
      'Angular 19 con componentes standalone y signals para el estado reactivo de filtros y KPIs.',
      'Parseo del CSV en el navegador con PapaParse, sin necesidad de backend.',
      'KPIs dinámicos: total de álbumes, artistas, géneros/continentes, países y rango de años.',
      'Filtros combinables: texto libre, género/continente y país (selección múltiple), y rango de años.',
      'Gráficos con Chart.js (ng2-charts): álbumes por género/continente, top 15 países y evolución por década.',
      'Tabla paginada y ordenable con el detalle de los álbumes filtrados.',
      'Despliegue con Docker multi-stage (Node + Nginx), imagen ligera (~50 MB).',
    ],
    stack: ['Angular 19', 'TypeScript', 'PapaParse', 'Chart.js', 'ng2-charts', 'Docker', 'Nginx'],
    repoUrl: 'https://github.com/xabertum/PangeaMusicDashboard',
    accentIcon: 'dashboard',
  },
];

export function getProjectBySlug(slug: string): Project | undefined {
  return PROJECTS.find((project) => project.slug === slug);
}
