<?php

namespace Database\Factories;

use App\Models\FoodMenu;
use Illuminate\Database\Eloquent\Factories\Factory;

class FoodMenuFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = FoodMenu::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' =>$this->faker->name,
            'photo' =>$this->faker->imageUrl(),
            // 'photo' =>$this->faker->image('food_menu_photos',640,480,null,false),
            'description'=>$this->faker->paragraph,
        ];
    }
}
