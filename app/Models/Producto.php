<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $fillable = [
        'nombre',
        'cantidad',
        'precio',
        'id_categoria'
    ];

    protected $hidden = [
        'id_categoria',
    ];

    public function categoria(){
        return $this->belongsTo(Categoria::class, "id_categoria");
    }
}
