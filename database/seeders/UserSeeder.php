<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //create 5 researchers
        User::factory()
            ->researcher()
            ->count(5)
            ->create();

        //create 5 respondents
        User::factory()
            ->respondent()
            ->count(5)
            ->create();


        //create admin
        User::create([
            'first_name' => 'Iam',
            'last_name' => 'Admin',
            'username' => 'admin123',
            'password' => Hash::make('12345678'),
            'email' => 'admin@example.com',
            'email_verified_at' => now(),
            'role_id' => 1
        ]);
    }
}
