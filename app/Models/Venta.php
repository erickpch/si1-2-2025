<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    protected $fillable = [
        'correlativo',
        'fecha',
        'id_user'
    ];

    public function user(){
        $this->belongsTo(User::class,'id_user');
    }

    public function detalle_ventas(){
        $this->belongsToMany(DetalleVenta::class, 'id_venta');
    }
}
