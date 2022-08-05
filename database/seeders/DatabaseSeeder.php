<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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

        \App\Models\User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => '$2y$10$gysyKtijo7c2TvdQVjpJ6uRMbpWUfttDQfkKJqTkWbwAHkrEYAj2O',//asdasdasd
            'role' => '1',
        ]);
        \App\Models\User::factory()->create([
            'name' => 'User',
            'email' => 'user@gmail.com',
            'password' => '$2y$10$gysyKtijo7c2TvdQVjpJ6uRMbpWUfttDQfkKJqTkWbwAHkrEYAj2O',//asdasdasd
            'role' => '2',
        ]);
        \App\Models\Category::factory()->create([
            'category_name' => 'Yemek',
            'category_type' => 'yemek',
        ]);
        \App\Models\Product::factory()->create([
            'category_id' => '1',
            'product_name' => 'Urun',
        ]);
    }
}
