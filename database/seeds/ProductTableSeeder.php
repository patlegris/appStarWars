<?php

use App\Tag;
use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{

    protected $tag;

    public function __construct(Tag $tag)
    {
        $this->tag = $tag;
    }

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $shuffle = function ($tags, $num) {
            $s = [];
            shuffle($tags);
            while ($num >= 0) {
                $s[] = $tags[$num];
                $num--;
            }

            return $s;
        };

        $max = $this->tag->count();
        $tags = $this->tag->lists('id')->toArray();  // passé d'une collection à un array

        factory(App\Product::class, 15)->create()->each(function ($product) use ($shuffle, $max, $tags) {
            $product->tags()->attach($shuffle($tags, rand(1, $max - 1)));
        });
    }
}