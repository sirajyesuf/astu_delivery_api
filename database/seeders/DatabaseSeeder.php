<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        // \App\Models\FoodMenu::factory()->count(10)->create();
        // \App\Models\Hotel::factory()->count(5)->create();

        // $foodmenu = \App\Models\FoodMenu::find(1);
        // $foodmenu->hotels()->attach([
        //     1 =>['price'=>100],
        //     2 =>['price'=>200]
        // ]);

        $foodmenu = \App\Models\FoodMenu::find(2);
        $foodmenu->hotels()->attach([
            3 =>['price'=>150],
            4 =>['price'=>170]
        ]);


        


    }
}
