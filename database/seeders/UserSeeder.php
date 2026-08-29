<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::updateOrCreate(
            ['email' => 'admin@gmail.com'],
            [
                'name' => 'Administrator',
                'username' => 'admin',
                'password' => Hash::make('password'),
                'role' => 'admin',
            ]
        );

        User::updateOrCreate(
            ['email' => 'penjaga@gmail.com'],
            [
                'name' => 'Penjaga',
                'username' => 'penjaga',
                'penjaga' => Hash::make('penjaga'),
                'role' => 'penjaga',
            ]
        );
    }
}