import { Component, OnInit } from '@angular/core';
import { IAutor } from '../interfaces/iautor';
import { DatosAutoresService } from '../services/datos-autores.service';


@Component({
  selector: 'app-autor-list',
  standalone: false,

  templateUrl: './autor-list.component.html',
  styleUrl: './autor-list.component.css'
})
export class AutorListComponent implements OnInit {
  constructor(private autorService: DatosAutoresService) { }

  tituloListado = 'Listado de autores';
  listFilter: string = '';
  autores: IAutor[] = [];

  ngOnInit() {
    console.log("Listado de autores inicializado");
    this.autorService.getDatos().subscribe(resp => {
      if (resp.body) {
        this.autores = resp.body;
      }
    });
  }
  eliminarAutor(id: any) {
    this.autorService.deleteAutor(id).subscribe(resp => {
      this.ngOnInit();
    });
  }
}
