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

        // $table->id();
        //     $table->unsignedBigInteger('user_id');
        //     $table->unsignedBigInteger('subscription_id');
        //     $table->integer('price');
        //     $table->integer('quantity');
        //     $table->integer('total');
        //     $table->timestamps();
        Transaction::create([
            'id' => 1,
            'user_id' => 1,
            'subscription_id' => 1,
            'price' => 200,
            'quantity' => 1,
            'total' => 100,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
