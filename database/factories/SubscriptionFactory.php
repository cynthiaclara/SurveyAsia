<?php

namespace Database\Factories;

use App\Models\Subscription;
use Illuminate\Database\Eloquent\Factories\Factory;

class SubscriptionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Subscription::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $userid = $this->faker->numberBetween(1, 25);

        return [
            //
            'name' => $this->randName(),
            'description' => $this->faker->text(),
            'user_id' => $userid,
            'expired_at' => $this->faker->date()
        ];
    }

    private function randName()
    {
        # code...
        $roleid = $this->faker->numberBetween(3, 4);
        $names = ['User Sekali Bayar', 'User Berlangganan'];

        return $roleid == 3 ? $names[0] : $names[1];
    }
}
