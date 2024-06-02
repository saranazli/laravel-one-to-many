<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\ProjectTableSeeder;
use Database\Seeders\TypeTableSeeder;
use Database\Seeders\TechnologyTableSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            ProjectTableSeeder::class,
            TechnologyTableSeeder::class,
            TypeTableSeeder::class
        ]);
    }
}
