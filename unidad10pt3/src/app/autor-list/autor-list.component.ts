import { Component } from '@angular/core';

@Component({
  selector: 'app-autor-list',
  standalone: false,
  
  templateUrl: './autor-list.component.html',
  styleUrl: './autor-list.component.css'
})
export class AutorListComponent {
  tituloListado = 'Listado de autores';

  autores:any[] = [{nombre:'Hermann', apellidos:'Hesse'}, {nombre: 'nikita', apellidos: 'lol'}, {nombre: 'artem', apellidos: 'morozov'}];
}
