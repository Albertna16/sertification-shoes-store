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
        User::create([
            'name' => 'Muhammad Albert Nur Agathon',
            'email' => 'alberttnaa16@gmail.com',
            'password' => Hash::make('albertna16'),
            'access' => 'admin',
        ]);
    }
}
