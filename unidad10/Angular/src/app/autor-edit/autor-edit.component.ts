import { Component } from '@angular/core';
import { FormBuilder, FormGroup } from '@angular/forms';
import { DatosAutoresService } from '../services/datos-autores.service';
import { ActivatedRoute, Router } from '@angular/router';

@Component({
  selector: 'app-autor-edit',
  standalone: false,

  templateUrl: './autor-edit.component.html',
  styleUrl: './autor-edit.component.css'
})
export class AutorEditComponent {
  myForm: FormGroup;
  errorMessage: string = '';
  id: string | null | undefined;

  constructor(
    private autorService: DatosAutoresService,
    private router: Router,
    private formBuilder: FormBuilder,
    private ruta: ActivatedRoute
  ) { this.myForm = new FormGroup({}); }


  ngOnInit() {
    this.myForm = this.formBuilder.group({
      nombre: [null],
      apellidos: [null],
    });

    this.id = this.ruta.snapshot.paramMap.get('id');
    this.autorService.getAutor(this.id).subscribe({
      next: (data) => {
        this.myForm.setValue({
          nombre: data.body?.nombre,
          apellidos: data.body?.apellidos,
        });
      },
      error: (error) => {
        this.errorMessage = error.message;
      }
    })
  }
  onSubmit(autor: any) {
    this.autorService.editAutor(this.id, autor).subscribe({
      next: (data) => {
        this.router.navigate(['../autor-list']);
      },
      error: (error) => {
        this.errorMessage = error.message;
      }
    });
  }
}
