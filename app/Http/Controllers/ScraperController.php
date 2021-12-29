<?php

namespace App\Http\Controllers;

use Goutte\Client;
use Illuminate\Http\Request;

class ScraperController extends Controller
{
    private $results = array();


    public function scraper()
    {
        $client = new Client();
        // $url = 'https://www.pokemon.com/us/pokedex/';
        $url = 'https://pokemondb.net/pokedex/national';

        $page  = $client->request('GET', $url);

        // echo "<pre>";
        // print_r($page);

        $page->filter('.infocard ')->each(function ($item) {
            $this->results["id"] = $item->filter('small')->text();
            $this->results["name"] = $item->filter('.ent-name')->text();
        });

        return $this->results;
    }
}
