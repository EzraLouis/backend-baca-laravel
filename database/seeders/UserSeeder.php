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
        User::factory(50)->create();

        User::create([
            'name' => 'Ezra Louis',
            'username' => 'ezralouis',
            'email' => 'ezralo22@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('12345'),
            'remember_token' => bin2hex(random_bytes(30)),
            'avatar' => 'https://i.ibb.co/6pD5S6Z/ezra-louis.png',
            'role' => 'admin',
        ]);
    }
}
