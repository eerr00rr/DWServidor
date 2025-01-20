<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        DB::table('libros')->insert([
            'titulo' => 'The Dog',
            'fechaP' => '2023/02/11',
            'ventas' => 69,
            'autor_id' => null
        ]);
        DB::table('libros')->insert([
            'titulo' => 'Metro',
            'fechaP' => '2013/01/05',
            'ventas' => 20,
            'autor_id' => 1
        ]);
        DB::table('libros')->insert([
            'titulo' => 'Otro',
            'fechaP' => '2013/01/05',
            'ventas' => 20,
            'autor_id' => null
        ]);

        DB::table('autors')->insert([
            'nombre' => 'Jane',
            'apellidos' => 'Doe'
        ]);
        DB::table('autors')->insert([
            'nombre' => 'Artem',
            'apellidos' => 'Morozov'
        ]);
    }
}
