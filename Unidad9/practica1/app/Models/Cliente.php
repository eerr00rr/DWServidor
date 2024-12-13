<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


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
}
