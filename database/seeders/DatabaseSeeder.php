<?php

namespace Database\Seeders;

use App\Models\Invoice;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Invoice::factory(100)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'admin@mail.com',
            'password' =>Hash::make('123123123'),
        ]);
    }
}
