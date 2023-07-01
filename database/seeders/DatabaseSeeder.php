<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Product;
use App\Models\User;
use App\Models\Mading;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Product::factory(100)->create();
        User::factory(10)->create();
        Mading::factory(10)->create();
        $this->call(CategorySeeder::class);
        $this->call(UserSeeder::class);
    }
}
