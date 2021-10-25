<?php

namespace Database\Seeders;

use App\Models\UsersProfile;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Bezhanov\Faker\Provider\Educator;
use Bezhanov\Faker\Provider\Demographic;

class UsersProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //faker instance
        $faker = Faker::create('id_ID');

        //set faker provider extension
        $faker->addProvider(new Educator($faker));
        $faker->addProvider(new Demographic($faker));

        //create a fake profile for user id 6
        UsersProfile::create([
            'user_id' => 6,
            'nik' => $faker->nik,
            // 'first_name',
            // 'last_name',
            'gender' => 'L',
            'birth_place' => $faker->city(),
            'birth_date' => $faker->date(),
            'jobs' => $faker->jobTitle(),
            'job_location' => $faker->city(),
            // 'education',
            // 'education_place',
            // 'avatar',
            'ktp_address' => $faker->streetAddress(),
            'address' => $faker->streetAddress()
        ]);
    }
}
