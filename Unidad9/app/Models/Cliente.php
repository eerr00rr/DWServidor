<?php

namespace App\Models;

use App\Models\Cuenta;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Cliente extends Model
{
    use HasFactory;

    public function getNombreApellidos(): string
    {
        return "$this->nombre $this->apellidos";
    }

    protected $casts = [
        'fechaN' => 'datetime:Y-m-d',
    ];

    public function cuentas(): HasMany
    {
        return $this->hasMany(Cuenta::class);
    }

    public function contar()
    {
        $cuentas = $this->cuentas();
        return $cuentas->count();
    }
}
