<?php

namespace App\Http\Controllers;

use App\Models\GalleryImage;
use Illuminate\Http\Request;

interface iIndexController
{
    public function index();
}

class IndexController extends Controller implements iIndexController
{
    public function index()
    {

        //$images = GalleryImage::where('page_id', 1)->first();

        return view('index.index', [
            //'images' => $images
        ]);
    }
}
