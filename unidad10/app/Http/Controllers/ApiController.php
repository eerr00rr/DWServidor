<?php

namespace App\Http\Controllers;

use App\Models\Libro;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    function getLibros()
    {
        return Libro::all();
    }

    function updateLibro(Request $request, $id)
    {
        $libro = Libro::find($id);
        $libro->update($request->all());

        return $libro;
    }
}
