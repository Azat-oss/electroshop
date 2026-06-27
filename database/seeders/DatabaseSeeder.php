<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Вызываем наш сидер категорий
        $this->call([
            CategorySeeder::class,
            AdminSeeder::class,
        ]);
    }
}