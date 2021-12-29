<?php

use App\Http\Controllers\PokemonController;
use App\Http\Controllers\PokemonTypeController;
use App\Http\Controllers\UsersController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::resource('pokemon', PokemonController::class);
Route::resource('pokemon-type', PokemonTypeController::class);

Route::get('/pokemon-order-by-name', [PokemonController::class, 'pokemon_order_by_name']);
Route::get('/pokemon-order-by-id', [PokemonController::class, 'pokemon_order_by_id']);
Route::get('/get-pokemons', [PokemonController::class, 'index']);

Route::get('/get-pokemon-type', [PokemonTypeController::class, 'index']);

Route::group(['middleware' => 'auth:sunctum'], function () {
    Route::apiResources([
        'users' => UsersController::class,
        'pokemons' => PokemonController::class
    ]);
});
