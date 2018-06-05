<?php

use Faker\Generator as Faker;
use App\Product;
$factory->define(App\Order::class, function (Faker $faker) {
    return [
        'product_id' => function(){
            return Product::inRandomOrder()->first()->id;
        }
    ];
});
