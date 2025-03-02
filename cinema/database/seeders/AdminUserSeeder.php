<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

use App\Models\User;

class AdminUserSeeder extends Seeder
{
    public function run()
    {
        // Create admin user
        User::firstOrCreate(
            ['email' => 'admin@example.com'],
            [
                'name' => 'Admin',
                'password' => Hash::make('admin'),
                'role' => 'admin'
            ]
        );

        // Create ordinary user
        User::firstOrCreate(
            ['email' => 'user@example.com'],
            [
                'name' => 'Ordinary User',
                'password' => Hash::make('user'),
                'role' => 'buyer'
            ]
        );

        User::create([
            'name' => 'Movie Lover',
            'email' => 'buyer@cinema.com',
            'role' => 'buyer',
            'password' => Hash::make('buyer'),
        ]);
    }
}