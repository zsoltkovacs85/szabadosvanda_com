<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

interface iCharacterDesignController
{

    public function index();

}

class CharacterDesignController extends Controller implements iCharacterDesignController
{
    public function index()
    {
        return view('character_designs.index');
    }
}
