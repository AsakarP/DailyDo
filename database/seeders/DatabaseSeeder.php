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
        User::factory()->create([
            'name' => 'johanmar.pl',
            'email' => 'admin@example.com',
            'password' => bcrypt('secret'),
        ]);
        User::factory()->create([
            'name' => 'jul',
            'email' => 'jul@example.com',
            'password' => bcrypt('secret'),
        ]);
    }
}
