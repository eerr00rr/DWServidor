import { Component, OnInit } from '@angular/core';
import { DatosLibrosService } from '../services/datos-libros.service';
import { ILibro } from '../interfaces/ilibro';

@Component({
  selector: 'app-libro-list',
  standalone: false,

  templateUrl: './libro-list.component.html',
  styleUrl: './libro-list.component.css'
})
export class LibroListComponent implements OnInit {
  constructor(private libroService: DatosLibrosService) { }

  tituloListado = 'Listado de libros';

  libros: ILibro[] = [];

  ngOnInit() {
    console.log("Listado de libros inicializado");
    this.libroService.getDatos().subscribe(resp => {
      if (resp.body) {
        this.libros = resp.body;
      }
    });
  }
  eliminarLibro(id: any) {
    this.libroService.deleteLibro(id).subscribe(resp => {
      this.ngOnInit();
    });
  }
}
