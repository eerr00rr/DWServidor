<?php

namespace App\Http\Controllers;

use App\Models\Cuenta;

class DefaultController extends Controller
{
    function home()
    {
        return view('default.home');
    }
    function estadistica()
    {
        $cuenta_max = Cuenta::saldoMaximo();
        $cuenta_min = Cuenta::saldoMinimo();
        $promedio = Cuenta::promedio();
        $cuentas = Cuenta::all();
        return view('cuenta.estadistica', ['max' => $cuenta_max, 'min' => $cuenta_min, 'avg' => round($promedio, 2), 'cuentas' => $cuentas]);
    }
}
