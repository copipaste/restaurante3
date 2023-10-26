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
       
        $this->call(superUserSeeder::class);
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        \App\Models\categoria::create([
            'id' => '1',
            'nombre' => 'TIPICOS',
            'descripcion' => '...',
            'status' => '1',
            'url' => 'wwww' 
        ]);

        \App\Models\Producto::create([
            'id' => '1',
            'categoria_id' => '1',
            'nombre' => 'PLATO 1',
            'precio' => '100.00',
            'imagen' => '...',
            'stock' => '11',
            'descripcion' => '...',
            'disponibilida' => true,
        ]);

        \App\Models\Producto::create([
            'id' => '2',
            'categoria_id' => '1',
            'nombre' => 'PLATO 2',
            'precio' => '105.00',
            'imagen' => '...',
            'stock' => '11',
            'descripcion' => '...',
            'disponibilida' => true,
        ]);

        \App\Models\tipo_pagos::create([
            'id' => '1',
            'nombre' => 'QR',
        ]);

        \App\Models\direcciones::create([
            'id' => '1',
            'direcion' => '...',
            'indicacion'=> '...'
        ]);

        \App\Models\tipo_ordenes::create([
            'id' => '1',
            'nombre' => 'MOVIL',
        ]);

        \App\Models\promocion::create([
            'id' => '1',
            'nombre' => 'No habilitado',
            'descripcion' => 'No aplica a ninguna promocion',
            'procentajeDescuento' => '2.00'
        ]);

        




    }
}
