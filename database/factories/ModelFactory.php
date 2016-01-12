<?php

use Carbon\Carbon;

function randCard()
{
    $rand = '';
    $r = 0;
    while ($r < 16) {
        $rand .= rand(1, 9);
        $r++;
    }

    return $rand;
}

function title(Faker\Generator $faker)
{
    $sentence = $faker->sentence(5);

    return substr($sentence, 0, strlen($sentence) - 1);
}


$factory->define(App\Customer::class, function (Faker\Generator $faker) {
    return [
        'name'           => $faker->name,
        'email'          => $faker->email,
        'address'        => $faker->address,
        'number_card'    => randCard(),
        'number_command' => rand(1, 200),
    ];
});

$factory->define(App\Product::class, function (Faker\Generator $faker) {

    $title = title($faker);

    return [
        'name'        => $title,
        'slug'        =>str_slug($title),
        'category_id' => rand(1, 2),
        'price'       => $faker->randomFloat(2, 20, 2000),
        'quantity'    => rand(2, 5),
        'abstract'    => $faker->paragraph(3),
        'published_at' =>$faker->dateTime('now')
    ];
});