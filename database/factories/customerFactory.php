<?php

use Faker\Generator as Faker;

$factory->define(App\customer::class, function (Faker $faker) {
    return [
        'customername'=>$faker->name,
        'customercompany'=>$faker->company,
        'customeremail'=>$faker->unique()->safeEmail,
        'customercontact'=>$faker->phoneNumber,
        'customeraltcontact'=>$faker->phoneNumber,
        'phone'=>$faker->phoneNumber,
        'phone1'=>$faker->phoneNumber,
        'customeraddress'=>$faker->address,
    ];
});
