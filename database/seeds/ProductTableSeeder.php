<?php

use Illuminate\Support\Facades\App;
use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // TagTableSeeder => créez des tags
        // ProductTableSeeder => associez des tages à l'aide de facker
        factory(App\Product::class, 15)->create()->each(function ($product)
        {
//            echo $product->id;
            var_dump($product->id);
        }

        );
    }
}
