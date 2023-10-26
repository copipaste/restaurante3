<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $role = Role::create(['name' => 'superUsuario']);

        User::create([
            'nombre' => 'SuperUsuario',
            'fechaNacimiento' => null,
            'sexo' => null,
            'telefono' => null,
            'email' => 'SuperUsuario@gmail.com',
            'password' => bcrypt('password'),
            'direccion' => null,
            'nit' => null,
            'tipo' => null,
            'edad' => null,
        ])->assignRole('superUsuario');

        \App\Models\categoria::create([
            'id' => '1',
            'nombre' => 'TIPICOS',
            'descripcion' => '...',
            'status' => '1',
            'url' => 'wwww'
        ]);
    }
}
