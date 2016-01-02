<?php

use Illuminate\Database\Seeder;
use App\Pictures;
use Illuminate\Support\Facades\Storage;

class PictureTableSeeder extends Seeder
{
    protected $faker;

    // pour récupérer un faker opérationnel
    public function __construct(Faker\Generator $faker)
    {
        $this->faker = $faker;
    }


    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $files = Storage::allFiles();

        foreach($files as $file) Storage::delete($file);

        $products = Product::all();

        foreach($products as $product) {

            $uri = str_random(12) . '_370x235.jpg';
            Storage::put(
                $uri,
                file_get_contents('http://lorempixel.com/futurama/370/235/')
            );

            Pictures::create([
                'product_id' => $product_id,
                'uri' => $uri,
                'title' => $this->faker->name,
                'size' => 150,
                'type' => 'jpg'
            ]);
        }
    }
}
