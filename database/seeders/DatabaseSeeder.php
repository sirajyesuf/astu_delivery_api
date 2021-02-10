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
        \App\Models\User::factory(10)->create();
        \App\Models\FoodMenu::factory()->count(10)->create();
        \App\Models\Hotel::factory()->count(5)->create();

        $foodmenu = \App\Models\FoodMenu::find(1);
        $foodmenu->hotels()->attach([
            1 =>['price'=>100],
            2 =>['price'=>200]
        ]);

        $foodmenu = \App\Models\FoodMenu::find(2);
        $foodmenu->hotels()->attach([
            3 =>['price'=>150],
            4 =>['price'=>170]
        ]);

        \App\Models\Order::factory()->count(10)->create();

        $order=\App\Models\Order::find(1);
        $order->foodmenus()->attach([
            2 =>['qty'=>2],
            2 =>['qty'=>1],
            3 =>['qty'=>3]
        ]);
        $order2 = \App\Models\Order::find(2);
        $order2->foodmenus()->attach([
            1 =>['qty'=>2],
            4 =>['qty'=>1],
            5 =>['qty'=>3]
        ]);



        


    }
}
