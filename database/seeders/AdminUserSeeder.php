<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;  // Add this line
use Illuminate\Support\Facades\Hash; // Add this line

use Illuminate\Database\Seeder;

class AdminUserSeeder extends Seeder
{

    public function run()
    {
        User::firstOrCreate(
            ['email' => 'henokayalew31@gmail.com'],
            [
                'name' => 'Henok',
                'email' => 'henokayalew31@gmail.com',
                'password' => Hash::make('henok123'),
                'role' => 'admin'
            ]
        );
    }
}
