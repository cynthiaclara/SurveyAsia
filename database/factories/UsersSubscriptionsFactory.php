<?php

namespace Database\Factories;

use App\Models\Subscription;
use App\Models\User;
use App\Models\UsersSubscriptions;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

class UsersSubscriptionsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = UsersSubscriptions::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => $this->faker->randomDigitNotNull(),
            'subscription_id' => $this->subscription()->id,
            'note' => $this->faker->paragraph(),
            'expired_at' => $this->subscription()->id == 1 ? null : Carbon::now()->addHours(24)
        ];
    }

    public function user($userId)
    {
        # code...
        $this->user = User::where('id', '=', $userId)->first();

        return $this->state([
            'user_id' => $this->user->id
        ]);
    }

    public function subscription()
    {
        # code...
        //random subs, except Enterprise
        $subscriptionId = $this->faker->numberBetween(1, 3);
        $subscription = Subscription::where(['id' => $subscriptionId])->first();

        return $subscription;
    }
}
