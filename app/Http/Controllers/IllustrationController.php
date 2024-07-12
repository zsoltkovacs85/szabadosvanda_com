<?php

namespace App\Http\Controllers;

use App\Models\CharacterDesign;
use App\Models\Illustration;
use Illuminate\Http\Request;

interface iIllustrationController
{
    public function index();

    public function show($url);

}

class IllustrationController extends Controller implements iIllustrationController
{
    public function index()
    {
        $illustrations = Illustration::all();

        return view('illustrations.index', [
            'illustrations' => $illustrations
        ]);
    }

    public function show($url)
    {
        return view('illustrations.show');
    }
}
