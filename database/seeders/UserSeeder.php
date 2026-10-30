<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::query()->delete();

        User::create([
            'username' => 'admin',
            'full_name' => 'Rainier Louis Espino',
            'name' => 'Rainier Louis Espino',
            'email' => 'admin@example.com',
            'password' => Hash::make('password'),
        ]);
    }
}
