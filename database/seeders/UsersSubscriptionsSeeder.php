<?php

namespace Database\Seeders;

use Database\Factories\UsersSubscriptionsFactory;
use Illuminate\Database\Seeder;

class UsersSubscriptionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $factory = new UsersSubscriptionsFactory();
        for ($i = 1; $i <= 5; $i++) {
            # code...
            $factory
                ->user($i)
                ->create();
        }
    }
}
