<?php

use Faker\Generator as Faker;

$factory->define(App\product::class, function (Faker $faker) {
    return [
        'pname'=>$faker->name,
        'pserialno'=>$faker->numberBetween(435,9876),
        'pbuyprice'=>$faker->numberBetween(2000,5000),
        'psellprice'=>$faker->numberBetween(2500,5000),
        'quantity'=>$faker->numberBetween(1,50),
        'pshortdesc'=>$faker->streetAddress

    ];
});
