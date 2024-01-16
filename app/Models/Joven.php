<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Joven extends Model
{
    protected $table = 'jovenes'; // Nombre de la tabla en la base de datos

    protected $fillable = [
        'nombre', 'apellidos', 'edad', 'telefono', 'barrio',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
