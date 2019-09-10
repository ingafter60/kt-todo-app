<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

// $factory->define(Model::class, function (Faker $faker) {
$factory->define(\App\Todo::class, function (Faker $faker) {
    // return [
    //     'name' => $facker->sentence(3),
    //     'description' => $facker->paragraph(4),
    //     'completed' => false
    // ];
    return [
        'name'        => $faker->sentence(3),
        'description' => $faker->paragraph(4),
        'completed'   => false
    ];
});
