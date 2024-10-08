<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Alexis Chavez Barria',
            'email' => 'alexischavezbarria1@gmail.com',
            'password' => bcrypt('alexis99')
        ]);
        User::factory(99)->create();
    }
}
