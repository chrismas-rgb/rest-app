<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
\App\Models\User;

class UserSeeder extends Seeder
{
    
    public function run(): void
    {
        // Create 10 users using the UserFactory
        User::factory()->count(10)->create();
    }
}
