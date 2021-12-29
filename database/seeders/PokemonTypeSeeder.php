<?php

namespace Database\Seeders;

use App\Models\PokemonType;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PokemonTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pokemon_types')->insert(
            [
                [
                    'name_type' => 'Normal',
                    'color' => '#a7a87a',
                ],
                [
                    'name_type' => 'Fire',
                    'color' => '#ec7f3a',
                ],
                [
                    'name_type' => 'Water',
                    'color' => '#6d90ee',
                ],
                [
                    'name_type' => 'Grass',
                    'color' => '#7bc956',
                ],
                [
                    'name_type' => 'Flying',
                    'color' => '#a98fee',
                ],
                [
                    'name_type' => 'Fighting',
                    'color' => '#bc2d2d',
                ],
                [
                    'name_type' => 'Poison',
                    'color' => '#9e3e9f',
                ],
                [
                    'name_type' => 'Electric',
                    'color' => '#f5d040',
                ],
                [
                    'name_type' => 'Ground',
                    'color' => '#dec06d',
                ],
                [
                    'name_type' => 'Rock',
                    'color' => '#b6a040',
                ],
                [
                    'name_type' => 'Psychic',
                    'color' => '#f45589',
                ],
                [
                    'name_type' => 'Ice',
                    'color' => '#9cd8d8',
                ],
                [
                    'name_type' => 'Bug',
                    'color' => '#a7b82f',
                ],
                [
                    'name_type' => 'Ghost',
                    'color' => '#705897',
                ],
                [
                    'name_type' => 'Steel',
                    'color' => '#b8b8cf',
                ],

                [
                    'name_type' => 'Dragon',
                    'color' => '#7235f5',
                ],

                [
                    'name_type' => 'Dark',
                    'color' => '#6f5894',
                ],

                [
                    'name_type' => 'Fairy',
                    'color' => '#eb98ac',
                ]
            ]
        );
    }
}
