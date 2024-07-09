<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

interface iContactController
{

    public function index();

}

class ContactController extends Controller implements iContactController
{
    public function index()
    {
        return view('contact.index');
    }
}
