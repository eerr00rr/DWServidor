import { Component } from '@angular/core';
import { FormBuilder, FormGroup } from '@angular/forms';
import { DatosAutoresService } from '../services/datos-autores.service';
import { Router } from '@angular/router';

@Component({
  selector: 'app-autor-create',
  standalone: false,

  templateUrl: './autor-create.component.html',
  styleUrl: './autor-create.component.css'
})
export class AutorCreateComponent {
  myForm: FormGroup;
  errorMessage: string = '';

  constructor(
    private autorService: DatosAutoresService,
    private router: Router,
    private formBuilder: FormBuilder
  ) { this.myForm = new FormGroup({}); }


  ngOnInit() {
    this.myForm = this.formBuilder.group({
      nombre: [null],
      apellidos: [null],
    });
  }

  onSubmit(autor: any) {
    this.autorService.createAutor(autor).subscribe({
      next: (data) => {
        this.router.navigate(['../autor-list']);
      },
      error: (error) => {
        this.errorMessage = error.message;
      }
    });
  }
}
