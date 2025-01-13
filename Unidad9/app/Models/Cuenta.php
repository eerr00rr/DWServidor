<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Cuenta extends Model
{
    use HasFactory;


    public function cliente(): BelongsTo
    {
        return $this->belongsTo(Cliente::class);
    }

    static function buscarAnd($filtro, $saldo_min)
    {
        return Cuenta::where('codigo', 'like', "%$filtro%")->where('saldo', '>=', "$saldo_min")->get();
    }
    static function buscarOr($filtro, $saldo_min)
    {
        return Cuenta::where('codigo', 'like', "%$filtro%")->orWhere('saldo', '>=', "$saldo_min")->get();
    }
    static function orderSaldoDesc()
    {
        return Cuenta::orderBy('saldo', 'desc')->get();
    }
    static function saldoMaximo()
    {
        return Cuenta::orderSaldoDesc()->first();
    }
    static function saldoMinimo()
    {
        return Cuenta::orderBy('saldo', 'asc')->first();
    }
    static function promedio()
    {
        return Cuenta::avg('saldo');
    }
}
