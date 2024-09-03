<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;

interface iPageController
{
    public function getPageContent(Request $request);
    public function getAbout();
    public function getCookiePolicy();
    public function getPrivacyPolicy();
}

class PageController extends Controller implements iPageController
{
    public function getPageContent(Request $request)
    {
        $page = Page::where('url', $request->segment(1))->firstOrFail();
        return view('pages.about', ['page' => $page]);
    }


    public function getAbout()
    {
        return view('pages.about', []);
    }

    public function getCookiePolicy()
    {
        return view('pages.cookie_policy', []);
    }

    public function getPrivacyPolicy()
    {
        return view('pages.privacy_policy', []);
    }
}
