<?php

namespace App\Http\Controllers;

use App\Models\GeneralSetting;

interface iContactController
{

    public function index();

}

class ContactController extends Controller implements iContactController
{
    public function index()
    {

        $contact = GeneralSetting::findOrFail(1);

        return view('contact.index',
            [
                'contact' => $contact
            ]);
    }
}
