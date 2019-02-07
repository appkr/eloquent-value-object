<?php

use Faker\Generator as Faker;

$factory->define(App\Customer::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'address' => new \App\Address(
            '서울특별시',
            '강남구',
            new \App\JibunAddress(
                '삼성1동',
                '삼성동',
                null,
                false,
                '162-17'
            ),
            new \App\RoadAddress(
                '봉은사로112길',
                0,
                '6'
            ),
            '익성빌딩 5층 메쉬코리아'
        ),
    ];
});
