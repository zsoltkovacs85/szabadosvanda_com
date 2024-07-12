<?php

namespace App\Http\Controllers;

use App\Models\CharacterDesign;
use Illuminate\Http\Request;

interface iCharacterDesignController
{

    public function index();

    public function show($url);

}

class CharacterDesignController extends Controller implements iCharacterDesignController
{
    public function index()
    {
        $characterDesigns = CharacterDesign::all();

        return view('character_designs.index', [
            'characterDesigns' => $characterDesigns
        ]);
    }

    public function show($url)
    {
        return view('character_designs.show');
    }
}
