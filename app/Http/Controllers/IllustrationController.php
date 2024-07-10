<?php

namespace App\Http\Controllers;

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
        return view('illustrations.index');
    }

    public function show($url){
        return view('illustrations.show');
    }
}
