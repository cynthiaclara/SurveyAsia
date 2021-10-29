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
        //create fake researcher
        $faker = Faker::create('id_ID');

        DB::table('users')->insert([
            [
                'id' => 1,
                'first_name' => $faker->firstName(),
                'last_name' => $faker->lastName(),
                'username' => $faker->userName(),
                'email' => $faker->unique()->safeEmail(),
                'created_at' => now(),
                'updated_at' => now(),
                'email_verified_at' => now(),
                'password' => Hash::make('12345678'), // password
                'remember_token' => Str::random(10),
                'role_id' => 2,
                'subscription_id' => 1
            ],
            [
                'id' => 2,
                'first_name' => $faker->firstName(),
                'last_name' => $faker->lastName(),
                'username' => $faker->userName(),
                'email' => $faker->unique()->safeEmail(),
                'created_at' => now(),
                'updated_at' => now(),
                'email_verified_at' => now(),
                'password' => Hash::make('12345678'), // password
                'remember_token' => Str::random(10),
                'role_id' => 2,
                'subscription_id' => 2
            ],
            [
                'id' => 3,
                'first_name' => $faker->firstName(),
                'last_name' => $faker->lastName(),
                'username' => $faker->userName(),
                'email' => $faker->unique()->safeEmail(),
                'created_at' => now(),
                'updated_at' => now(),
                'email_verified_at' => now(),
                'password' => Hash::make('12345678'), // password
                'remember_token' => Str::random(10),
                'role_id' => 2,
                'subscription_id' => 3
            ],
            [
                'id' => 4,
                'first_name' => $faker->firstName(),
                'last_name' => $faker->lastName(),
                'username' => $faker->userName(),
                'email' => $faker->unique()->safeEmail(),
                'created_at' => now(),
                'updated_at' => now(),
                'email_verified_at' => now(),
                'password' => Hash::make('12345678'), // password
                'remember_token' => Str::random(10),
                'role_id' => 2,
                'subscription_id' => 4
            ],
            [
                'id' => 5,
                'first_name' => $faker->firstName(),
                'last_name' => $faker->lastName(),
                'username' => $faker->userName(),
                'email' => $faker->unique()->safeEmail(),
                'created_at' => now(),
                'updated_at' => now(),
                'email_verified_at' => now(),
                'password' => Hash::make('12345678'), // password
                'remember_token' => Str::random(10),
                'role_id' => 2,
                'subscription_id' => 5
            ],
        ]);

        //create user that will have a profile
        User::create([
            'id' => 6,
            'first_name' => $faker->firstName(),
            'last_name' => $faker->lastName(),
            'username' => $faker->userName(),
            'password' => Hash::make('12345678'),
            'email' => $faker->unique()->safeEmail(),
            'email_verified_at' => now(),
            'role_id' => 3
        ]);

        //using factory
        User::factory()->count(5)->create();

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
