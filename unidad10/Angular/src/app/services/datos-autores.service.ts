import { Injectable } from '@angular/core';
import { IAutor } from '../interfaces/iautor';
import { Observable } from 'rxjs';
import { HttpClient, HttpResponse } from '@angular/common/http';
import { environment } from '../../environments/environment.development';

@Injectable({
  providedIn: 'root'
})
export class DatosAutoresService {

  constructor(private _http: HttpClient) { }

  public getDatos(): Observable<HttpResponse<IAutor[]>> {
    return this._http.get<IAutor[]>(environment.apiUrl + '/api/autores', { observe: 'response' });
  }

  public createAutor(datos: any): Observable<HttpResponse<IAutor[]>> {
    return this._http.post<IAutor[]>(environment.apiUrl + '/api/autor', datos, { observe: 'response' });
  }
}
