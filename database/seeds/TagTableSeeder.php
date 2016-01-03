<?php

use Illuminate\Database\Seeder;

class TagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Tags')->insert(
            [
                [
                    ['name' => 'Laser bleu'],
                ],
                [
                    ['name' => 'Laser rouge'],
                ],
                [
                    ['name' => 'Casque blanc'],
                ],
                [
                    ['name' => 'Casque noir'],
                ],
                [
                    ['name' => 'Casque bleu'],
                ]
            ]);


    }
}
