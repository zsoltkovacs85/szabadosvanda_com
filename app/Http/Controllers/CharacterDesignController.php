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
        $images = CharacterDesign::join('gallery_images', 'character_designs.id', '=', 'gallery_images.character_design_id')
            ->where('character_designs.url', $url)
            ->get();

        return view('character_designs.show',[
            'images' => $images
        ]);
    }
}
