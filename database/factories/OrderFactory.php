<?php

namespace Database\Factories;

use App\Models\Order;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Order::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            
            'user_id' =>\App\Models\User::all()->random()->id,
            'hotel_id' =>\App\Models\Hotel::all()->random()->id,
            'total_price'=>$this->faker->NumberBetween(100,500),
            'status' =>$this->faker->NumberBetween(0,4),
            'payment_status' =>$this->faker->NumberBetween(0,1),

        ];
    }
}
