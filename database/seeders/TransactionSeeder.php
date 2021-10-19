<?php

namespace Database\Seeders;

use App\Models\Transaction;
use Illuminate\Database\Seeder;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Transaction::create([
            // 'id' => 1,
            'user_id' => 2,
            'subscription_id' => 2,
            'price' => 100,
            'quantity' => 1,
            'total' => 1000,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
