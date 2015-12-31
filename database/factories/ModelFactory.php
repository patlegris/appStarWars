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

//$factory->define(App\User::class, function (Faker\Generator $faker) {
//    return [
//        'name' => $faker->name,
//        'email' => $faker->email,
//        'password' => bcrypt(str_random(10)),
//        'remember_token' => str_random(10),
//    ];

// factory pour insérer des données dans la table products
$factory->define(App\Product::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'category_id' => rand(1,2),
        'price' => $faker->randomFloat(2,10,2000),
        'abstract' => $faker->paragraph(rand(1,4)),
        'content' => $faker->paragraph(rand(6,12)),
        'quantity' => $faker->randomFloat(null,10,99),
    ];

});
