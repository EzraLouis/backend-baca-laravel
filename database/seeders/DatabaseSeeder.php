<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Ezra Louis',
            'username' => 'ezralouis',
            'email' => 'ezralo22@gmail.com',
            'password' => bcrypt('12345'),
            'remember_token' => bin2hex(random_bytes(30)),
            'avatar' => 'https://i.ibb.co/6pD5S6Z/ezra-louis.png',
            'role' => 'admin',
        ]);
    }
}
