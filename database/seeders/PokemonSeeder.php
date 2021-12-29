<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PokemonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('pokemon')->insert([
            [
                'pokemon_id' => 63,
                'name' => 'Abra',
                'type' => '["Psychic"]'
            ],
            [
                'pokemon_id' => 359,
                'name' => 'Absol',
                'type' => '["Dark"]'
            ],
            [
                'pokemon_id' => 142,
                'name' => 'Aerodactyl',
                'type' => '["Rock","Flying"]'
            ],
            [
                'pokemon_id' => 306,
                'name' => 'Aggron',
                'type' => '["Steel","Rock"]'
            ],
            [
                'pokemon_id' => 190,
                'name' => 'Aipom',
                'type' => '["Normal"]'
            ],
            [
                'pokemon_id' => 65,
                'name' => 'Alakazam',
                'type' => '["Psychic"]'
            ],
            [
                'pokemon_id' => 334,
                'name' => 'Altaria',
                'type' => '["Dragon","Flying"]'
            ],
            [
                'pokemon_id' => 348,
                'name' => 'Amaldo',
                'type' => '["Rock","Bug"]'
            ],
            [
                'pokemon_id' => 181,
                'name' => 'Ampharos',
                'type' => '["Electric"]'
            ],
            [
                'pokemon_id' => 347,
                'name' => 'Anorith',
                'type' => '["Rock","Bug"]'
            ],
            [
                'pokemon_id' => 24,
                'name' => 'Arbok',
                'type' => '["Poison"]'
            ],
            [
                'pokemon_id' => 59,
                'name' => 'Arcanine',
                'type' => '["Fire"]'
            ],
            [
                'pokemon_id' => 168,
                'name' => 'Ariados',
                'type' => '["Bug","Poison"]'
            ],
            [
                'pokemon_id' => 304,
                'name' => 'Aron',
                'type' => '["Steel","Rock"]'
            ],
            [
                'pokemon_id' => 144,
                'name' => 'Articuno',
                'type' => '["Ice","Flying"]'
            ],
            [
                'pokemon_id' => 184,
                'name' => 'Azumarill',
                'type' => '["Water"]'
            ],
            [
                'pokemon_id' => 298,
                'name' => 'Azurill',
                'type' => '["Normal"]'
            ],
            [
                'pokemon_id' => 371,
                'name' => 'Bagon',
                'type' => '["Dragon"]'
            ],
            [
                'pokemon_id' => 343,
                'name' => 'Baltoy',
                'type' => '["Psychic","Ground"]'
            ],
            [
                'pokemon_id' => 354,
                'name' => 'Banette',
                'type' => '["Ghost"]'
            ],
            [
                'pokemon_id' => 339,
                'name' => 'Barboach',
                'type' => '["Ground","Water"]'
            ],
            [
                'pokemon_id' => 153,
                'name' => 'Bayleef',
                'type' => '["Grass"]'
            ],
            [
                'pokemon_id' => 267,
                'name' => 'Beautifly',
                'type' => '["Bug","Flying"]'
            ],
            [
                'pokemon_id' => 15,
                'name' => 'Beedrill',
                'type' => '["Bug","Poison"]'
            ],
            [
                'pokemon_id' => 374,
                'name' => 'Beldum',
                'type' => '["Steel","Psychic"]'
            ],
            [
                'pokemon_id' => 182,
                'name' => 'Bellossom',
                'type' => '["Grass"]'
            ],
            [
                'pokemon_id' => 69,
                'name' => 'Bellsprout',
                'type' => '["Grass","Poison"]'
            ],
            [
                'pokemon_id' => 9,
                'name' => 'Blastoise',
                'type' => '["Water"]'
            ],
            [
                'pokemon_id' => 257,
                'name' => 'Blaziken',
                'type' => '["Fire","Fighting"]'
            ],
            [
                'pokemon_id' => 242,
                'name' => 'Blissey',
                'type' => '["Normal"]'
            ],
            [
                'pokemon_id' => 286,
                'name' => 'Breloom',
                'type' => '["Grass","Fighting"]'
            ],
            [
                'pokemon_id' => 1,
                'name' => 'Bulbasaur',
                'type' => '["Grass","Poison"]'
            ],
            [
                'pokemon_id' => 12,
                'name' => 'Butterfree',
                'type' => '["Bug","Flying"]'
            ],
            [
                'pokemon_id' => 331,
                'name' => 'Cacnea',
                'type' => '["Grass"]'
            ],
            [
                'pokemon_id' => 332,
                'name' => 'Cacturne',
                'type' => '["Grass","Dark"]'
            ],
            [
                'pokemon_id' => 323,
                'name' => 'Camerupt',
                'type' => '["Fire","Ground"]'
            ],
            [
                'pokemon_id' => 318,
                'name' => 'Carvanha',
                'type' => '["Water","Dark"]'
            ],
            [
                'pokemon_id' => 268,
                'name' => 'Cascoon',
                'type' => '["Bug"]'
            ],
            [
                'pokemon_id' => 351,
                'name' => 'Castform',
                'type' => '["Normal"]'
            ],
            [
                'pokemon_id' => 10,
                'name' => 'Caterpie',
                'type' => '["Bug"]'
            ],
            [
                'pokemon_id' => 251,
                'name' => 'Celebi',
                'type' => '["Grass","Psychic"]'
            ],
            [
                'pokemon_id' => 113,
                'name' => 'Chansey',
                'type' => '["Normal"]'
            ],
            [
                'pokemon_id' => 6,
                'name' => 'Charizard',
                'type' => '["Fire","Flying"]'
            ],
            [
                'pokemon_id' => 4,
                'name' => 'Charmander',
                'type' => '["Fire"]'
            ],
            [
                'pokemon_id' => 5,
                'name' => 'Charmeleon',
                'type' => '["Fire"]'
            ],
            [
                'pokemon_id' => 152,
                'name' => 'Chikorita',
                'type' => '["Grass"]'
            ],
            [
                'pokemon_id' =>  358,
                'name' => 'Chimecho',
                'type' => '["Psychic"]'
            ],
            [
                'pokemon_id' => 170,
                'name' => 'Chinchou',
                'type' => '["Electric","Water"]'
            ],
            [
                'pokemon_id' => 366,
                'name' => 'Clamperl',
                'type' => '["Water"]'
            ],
            [
                'pokemon_id' => 344,
                'name' => 'Claydol',
                'type' => '["Psychic","Ground"]'
            ],
            [
                'pokemon_id' => 36,
                'name' => 'Clefable',
                'type' => '["Normal"]'
            ],
            [
                'pokemon_id' => 35,
                'name' => 'Clefairy',
                'type' => '["Normal"]'
            ],
            [
                'pokemon_id' => 173,
                'name' => 'Cleffa',
                'type' => '["Normal"]'
            ],
            [
                'pokemon_id' => 91,
                'name' => 'Cloyster',
                'type' => '["Water","Ice"]'
            ],
            [
                'pokemon_id' => 256,
                'name' => 'Combusken',
                'type' => '["Fire","Fighting"]'
            ],
            [
                'pokemon_id' => 341,
                'name' => 'Corphish',
                'type' => '["Water"]'
            ],
            [
                'pokemon_id' => 222,
                'name' => 'Corsola',
                'type' => '["Water","Rock"]'
            ],
            [
                'pokemon_id' => 346,
                'name' => 'Cradily',
                'type' => '["Rock","Grass"]'
            ],
            [
                'pokemon_id' => 342,
                'name' => 'Crawdaunt',
                'type' => '["Water","Dark"]'
            ],
            [
                'pokemon_id' => 169,
                'name' => 'Crobat',
                'type' => '["Flying","Poison"]'
            ],
            [
                'pokemon_id' =>  159,
                'name' => 'Croconaw',
                'type' => '["Water"]'
            ],
            [
                'pokemon_id' =>  104,
                'name' => 'Cubone',
                'type' => '["Ground"]'
            ],
            [
                'pokemon_id' =>  155,
                'name' => 'Cyndaquil',
                'type' => '["Fire"]'
            ],
            [
                'pokemon_id' =>  301,
                'name' => 'Delcatty',
                'type' => '["Normal"]'
            ],
            [
                'pokemon_id' =>  225,
                'name' => 'Delibird',
                'type' => '["Ice","Flying"]'
            ],
            [
                'pokemon_id' =>  386,
                'name' => 'Deoxys',
                'type' => '["Psychic"]'
            ],
            [
                'pokemon_id' =>  87,
                'name' => 'Dewgong',
                'type' => '["Water","Ice"]'
            ],
            [
                'pokemon_id' =>  50,
                'name' => 'Diglett',
                'type' => '["Ground"]'
            ],
            [
                'pokemon_id' =>  132,
                'name' => 'Ditto',
                'type' => '["Normal"]'
            ],
            [
                'pokemon_id' =>  85,
                'name' => 'Dodrio',
                'type' => '["Normal","Flying"]'
            ],
            [
                'pokemon_id' =>  84,
                'name' => 'Doduo',
                'type' => '["Normal","Flying"]'
            ],
            [
                'pokemon_id' =>  232,
                'name' => 'Donaphan',
                'type' => '["Ground"]'
            ],
            [
                'pokemon_id' =>  148,
                'name' => 'Dragonair',
                'type' => '["Dragon"]'
            ],
            [
                'pokemon_id' =>  149,
                'name' => 'Dragonite',
                'type' => '["Dragon","Flying"]'
            ],
            [
                'pokemon_id' =>  147,
                'name' => 'Dratini',
                'type' => '["Dragon"]'
            ],
            [
                'pokemon_id' =>   96,
                'name' => 'Drowzee',
                'type' => '["Psychic"]'
            ],
            [
                'pokemon_id' =>  51,
                'name' => 'Dugtrio',
                'type' => '["Ground"]'
            ],
            [
                'pokemon_id' =>  206,
                'name' => 'Dunsparce',
                'type' => '["Normal"]'
            ],
            [
                'pokemon_id' =>   356,
                'name' => 'Dusclops',
                'type' => '["Ghost"]'
            ],
            [
                'pokemon_id' =>  355,
                'name' => 'Duskull',
                'type' => '["Ghost"]'
            ],
            [
                'pokemon_id' =>  269,
                'name' => 'Dustox',
                'type' => '["Bug","Poison"]'
            ],
            [
                'pokemon_id' =>  133,
                'name' => 'Eevee',
                'type' => '["Normal"]'
            ],
            [
                'pokemon_id' =>  23,
                'name' => 'Ekans',
                'type' => '["Poison"]'
            ],
            [
                'pokemon_id' =>  125,
                'name' => 'Electabuzz',
                'type' => '["Electric"]'
            ],
            [
                'pokemon_id' =>  309,
                'name' => 'Electrike',
                'type' => '["Electric"]'
            ],
            [
                'pokemon_id' =>  101,
                'name' => 'Electrode',
                'type' => '["Electric"]'
            ],
            [
                'pokemon_id' =>  239,
                'name' => 'Elekid',
                'type' => '["Electric"]'
            ],
            [
                'pokemon_id' =>  244,
                'name' => 'Entei',
                'type' => '["Fire"]'
            ],
            [
                'pokemon_id' =>  196,
                'name' => 'Espeon',
                'type' => '["Psychic"]'
            ],
            [
                'pokemon_id' =>  102,
                'name' => 'Exeggcute',
                'type' => '["Grass","Psychic"]'
            ],
            [
                'pokemon_id' =>  103,
                'name' => 'Exeggutor',
                'type' => '["Grass","Psychic"]'
            ],
            [
                'pokemon_id' =>  295,
                'name' => 'Exploud',
                'type' => '["Normal"]'
            ],
            [
                'pokemon_id' =>  83,
                'name' => "Farfetch'd",
                'type' => '["Normal","Flying"]'
            ],
            [
                'pokemon_id' =>  22,
                'name' => 'Fearow',
                'type' => '["Normal","Flying"]'
            ],
            [
                'pokemon_id' =>   349,
                'name' => 'Feebas',
                'type' => '["Water"]'
            ],
            [
                'pokemon_id' =>  160,
                'name' => 'Feraligatr',
                'type' => '["Water"]'
            ],
            [
                'pokemon_id' =>  180,
                'name' => 'Flaaffy',
                'type' => '["Electric"]'
            ],
            [
                'pokemon_id' =>  136,
                'name' => 'Flareon',
                'type' => '["Fire"]'
            ],
            [
                'pokemon_id' =>  330,
                'name' => 'Flygon',
                'type' => '["Ground","Dragon"]'
            ],
            [
                'pokemon_id' =>   205,
                'name' => 'Foretress',
                'type' => '["Steel","Bug"]'
            ],
            [
                'pokemon_id' => 162,
                'name' => 'Furret',
                'type' => '["Normal"]'
            ],
            [
                'pokemon_id' =>  282,
                'name' => 'Gardevoir',
                'type' => '["Psychic"]'
            ],
            [
                'pokemon_id' =>  92,
                'name' => 'Gastly',
                'type' => '["Ghost","Poison"]'
            ],
            [
                'pokemon_id' =>   94,
                'name' => 'Gengar',
                'type' => '["Ghost","Poison"]'
            ],
            [
                'pokemon_id' =>  74,
                'name' => 'Geodude',
                'type' => '["Rock","Ground"]'
            ],
            [
                'pokemon_id' =>  203,
                'name' => 'Girafarig',
                'type' => '["Psychic","Normal"]'
            ],
            [
                'pokemon_id' =>  362,
                'name' => 'Glalie',
                'type' => '["Ice"]'
            ],
            [
                'pokemon_id' =>  207,
                'name' => 'Gligar',
                'type' => '["Flying","Ground"]'
            ],
            [
                'pokemon_id' =>  44,
                'name' => 'Gloom',
                'type' => '["Grass","Poison"]'
            ],
            [
                'pokemon_id' =>  42,
                'name' => 'Golbat',
                'type' => '["Poison","Flying"]'
            ],
            [
                'pokemon_id' =>  118,
                'name' => 'Goldeen',
                'type' => '["Water"]'
            ],
            [
                'pokemon_id' =>  55,
                'name' => 'Golduck',
                'type' => '["Water"]'
            ],
            [
                'pokemon_id' =>  76,
                'name' => 'Golem',
                'type' => '["Rock","Ground"]'
            ],
            [
                'pokemon_id' =>  368,
                'name' => 'Gorebyss',
                'type' => '["Water"]'
            ],
            [
                'pokemon_id' =>   210,
                'name' => 'Granbull',
                'type' => '["Normal"]'
            ],
            [
                'pokemon_id' =>   75,
                'name' => 'Graveler',
                'type' => '["Rock","Ground"]'
            ],
            [
                'pokemon_id' => 88,
                'name' => 'Grimer',
                'type' => '["Poison"]'
            ],
            [
                'pokemon_id' =>  383,
                'name' => 'Groundon',
                'type' => '["Ground"]'
            ],
            [
                'pokemon_id' =>  253,
                'name' => 'Grovyle',
                'type' => '["Grass"]'
            ],
            [
                'pokemon_id' =>  58,
                'name' => 'Growlithe',
                'type' => '["Fire"]'
            ],
            [
                'pokemon_id' =>   326,
                'name' => 'Grumpig',
                'type' => '["Psychic"]'
            ],
            [
                'pokemon_id' =>   316,
                'name' => 'Gulpin',
                'type' => '["Poison"]'
            ],
            [
                'pokemon_id' =>  130,
                'name' => 'Gyarados',
                'type' => '["Water","Flying"]'
            ],
            [
                'pokemon_id' =>  297,
                'name' => 'Hariyama',
                'type' => '["Fighting"]'
            ],
            [
                'pokemon_id' =>  93,
                'name' => 'Haunter',
                'type' => '["Ghost","Poison"]'
            ],
            [
                'pokemon_id' =>  214,
                'name' => 'Heracross',
                'type' => '["Bug","Fighting"]'
            ],
            [
                'pokemon_id' =>  107,
                'name' => 'Hitmonchan',
                'type' => '["Fighting"]'
            ],
            [
                'pokemon_id' =>  106,
                'name' => 'Hitmonlee',
                'type' => '["Fighting"]'
            ],
            [
                'pokemon_id' =>   237,
                'name' => 'Hitmontop',
                'type' => '["Fighting"]'
            ],
            [
                'pokemon_id' =>  250,
                'name' => 'Ho-Oh',
                'type' => '["Flying","Fire"]'
            ],
            [
                'pokemon_id' =>  163,
                'name' => 'HootHoot',
                'type' => '["Normal","Flying"]'
            ],
            [
                'pokemon_id' =>  187,
                'name' => 'Hoppip',
                'type' => '["Grass","Flying"]'
            ],
            [
                'pokemon_id' =>  116,
                'name' => 'Horsea',
                'type' => '["Water"]'
            ],
            [
                'pokemon_id' =>   229,
                'name' => 'Houndoom',
                'type' => '["Dark","Fire"]'
            ],
            [
                'pokemon_id' =>  228,
                'name' => 'Houndour',
                'type' => '["Dark","Fire"]'
            ],
            [
                'pokemon_id' =>  367,
                'name' => 'Huntail',
                'type' => '["Water"]'
            ],
            [
                'pokemon_id' =>  97,
                'name' => 'Hypno',
                'type' => '["Psychic"]'
            ],
            [
                'pokemon_id' =>  174,
                'name' => 'Igglybuff',
                'type' => '["Normal"]'
            ],
            [
                'pokemon_id' =>   314,
                'name' => 'Illumise',
                'type' => '["Bug"]'
            ],
            [
                'pokemon_id' =>   2,
                'name' => 'Ivysaur',
                'type' => '["Grass","Poison"]'
            ],
            [
                'pokemon_id' =>   39,
                'name' => 'Jigglypuff',
                'type' => '["Normal"]'
            ],
            [
                'pokemon_id' =>   385,
                'name' => 'Jirachi',
                'type' => '["Steel","Psychic"]'
            ],
            [
                'pokemon_id' =>   135,
                'name' => 'Jolteon',
                'type' => '["Electric"]'
            ],
            [
                'pokemon_id' =>  189,
                'name' => 'Jumpluff',
                'type' => '["Grass","Flying"]'
            ],
            [
                'pokemon_id' =>   124,
                'name' => 'Jynx',
                'type' => '["Ice","Psychic"]'
            ],
            [
                'pokemon_id' =>   140,
                'name' => 'Kabuto',
                'type' => '["Rock","Water"]'
            ],
            [
                'pokemon_id' =>   141,
                'name' => 'Kabutops',
                'type' => '["Rock","Water"]'
            ],
            [
                'pokemon_id' =>   64,
                'name' => 'Kadabra',
                'type' => '["Psychic"]'
            ],
            [
                'pokemon_id' =>  14,
                'name' => 'Kakuna',
                'type' => '["Bug","Poison"]'
            ],
            [
                'pokemon_id' =>  115,
                'name' => 'Kangaskhan',
                'type' => '["Normal"]'
            ],
            [
                'pokemon_id' => 352,
                'name' => 'Kecleon',
                'type' => '["Normal"]'
            ],
            [
                'pokemon_id' =>  230,
                'name' => 'Kingdra',
                'type' => '["Water","Dragon"]'
            ],
            [
                'pokemon_id' =>  99,
                'name' => 'Kingler',
                'type' => '["Water"]'
            ],
            [
                'pokemon_id' =>   281,
                'name' => 'Kirlia',
                'type' => '["Psychic"]'
            ],
            [
                'pokemon_id' =>  109,
                'name' => 'Koffing',
                'type' => '["Poison"]'
            ],
            [
                'pokemon_id' =>   98,
                'name' => 'Krabby',
                'type' => '["Water"]'
            ],
            [
                'pokemon_id' =>  382,
                'name' => 'Kyogre',
                'type' => '["Water"]'
            ],
            [
                'pokemon_id' =>  305,
                'name' => 'Lairon',
                'type' => '["Steel","Rock"]'
            ],
            [
                'pokemon_id' =>  171,
                'name' => 'Lanturn',
                'type' => '["Electric","Water"]'
            ],
            [
                'pokemon_id' =>  131,
                'name' => 'Lapras',
                'type' => '["Water","Ice"]'
            ],
            [
                'pokemon_id' =>  246,
                'name' => 'Larvitar',
                'type' => '["Rock","Ground"]'
            ],
            [
                'pokemon_id' =>  380,
                'name' => 'Latias',
                'type' => '["Psychic","Dragon"]'
            ],
            [
                'pokemon_id' =>   381,
                'name' => 'Latios',
                'type' => '["Psychic","Dragon"]'
            ],
            [
                'pokemon_id' =>  166,
                'name' => 'Ledian',
                'type' => '["Bug","Flying"]'
            ],
            [
                'pokemon_id' =>   165,
                'name' => 'Ledyba',
                'type' => '["Bug","Flying"]'
            ],
            [
                'pokemon_id' =>   108,
                'name' => 'Lickitung',
                'type' => '["Normal"]'
            ],
            [
                'pokemon_id' =>   345,
                'name' => 'Lileep',
                'type' => '["Rock","Grass"]'
            ],
            [
                'pokemon_id' =>   264,
                'name' => 'Linoone',
                'type' => '["Normal"]'
            ],
            [
                'pokemon_id' =>  271,
                'name' => 'Lombre',
                'type' => '["Water","Grass"]'
            ],
            [
                'pokemon_id' =>  270,
                'name' => 'Lotad',
                'type' => '["Water","Grass"]'
            ],
            [
                'pokemon_id' =>  294,
                'name' => 'Loudred',
                'type' => '["Normal"]'
            ],
            [
                'pokemon_id' =>  272,
                'name' => 'Ludicolo',
                'type' => '["Water","Grass"]'
            ],
            [
                'pokemon_id' =>  249,
                'name' => 'Lugia',
                'type' => '["Flying","Psychic"]'
            ],
            [
                'pokemon_id' =>  337,
                'name' => 'Lunatone',
                'type' => '["Rock","Psychic"]'
            ],
            [
                'pokemon_id' =>  370,
                'name' => 'Luvdisc',
                'type' => '["Water"]'
            ],
            [
                'pokemon_id' =>  68,
                'name' => 'Machamp',
                'type' => '["Fighting"]'
            ],
            [
                'pokemon_id' =>  67,
                'name' => 'Machoke',
                'type' => '["Fighting"]'
            ],
            [
                'pokemon_id' =>  66,
                'name' => 'Machop',
                'type' => '["Fighting"]'
            ],
            [
                'pokemon_id' =>  240,
                'name' => 'Magby',
                'type' => '["Fire"]'
            ],
            [
                'pokemon_id' =>  219,
                'name' => 'Magcargo',
                'type' => '["Fire","Rock"]'
            ],
            [
                'pokemon_id' =>   129,
                'name' => 'Magikarp',
                'type' => '["Water"]'
            ],
            [
                'pokemon_id' =>   126,
                'name' => 'Magmar',
                'type' => '["Fire"]'
            ],
            [
                'pokemon_id' =>  81,
                'name' => 'Magnemite',
                'type' => '["Electric"]'
            ],
            [
                'pokemon_id' =>  82,
                'name' => 'Magneton',
                'type' => '["Electric"]'
            ],
            [
                'pokemon_id' =>  296,
                'name' => 'Makuhita',
                'type' => '["Fighting"]'
            ],
            [
                'pokemon_id' =>   310,
                'name' => 'Manectric',
                'type' => '["Electric"]'
            ],
            [
                'pokemon_id' =>   56,
                'name' => 'Mankey',
                'type' => '["Fighting"]'
            ],
            [
                'pokemon_id' =>   226,
                'name' => 'Mantine',
                'type' => '["Water","Flying"]'
            ],
            [
                'pokemon_id' =>   179,
                'name' => 'Mareep',
                'type' => '["Electric"]'
            ],
            [
                'pokemon_id' =>   183,
                'name' => 'Marill',
                'type' => '["Water"]'
            ],
            [
                'pokemon_id' =>   105,
                'name' => 'Marowak',
                'type' => '["Ground"]'
            ],
            [
                'pokemon_id' =>   259,
                'name' => 'Marshtomp',
                'type' => '["Water","Ground"]'
            ],
            [
                'pokemon_id' =>  284,
                'name' => 'Masquerain',
                'type' => '["Flying","Bug"]'
            ],
            [
                'pokemon_id' =>  303,
                'name' => 'Mawile',
                'type' => '["Steel"]'
            ],
            [
                'pokemon_id' =>  308,
                'name' => 'Medicham',
                'type' => '["Fighting","Psychic"]'
            ],
            [
                'pokemon_id' =>  307,
                'name' => 'Meditite',
                'type' => '["Fighting","Psychic"]'
            ],
            [
                'pokemon_id' =>   154,
                'name' => 'Meganium',
                'type' => '["Grass"]'
            ],
            [
                'pokemon_id' =>  52,
                'name' => 'Meowth',
                'type' => '["Normal"]'
            ],
            [
                'pokemon_id' =>  376,
                'name' => 'Metagross',
                'type' => '["Steel","Psychic"]'
            ],
            [
                'pokemon_id' =>  375,
                'name' => 'Metang',
                'type' => '["Steel","Psychic"]'
            ],
            [
                'pokemon_id' =>  11,
                'name' => 'Metapod',
                'type' => '["Bug"]'
            ],
            [
                'pokemon_id' =>  151,
                'name' => 'Mew',
                'type' => '["Psychic"]'
            ],
            [
                'pokemon_id' =>  150,
                'name' => 'Mewtwo',
                'type' => '["Psychic"]'
            ],
            [
                'pokemon_id' =>  262,
                'name' => 'Mightyena',
                'type' => '["Dark"]'
            ],
            [
                'pokemon_id' =>  350,
                'name' => 'Milotic',
                'type' => '["Water"]'
            ],
            [
                'pokemon_id' =>  241,
                'name' => 'Miltank',
                'type' => '["Normal"]'
            ],
            [
                'pokemon_id' =>  312,
                'name' => 'Minun',
                'type' => '["Electric"]'
            ],
            [
                'pokemon_id' =>  200,
                'name' => 'Misdreavus',
                'type' => '["Ghost"]'
            ],
            [
                'pokemon_id' =>  146,
                'name' => 'Moltres',
                'type' => '["Fire","Flying"]'
            ],
            [
                'pokemon_id' =>  122,
                'name' => 'Mr. Mime',
                'type' => '["Psychic"]'
            ],
            [
                'pokemon_id' =>  258,
                'name' => 'Mudkip',
                'type' => '["Water","Ground"]'
            ],
            [
                'pokemon_id' =>  89,
                'name' => 'Muk',
                'type' => '["Poison"]'
            ],
            [
                'pokemon_id' =>   198,
                'name' => 'Murkrow',
                'type' => '["Dark","Flying"]'
            ],
            [
                'pokemon_id' =>   177,
                'name' => 'Natu',
                'type' => '["Psychic","Flying"]'
            ],
            [
                'pokemon_id' =>   34,
                'name' => 'Nidoking',
                'type' => '["Poison","Ground"]'
            ],
            [
                'pokemon_id' =>   31,
                'name' => 'Nidoqueen',
                'type' => '["Poison","Ground"]'
            ],
            [
                'pokemon_id' =>   29,
                'name' => 'Nidoran',
                'type' => '["Female","Poison"]'
            ],
            [
                'pokemon_id' =>   32,
                'name' => 'Nidoran',
                'type' => '["Male","Poison"]'
            ],
            [
                'pokemon_id' =>   30,
                'name' => 'Nidorina',
                'type' => '["Poison"]'
            ],
            [
                'pokemon_id' =>   33,
                'name' => 'Nidorino',
                'type' => '["Poison"]'
            ],
            [
                'pokemon_id' =>   290,
                'name' => 'Nincada',
                'type' => '["Bug","Ground"]'
            ],
            [
                'pokemon_id' =>  38,
                'name' => 'Ninetales',
                'type' => '["Fire"]'
            ],
            [
                'pokemon_id' =>   291,
                'name' => 'Ninjask',
                'type' => '["Bug","Flying"]'
            ],
            [
                'pokemon_id' =>  164,
                'name' => 'Noctowl',
                'type' => '["Normal","Flying"]'
            ],
            [
                'pokemon_id' =>  299,
                'name' => 'Nosepass',
                'type' => '["Rock"]'
            ],
            [
                'pokemon_id' =>  322,
                'name' => 'Numel',
                'type' => '["Water"]'
            ],
            [
                'pokemon_id' =>  274,
                'name' => 'Nuzleaf',
                'type' => '["Grass","Dark"]'
            ],
            [
                'pokemon_id' =>  224,
                'name' => 'Octillery',
                'type' => '["Water"]'
            ],
            [
                'pokemon_id' =>  43,
                'name' => 'Oddish',
                'type' => '["Grass","Poison"]'
            ],
            [
                'pokemon_id' =>   138,
                'name' => 'Omanyte',
                'type' => '["Rock","Water"]'
            ],
            [
                'pokemon_id' =>   139,
                'name' => 'Omastar',
                'type' => '["Rock","Water"]'
            ],
            [
                'pokemon_id' =>   95,
                'name' => 'Onix',
                'type' => '["Rock","Ground"]'
            ],
            [
                'pokemon_id' =>  46,
                'name' => 'Paras',
                'type' => '["Bug","Grass"]'
            ],
            [
                'pokemon_id' =>   47,
                'name' => 'Parasect',
                'type' => '["Bug","Grass"]'
            ],
            [
                'pokemon_id' =>  279,
                'name' => 'Pelipper',
                'type' => '["Water","Flying"]'
            ],
            [
                'pokemon_id' =>   53,
                'name' => 'Persian',
                'type' => '["Normal"]'
            ],
            [
                'pokemon_id' =>   231,
                'name' => 'Phanpy',
                'type' => '["Ground"]'
            ],
            [
                'pokemon_id' =>   172,
                'name' => 'Pichu',
                'type' => '["Electric"]'
            ],
            [
                'pokemon_id' =>   18,
                'name' => 'Pidgeot',
                'type' => '["Normal","Flying"]'
            ],
            [
                'pokemon_id' =>  17,
                'name' => 'Pidgeotto',
                'type' => '["Normal","Flying"]'
            ],
            [
                'pokemon_id' =>  16,
                'name' => 'Pidgey',
                'type' => '["Normal","Flying"]'
            ],
            [
                'pokemon_id' =>  25,
                'name' => 'Pikachu',
                'type' => '["Electric"]'
            ],
            [
                'pokemon_id' =>  221,
                'name' => 'Piloswine',
                'type' => '["Ice","Ground"]'
            ],
            [
                'pokemon_id' =>  204,
                'name' => 'Pineco',
                'type' => '["Bug"]'
            ],
            [
                'pokemon_id' =>  127,
                'name' => 'Pinsir',
                'type' => '["Bug"]'
            ],
            [
                'pokemon_id' =>  311,
                'name' => 'Plusle',
                'type' => '["Electric"]'
            ],
            [
                'pokemon_id' =>   186,
                'name' => 'Politoed',
                'type' => '["Water"]'
            ],
            [
                'pokemon_id' =>   60,
                'name' => 'Poliwag',
                'type' => '["Water"]'
            ],
            [
                'pokemon_id' =>  61,
                'name' => 'Poliwhirl',
                'type' => '["Water"]'
            ],
            [
                'pokemon_id' =>   62,
                'name' => 'Poliwrath',
                'type' => '["Water","Fighting"]'
            ],
            [
                'pokemon_id' =>   77,
                'name' => 'Ponyta',
                'type' => '["Fire"]'
            ],
            [
                'pokemon_id' =>  261,
                'name' => 'Poochyena',
                'type' => '["Dark"]'
            ],
            [
                'pokemon_id' =>  137,
                'name' => 'Porygon',
                'type' => '["Normal"]'
            ],
            [
                'pokemon_id' =>  233,
                'name' => 'Porygon2',
                'type' => '["Normal"]'
            ],
            [
                'pokemon_id' =>   57,
                'name' => 'Primeape',
                'type' => '["Fighting"]'
            ],
            [
                'pokemon_id' =>  54,
                'name' => 'Psyduck',
                'type' => '["Water"]'
            ],
            [
                'pokemon_id' =>  247,
                'name' => 'Pupitar',
                'type' => '["Rock","Ground"]'
            ],
            [
                'pokemon_id' =>  195,
                'name' => 'Quagsire',
                'type' => '["Water","Ground"]'
            ],
            [
                'pokemon_id' =>  156,
                'name' => 'Quilava',
                'type' => '["Fire"]'
            ],
            [
                'pokemon_id' =>  211,
                'name' => 'Quilfish',
                'type' => '["Water","Poison"]'
            ],
            [
                'pokemon_id' =>  26,
                'name' => 'Raichu',
                'type' => '["Electric"]'
            ],
            [
                'pokemon_id' =>  243,
                'name' => 'Raikou',
                'type' => '["Electric"]'
            ],
            [
                'pokemon_id' =>  280,
                'name' => 'Ralts',
                'type' => '["Psychic"]'
            ],
            [
                'pokemon_id' =>   78,
                'name' => 'Rapidash',
                'type' => '["Fire"]'
            ],
            [
                'pokemon_id' =>  20,
                'name' => 'Raticate',
                'type' => '["Normal"]'
            ],
            [
                'pokemon_id' =>  19,
                'name' => 'Rattata',
                'type' => '["Normal"]'
            ],
            [
                'pokemon_id' =>  384,
                'name' => 'Rayquaza',
                'type' => '["Dragon","Flying"]'
            ],
            [
                'pokemon_id' =>  378,
                'name' => 'Regice',
                'type' => '["Ice"]'
            ],
            [
                'pokemon_id' =>  377,
                'name' => 'Regirock',
                'type' => '["Rock"]'
            ],
            [
                'pokemon_id' =>  379,
                'name' => 'Registeel',
                'type' => '["Steel"]'
            ],
            [
                'pokemon_id' =>  369,
                'name' => 'Relicanth',
                'type' => '["Water","Rock"]'
            ],
            [
                'pokemon_id' =>  223,
                'name' => 'Remoraid',
                'type' => '["Water"]'
            ],
            [
                'pokemon_id' =>  112,
                'name' => 'Rhydon',
                'type' => '["Ground","Rock"]'
            ],
            [
                'pokemon_id' => 111,
                'name' => 'Rhyhorn',
                'type' => '["Ground","Rock"]'
            ],
            [
                'pokemon_id' =>  315,
                'name' => 'Roselia',
                'type' => '["Grass',
                'type' => '["Poison"]'
            ],
            [
                'pokemon_id' => 373,
                'name' => 'Salamence',
                'type' => '["Dragon","Flying"]'
            ],
            [
                'pokemon_id' => 27,
                'name' => 'Sandshrew',
                'type' => '["Ground"]'
            ],
            [
                'pokemon_id' =>  28,
                'name' => 'Sandslash',
                'type' => '["Ground"]'
            ],
            [
                'pokemon_id' =>  302,
                'name' => 'Sapleye',
                'type' => '["Dark","Ghost"]'
            ],
            [
                'pokemon_id' => 254,
                'name' => 'Sceptile',
                'type' => '["Grass"]'
            ],
            [
                'pokemon_id' =>  213,
                'name' => 'Schuckle',
                'type' => '["Bug","Rock"]'
            ],
            [
                'pokemon_id' =>  212,
                'name' => 'Scizor',
                'type' => '["Bug","Steel"]'
            ],
            [
                'pokemon_id' =>  123,
                'name' => 'Scyther',
                'type' => '["Bug","Flying"]'
            ],
            [
                'pokemon_id' =>  117,
                'name' => 'Seadra',
                'type' => '["Water"]'
            ],
            [
                'pokemon_id' => 119,
                'name' => 'Seaking',
                'type' => '["Water"]'
            ],
            [
                'pokemon_id' => 364,
                'name' => 'Sealeo',
                'type' => '["Ice","Water"]'
            ],
            [
                'pokemon_id' => 273,
                'name' => 'Seedot',
                'type' => '["Grass"]'
            ],
            [
                'pokemon_id' => 86,
                'name' => 'Seel',
                'type' => '["Water"]'
            ],
            [
                'pokemon_id' => 277,
                'name' => 'Sellow',
                'type' => '["Normal","Flying"]'
            ],
            [
                'pokemon_id' => 161,
                'name' => 'SentretZ',
                'type' => '["Normal"]'
            ],
            [
                'pokemon_id' => 336,
                'name' => 'Seviper',
                'type' => '["Poison"]'
            ],
            [
                'pokemon_id' => 319,
                'name' => 'Sharpedo',
                'type' => '["Water","Dark"]'
            ],
            [
                'pokemon_id' => 292,
                'name' => 'Shedinja',
                'type' => '["Bug","Ghost"]'
            ],
            [
                'pokemon_id' => 372,
                'name' => 'Shelgon',
                'type' => '["Dragon"]'
            ],
            [
                'pokemon_id' =>  90,
                'name' => 'Shellder',
                'type' => '["Water"]'
            ],
            [
                'pokemon_id' => 275,
                'name' => 'Shiftry',
                'type' => '["Grass","Dark"]'
            ],
            [
                'pokemon_id' => 285,
                'name' => 'Shroomish',
                'type' => '["Grass"]'
            ],
            [
                'pokemon_id' => 353,
                'name' => 'Shuppet',
                'type' => '["Ghost"]'
            ],
            [
                'pokemon_id' =>  266,
                'name' => 'Silcoon',
                'type' => '["Bug"]'
            ],
            [
                'pokemon_id' =>  227,
                'name' => 'Skarmony',
                'type' => '["Steel","Flying"]'
            ],
            [
                'pokemon_id' => 188,
                'name' => 'Skiploom',
                'type' => '["Grass","Flying"]'
            ],
            [
                'pokemon_id' => 300,
                'name' => 'Skitty',
                'type' => '["Normal"]'
            ],
            [
                'pokemon_id' => 289,
                'name' => 'Slaking',
                'type' => '["Normal"]'
            ],
            [
                'pokemon_id' =>  287,
                'name' => 'Slakoth',
                'type' => '["Normal"]'
            ],
            [
                'pokemon_id' => 80,
                'name' => 'Slowbro',
                'type' => '["Water","Psychic"]'
            ],
            [
                'pokemon_id' =>  199,
                'name' => 'Slowking',
                'type' => '["Psychic","Water"]'
            ],
            [
                'pokemon_id' => 79,
                'name' => 'Slowpoke',
                'type' => '["Water","Psychic"]'
            ],
            [
                'pokemon_id' =>  218,
                'name' => 'Slugma',
                'type' => '["Fire"]'
            ],
            [
                'pokemon_id' =>  235,
                'name' => 'Smeargle',
                'type' => '["Normal"]'
            ],
            [
                'pokemon_id' => 238,
                'name' => 'Smoochum',
                'type' => '["Ice","Psychic"]'
            ],
            [
                'pokemon_id' =>  215,
                'name' => 'Sneazle',
                'type' => '["Dark","Ice"]'
            ],
            [
                'pokemon_id' =>  143,
                'name' => 'Snorlax',
                'type' => '["Normal"]'
            ],
            [
                'pokemon_id' =>  361,
                'name' => 'Snorunt',
                'type' => '["Ice"]'
            ],
            [
                'pokemon_id' =>  209,
                'name' => 'Snubbull',
                'type' => '["Normal"]'
            ],
            [
                'pokemon_id' => 338,
                'name' => 'Solrock',
                'type' => '["Rock","Psychic"]'
            ],
            [
                'pokemon_id' =>  21,
                'name' => 'Spearow',
                'type' => '["Flying"]'
            ],
            [
                'pokemon_id' => 363,
                'name' =>    'Spheal',
                'type' => '["Ice","Water"]'
            ],
            [
                'pokemon_id' => 167,
                'name' => 'Spinarak',
                'type' => '["Bug","Poison"]'
            ],
            [
                'pokemon_id' => 327,
                'name' => 'Spinda',
                'type' => '["Normal"]'
            ],
            [
                'pokemon_id' => 325,
                'name' => 'Spoink',
                'type' => '["Psychic"]'
            ],
            [
                'pokemon_id' => 7,
                'name' => 'Squirtle',
                'type' => '["Water"]'
            ],
            [
                'pokemon_id' => 234,
                'name' => 'Stantler',
                'type' => '["Normal"]'
            ],
            [
                'pokemon_id' => 121,
                'name' => 'Starmie',
                'type' => '["Water","Psychic"]'
            ],
            [
                'pokemon_id' => 120,
                'name' => 'Staryu',
                'type' => '["Water"]'
            ],
            [
                'pokemon_id' => 208,
                'name' => 'Steelix',
                'type' => '["Steel","Ground"]'
            ],
            [
                'pokemon_id' => 185,
                'name' => 'Sudowoodo',
                'type' => '["Rock"]'
            ],
            [
                'pokemon_id' =>  245,
                'name' => 'Suicune',
                'type' => '["Water"]'
            ],
            [
                'pokemon_id' => 192,
                'name' => 'Sunflora',
                'type' => '["Grass"]'
            ],
            [
                'pokemon_id' => 191,
                'name' => 'Sunkern',
                'type' => '["Grass"]'
            ],
            [
                'pokemon_id' => 283,
                'name' => 'Surskit',
                'type' => '["Water","Bug"]'
            ],
            [
                'pokemon_id' =>  333,
                'name' => 'Swablu',
                'type' => '["Normal","Flying"]'
            ],
            [
                'pokemon_id' => 317,
                'name' => 'Swalot',
                'type' => '["Poison"]'
            ],
            [
                'pokemon_id' => 260,
                'name' => 'Swampert',
                'type' => '["Water","Ground"]'
            ],
            [
                'pokemon_id' => 220,
                'name' => 'Swinub',
                'type' => '["Ice","Ground"]'
            ],
            [
                'pokemon_id' => 276,
                'name' => 'Taillow',
                'type' => '["Normal","Flying"]'
            ],
            [
                'pokemon_id' => 114,
                'name' => 'Tangela',
                'type' => '["Grass"]'
            ],
            [
                'pokemon_id' => 128,
                'name' => 'Tauros',
                'type' => '["Normal"]'
            ],
            [
                'pokemon_id' =>  216,
                'name' => 'Teddiursa',
                'type' => '["Normal"]'
            ],
            [
                'pokemon_id' =>  72,
                'name' => 'Tentacool',
                'type' => '["Water","Poison"]'
            ],
            [
                'pokemon_id' =>  73,
                'name' => 'Tentacruel',
                'type' => '["Water","Poison"]'
            ],
            [
                'pokemon_id' => 175,
                'name' => 'Togepi',
                'type' => '["Normal"]'
            ],
            [
                'pokemon_id' => 176,
                'name' => 'Togetic',
                'type' => '["Normal","Flying"]'
            ],
            [
                'pokemon_id' =>  255,
                'name' => 'Torchic',
                'type' => '["Fire"]'
            ],
            [
                'pokemon_id' => 324,
                'name' => 'Torkoal',
                'type' => '["Fire"]'
            ],
            [
                'pokemon_id' => 158,
                'name' => 'Totodile',
                'type' => '["Water"]'
            ],
            [
                'pokemon_id' => 328,
                'name' => 'Trapinch',
                'type' => '["Ground"]'
            ],
            [
                'pokemon_id' => 252,
                'name' => 'Treecko',
                'type' => '["Grass"]'
            ],
            [
                'pokemon_id' => 357,
                'name' => 'Tropius',
                'type' => '["Flying","Grass"]'
            ],
            [
                'pokemon_id' => 157,
                'name' => 'Typhlosion',
                'type' => '["Fire"]'
            ],
            [
                'pokemon_id' => 248,
                'name' => 'Tyranitar',
                'type' => '["Rock","Dark"]'
            ],
            [
                'pokemon_id' => 236,
                'name' => 'Tyrogue',
                'type' => '["Fighting"]'
            ],
            [
                'pokemon_id' => 197,
                'name' => 'Umbreon',
                'type' => '["Dark"]'
            ],
            [
                'pokemon_id' => 201,
                'name' => 'Unown',
                'type' => '["Psychic"]'
            ],
            [
                'pokemon_id' => 217,
                'name' => 'Ursaring',
                'type' => '["Normal"]'
            ],
            [
                'pokemon_id' => 134,
                'name' => 'Vaporeon',
                'type' => '["Water"]'
            ],
            [
                'pokemon_id' => 49,
                'name' => 'Venomoth',
                'type' => '["Bug","Poison"]'
            ],
            [
                'pokemon_id' => 48,
                'name' => 'Venonat',
                'type' => '["Bug","Poison"]'
            ],
            [
                'pokemon_id' => 3,
                'name' => 'Venusaur',
                'type' => '["Grass","Poison"]'
            ],
            [
                'pokemon_id' => 329,
                'name' => 'Vibrava',
                'type' => '["Ground","Dragon"]'
            ],
            [
                'pokemon_id' => 71,
                'name' => 'Victreebel',
                'type' => '["Grass","Poison"]'
            ],
            [
                'pokemon_id' => 288,
                'name' => 'Vigoroth',
                'type' => '["Normal"]'
            ],
            [
                'pokemon_id' => 45,
                'name' => 'Vileplume',
                'type' => '["Grass","Poison"]'
            ],
            [
                'pokemon_id' => 313,
                'name' => 'Volbeat',
                'type' => '["Bug"]'
            ],
            [
                'pokemon_id' => 100,
                'name' => 'Voltorb',
                'type' => '["Electric"]'
            ],
            [
                'pokemon_id' => 37,
                'name' => 'Vulpix',
                'type' => '["Fire"]'
            ],
            [
                'pokemon_id' => 320,
                'name' => 'Wailmer',
                'type' => '["Water"]'
            ],
            [
                'pokemon_id' => 321,
                'name' => 'Wailord',
                'type' => '["Water"]'
            ],
            [
                'pokemon_id' => 365,
                'name' => 'Walrein',
                'type' => '["Ice","Water"]'
            ],
            [
                'pokemon_id' => 8,
                'name' => 'Wartortle',
                'type' => '["Water"]'
            ],
            [
                'pokemon_id' => 13,
                'name' => 'Weedle',
                'type' => '["Bug","Poison"]'
            ],
            [
                'pokemon_id' => 70,
                'name' => 'Weepinbell',
                'type' => '["Grass","Poison"]'
            ],
            [
                'pokemon_id' => 110,
                'name' => 'Weezing',
                'type' => '["Poison"]'
            ],
            [
                'pokemon_id' => 340,
                'name' => 'Whiscash',
                'type' => '["Ground","Water"]'
            ],
            [
                'pokemon_id' => 293,
                'name' => 'Whismur',
                'type' => '["Normal"]'
            ],
            [
                'pokemon_id' => 40,
                'name' => 'Wigglytuff',
                'type' => '["Normal"]'
            ],
            [
                'pokemon_id' => 278,
                'name' => 'Wingull',
                'type' => '["Water","Flying"]'
            ],
            [
                'pokemon_id' => 202,
                'name' => 'Woobuffet',
                'type' => '["Psychic"]'
            ],
            [
                'pokemon_id' => 194,
                'name' => 'Wooper',
                'type' => '["Water","Ground"]'
            ],
            [
                'pokemon_id' => 265,
                'name' => 'Wurmple',
                'type' => '["Bug"]'
            ],
            [
                'pokemon_id' => 360,
                'name' => 'Wynaut',
                'type' => '["Psychic"]'
            ],
            [
                'pokemon_id' => 178,
                'name' => 'Xatu',
                'type' => '["Psychic","Flying"]'
            ],
            [
                'pokemon_id' => 193,
                'name' => 'Yanma',
                'type' => '["Bug","Flying"]'
            ],
            [
                'pokemon_id' => 335,
                'name' => 'Zangoose',
                'type' => '["Normal"]'
            ],
            [
                'pokemon_id' => 145,
                'name' => 'Zapdos',
                'type' => '["Electric","Flying"]'
            ],
            [
                'pokemon_id' => 263,
                'name' => 'Zigzagoon',
                'type' => '["Dark"]'
            ],
            [
                'pokemon_id' => 41,
                'name' => 'Zubat',
                'type' => '["Poison","Flying"]'
            ]
        ]);
    }
}
