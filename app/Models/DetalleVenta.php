<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DetalleVenta extends Model
{
    protected $fillable = [
        'cantidad',
        'precio',
        'id_producto',
        'id_venta',
    ];

    public function producto(){
        $this->belongsTo(Producto::class, 'id_producto');
    }

    public function venta(){
        $this->belongsTo(Venta::class, 'id_venta');
    }
}
