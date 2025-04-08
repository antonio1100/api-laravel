<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categorias')->insert([
            'descripcion' => 'trabajo',
        ]);
        DB::table('categorias')->insert([
            'descripcion' => 'estudio',
        ]);
        DB::table('categorias')->insert([
            'descripcion' => 'casa',
        ]);
        DB::table('categorias')->insert([
            'descripcion' => 'personal',
        ]);
        DB::table('categorias')->insert([
            'descripcion' => 'finanzas',
        ]);
        DB::table('categorias')->insert([
            'descripcion' => 'salud',
        ]);
        DB::table('categorias')->insert([
            'descripcion' => 'viaje',
        ]);
        DB::table('categorias')->insert([
            'descripcion' => 'social',
        ]);
        DB::table('categorias')->insert([
            'descripcion' => 'tecnología'
        ]);
    }
}
