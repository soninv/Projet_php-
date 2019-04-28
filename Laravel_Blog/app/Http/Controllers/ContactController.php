<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Contact;


class ContactController extends Controller
{
    public function saveContact(Request $request) {
        $contact = new Contact();

        $contact->name = $request->input('name');
        $contact->email = $request->input('email');
        $contact->message = $request->input('message');

        $contact->save();

        return 'Saved';


    }
}
