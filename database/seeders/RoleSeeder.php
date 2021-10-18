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
            'name' => 'Administrator',
            'description' => 'Administrator adalah user yang mampu mengakses seluruh struktur sistem'
        ]);

        Role::create([
            'id' => 2,
            'name' => 'Free User',
            'description' => 'Free User adalah salah satu bagian researcher yang mencakup kemampuan user gratis'
        ]);

        Role::create([
            'id' => 3,
            'name' => 'One Time User',
            'description' => 'One Time User adalah salah satu bagian researcher yang mencakup kemampuan user sekali bayar'
        ]);

        Role::create([
            'id' => 4,
            'name' => 'Subscriber User',
            'description' => 'Subscriber user adalah salah satu bagian researcher yang mencakup kemampuan user berlangganan'
        ]);

        Role::create([
            'id' => 5,
            'name' => 'Responden',
            'description' => 'Responden adalah user yang memiliki kemampuan untuk menjawab survey dan memiliki reward'
        ]);
    }
}
