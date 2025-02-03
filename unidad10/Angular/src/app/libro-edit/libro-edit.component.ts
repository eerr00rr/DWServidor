import { Component } from '@angular/core';
import { FormBuilder, FormGroup } from '@angular/forms';
import { IAutor } from '../interfaces/iautor';
import { DatosLibrosService } from '../services/datos-libros.service';
import { DatosAutoresService } from '../services/datos-autores.service';
import { Router } from '@angular/router';
import { ActivatedRoute } from '@angular/router';

@Component({
  selector: 'app-libro-edit',
  standalone: false,

  templateUrl: './libro-edit.component.html',
  styleUrl: './libro-edit.component.css'
})
export class LibroEditComponent {
  myForm: FormGroup;
  errorMessage: string = '';
  autores: IAutor[] = [];
  id: string | null | undefined;

  constructor(
    private libroService: DatosLibrosService,
    private autorService: DatosAutoresService,
    private router: Router,
    private formBuilder: FormBuilder,
    private ruta: ActivatedRoute
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

    this.id = this.ruta.snapshot.paramMap.get('id');
    this.libroService.getLibro(this.id).subscribe({
      next: (data) => {
        this.myForm.setValue({
          titulo: data.body?.titulo,
          fechaP: data.body?.fechaP,
          ventas: data.body?.ventas,
          autor_id: data.body?.autor_id
        });
      },
      error: (error) => {
        this.errorMessage = error.message;
      }
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
