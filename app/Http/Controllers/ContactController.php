<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function Index(){
        return view('contacts.index');
    }

    public function Create(){
        return view('contacts.create');
    }

    public function show($id){
        $contact = Contact::find($id);
        return view('contacts.show', compact('contact'));
    }
}