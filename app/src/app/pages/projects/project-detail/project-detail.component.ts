import { Component, computed, effect, inject } from '@angular/core';
import { ActivatedRoute, RouterLink } from '@angular/router';
import { toSignal } from '@angular/core/rxjs-interop';
import { Meta, Title } from '@angular/platform-browser';
import { map } from 'rxjs';
import { getProjectBySlug } from '../../../data/projects.data';

@Component({
  selector: 'app-project-detail',
  imports: [RouterLink],
  templateUrl: './project-detail.component.html',
  styleUrl: './project-detail.component.scss'
})
export class ProjectDetailComponent {
  private readonly route = inject(ActivatedRoute);
  private readonly title = inject(Title);
  private readonly meta = inject(Meta);

  private readonly slug = toSignal(this.route.paramMap.pipe(map((params) => params.get('slug') ?? '')), {
    initialValue: this.route.snapshot.paramMap.get('slug') ?? '',
  });

  readonly project = computed(() => getProjectBySlug(this.slug()));

  constructor() {
    effect(() => {
      const project = this.project();
      if (project) {
        this.title.setTitle(`${project.name} · Javier Delgado`);
        this.meta.updateTag({ name: 'description', content: project.tagline });
      }
    });
  }
}
