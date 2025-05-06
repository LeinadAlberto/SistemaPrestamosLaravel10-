<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prestamo extends Model
{
    use HasFactory;

    /* Un prestamo pertenece a un cliente */
    public function cliente()
    {
        return $this->belongsto(Cliente::class);
    }

    /* Un prestamo tiene muchos pagos */
    public function pagos() 
    {
        return $this->hasMany(Pago::class);
    }
}
