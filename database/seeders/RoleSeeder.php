<?php

namespace Database\Seeders;

use App\Models\Role;
use Database\Factories\RoleFactory;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Role::create([
            'id' => 1,
            'name' => 'User',
            'description' => 'This is a user role'
        ]);

        Role::create([
            'id' => 2,
            'name' => 'Administrator',
            'description' => 'This is a admin role'
        ]);

        Role::create([
            'id' => 3,
            'name' => 'Manager',
            'description' => 'This is a manager role'
        ]);
    }
}
