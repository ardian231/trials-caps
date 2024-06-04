<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => 'Ardian Setiawan',
            'email' => 'ardi@gmail.com',
            'password' => Hash::make('password'),
            'role' => 'admin',
        ]);
    }
}
