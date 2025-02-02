import { HttpClient, HttpResponse } from '@angular/common/http';
import { Injectable } from '@angular/core';
import { Observable } from 'rxjs';
import { ILibro } from '../interfaces/ilibro';
import { environment } from '../../environments/environment.development';

@Injectable({
  providedIn: 'root'
})
export class DatosLibrosService {

  constructor(private _http: HttpClient) { }

  public getDatos(): Observable<HttpResponse<ILibro[]>> {
    return this._http.get<ILibro[]>(environment.apiUrl + '/api/libros', { observe: 'response' });
  }
  public createLibro(datos: any): Observable<HttpResponse<ILibro[]>> {
    return this._http.post<ILibro[]>(environment.apiUrl + '/api/libro', datos, { observe: 'response' });
  }
  public getLibro(id: any): Observable<HttpResponse<ILibro>> {
    return this._http.get<ILibro>(environment.apiUrl + `/api/libro/${id}`, { observe: 'response' });
  }
  public editLibro(id: any, datos: any): Observable<HttpResponse<ILibro>> {
    return this._http.put<ILibro>(environment.apiUrl + `/api/libro?${id}`, datos, { observe: 'response' });
  }
  public deleteLibro(id: any): Observable<HttpResponse<ILibro>> {
    return this._http.delete<ILibro>(environment.apiUrl + `/api/libro/${id}`, { observe: 'response' });
  }
}
