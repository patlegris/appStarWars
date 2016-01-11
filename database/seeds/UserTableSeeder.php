<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(
            [
                [
                    'name' => 'Patrick',
                    'email' => 'patrick@patrick.com',
                    'password' => Hash::make('ramses'),
                ],
                [
                    'name' => 'Tony',
                    'email' => 'tony@tony.com',
                    'password' => Hash::make('tony')
                ],
                [
                    'name' => 'TinTin',
                    'email' => 'tintin@tintin.com',
                    'password' => Hash::make('tintin')
                ],
                [
                    'name' => 'Gloups',
                    'email' => 'gloups@gloups.com',
                    'password' => Hash::make('gloups')
                ],
            ]
        );
    }
}
