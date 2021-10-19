<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        //User::factory()->count(25)->create();

        //create admin
        User::create([
            'first_name' => 'Iam',
            'last_name' => 'Admin',
            'username' => 'admin123',
            'password' => Hash::make('12345678'),
            'email' => 'admin@example.com',
            'role_id' => 1
        ]);
    }
}
