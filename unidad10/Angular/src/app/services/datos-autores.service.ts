import { Injectable } from '@angular/core';
import { IAutor } from '../interfaces/iautor';
import { Observable } from 'rxjs';
import { HttpClient, HttpResponse } from '@angular/common/http';
import { environment } from '../../environments/environment.development';

@Injectable({
  providedIn: 'root'
})
export class DatosAutoresService {
  // autores: IAutor[] = [{ id: 1, nombre: 'Hermann', apellidos: 'Hesse' }, { id: 1, nombre: 'nikita', apellidos: 'lol' }, { id: 1, nombre: 'artem', apellidos: 'morozov' }];

  constructor(private _http: HttpClient) { }

  public getDatos(): Observable<HttpResponse<IAutor[]>> {
    return this._http.get<IAutor[]>(environment.apiUrl + '/api/autores', { observe: 'response' });
  }
}
