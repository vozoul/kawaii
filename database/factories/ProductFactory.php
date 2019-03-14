<?php

use Faker\Generator as Faker;

$factory->define(\App\Product::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'price' => $faker->randomFloat(5, 20),
        'image01' => 'images/echarpe_chaude_en_laine_tricotee_1024x1024.jpg',
        'image02' => 'images/Kawaii_Cat_Drink_Bottle_blue_1024x1024.jpg',
        'image03' => 'images/Kawaii_Bear_Drink_Bottle_1024x1024.jpg',
        'description' => $faker->text(200),
        'feature' =>$faker->text,
    ];
});
