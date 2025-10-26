<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'Super Administrador',
            'telefono' => 77777777,
            'direccion' => 'Calle Principal',
            'email' => 'admin@tienda.com',
            'foto' => 'foto.png',
            'username' => 'admin',
            'password' => Hash::make('12345678'), 
            'id_rol' => 1, 
            'email_verified_at' => now(),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
