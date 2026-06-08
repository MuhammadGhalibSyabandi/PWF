<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //admin
        if(!User::where('email', 'admin@gmail.com')->exists()) {
            User::create([
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('password123'),
                'role' => 'admin'
            ]);
        }

        //user
        if(!User::where('email', 'user@gmail.com')->exists()) {
            User::create([
                'name' => 'User biasa',
                'email' => 'userbiasa@gmail.com',
                'password' => Hash::make('123'),
                'role' => 'user'
            ]);
        }   
    }
}
