<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

interface iIllustrationController
{
    public function index();

}

class IllustrationController extends Controller implements iIllustrationController
{
    public function index()
    {
        return view('illustrations.index');
    }
}
