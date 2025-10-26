<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categorias')->insert([
            [
                'nombre' => 'Electrónica',
                'descripcion' => 'Teléfonos, laptops, accesorios y más.',
            ],
            [
                'nombre' => 'Ropa',
                'descripcion' => 'Prendas de vestir para hombres, mujeres y niños.',
            ],
            [
                'nombre' => 'Hogar',
                'descripcion' => 'Muebles, decoración y artículos para el hogar.',
            ],
            [
                'nombre' => 'Deportes',
                'descripcion' => 'Ropa deportiva, equipos y accesorios.',
            ],
            [
                'nombre' => 'Juguetes',
                'descripcion' => 'Juguetes educativos y de entretenimiento.',
            ],
            [
                'nombre' => 'Alimentos',
                'descripcion' => 'Productos de consumo, snacks y bebidas.',
            ],
        ]);
    }
}
