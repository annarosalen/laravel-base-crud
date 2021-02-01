<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Device;
use Faker\Generator as Faker;

$factory->define(Device::class, function (Faker $faker) {
    return [

        'name' => ($faker -> word()),
        'type' => ($faker -> word()),
        'price' => ($faker -> randomFloat($nbMaxDecimals = 2, $min = 0, $max = 200)),
        'consumption' => ($faker ->randomNumber())
    ];
});
