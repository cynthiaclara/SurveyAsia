<?php

namespace Database\Seeders;

use App\Models\Subscription;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

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
        $faker = Faker::create();
        //Subscription::factory()->count(15)->create();
        $names = ['User Sekali Bayar', 'User Berlangganan'];

        DB::table('users_subscription')->insert([
            [
                'name' => $names[0],
                'description' => $faker->text(),
                'user_id' => 1
            ],
            [
                'name' => $names[1],
                'description' => $faker->text(),
                'user_id' => 2
            ],
            [
                'name' => $names[0],
                'description' => $faker->text(),
                'user_id' => 3
            ],
            [
                'name' => $names[1],
                'description' => $faker->text(),
                'user_id' => 4
            ],
            [
                'name' => $names[0],
                'description' => $faker->text(),
                'user_id' => 5
            ],
        ]);
    }
}
