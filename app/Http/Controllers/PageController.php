<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;

interface iPageController
{
    public function getPageContent(Request $request);
}

class PageController extends Controller implements iPageController
{
    public function getPageContent(Request $request)
    {
        $page = Page::where('url', $request->segment(1))->firstOrFail();
        return view('pages.about', ['page' => $page]);
    }
}
