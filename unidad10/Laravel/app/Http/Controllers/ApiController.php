<?php

namespace App\Http\Controllers;

use App\Models\Autor;
use App\Models\Libro;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    function getLibros()
    {
        return Libro::with('autor')->get();
    }
    function getLibro($id)
    {
        $libro = Libro::find($id);
        return $libro;
    }
    function newLibro(Request $request)
    {
        return Libro::create([
            'titulo' => $request->titulo,
            'fechaP' => $request->fechaP,
            'ventas' => $request->ventas,
            'autor_id' => $request->autor_id
        ]);
    }
    function updateLibro(Request $request, $id)
    {
        $libro = Libro::find($id);
        return $libro->update($request->all());
    }
    function deleteLibro(Request $request, $id)
    {
        $libro = Libro::find($id);
        return $libro->delete($request);
    }

    function getAutores()
    {
        return Autor::all();
    }
    function getAutor($id)
    {
        $autor = Autor::find($id);
        return $autor;
    }
    function newAutor(Request $request)
    {
        return Autor::create([
            'nombre' => $request->nombre,
            'apellidos' => $request->apellidos
        ]);
    }
    function updateAutor(Request $request, $id)
    {
        $autor = Autor::find($id);
        return $autor->update($request->all());
    }
    function deleteAutor(Request $request, $id)
    {
        $autor = Autor::find($id);
        return $autor->delete($request);
    }
}
