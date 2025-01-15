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

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        DB::table('libros')->insert([
            'titulo' => 'The Dog',
            'fechaP' => '2023/02/11',
            'ventas' => 69,
            'autor_id' => null
        ]);

        DB::table('autors')->insert([
            'nombre' => 'Jane',
            'apellidos' => 'Doe'
        ]);
    }
}
