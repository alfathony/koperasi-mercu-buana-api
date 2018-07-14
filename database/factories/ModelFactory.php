<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\Barang::class, function (Faker\Generator $faker) {
    return [
        'nama_barang' => $faker->name,
        'merk_barang' => $faker->title,
        'harga_barang' => $faker->randomNumber(2),
    ];
});
