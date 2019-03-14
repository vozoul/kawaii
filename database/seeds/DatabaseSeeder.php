<?php

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
         //$this->call(UsersTableSeeder::class);
        factory(App\Product::class, 20)->make()->each(function (\App\Product $products) {
            $products->save();
        });
        factory(App\User::class, 20)->make()->each(function (\App\User $users) {
            $users->save();
        });

    }
}
