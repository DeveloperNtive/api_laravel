<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    protected $fillable = [
        'codigo',
        'nombre',
        'marca',
        'tipo',
        'cantidad',
        'estado',
        'precio_venta',
        'precio_compra',
    ];
}
