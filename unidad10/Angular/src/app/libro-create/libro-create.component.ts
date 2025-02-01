import { Component } from '@angular/core';
import { DatosLibrosService } from '../services/datos-libros.service';
import { Router } from '@angular/router';
import { FormBuilder, FormGroup } from '@angular/forms';
import { IAutor } from '../interfaces/iautor';
import { DatosAutoresService } from '../services/datos-autores.service';
@Component({
  selector: 'app-libro-create',
  standalone: false,

  templateUrl: './libro-create.component.html',
  styleUrl: './libro-create.component.css'
})
export class LibroCreateComponent {
  myForm: FormGroup;
  errorMessage: string = '';
  autores: IAutor[] = [];

  constructor(
    private libroService: DatosLibrosService,
    private autorService: DatosAutoresService,
    private router: Router,
    private formBuilder: FormBuilder
  ) { this.myForm = new FormGroup({}); }


  ngOnInit() {
    this.myForm = this.formBuilder.group({
      titulo: [null],
      fechaP: [null],
      ventas: [null],
      autor_id: [null]
    });
    this.autorService.getDatos().subscribe(datos => {
      if (datos.body) {
        this.autores = datos.body;
      }
    })
  }

  onSubmit(libro: any) {
    this.libroService.createLibro(libro).subscribe({
      next: (data) => {
        this.router.navigate(['../libro-list']);
      },
      error: (error) => {
        this.errorMessage = error.message;
      }
    });
  }
}
