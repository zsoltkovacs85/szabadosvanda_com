<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

interface iPageController
{
    public function getAboutUs();
}

class PageController extends Controller implements iPageController
{
    public function getAboutUs()
    {
        return view('pages.about');
    }
}
