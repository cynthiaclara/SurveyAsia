<?php

namespace Database\Seeders;

use App\Models\Subscription;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class SubscriptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        //$faker = Faker::create();
        Subscription::factory()->count(15)->create();
    }
}
