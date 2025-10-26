<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('productos')->insert([
            [
                'nombre' => 'Smartphone Samsung',
                'cantidad' => 50,
                'precio' => 1200.50,
                'id_categoria' => 1, // Electrónica
            ],
            [
                'nombre' => 'Laptop HP',
                'cantidad' => 30,
                'precio' => 3500.00,
                'id_categoria' => 1, // Electrónica
            ],
            [
                'nombre' => 'Camiseta deportiva',
                'cantidad' => 100,
                'precio' => 80.00,
                'id_categoria' => 2, // Ropa
            ],
            [
                'nombre' => 'Sofá de 3 plazas',
                'cantidad' => 10,
                'precio' => 2500.00,
                'id_categoria' => 3, // Hogar
            ],
            [
                'nombre' => 'Bicicleta montaña',
                'cantidad' => 15,
                'precio' => 1800.00,
                'id_categoria' => 4, // Deportes
            ],
            [
                'nombre' => 'Lego Star Wars',
                'cantidad' => 40,
                'precio' => 500.00,
                'id_categoria' => 5, // Juguetes
            ],
            [
                'nombre' => 'Caja de galletas',
                'cantidad' => 200,
                'precio' => 25.50,
                'id_categoria' => 6, // Alimentos
            ],
        ]);
    }
}
