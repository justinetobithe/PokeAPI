<?php

namespace App\Http\Controllers;

use App\Models\Pokemon;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PokemonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $paginate = isset($_GET['paginate']) ? $_GET['paginate'] : false;
        $per_page = isset($_GET['per_page']) ? $_GET['per_page'] : 50;


        if ($paginate) {
            return Pokemon::paginate($per_page);
        } else {
            return Pokemon::all(['id', 'pokemon_id', 'image', 'name', 'type']);
        }
    }

    public function pokemon_order_by_name()
    {
        return Pokemon::orderBy('name', 'asc')->get();
    }

    public function pokemon_order_by_id()
    {
        return  Pokemon::orderBy('pokemon_id', 'asc')->get();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $response = [
            'status' => false,
            'message' => 'There was an error'
        ];

        $data = [
            'pokemon_id' => $request->pokemon_id,
            'name' => $request->name,
            'type' => $request->type,
        ];

        if ($request->hasFile('image')) {
            $image = $request->file('image');

            $imageName = md5(uniqid() . date('u')) . '.' . pathinfo($image->getClientOriginalName(), PATHINFO_EXTENSION);
            $uploadImage = $image->storeAs('/public/pokemons/', $imageName);
            if ($uploadImage) {
                $data['image'] = "/storage/pokemons/" . $imageName;
            }
        }


        $select_pokemon_id = Pokemon::select('*')->where('pokemon_id', $request->pokemon_id)->first();
        $select_pokemon_name = Pokemon::select('*')->where('name', $request->name)->first();

        if ($select_pokemon_id) {
            $response['message'] = "Pokemon Identity is already exist!";
        } else {
            if ($select_pokemon_name) {
                $response['message'] = "Pokemon Name is already exist!";
            } else {
                $create_pokemon = Pokemon::create($data);

                if ($create_pokemon) {
                    $response['status'] = true;
                    $response['message'] = "Successfully Update.";
                    $response['payload'] = [
                        'pokemon' => [
                            'pokemon_id' => $create_pokemon->pokemon_id,
                            'name' => $create_pokemon->name,
                            'type' => $create_pokemon->type,
                            'image' => $create_pokemon->image,
                        ]
                    ];
                } else {
                    $response['message'] = "Unauthorized";
                }
            }
        }

        return $response;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    }

    public function update(Request $request, $id)
    {
        $response = [
            'status' => false,
            'message' => 'There was an error'
        ];

        $data = [
            'pokemon_id' => $request->pokemon_id,
            'name' => $request->name,
            'type' => $request->type,
        ];

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = md5(uniqid() . date('u')) . '.' . pathinfo($image->getClientOriginalName(), PATHINFO_EXTENSION);
            $uploadImage = $image->storeAs('/public/pokemons/', $imageName);
            if ($uploadImage) {
                $data['image'] = "/storage/pokemons]/" . $imageName;
            }
        }

        $update_pokemon = Pokemon::where('id', $id)->update($data);

        if ($update_pokemon) {
            $response['status'] = true;
            $response['message'] = "Successfully Update.";
            $response['payload'] = Pokemon::where('id', $id)->first();
        } else {
            $response['message'] = "Unauthorized";
        }

        return $response;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $response = [
            'status' => false,
            'message' => 'There was an error'
        ];

        $pokemon = Pokemon::find($id);
        if ($pokemon) {
            $pokemon->delete();
            $response['status'] = true;
            $response['message'] = "Successfully Deleted.";
            $response['payload'] = [
                'id' => $id,
                'method' => 'DELETE'
            ];
        } else {
            $response['message'] = "Unauthorized";
        }

        return $response;
    }
}
