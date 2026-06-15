<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class AdminSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => 'Admin HKU',
            'email' => 'admin@hku.co.id',
            'password' => bcrypt('password123'), // Ganti dengan password yang diinginkan
        ]);
    }
}