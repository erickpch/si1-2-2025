<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{

    public function index()
    {
        return view('producto.index');
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Producto $producto)
    {
        //
    }

    public function update(Request $request, Producto $producto)
    {
        //
    }

    public function destroy(Producto $producto)
    {
        //
    }
}
