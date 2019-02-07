<?php

use Faker\Generator as Faker;

$factory->define(App\CustomerAddress::class, function (Faker $faker) {
    return [
        'addr_si_do_name' => '서울특별시',
        'addr_si_gun_gu_name' => '강남구',
        'addr_admin_dong_name' => '삼성1동',
        'addr_legal_dong_name' => '삼성동',
        'addr_legal_ri_name' => null,
        'addr_is_mountain' => false,
        'addr_jibun_number' => '162-17',
        'addr_road_name' => '봉은사로12길',
        'addr_is_basement' => 0,
        'addr_building_number' => '6',
        'addr_detail' => '익성빌딩 5층 메쉬코리아',
    ];
});
