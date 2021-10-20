<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PriceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            // 'id' => 1,
            // 'fitur' => 'design lengkap',
            // 'id' => 1,
            // 'id' => 1,
        ]);
    }
}
