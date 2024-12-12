<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cuenta;
use App\Models\Cliente;
use cliente as GlobalCliente;

class ClienteController extends Controller
{
    function list()
    {
        $clientes = Cliente::all();
        return view('cliente.list', ['clientes' => $clientes]);
    }
    function new(Request $request)
    {
        if ($request->isMethod('post')) {
            // recogemos los campos del formulario en un objeto cliente
            $cliente = new Cliente;
            $cliente->dni = $request->dni;
            $cliente->nombre = $request->nombre;
            $cliente->apellidos = $request->apellidos;
            $cliente->fechaN = $request->fechaN;
            $cliente->save();
            return redirect()->route('cliente_list')->with('status', 'Nuevo cliente ' . $cliente->getNombreApellidos() . ' creada!');
        }
        // si no venimos de hacer submit al formulario, tenemos que mostrar el formulario
        $clientes = Cliente::all();
        return view('cliente.new', ['clientes' => $clientes]);
    }
    function delete($id)
    {
        $cliente = Cliente::find($id);
        $cliente->delete();
        return redirect()->route('cliente_list')->with('status', 'Cliente ' . $cliente->getNombreApellidos() . ' eliminada!');
    }
    function edit(Request $request, $id)
    {
        $cliente = Cliente::find($id);
        if ($request->isMethod(('post'))) {
            $cliente->dni = $request->dni;
            $cliente->nombre = $request->nombre;
            $cliente->apellidos = $request->apellidos;
            $cliente->fechaN = $request->fechaN;
            $cliente->save();
            return redirect()->route('cliente_list')->with('status', 'Cliente ' . $cliente->getNombreApellidos() . ' editado!');
        }
        return view('cliente.edit', ['cliente' => $cliente]);
    }
}
