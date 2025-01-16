import { Component } from '@angular/core';

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  standalone: false,
  styleUrl: './app.component.css'
})
export class AppComponent {
  title = 'UD10-Pt3';
  nombre = 'Artem';
  apellidos = 'Morozov';

  retornarNombreApellidos() {
    return this.nombre + ' ' + this.apellidos;
  }
}
