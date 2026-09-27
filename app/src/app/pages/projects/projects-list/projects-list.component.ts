import { Component } from '@angular/core';
import { RouterLink } from '@angular/router';
import { PROJECTS } from '../../../data/projects.data';

@Component({
  selector: 'app-projects-list',
  imports: [RouterLink],
  templateUrl: './projects-list.component.html',
  styleUrl: './projects-list.component.scss'
})
export class ProjectsListComponent {
  readonly projects = PROJECTS;
}
