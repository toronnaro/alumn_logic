<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Ibe Hidayat',
            'username' => 'Ibee',
            'email' => 'ibe@gmail.com',
            'password' => '12345',
            'is_admin' => 1
        ]);
    }
}
