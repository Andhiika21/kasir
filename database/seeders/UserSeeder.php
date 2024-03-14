<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::truncate();
        User::create([
            "name"=> "Andhika",
            "username"=>"Andhika21",
            "role"=> "admin",
            "email"=> "andhika@gmail.com",
            "password"=> bcrypt("12345"),
        ]);
        User::create([
            "name"=> "Petugas 1",
            "Username"=>"Petugas1",
            "role"=> "petugas",
            "email"=> "petugas1@gmail.com",
            "password"=> bcrypt("12345"),
            
        ]);
    }
}
