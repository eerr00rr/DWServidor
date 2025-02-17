<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cuenta;
use App\Models\Cliente;
use cliente as GlobalCliente;
use Illuminate\Validation\Rule;

class CuentaController extends Controller
{
    function list()
    {
        $cuentas = Cuenta::orderSaldoDesc();
        return view('cuenta.list', ['cuentas' => $cuentas]);
    }

    function new(Request $request)
    {
        if ($request->isMethod('post')) {
            $validatedData = $request->validate([
                'codigo' => ['required', 'unique:cuentas', 'max:10'],
                'saldo' => ['required'],
            ]);

            // recogemos los campos del formulario en un objeto cuenta
            $cuenta = new Cuenta;
            $cuenta->codigo = $validatedData['codigo'];
            $cuenta->saldo = $validatedData['saldo'];
            $cuenta->cliente_id = $request->cliente_id;
            $cuenta->save();

            return redirect()->route('cuenta_list')->with('status', 'Nueva cuenta ' . $cuenta->codigo . ' creada!');
        }
        // si no venimos de hacer submit al formulario, tenemos que mostrar el formulario
        $clientes = Cliente::all();
        return view('cuenta.new', ['clientes' => $clientes]);
    }

    function delete($id)
    {
        $cuenta = Cuenta::find($id);
        $cuenta->delete();
        return redirect()->route('cuenta_list')->with('status', 'Cuenta ' . $cuenta->codigo . ' eliminada!');
    }

    function edit(Request $request, $id)
    {
        $cuenta = Cuenta::find($id);
        if ($request->isMethod('post')) {
            $validatedData = $request->validate([
                'codigo' => [
                    'required',
                    Rule::unique('cuentas')->ignore($id),
                    'max:10'
                ],
                'saldo' => ['required'],
            ]);

            // recogemos los campos del formulario en un objeto cuenta
            $cuenta->codigo = $validatedData['codigo'];
            $cuenta->saldo = $validatedData['saldo'];
            $cuenta->cliente_id = $request->cliente_id;
            $cuenta->save();
            return redirect()->route('cuenta_list')->with('status', 'Cuenta ' . $cuenta->codigo . ' editado!');
        }
        $clientes = Cliente::all();
        return view('cuenta.edit', ['clientes' => $clientes, 'cuenta' => $cuenta]);
    }

    function filtrar(Request $request)
    {
        $filtro = $request->filtro;
        $saldo_min = isset($request->saldo) ? $request->saldo : '0';

        $boton = $request->submit;
        if (preg_match_all('/AND/', $boton)) {
            $cuentas = Cuenta::buscarAnd($filtro, $saldo_min);
        } else {
            $cuentas = Cuenta::buscarOr($filtro, $saldo_min);
        }

        return view('cuenta.list', ['cuentas' => $cuentas, 'filtro' => $filtro, 'saldo' => $saldo_min]);
    }
}
