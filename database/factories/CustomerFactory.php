<?php

use Faker\Generator as Faker;

$factory->define(App\Customer::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
    ];
});

$factory->afterCreating(App\Customer::class, function (App\Customer $customer, Faker $faker) {
    $customer->address()->save(factory(App\CustomerAddress::class)->make());
});
