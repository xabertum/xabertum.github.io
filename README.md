# xabertum.github.io

Portfolio profesional de Javier Delgado (Full Stack Developer), construido con
**Angular 19** usando el nuevo *Application Builder* con `@angular/ssr` y
**prerendering / SSG** (cada ruta se genera como HTML estático real en tiempo
de build, sin necesidad de servidor Node en producción).

## Estructura del repositorio

- [`app/`](./app) — código fuente de la aplicación Angular (páginas Home,
  Sobre mí, Proyectos y Contacto).
- [`.github/workflows/deploy.yml`](./.github/workflows/deploy.yml) — build y
  despliegue automático a GitHub Pages en cada push a `main`.

## Desarrollo local

```bash
cd app
npm install
npm start          # http://localhost:4200
```

## Build de producción (con prerender/SSG)

```bash
cd app
npm run build
```

El resultado estático (listo para cualquier hosting, incluido GitHub Pages)
queda en `app/dist/portfolio/browser`.

## Despliegue

El workflow de GitHub Actions compila el sitio y publica el contenido de
`app/dist/portfolio/browser` en la rama `gh-pages` en cada push a `main` que
afecte a `app/`.

**Paso manual único**: en *Settings → Pages* de este repositorio, configura
"Build and deployment → Source" como **Deploy from a branch**, rama
**`gh-pages`**, carpeta **`/ (root)`**. A partir de ahí, cada push a `main`
actualizará automáticamente `xabertum.github.io`.

## Contenido

- **Sobre mí / Experiencia**: generado a partir del perfil de LinkedIn de
  Javier (ver [`app/src/app/data/experience.data.ts`](./app/src/app/data/experience.data.ts)).
- **Proyectos**: definidos en [`app/src/app/data/projects.data.ts`](./app/src/app/data/projects.data.ts),
  fácilmente extensible para añadir nuevos proyectos personales.
