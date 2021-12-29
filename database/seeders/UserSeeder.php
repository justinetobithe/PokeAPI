<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'Ash Ketchum',
                'email' => 'ashketchum@gmail.com ',
                'password' => Hash::make('1234'),
                'image' => '/storage/img/ash-ketchum.png'
            ],
            [
                'name' => 'Foo Bar',
                'email' => 'foobar@gmail.com ',
                'password' => Hash::make('1234'),
                'image' => '/storage/img/ash-ketchum.png'
            ],
        ]);
    }
}
