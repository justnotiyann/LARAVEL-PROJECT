<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */


    protected $model = User::class;

    public function run(): void
    {
        User::create([
            'username' => 'Muhammad Fitrian',
            'email' => 'muhammadfitrian0712@gmail.com',
            'password' => 'password',
        ]);
    }
}
