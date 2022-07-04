<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Document;
use App\Models\Trabajador;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        // Category::factory(15)->create();
        // Document::factory(80)->create();
        Trabajador::factory(10)->create();
    }
}
