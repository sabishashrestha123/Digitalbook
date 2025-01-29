<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class AuthSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::firstOrCreate([
            'name' => 'superadmin',
            'email' => 'admin@example.com',
            'role'=> 'admin',
            'password'=>bcrypt('password'),
        ]);
    }
}
